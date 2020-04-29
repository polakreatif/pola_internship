<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting = \App\Setting::findOrFail(1);
        $user_admin = \App\User::findOrFail(\Auth::user()->id);

        return view('setting.index', [
            "setting" => $setting,
            'user_admin' => $user_admin
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
            "app_name" => "required|max:199",
            "app_slogan" => "max:199",
            "name" => "required|max:199",
            "phone" => "required|min:10|max:15|unique:users,phone,". \Auth::user()->id,
            "email" => "required|max:199|unique:users,email,". \Auth::user()->id,
        ])->validate();

        $setting = \App\Setting::findOrFail(1);
        $setting->app_name = $request->input('app_name');
        $setting->app_slogan = $request->input('app_slogan');
        $setting->updated_by = \Auth::user()->id;
        $setting->save();

        $user_admin = \App\User::findOrFail(\Auth::user()->id);
        $user_admin->name = $request->input('name');
        $user_admin->phone = $request->input('phone');
        $user_admin->email = $request->input('email');

        if($request->hasFile('avatar')){
            if($user_admin->avatar && file_exists(storage_path('app/public/'. $user_admin->avatar))){
                \Storage::delete('public/'.$user_admin->avatar);
            }
            
            $file = $request->file('avatar')->store('images', 'public');
            $user_admin->avatar = $file;
        }

        $user_admin->save();

        return redirect('/setting')->with('success', 'Berhasil di perbarui.');
    }
}
