<?php

namespace App\Http\Controllers;

use App\Objects;
use App\Services\TripService;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index(Objects $object)
    {
        return view('location', [
            'object' => $object
        ]);
    }

    public function getInfo(Request $request, Objects $object, TripService $tripService)
    {
        $date = new \DateTime();

        if($request->has('date')) {
            $date = \DateTime::createFromFormat('d-m-Y', $request->get('date'));
        }

        $tripInfo = $tripService->getObjectTripInfo($object, $date);

        return view('location-partial', [
            'trip' => $tripInfo,
            'object' => $object
        ]);
    }
}