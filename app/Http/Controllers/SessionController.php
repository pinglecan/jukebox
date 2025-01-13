<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function index(){
        return view('session.index');
    }

    public function add(){
        //voeg klaas jan frederik toe aan session
        session()->push('name','Klaas Jan Frederik III van frituur');
        return view('session.index');
    }

    public function remove(){
        session()->pull('name');
        return view('session.index');
    }
}
