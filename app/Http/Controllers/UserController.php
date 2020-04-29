<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting = \App\Setting::findOrFail(1);
        $users = \App\User::all();

        return view('users.index', [
            'setting' => $setting,
            'users' => $users
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

        return view('users.create', [
            'setting' => $setting
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
            "name" => "required|max:199",
            "phone" => "required|min:10|max:15|unique:users",
            "email" => "required|email|unique:users",
            "password" => "required|min:8"
        ])->validate();


        $new_user = new \App\User;
        $new_user->name = $request->input('name');
        $new_user->email = $request->input('email');
        $new_user->phone = $request->input('phone');
        $new_user->address = $request->input('address');
        $new_user->password = \Hash::make($request->input('password'));
        $new_user->avatar = 'images\avatar.png';

        if($request->hasFile('avatar')){
            $file = $request->file('avatar')->store('images', 'public');
            
            $new_user->avatar = $file;
        }

        $new_user->save();

        return redirect('/users')->with('success', 'Pengguna berhasil di tambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $setting = \App\Setting::findOrFail(1);
        $user = \App\User::findOrFail($id);

        return view('users.show', [
            'setting' => $setting,
            'user' => $user
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $setting = \App\Setting::findOrFail(1);
        $user = \App\User::findOrFail($id);

        return view('users.edit', [
            'setting' => $setting,
            'user' => $user
        ]);
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
        $validator = \Validator::make($request->all(), [
            "name" => "required|max:199",
            "phone" => "required|min:10|max:15|unique:users,phone,".$id,
            "email" => "required|email|unique:users,email,s".$id,
        ])->validate();

        $user = \App\User::findOrFail($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->address = $request->input('address');

        if($request->hasFile('avatar')){
            if($user->avatar && file_exists(storage_path('app/public/'. $user->avatar))){
                \Storage::delete('public/'.$user->avatar);
            }
            
            $file = $request->file('avatar')->store('images', 'public');
            $user->avatar = $file;
        }

        $user->save();

        return redirect('/users/'. $id . '/edit')->with('success', 'Berhasil di perbarui.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = \App\User::findOrFail($id);
            \Storage::delete('public/'.$user->avatar);

        $user->delete();
        
        return redirect('/users')->with('success', 'Pengguna berhasil di hapus');
    }
}
