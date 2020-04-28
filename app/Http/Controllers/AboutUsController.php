<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about_us = \App\AboutUs::findOrFail(1);
        $setting = \App\Setting::findOrFail(1);

        return view('about_us.index', [
            "about_us" => $about_us,
            "setting" => $setting,
        ]);
    }

    /**
     * Show the form for editing resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $about_us = \App\AboutUs::findOrFail(1);
        $setting = \App\Setting::findOrFail(1);

        return view('about_us.edit', [
            "about_us" => $about_us,
            "setting" => $setting,
        ]);
    }

    /**
     * Update the resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            "title" => "max:199",
            "description" => "required|max:245",
            "sumber_label" => "max:199"
        ])->validate();

        $about_us = \App\AboutUs::find(1);
        $about_us->title = $request->input('title');
        $about_us->description = $request->input('description');
        $about_us->sumber_link = $request->input('sumber_link');
        $about_us->sumber_label = $request->input('sumber_label');
        $about_us->updated_by = \Auth::user()->id;

        if($request->hasFile('image')){
            if($about_us->image && file_exists(storage_path('app/public/'. $about_us->image))){
                \Storage::delete('public/'.$about_us->image);
            }
            
            $file = $request->file('image')->store('images', 'public');
            $about_us->image = $file;
        }

        $about_us->save();

        return redirect('/about-us/edit')->with('success', 'Tentang Kami berhasil di perbarui.');
    }
}
