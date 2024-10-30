<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index23(){
        return view('dashboard.project.index-p23',[
            'title' => 'Project 2023'
        ]);
    }
    public function index24(){
        return view('dashboard.project.index-p24',[
            'title' => 'Project 2024'
        ]);
    }
}
