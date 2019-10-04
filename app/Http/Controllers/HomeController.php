<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('client.content');
    }
    public function appointment(){
        return view('client.appointment-page');
    }
}
