<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class LogController extends Controller
{
    public function login() {

        return view('login.login');
    }
    /*public function index(){
        // return "Hola Mundo Laravel";
        return view('login.index');
    }
    public function login2() {

        return view('login.login2');
    }*/
}   