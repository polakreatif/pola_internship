<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index() {
    	$companies = \App\Models\Company::findOrFail(1);
    	$products = \App\Models\Product::all();

    	return view('pages.about', compact('companies', 'products'));
    }
}
