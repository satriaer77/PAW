<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PawController extends Controller
{
    public function home()
    {
      return view('home',['title'=>"Home"]);
    }
    public function about()
    {
      return view('about',['title'=>"About"]);
    }
    public function tp()
    {
      return view('tugas',['title'=>"Tugas Pendahuluan 6"]);
    }
}
