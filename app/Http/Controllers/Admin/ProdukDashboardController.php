<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProdukRequest;
use Illuminate\Http\Request;
use App\Produk;
use App\Kategori;
use Illuminate\Support\Str;

class ProdukDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Produk::all();

        return view('pages.admin.produk-dashboard.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();

        return view('pages.admin.produk-dashboard.tambah', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProdukRequest $request)
    {
        $data = $request->all();

        $data['gambar_produk'] = $request->file('gambar_produk')->store(
            'uploads', 'public'
        );

        Produk::create($data);

        return redirect()->route('produk.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Produk::findOrFail($id);
        $kategori = Kategori::all();

        return view('pages.admin.produk-dashboard.sunting', compact('item','kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProdukRequest $request, $id)
    {
        $data = $request->all();

        $data['gambar_produk'] = $request->file('gambar_produk')->store(
            'uploads', 'public'
        );

        $item = Produk::findOrFail($id);

        $item->update($data);

        return redirect()->route('produk.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Produk::findOrFail($id);

        $item->delete();

        return redirect()->route('produk.index');
    }
}
