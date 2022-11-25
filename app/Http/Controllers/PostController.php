<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {

        $faker = \Faker\Factory::create();

        $posts = [
            [
                "id"=>1,
                'title' => 'From Controller: ' . $faker->sentences(1, true),
            ],
            [
                "id"=>2,
                'title' => 'From Controller: ' . $faker->sentences(1, true),
            ],
            [
                "id"=>3,
                'title' => 'From Controller: ' . $faker->sentences(1, true),
            ]
        ];

        return view('posts.index', [
            'posts' => $posts
        ]);
    }
}
