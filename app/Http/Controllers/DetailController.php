<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;

class DetailController extends Controller
{
    public function index(Request $request)
    {
        $data = Produk::all();

        return view('pages.details',compact('data'));
    }
}
