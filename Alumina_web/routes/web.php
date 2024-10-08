<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EventController;


Route::get('/', [PageController::class, 'welcome'])->name('welcome');
Route::get('/events', [PageController::class, 'events'])->name('events');
Route::get('/singleEvent', [PageController::class, 'singleEvent'])->name('singleEvent');
Route::get('/alumini', [PageController::class, 'alumini'])->name('alumini');
Route::get('/individualAlumini', [PageController::class, 'individualAlumini'])->name('individualAlumini');
Route::get('/jobs', [PageController::class, 'jobs'])->name('jobs');
Route::get('/jobsApply', [PageController::class, 'jobsApply'])->name('jobsApply');
Route::get('/jAForm', [PageController::class, 'jAForm'])->name('jAForm');
Route::get('/login', [PageController::class, 'login'])->name('login');
Route::post('/login', [PageController::class, 'loginPost'])->name('login.post');
Route::get('/register', [PageController::class, 'register'])->name('register');
Route::post('/register', [PageController::class, 'registerPost'])->name('register.post');
Route::get('/logout', [PageController::class, 'logout'])->name('logout');
Route::get('/message', [PageController::class, 'message'])->name('message');

Route::get('/profile-details', function () {
    return view('components.ProfileDetails');
})->name('profile.details');

Route::post('/store/alumni', [PageController::class, 'store'])->name('store.alumni');

Route::get('/message', function () {
    return view('message');
})->name('message');

//view registerd alumini
Route::get('/alumini', [PageController::class, 'view_alumini'])->name('alumini');

Route::get('/search', [ProfileController::class, 'search'])->name('search');
// Event routes
Route::get('/create', [EventController::class, 'create'])->name('create');
Route::post('/events', [EventController::class, 'store'])->name('store');
Route::get('/events', [EventController::class, 'index'])->name('events');



