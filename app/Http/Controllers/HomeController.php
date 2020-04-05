<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $data = Produk::all();

        return view('pages.home',compact('data'));
    }

    public function edit($id)
    {
        $produk = Produk::find($id);

        return view('pages.produkDetail',compact('produk'));
    }
}
