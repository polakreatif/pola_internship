<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Service;
use Auth;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::latest()->get();
        return view('dashboards.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboards.services.create');
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
            $path = $request -> file('gambar')->storeAs('public/img/services', $fileNameToStore );
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        $service = new Service;
        $service->judul = $request->input('judul');
        $service->teks = $request->input('teks');
        $service->is_published = $request->input('publish');
        $service->gambar = $fileNameToStore;
        $service->id_user = Auth::user()->id;
        $service->save();

        return Redirect('/dashboards/services')->with('success', 'service telah ditambahkan');
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
        $service = Service::find($id);

        return view('dashboards.services.edit', compact('service'));
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
            $path = $request -> file('gambar')->storeAs('public/img/services', $fileNameToStore );
        }

        $service = Service::find($id);
        $service->judul = $request->input('judul');
        $service->teks = $request->input('teks');
        $service->is_published = $request->input('publish');
        if($request->hasFile('gambar')){
            Storage::delete('public/img/services/'.$service->gambar);
            $service->gambar = $fileNameToStore;
        }
        $service->id_user = Auth::user()->id;
        $service->save();

        return Redirect('/dashboards/services')->with('success', 'service telah diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::find($id);


        if($service->gambar != 'noimage.jpg'){
            Storage::delete('public/img/services/'.$service->gambar);
        }

        $service->delete();
        return Redirect('/dashboards/services')->with('success', 'service telah dihapus');
    }
}
