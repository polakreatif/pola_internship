<?php

namespace App\Http\Controllers;

use App\Other;
use Illuminate\Http\Request;

class OtherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $other = Other::findOrFail(1);

        return view('others.index', [
            "other" => $other
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $other = Other::findOrFail(1);

        return view('others.edit', [
            "other" => $other
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'cs_title' => 'required|max:199', 
            'cs_caption' => 'max:245', 
            'cs_address_title' => 'required|max:199' , 
            'cs_address' => 'required|max:199', 
            'cs_phone_title' => 'required|max:199', 
            'cs_phone' => 'required|max:199', 
            'cs_email_title' => 'required|max:199', 
            'cs_email' => 'required|max:199', 
            'cs_work_hours_title' => 'required|max:199', 
            'cs_work_hours' => 'required|max:199',

            'buletin_title' => 'required|max:199', 
            'buletin_caption' => 'max:245',

            'main_address_title'  => 'max:199', 
            'main_address' => 'required|max:245', 
            'main_phone' => 'required|max:199', 
            'main_email' => 'required|max:199',

            'cs_footer_title' => 'required|max:199', 
            'warranty_label' => 'required|max:199', 
            'safety_guide_label' => 'required|max:199', 
            'help_page_label' => 'required|max:199',
            'warranty_link' => 'required|max:199', 
            'safety_guide_link' => 'required|max:199', 
            'help_page_link' => 'required|max:199',

            'about_us_title' => 'required|max:199', 
            'profil_label' => 'required|max:199', 
            'vision_and_mision_label' => 'required|max:199', 
            'career_label' => 'required|max:199',
            'profil_link' => 'required|max:199', 
            'vision_and_mision_link' => 'required|max:199', 
            'career_link' => 'required|max:199',

            'sosial_media_title' => 'required|max:199', 
            'sosial_media_caption' => 'max:199',
            'instragram_link' => 'max:199', 
            'twitter_link' => 'max:199', 
            'facebook_link' => 'max:199', 
            'youtube_link' => 'max:199',
        ])->validate();


        $other = Other::findOrFail(1);
        $other->cs_title = $request->input('cs_title');
        $other->cs_caption = $request->input('cs_caption');
        $other->cs_address_title = $request->input('cs_address_title');
        $other->cs_address = $request->input('cs_address');
        $other->cs_phone_title = $request->input('cs_phone_title');
        $other->cs_phone = $request->input('cs_phone');
        $other->cs_email_title = $request->input('cs_email_title');
        $other->cs_email = $request->input('cs_email');
        $other->cs_work_hours_title = $request->input('cs_work_hours_title');
        $other->cs_work_hours = $request->input('cs_work_hours');

        $other->buletin_title = $request->input('buletin_title');
        $other->buletin_caption = $request->input('buletin_caption');

        $other->main_address_title = $request->input('main_address_title');;
        $other->main_address = $request->input('main_address');
        $other->main_phone = $request->input('main_phone');
        $other->main_email = $request->input('main_email');

        $other->cs_footer_title = $request->input('cs_footer_title');
        $other->warranty_label = $request->input('warranty_label');
        $other->warranty_link = $request->input('warranty_link');
        $other->safety_guide_label = $request->input('safety_guide_label');
        $other->safety_guide_link = $request->input('safety_guide_link');
        $other->help_page_label = $request->input('help_page_label');
        $other->help_page_link = $request->input('help_page_link');

        $other->about_us_title = $request->input('about_us_title');
        $other->profil_label = $request->input('profil_label');
        $other->profil_link = $request->input('profil_link');
        $other->vision_and_mision_label = $request->input('vision_and_mision_label');
        $other->vision_and_mision_link = $request->input('vision_and_mision_link');
        $other->career_label = $request->input('career_label');
        $other->career_link = $request->input('career_link');

        $other->sosial_media_title = $request->input('sosial_media_title');
        $other->sosial_media_caption = $request->input('sosial_media_caption');
        $other->instagram_link = $request->input('instagram_link');
        $other->twitter_link = $request->input('twitter_link');
        $other->facebook_link = $request->input('facebook_link');
        $other->youtube_link = $request->input('youtube_link');
        
        $other->save();

        return redirect('/others/edit')->with('success', 'Berhasil di perbarui.');
    }
}
