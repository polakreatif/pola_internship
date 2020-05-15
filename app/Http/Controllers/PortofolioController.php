<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Portofolio;
use Auth;

class PortofolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portofolios = Portofolio::latest()->get();
        return view('dashboards.portofolios.index', compact('portofolios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboards.portofolios.create');
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
            $path = $request -> file('gambar')->storeAs('public/img/portofolios', $fileNameToStore );
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        $portofolio = new Portofolio;
        $portofolio->judul = $request->input('judul');
        $portofolio->teks = $request->input('teks');
        $portofolio->is_published = $request->input('publish');
        $portofolio->gambar = $fileNameToStore;
        $portofolio->id_user = Auth::user()->id;
        $portofolio->save();

        return Redirect('/dashboards/portofolios')->with('success', 'portofolio telah ditambahkan');
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
        $portofolio = Portofolio::find($id);

        return view('dashboards.portofolios.edit', compact('portofolio'));
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
            $path = $request -> file('gambar')->storeAs('public/img/portofolios', $fileNameToStore );
        }

        $portofolio = Portofolio::find($id);
        $portofolio->judul = $request->input('judul');
        $portofolio->teks = $request->input('teks');
        $portofolio->is_published = $request->input('publish');
        if($request->hasFile('gambar')){
            Storage::delete('public/img/portofolios/'.$portofolio->gambar);
            $portofolio->gambar = $fileNameToStore;
        }
        $portofolio->id_user = Auth::user()->id;
        $portofolio->save();

        return Redirect('/dashboards/portofolios')->with('success', 'portofolio telah diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $portofolio = Portofolio::find($id);


        if($portofolio->gambar != 'noimage.jpg'){
            Storage::delete('public/img/portofolios/'.$portofolio->gambar);
        }

        $portofolio->delete();
        return Redirect('/dashboards/portofolios')->with('success', 'portofolio telah dihapus');
    }
}
