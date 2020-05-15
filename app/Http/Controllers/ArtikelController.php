<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Artikel;
use Auth;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikels = Artikel::latest()->get();
        return view('dashboards.artikels.index', compact('artikels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboards.artikels.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'gambar' => 'image|nullable'
        ]);

        if($request -> hasFile('gambar')){
            //get with extension
            $fileNameWithExt = $request->file('gambar')->getClientOriginalName();

            // get just filename
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            // get just ext 
            $extension = $request->file('gambar')->getClientOriginalExtension();

            // filename to store
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;

            // Upload Image
            $path = $request -> file('gambar')->storeAs('public/img/artikels', $fileNameToStore );
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        $artikel = new Artikel;
        $artikel->judul = $request->input('judul');
        $artikel->teks = $request->input('teks');
        $artikel->is_published = $request->input('publish');
        $artikel->gambar = $fileNameToStore;
        $artikel->id_user = Auth::user()->id;
        $artikel->save();

        return Redirect('/dashboards/artikels')->with('success', 'artikel telah ditambahkan');
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
        $artikel = Artikel::find($id);

        return view('dashboards.artikels.edit', compact('artikel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'judul' => 'required',
            'gambar' => 'image|nullable'
        ]);

        if($request -> hasFile('gambar')){
            //get with extension
            $fileNameWithExt = $request->file('gambar')->getClientOriginalName();

            // get just filename
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            // get just ext 
            $extension = $request->file('gambar')->getClientOriginalExtension();

            // filename to store
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;

            // Upload Image
            $path = $request -> file('gambar')->storeAs('public/img/artikels', $fileNameToStore );
        }

        $artikel = Artikel::find($id);
        $artikel->judul = $request->input('judul');
        $artikel->teks = $request->input('teks');
        $artikel->is_published = $request->input('publish');
        if($request->hasFile('gambar')){
            Storage::delete('public/img/artikels/'.$artikel->gambar);
            $artikel->gambar = $fileNameToStore;
        }
        $artikel->id_user = Auth::user()->id;
        $artikel->save();

        return Redirect('/dashboards/artikels')->with('success', 'artikel telah diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artikel = Artikel::find($id);


        if($artikel->gambar != 'noimage.jpg'){
            Storage::delete('public/img/artikels/'.$artikel->gambar);
        }

        $artikel->delete();
        return Redirect('/dashboards/artikels')->with('success', 'artikel telah dihapus');
    }
}
