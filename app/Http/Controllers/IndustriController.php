<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndustriController extends Controller
{
    public function index(){
        return view('dashboard.industri.index',[
            'title' => 'Industri',
        ]);
    }
}
