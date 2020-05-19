<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Jumbotron;
use Auth;

class JumbotronController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perPage = 15;
        $jumbotrons = Jumbotron::latest()->paginate($perPage);
        $companies = \App\Models\Company::findOrFail(1);
        return view('admin.jumbotron.index', compact('jumbotrons'), compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies = \App\Models\Company::findOrFail(1);
        return view('admin.jumbotron.create', compact('companies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(
            $request, 
            [
                'header' => 'required',
                'konten' => 'required',
                'link' => 'required',
                'gambar_jumbo' => 'image|nullable|max:1999',
                'background' => 'image|nullable|max:1999'
            ]
        );

        //Handle File Upload
        if($request->hasFile('gambar_jumbo')){
            // Get filename with the extension
            $filenameWithExt = $request->file('gambar_jumbo')->getClientOriginalName();
            // Get just filename 
            $filename = pathInfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('gambar_jumbo')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename."_".time().'.'.$extension;
            // Upload image
            $path = $request->file('gambar_jumbo')->storeAs('public/img/jumbotron', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.png';
        }

        //Handle File Upload
        if($request->hasFile('background')){
            // Get filename with the extension
            $filenameWithExt2 = $request->file('background')->getClientOriginalName();
            // Get just filename 
            $filename2 = pathInfo($filenameWithExt2, PATHINFO_FILENAME);
            // Get just ext
            $extension2 = $request->file('background')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore2 = $filename2."_".time().'.'.$extension2;
            // Upload image
            $path2 = $request->file('background')->storeAs('public/img/jumbotron', $fileNameToStore2);
        } else {
            $fileNameToStore2 = 'noimage.png';
        }

        // Create Post
        $jumbotrons = new Jumbotron;
        $jumbotrons->header = $request->input('header');
        $jumbotrons->konten = $request->input('konten');
        $jumbotrons->link = $request->input('link');
        $jumbotrons->gambar_jumbo = $fileNameToStore;
        $jumbotrons->background = $fileNameToStore2;
        $jumbotrons->id_user = Auth::user()->id;
        $jumbotrons->save();

        return redirect('admin/jumbotron')->with('success', 'Jumbotron telah dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $companies = \App\Models\Company::findOrFail(1);
        $jumbotrons = Jumbotron::find($id);
        return view('admin.jumbotron.details', compact('companies'))->with('jumbotrons', $jumbotrons);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jumbotrons = Jumbotron::findOrFail($id);
        $companies = \App\Models\Company::findOrFail(1);
        return view('admin.jumbotron.edit', compact('companies'))->with('jumbotrons', $jumbotrons);
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
        $this->validate(
            $request, 
            [
                'header' => 'required',
                'konten' => 'required',
                'link' => 'required',
                'gambar_jumbo' => 'image|nullable|max:1999',
                'background' => 'image|nullable|max:1999'
            ]
        );

        //Handle File Upload
        if($request->hasFile('gambar_jumbo')){
            // Get filename with the extension
            $filenameWithExt = $request->file('gambar_jumbo')->getClientOriginalName();
            // Get just filename 
            $filename = pathInfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('gambar_jumbo')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename."_".time().'.'.$extension;
            // Upload image
            $path = $request->file('gambar_jumbo')->storeAs('public/img/jumbotron', $fileNameToStore);
        }

        //Handle File Upload
        if($request->hasFile('background')){
            // Get filename with the extension
            $filenameWithExt2 = $request->file('background')->getClientOriginalName();
            // Get just filename 
            $filename2 = pathInfo($filenameWithExt2, PATHINFO_FILENAME);
            // Get just ext
            $extension2 = $request->file('background')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore2 = $filename2."_".time().'.'.$extension2;
            // Upload image
            $path2 = $request->file('background')->storeAs('public/img/jumbotron', $fileNameToStore2);
        }

        // Create Post
        $jumbotron = Jumbotron::find($id);
        $jumbotron->header = $request->input('header');
        $jumbotron->konten = $request->input('konten');
        $jumbotron->link = $request->input('link');
        if($request->hasFile('gambar_jumbo')){
            $jumbotron->gambar_jumbo = $fileNameToStore;            
        }
        if($request->hasFile('background')){
            $jumbotron->background = $fileNameToStore2;            
        }
        $jumbotron->id_user = Auth::user()->id;
        $jumbotron->save();

        return redirect('admin/jumbotron')->with('success', 'Jumbotron telah diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
