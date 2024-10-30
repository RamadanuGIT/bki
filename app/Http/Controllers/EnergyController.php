<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnergyController extends Controller
{
    public function index(){
        return view('dashboard.energy.index',[
            'title' => 'Energy',
        ]);
    }
}
