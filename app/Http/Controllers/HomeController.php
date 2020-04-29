<?php

namespace App\Http\Controllers;

// use App\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   

        $setting = \App\Setting::findOrFail(1);
        $jumbotron = \App\Jumbotron::findOrFail(1);
        $about_us = \App\AboutUs::findOrFail(1);
        $all_carousel = \App\Carousel::all();
        $products = \App\Product::all();
        $other = \App\other::findOrFail(1);
        $user_admin = \App\User::findOrFail(1);

        return view('home', [
            'setting' => $setting,
            'jumbotron' => $jumbotron,
            'about_us' => $about_us,
            'all_carousel' => $all_carousel,
            'products' => $products,
            'other' => $other,
            'user_admin' => $user_admin
        ]);
    }
}
