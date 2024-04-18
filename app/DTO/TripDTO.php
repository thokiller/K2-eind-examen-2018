<?php

namespace App\DTO;


class TripDTO
{
    /** @var LocationDTO $currentLocation */
    private $currentLocation;
    /** @var LocationDTO $departureLocation */
    private $departureLocation;
    /** @var \DateTime $departureDate */
    private $departureDate;
    /** @var \DateTime $arrivalDate */
    private $arrivalDate;
    /** @var string $message */
    private $message;

    /**
     * @return LocationDTO
     */
    public function getCurrentLocation()
    {
        return $this->currentLocation;
    }

    /**
     * @param LocationDTO $currentLocation
     *
     * @return $this
     */
    public function setCurrentLocation($currentLocation)
    {
        $this->currentLocation = $currentLocation;

        return $this;
    }

    /**
     * @return LocationDTO
     */
    public function getDepartureLocation()
    {
        return $this->departureLocation;
    }

    /**
     * @param LocationDTO $departureLocation
     *
     * @return $this
     */
    public function setDepartureLocation($departureLocation)
    {
        $this->departureLocation = $departureLocation;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDepartureDate()
    {
        return $this->departureDate;
    }

    /**
     * @param \DateTime $departureDate
     *
     * @return $this
     */
    public function setDepartureDate($departureDate)
    {
        $this->departureDate = $departureDate;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getArrivalDate()
    {
        return $this->arrivalDate;
    }

    /**
     * @param \DateTime $arrivalDate
     *
     * @return $this
     */
    public function setArrivalDate($arrivalDate)
    {
        $this->arrivalDate = $arrivalDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param string $message
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }


}