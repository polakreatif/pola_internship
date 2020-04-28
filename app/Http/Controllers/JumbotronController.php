<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JumbotronController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jumbotron = \App\Jumbotron::findOrFail(1);
        $setting = \App\Setting::findOrFail(1);

        return view('jumbotron.index', [
            'jumbotron' => $jumbotron,
            "setting" => $setting,
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
        $jumbotron = \App\Jumbotron::findOrFail(1);
        $setting = \App\Setting::findOrFail(1);
        $user_admin = \App\User::findOrFail(1);

        return view('jumbotron.edit', [
            'jumbotron' => $jumbotron,
            "setting" => $setting,
            "user_admin" => $user_admin
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

        $jumbotron = \App\Jumbotron::find(1);
        $jumbotron->title = $request->input('title');
        $jumbotron->caption = $request->input('caption');
        $jumbotron->sumber_link = $request->input('sumber_link');
        $jumbotron->sumber_label = $request->input('sumber_label');
        $jumbotron->updated_by = \Auth::user()->id;

        if($request->hasFile('image')){
            if($jumbotron->image && file_exists(storage_path('app/public/'. $jumbotron->image))){
                \Storage::delete('public/'.$jumbotron->image);
            }
            
            $file = $request->file('image')->store('images', 'public');
            $jumbotron->image = $file;
        }

        $jumbotron->save();

        return redirect('/jumbotron/edit')->with('success', 'Jumbotron berhasil di perbarui');
    }

}
