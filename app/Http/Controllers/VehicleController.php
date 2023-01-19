<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function show(){
        return view('templates.vehicle.show');
        
    }
}
