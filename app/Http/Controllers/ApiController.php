<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\objects;

class ApiController extends Controller
{
    /**
     * undocumented function
     *
     * @return void
     */
    public function index()
    {
        $objects = Objects::all();
        return $objects;
    }
}
