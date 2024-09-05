<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $jobs = ['jobs' => [(object)['name' => 'Anesthesiologist Jobs', 'cnt' => '500'], (object)['name' => 'CRNA Jobs', 'cnt' => '3100'], (object)['name' => 'CAA Jobs', 'cnt' => '234']]];
    return view('home', $jobs);
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/sign-up', function () {
    return view('sign-up');
});