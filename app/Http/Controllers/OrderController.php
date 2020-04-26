<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_admin()
    {
        $setting = \App\Setting::findOrfail(1);
        $other = \App\Other::findOrfail(1);
        $user_admin = \App\User::findOrfail(1);
        $orders = \App\Order::all();
        
        for($i = 0; $i < count($orders); $i++){
            $product = $orders[$i]->product;
        }

        return view('orders.index_admin', [
            'setting' => $setting,
            'other' => $other,
            'user_admin' => $user_admin,
            'orders' => $orders
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting = \App\Setting::findOrfail(1);
        $other = \App\Other::findOrfail(1);
        $products = \App\Product::all();

        return view('orders.index', [
            'setting' => $setting,
            'other' => $other,
            'products' => $products
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function my_order()
    {
        $setting = \App\Setting::findOrfail(1);
        $other = \App\Other::findOrfail(1);

        return view('orders.my_order', [
            'setting' => $setting,
            'other' => $other,
        ]);
    }
    /**
     * Show the form for creating a new resource.
     * @param  \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function create($product_slug)
    {
        $setting = \App\Setting::findOrfail(1);
        $other = \App\Other::findOrfail(1);
        $product = \App\Product::where('slug', $product_slug)->first();

        return view('orders.create', [
            'setting' => $setting,
            'other' => $other,
            'product' => $product
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $product_id)
    {
        $validator = \Validator::make($request->all(), [
            "weight" => "required",
            "name" => "required|max:199",
            "phone" => "required|min:10|max:15",
            "address" => "required|max:245",
            "note" => "max:245"
        ])->validate();

        $new_order = new \App\Order;
        $new_order->product_id = $product_id;
        $new_order->weight = $request->input('weight');
        $new_order->name = $request->input('name');
        $new_order->phone = $request->input('phone');
        $new_order->address = $request->input('address');
        $new_order->note = $request->input('note');
        $new_order->save();

        return redirect('/my-order')->with('success', 'Pemesanan berhasil di kirim.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit_admin($id)
    {
        $setting = \App\Setting::findOrfail(1);
        $other = \App\Other::findOrfail(1);
        $user_admin = \App\User::findOrfail(1);
        $order = \App\Order::findOrFail($id);
        $product = $order->product;

        return view('orders.edit_admin', [
            'setting' => $setting,
            'other' => $other,
            'user_admin' => $user_admin,
            'order' => $order
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = \Validator::make($request->all(), [
            "weight" => "required",
            "name" => "required|max:199",
            "phone" => "required|min:10|max:15",
            "address" => "required|max:245",
            "note" => "max:245"
        ])->validate();

        $order = \App\Order::findOrFail($id);
        $order->weight = $request->input('weight');
        $order->name = $request->input('name');
        $order->phone = $request->input('phone');
        $order->address = $request->input('address');
        $order->note = $request->input('note');
        $order->save();

        return redirect('/orders/'.$id.'/edit')->with('success', 'Pemesanan berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = \App\Order::findOrFail($id);

        $order->delete();
        
        return redirect('/orders')->with('success', 'Pesanan berhasil di hapus');
    }
}
