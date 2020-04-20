<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;
use App\Kategori;

class DetailController extends Controller
{
    public function index(Request $request)
    {
        $data = Produk::all();
        $kategoris = Kategori::all();

        return view('pages.details',compact('data','kategoris'));
    }
}
