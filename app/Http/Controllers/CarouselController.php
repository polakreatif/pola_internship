<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_carousel = \App\Carousel::all();
        $setting = \App\Setting::findOrFail(1);
        $user_admin = \App\User::findOrFail(1);

        return view('carousel.index', [
            "all_carousel" => $all_carousel,
            "setting" => $setting,
            "user_admin" => $user_admin
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $setting = \App\Setting::findOrFail(1);
        $user_admin = \App\User::findOrFail(1);
        
        return view('carousel.create', [
            "setting" => $setting,
            "user_admin" => $user_admin
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            "title" => "max:199",
            "caption" => "max:245",
            "sumber_label" => "max:199",
            "image" => "required"
        ])->validate();

        $file = $request->file('image')->store('images', 'public');

        $new_carousel = new \App\Carousel;
        $new_carousel->title = $request->input('title');
        $new_carousel->caption = $request->input('caption');
        $new_carousel->sumber_link = $request->input('sumber_link');
        $new_carousel->sumber_label = $request->input('sumber_label');
        $new_carousel->image = $file;
        $new_carousel->save();

        return redirect('/carousel')->with('success', 'Carousel Promosi berhasil di buat');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Carousel  $carousel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $carousel = \App\Carousel::findOrFail($id);
        $setting = \App\Setting::findOrFail(1);
        $user_admin = \App\User::findOrFail(1);

        return view('carousel.edit', [
            "carousel" => $carousel,
            "setting" => $setting,
            "user_admin" => $user_admin
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Carousel  $carousel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = \Validator::make($request->all(), [
            "title" => "max:199",
            "caption" => "max:245",
            "sumber_label" => "max:199",
        ])->validate();

        $carousel = \App\Carousel::find($id);
        $carousel->title = $request->input('title');
        $carousel->caption = $request->input('caption');
        $carousel->sumber_link = $request->input('sumber_link');
        $carousel->sumber_label = $request->input('sumber_label');

        if($request->hasFile('image')){
            if($carousel->image && file_exists(storage_path('app/public/'. $carousel->image))){
                \Storage::delete('public/'.$carousel->image);
            }
            
            $file = $request->file('image')->store('images', 'public');
            $carousel->image = $file;
        }

        $carousel->save();

        return redirect('/carousel/'.$id.'/edit')->with('success', 'Carousel Promosi berhasil di perbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Carousel  $carousel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $carousel = \App\Carousel::findOrFail($id);
            \Storage::delete('public/'.$carousel->image);

        $carousel->delete();
        
        return redirect('/carousel')->with('success', 'Carousel berhasil di hapus');
    }
}
