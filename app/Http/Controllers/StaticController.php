<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function index() {
        return view('welcome');
    }
    public function about () {
        return view('about');
    }
    public function potofolio () {
        return '<h1>portofolio</h1>';
    }   
    public function contact () {
        return view('contact');
    }   


}
