<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trip;

class HomeController extends Controller
{
    public function index() {
        $trips = Trip::all();
        
        $data = [
          'trips' => $trips
        ];

        return view('home', $data);
    }
}
