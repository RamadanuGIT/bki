<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LABController extends Controller
{
    public function index(){
        return view('dashboard.lab.index',[
            'title' => 'LAB',
        ]);
    }
}
