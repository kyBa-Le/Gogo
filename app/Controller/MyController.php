<?php

namespace App\Controller;

use Laravel\Lumen\Routing\Controller;

class MyController extends Controller
{
    public function getHehe() {
        return "Hehehe";
    }
    public function index() {
        return view('Hehe');
    }
}
