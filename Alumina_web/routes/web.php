<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/events', function () {
    return view('events');
});
Route::get('/singleEvent', function () {
    return view('singleEvent');
});

Route::get('/alumini', function () {
    return view('alumini');
});
Route::get('/individualAlumini', function () {
    return view('individualAlumini');
});

Route::get('/jobs', function () {
    return view('jobs');
});

Route::get('/jobsApply', function () {
    return view('jobsApply');
});

Route::get('/jAForm', function () {
    return view('jAForm');
});

