<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/projects', function () {
    return view('projects.index');
});

Route::get('/projects/dinkar', function () {
    return view('projects.dinkar');
});

Route::get('/projects/spirec', function () {
    return view('projects.spirec');
});

Route::get('/projects/satilamusteri', function () {
    return view('projects.satilamusteri');
});

Route::get('/projects/integrations/autotask-visma', function () {
    return view('projects.autotask-visma');
});

Route::get('/projects/integrations/stripe-dinkar', function () {
    return view('projects.stripe-dinkar');
});

Route::get('/projects/integrations/shopify-spirec', function () {
    return view('projects.shopify-spirec');
});

Route::get('/projects/mera-konsult', function () {
    return view('projects.mera-konsult');
});

Route::get('/projects/beachburgers', function () {
    return view('projects.beachburgers');
});

Route::get('/projects/allroundcoaching', function () {
    return view('projects.allroundcoaching');
});

Route::get('/method', function () {
    return view('method');
});

Route::get('/pricing', function () {
    return view('pricing');
});

Route::get('/about', function () {
    return view('about');
});


