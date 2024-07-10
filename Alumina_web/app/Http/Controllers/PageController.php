<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function events()
    {
        return view('events');
    }

    public function singleEvent()
    {
        return view('singleEvent');
    }

    public function alumini()
    {
        return view('alumini');
    }

    public function individualAlumini()
    {
        return view('individualAlumini');
    }

    public function jobs()
    {
        return view('jobs');
    }

    public function jobsApply()
    {
        return view('jobsApply');
    }

    public function jAForm()
    {
        return view('jAForm');
    }
    public function login()
    {
        return view('login');
    }
    public function register()
    {
        return view('register');
    }
}
