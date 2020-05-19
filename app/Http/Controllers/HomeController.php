<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Jumbotron;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $companies = \App\Models\Company::find(1);
        $jumbotrons = \App\Models\Jumbotron::findOrFail(1);
        $products = \App\Models\Product::latest()->take(1)->get();
        $carousels = \App\Models\Carousel::latest()->take(1)->get();
        $users = \App\User::latest()->take(1)->get();

        return view('admin.home', [
            'companies' => $companies,
            'jumbotrons' => $jumbotrons,
            'products' => $products,
            'carousels' => $carousels,
            'users' => $users
        ]);
    }
}
