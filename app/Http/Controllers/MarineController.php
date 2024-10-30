<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarineController extends Controller
{
    public function index(){
        return view('dashboard.marine.index',[
            'title' => 'Marine',
        ]);
    }
}
