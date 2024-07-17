<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\AlumniDetail;


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

    public function loginPost(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        return redirect()->intended(route('welcome'));
    }

    return redirect()->route('login')->with('error', 'Login credentials are not valid');
}



    public function registerPost(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);
    
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
    
        $user = User::create($data);
    
        if (!$user) {
            return redirect(route('register'))->with('error', 'Registration failed. Please try again.');
        }
    
        return redirect(route('login'))->with('success', 'Registration successful. Please login to explore.');
    }
    
    public function logout()
    {
        session()->flush();
        Auth::logout();
        return redirect(route('login'))->with('logouted', 'Login Before Explore');

    }


    public function store(Request $request)
    {
        // Validate form data
        $validatedData = $request->validate([
            'availability' => 'required',
            'birthdate' => 'required|date',
            'country' => 'required',
            'city' => 'required',
            'workplace' => 'required',
        ]);

        $alumniDetail = AlumniDetail::create($validatedData);

        return view('individualAlumini', $validatedData);
    }

}
