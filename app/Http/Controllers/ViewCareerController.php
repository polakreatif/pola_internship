<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Career;
use App\Models\Submit;
use Auth;

class ViewCareerController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = \App\Models\Company::findOrFail(1);
        $products = \App\Models\Product::all();
        $career = Career::latest()->take(10)->get();
        return view('pages.karir.index', compact('companies', 'career', 'products'));
    }

    public function create()
    {
        $companies = \App\Models\Company::findOrFail(1);
        $career = \App\Models\Career::findOrFail(1);
        $products = \App\Models\Product::all();
        return view('pages.karir.daftar', compact('companies', 'products', 'career'));
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
            'nama' => 'required',
            'email' => 'required',
            'no_hp' => 'required',
            'kode' => 'required',
        ]);

        if($request -> hasFile('gambar')){
            //get with extension
            $fileNameWithExt2 = $request->file('gambar')->getClientOriginalName();

            // get just filename
            $fileName2 = pathinfo($fileNameWithExt2, PATHINFO_FILENAME);

            // get just ext 
            $extension2 = $request->file('gambar')->getClientOriginalExtension();

            // filename to store
            $fileNameToStore2 = $fileName2.'_'.time().'.'.$extension2;

            // Upload Image
            $path = $request -> file('gambar')->storeAs('public/dataPendaftar/portofolio', $fileNameToStore2 );
        } else {
            $fileNameToStore2 = '-';
        }

        if($request -> hasFile('cv')){
            //get with extension
            $fileNameWithExt = $request->file('cv')->getClientOriginalName();

            // get just filename
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            // get just ext 
            $extension = $request->file('cv')->getClientOriginalExtension();

            // filename to store
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;

            // Upload Image
            $path = $request -> file('cv')->storeAs('public/dataPendaftar', $fileNameToStore );
        } else {
            $fileNameToStore = '-';
        }

        $submit = new Submit;
        $submit->nama = $request->input('nama');
        $submit->email = $request->input('email');
        $submit->no_hp = $request->input('no_hp');
        $submit->id_career = $request->input('kode');
        $submit->gambar = $fileNameToStore2;
        $submit->cv = $fileNameToStore;
        $submit->save();

        return Redirect('careers')->with('success', 'Pendaftaran anda telah berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $career = Career::find($id);    
        $companies = \App\Models\Company::findOrFail(1);
        $products = \App\Models\Product::all();
        return view('pages.karir.details', compact('companies', 'products'))->with('career', $career);
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
