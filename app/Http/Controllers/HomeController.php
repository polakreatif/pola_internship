<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Jumbotron;
use Illuminate\Support\Facades\DB;

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
        $products = \App\Models\Product::all();
        $articles = DB::table('article')->paginate(1);
        $carousels = DB::table('carousel')->paginate(1);
        $users = DB::table('users')->paginate(1);
        $careers = DB::table('career')->paginate(1);

        return view('admin.home', [
            'companies' => $companies,
            'jumbotrons' => $jumbotrons,
            'products' => $products,
            'articles' => $articles,
            'carousels' => $carousels,
            'users' => $users,
            'careers' => $careers
        ]);
    }
}
