<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/404', function () {  // falta ajustar as cores
    return view('404');
});

Route::get('/blank', function () { // falta ajustar as cores
    return view('blank');
});

Route::get('/button', function () {
    return view('button');
});

Route::get('/chart', function () {
    return view('chart');
});

Route::get('/element', function () { // pronta
    return view('element');
});

Route::get('/form', function () {
    return view('form');
});

Route::get('/index', function () { //pronta
    return view('index');
});

Route::get('/signin', function () { //pronta
    return view('signin');
});

Route::get('/signup', function () { //pronta
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
