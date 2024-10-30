<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NdtController extends Controller
{
    public function index(){
        return view('dashboard.ndt.index',[
            'title' => 'NDT',
        ]);
    }
}
