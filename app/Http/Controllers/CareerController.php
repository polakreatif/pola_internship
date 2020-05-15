<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Career;
use Auth;

class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $careers = Career::latest()->get();
        return view('dashboards.careers.index', compact('careers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboards.careers.create');
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
            $path = $request -> file('gambar')->storeAs('public/img/careers', $fileNameToStore );
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        $career = new Career;
        $career->judul = $request->input('judul');
        $career->teks = $request->input('teks');
        $career->is_published = $request->input('publish');
        $career->gambar = $fileNameToStore;
        $career->id_user = Auth::user()->id;
        $career->save();

        return Redirect('/dashboards/careers')->with('success', 'career telah ditambahkan');
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
        $career = Career::find($id);

        return view('dashboards.careers.edit', compact('career'));
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
            $path = $request -> file('gambar')->storeAs('public/img/careers', $fileNameToStore );
        }

        $career = Career::find($id);
        $career->judul = $request->input('judul');
        $career->teks = $request->input('teks');
        $career->is_published = $request->input('publish');
        if($request->hasFile('gambar')){
            Storage::delete('public/img/careers/'.$career->gambar);
            $career->gambar = $fileNameToStore;
        }
        $career->id_user = Auth::user()->id;
        $career->save();

        return Redirect('/dashboards/careers')->with('success', 'career telah diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $career = Career::find($id);


        if($career->gambar != 'noimage.jpg'){
            Storage::delete('public/img/careers/'.$career->gambar);
        }

        $career->delete();
        return Redirect('/dashboards/careers')->with('success', 'career telah dihapus');
    }
}
