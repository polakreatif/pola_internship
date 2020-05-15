<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Header;
use Auth;

class HeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $headers = Header::latest()->get();
        return view('dashboards.headers.index', compact('headers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboards.headers.create');
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
            $path = $request -> file('gambar')->storeAs('public/img/headers', $fileNameToStore );
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        $header = new Header;
        $header->judul = $request->input('judul');
        $header->teks = $request->input('teks');
        $header->is_published = $request->input('publish');
        $header->gambar = $fileNameToStore;
        $header->id_user = Auth::user()->id;
        $header->save();

        return Redirect('/dashboards/headers')->with('success', 'Header telah ditambahkan');
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
        $header = Header::find($id);

        return view('dashboards.headers.edit', compact('header'));
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
            $path = $request -> file('gambar')->storeAs('public/img/headers', $fileNameToStore );
        }

        $header = Header::find($id);
        $header->judul = $request->input('judul');
        $header->teks = $request->input('teks');
        $header->is_published = $request->input('publish');
        if($request->hasFile('gambar')){
            Storage::delete('public/img/headers/'.$header->gambar);
            $header->gambar = $fileNameToStore;
        }
        $header->id_user = Auth::user()->id;
        $header->save();

        return Redirect('/dashboards/headers')->with('success', 'Header telah diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $header = Header::find($id);


        if($header->gambar != 'noimage.jpg'){
            Storage::delete('public/img/headers/'.$header->gambar);
        }

        $header->delete();
        return Redirect('/dashboards/headers')->with('success', 'Header telah dihapus');
    }
}
