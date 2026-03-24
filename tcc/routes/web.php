<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/404', function () {
    return view('404');
});

Route::get('/blank', function () {
    return view('blank');
});

Route::get('/button', function () {
    return view('button');
});

Route::get('/chart', function () {
    return view('chart');
});

Route::get('/element', function () {
    return view('element');
});

Route::get('/form', function () {
    return view('form');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/singin', function () {
    return view('singin');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/table', function () {
    return view('table');
});

Route::get('/typography', function () {
    return view('typograph');
});

Route::get('/widget', function () {
    return view('widget');
});
