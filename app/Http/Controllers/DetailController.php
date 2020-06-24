<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;
use App\Kategori;
use App\Cart;

class DetailController extends Controller
{
    public function index(Request $request)
    {
        $data = Produk::all();
        $kategoris = Kategori::all();

        return view('pages.details',compact('data','kategoris'));
    }

    public function keranjang(Produk $produk, Request $request)
    {
        // dd($request->size);
         if( session()->has('cart')) {
             $cart = new Cart(session()->get('cart'));
         } else {
             $cart = new Cart();
         }
         $produk->size = $request->size;
         $cart->add($produk,$produk->size);
        //  dd($cart);
         session()->put('cart', $cart);
         return redirect()->route('detail.index')->with('success', 'Produk telah ditambahkan ke keranjang');
    }
}
