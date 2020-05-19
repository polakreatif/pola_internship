<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Jumbotron;
use App\Models\Product;
use App\Models\Carousel;
use DB;

class DashboardController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = \App\Models\Company::find(1);
        $jumbotrons = \App\Models\Jumbotron::findOrFail(1);
        $products = \App\Models\Product::all();
        $carousels = \App\Models\Carousel::all();

        return view('pages.home', [
            'companies' => $companies,
            'jumbotrons' => $jumbotrons,
            'products' => $products,
            'carousels' => $carousels
        ]);
    }
}
