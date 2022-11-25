<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $courses = [
        [
            "name" => "Laravel",
            "description" => "Laravel is a web application framework with expressive, elegant syntax. We’ve already laid the foundation — freeing you to create without sweating the small things.",
            "image" => "https://laravel.com/img/logomark.min.svg",
        ],
        [
            "name" => "Vue",
            "description" => "Vue.js is a progressive, incrementally-adoptable JavaScript framework for building UI on the web.",
            "image" => "https://vuejs.org/images/logo.png",
        ],
        [
            "name" => "React",
            "description" => "React makes it painless to create interactive UIs. Design simple views for each state in your application, and React will efficiently update and render just the right components when your data changes.",
            "image" => "https://upload.wikimedia.org/wikipedia/commons/thumb/a/a7/React-icon.svg/1200px-React-icon.svg.png",
        ],
    ];

    return view('welcome', [
        'courses' => $courses
    ]);
});
