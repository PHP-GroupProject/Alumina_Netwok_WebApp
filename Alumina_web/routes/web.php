<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'welcome'])->name('welcome');
Route::get('/events', [PageController::class, 'events'])->name('events');
Route::get('/singleEvent', [PageController::class, 'singleEvent'])->name('singleEvent');
Route::get('/alumini', [PageController::class, 'alumini'])->name('alumini');
Route::get('/individualAlumini', [PageController::class, 'individualAlumini'])->name('individualAlumini');
Route::get('/jobs', [PageController::class, 'jobs'])->name('jobs');
Route::get('/jobsApply', [PageController::class, 'jobsApply'])->name('jobsApply');
Route::get('/jAForm', [PageController::class, 'jAForm'])->name('jAForm');
Route::get('/login', [PageController::class, 'login'])->name('login');
Route::get('/register', [PageController::class, 'register'])->name('register');
