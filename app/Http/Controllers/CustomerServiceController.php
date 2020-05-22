<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerServiceController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function send_to_wa(Request $request)
    {        
        $validator = \Validator::make($request->all(), [
            "name" => "required|max:199",
            "email" => "required|max:199",
            "subject" => "max:199",
            "message" => "required"
        ])->validate();

        $user_admin = \App\User::findOrFail(1);
        
        $name = 'Nama : '. $request->input('name');
        $email = '  Email : '. $request->input('email');
        $subject = '  Subjek : '. $request->input('subject');
        $message = '  Message : '. $request->input('message');

        if(strlen($request->input('subject') > 0) ){
            $link = urlencode($name. '.'. $email. '.'. $subject. '.'. $message);
        } else {
            $link = urlencode($name. '.'. $email. '.'. $message);
        }
        
        return redirect('https://wa.me/'. preg_replace('/^[0]/', '62', $user_admin->phone). '?text='. $link);
    }

}
