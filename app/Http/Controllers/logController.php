<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class LogController extends Controller
{
    public function main() {

        return view('main.main');
    }

    public function login() {

        return view('login.login');
    }
}   