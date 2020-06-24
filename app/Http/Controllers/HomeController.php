<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (session('success')) 
        {
            toast(session('success'), 'success');
        }
        
        $data = Produk::latest()->take(3)->get();

        return view('pages.home', compact('data'));
    }

    public function edit($id)
    {
        $produk = Produk::find($id);

        return view('pages.produkDetail',compact('produk'));
    }
}
