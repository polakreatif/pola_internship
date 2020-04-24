<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting = \App\Setting::findOrFail(1);
        $user_admin = \App\User::findOrFail(1);

        return view('dashboard', [
            'setting' => $setting,
            'user_admin' => $user_admin
        ]);
    }
}
