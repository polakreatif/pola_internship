<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;
use App\Kategori;
use App\Cart;

class KeranjangController extends Controller
{
    public function index()
    {
        if(session()->has('cart')){
            $cart = new Cart(session()->get('cart'));
        } else {
            $cart = null;
        }


        return view('pages.keranjang',compact('cart'));
    }

    public function checkout(Request $request)
    {
        // save order in order table..
        // $data = $request->all();

        auth()->user()->orders()->create([
            'cart' => serialize( session()->get('cart')),
            'alamatPengiriman' => $request->alamatPengiriman,
            'pembayaran' => $request->pembayaran
        ]);

        // Order::create($data);
        // dd($beli);
        // clean cart
        
        session()->forget('cart');
        return redirect()->route('home.index')->with('success',"Order berhasil dilakukan, Terimakasih");
    }

    public function destroy(Produk $produk)
    {
        $cart = new Cart(session()->get('cart'));
        $cart->remove($produk->id);

        if ($cart->totalQty <= 0) 
        {
            session()->forget('cart');    
        } else {
            session()->put('cart',$cart);
        }

        return redirect()->route('displaykeranjang.index')->with('deleted',"Prdouk berhasil dihapus");
    }

    public function update(Request $request, Produk $produk)
    {
        $request->validate([
            'qty' => 'required|numeric|min:1'
        ]);

        $cart = new Cart(session()->get('cart'));
        $cart->updateQty($produk->id, $request->qty);
        session()->put('cart', $cart);
        return redirect()->route('displaykeranjang.index')->with('update',"Prdouk berhasil diperbarui");
    }

}
