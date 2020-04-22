<?php

namespace App\Http\Controllers;

use App\Jumbotron;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class JumbotronController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jumbotron = Jumbotron::findOrFail(1);

        return view('jumbotron.index', [
            'jumbotron' => $jumbotron
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Jumbotron  $jumbotron
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $jumbotron = Jumbotron::findOrFail(1);

        return view('jumbotron.edit', [
            'jumbotron' => $jumbotron
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Jumbotron  $jumbotron
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {  
        $validator = \Validator::make($request->all(), [
            "title" => "required|max:199",
            "caption" => "max:199",
            "sumber_label" => "max:199"
        ])->validate();

        $jumbotron = Jumbotron::find(1);
        $jumbotron->title = $request->input('title');
        $jumbotron->caption = $request->input('caption');
        $jumbotron->sumber_link = $request->input('sumber_link');
        $jumbotron->sumber_label = $request->input('sumber_label');

        if($request->hasFile('image')){
            if($jumbotron->image && file_exists(storage_path('app/public/'. $jumbotron->image))){
                Storage::delete('public/'.$jumbotron->image);
            }
            
            $file = $request->file('image')->store('images', 'public');
            $jumbotron->image = $file;
        }

        $jumbotron->save();

        return redirect('/jumbotron/edit')->with('status', 'Jumbotron berhasil di perbarui');
    }

}
