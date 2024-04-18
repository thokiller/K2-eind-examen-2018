<?php

namespace App\Services;


use App\DTO\LocationDTO;
use App\DTO\TripDTO;
use App\Objects;
use GuzzleHttp\Client;

class TripService
{
    private $googleKey = 'AIzaSyCxKcev1153EtqPSCmaJXip712iY3kwlbE';

    /**
     * @param Objects $object
     * @param \DateTime $dateTime
     *
     * @return array
     * @throws \Exception
     */
    private function getObjectInfo(Objects $object, \DateTime $dateTime)
    {
        $url = sprintf('https://15euros.nl/camper/?cid=%s&date=%s', $object->obj_id, $dateTime->format('Y-m-d'));
        $client = new Client();
        $response = $client->get($url);

        if(200 !== $response->getStatusCode()) {
            throw new \Exception('Er is een onbekende fout opgetreden.');
        }

        $json = json_decode($client->get($url)->getBody(), true);

        if('ERROR:' === substr($json['mess'], 0, 6)) {
            throw new \Exception(trim(substr($json['mess'], 6)));
        }

        return $json;
    }

    /**
     * @param $lat
     * @param $lng
     *
     * @return string
     * @throws \Exception
     */
    private function getAddressFromLatLng($lat, $lng)
    {
        try {
            $url = sprintf('https://maps.googleapis.com/maps/api/geocode/json?latlng=%s,%s&key=%s&language=nl', $lat, $lng, $this->googleKey);
            $ch = curl_init($url);
            curl_setopt_array($ch, [
                CURLOPT_RETURNTRANSFER => true
            ]);
            $response = json_decode(curl_exec($ch), true);
            curl_close($ch);

            return $response['results'][0]['formatted_address'];
        } catch (\Throwable $throwable) {
            throw new \Exception('Er is een onbekende fout opgetreden.');
        }

    }

    /**
     * @param Objects $object
     * @param \DateTime $dateTime
     *
     * @return TripDTO
     */
    public function getObjectTripInfo(Objects $object, \DateTime $dateTime)
    {
        $json = $this->getObjectInfo($object, $dateTime);

        $currentAddressInfo = $this->getAddressFromLatLng($json['cpos'][0], $json['cpos'][1]);
        $departureAddressInfo = $this->getAddressFromLatLng($json['dpos'][0], $json['dpos'][1]);

        $currentLocation = new LocationDTO($json['cpos'][0], $json['cpos'][1], $currentAddressInfo);
        $departureLocation = new LocationDTO($json['dpos'][0], $json['dpos'][1], $departureAddressInfo);

        $trip = (new TripDTO())
            ->setCurrentLocation($currentLocation)
            ->setDepartureLocation($departureLocation)
            ->setDepartureDate(new \DateTime($json['dtod']))
            ->setArrivalDate(new \DateTime($json['dtoa']))
            ->setMessage($json['mess']);

        return $trip;
    }
}