<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Carousel;
use Illuminate\Http\Request;
use Auth;

class CarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request)
    {
        $companies = \App\Models\Company::findOrFail(1);
        $keyword = $request->get('search');
        $perPage = 15;

        if (!empty($keyword)) {
            $carousels = Carousel::where('nama', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $carousels = Carousel::latest()->paginate($perPage);
        }

        return view('admin.carousel.index', compact('carousels'), compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        $companies = \App\Models\Company::findOrFail(1);
        return view('admin.carousel.create', compact('companies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return void
     */
    public function store(Request $request)
    {
        $this->validate(
        	$request, 
        	[
        		'nama' => 'required',
        		'gambar' => 'image|nullable|max:1999'
        	]
        );

        //Handle File Upload
        if($request->hasFile('gambar')){
            // Get filename with the extension
            $filenameWithExt = $request->file('gambar')->getClientOriginalName();
            // Get just filename 
            $filename = pathInfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('gambar')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename."_".time().'.'.$extension;
            // Upload image
            $path = $request->file('gambar')->storeAs('public/img/carousel', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.png';
        }

        // Create Post
        $carousels = new Carousel;
        $carousels->nama = $request->input('nama');
        $carousels->gambar = $fileNameToStore;
        $carousels->id_user = Auth::user()->id;
        $carousels->save();

        return redirect('admin/carousel')->with('success', 'Carousel telah dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function edit($id)
    {
        $carousels = Carousel::findOrFail($id);
        $companies = \App\Models\Company::findOrFail(1);
        return view('admin.carousel.edit', compact('companies'))->with('carousels', $carousels);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return void
     */
    public function update(Request $request, $id)
    {
        $this->validate(
            $request, 
            [
                'nama' => 'required',
            ]
        );

        //Handle File Upload
        if($request->hasFile('gambar')){
            // Get filename with the extension
            $filenameWithExt = $request->file('gambar')->getClientOriginalName();
            // Get just filename 
            $filename = pathInfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('gambar')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename."_".time().'.'.$extension;
            // Upload image
            $path = $request->file('gambar')->storeAs('public/img/carousel', $fileNameToStore);
        }

        $carousels = Carousel::find($id);
        $carousels->nama = $request->input('nama');
        if($request->hasFile('gambar')){
            $carousels->gambar = $fileNameToStore;
        }
        $carousels->id_user = Auth::user()->id;
        $carousels->save();

        return redirect('admin/carousel')->with('success', 'Carousel telah diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function destroy($id)
    {
        Carousel::destroy($id);

        return redirect('admin/carousel')->with('flash_message', 'Carousel deleted!');
    }
}
