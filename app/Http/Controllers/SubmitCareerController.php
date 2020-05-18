<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SubmitCareer;

class SubmitCareerController extends Controller
{
    public function index()
    {
        $submitCareers = SubmitCareer::latest()->get();
        return view('dashboards.submitCareers.index', compact('submitCareers'));
    }

    public function create()
    {
        return view('pages.formSubmitCareer');
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
            'nama' => 'required'
        ]);

        if($request -> hasFile('portofolio')){
            //get with extension
            $portofolioNameWithExt = $request->file('portofolio')->getClientOriginalName();

            // get just filename
            $portofolioName = pathinfo($portofolioNameWithExt, PATHINFO_FILENAME);

            // get just ext 
            $ext = $request->file('portofolio')->getClientOriginalExtension();

            // filename to store
            $portofolioNameToStore = $portofolioName.'_'.time().'.'.$ext;

            // Upload Image
            $path = $request -> file('portofolio')->storeAs('public/img/submitCareers/portofolio', $portofolioNameToStore );
        } else {
            $portofolioNameToStore = 'noimage.jpg';
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
            $path = $request -> file('cv')->storeAs('public/img/submitCareers/cv', $fileNameToStore );
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        $submit = new SubmitCareer;
        $submit->nama = $request->input('nama');
        $submit->email = $request->input('email');
        $submit->alamat = $request->input('alamat');
        $submit->pengalaman = $request->input('pengalaman');
        $submit->portofolio = $portofolioNameToStore;
        $submit->cv = $fileNameToStore;
        $submit->save();

        return Redirect('/careers')->with('success', 'Data kamu telah dimasukan');
    }

    public function destroy($id)
    {
        $submit = SubmitCareer::find($id);


        if($submit->portofolio != 'noimage.jpg'){
            Storage::delete('public/img/submitCareers/portofolio'.$submit->portofolio);
        }

        if($submit->cv != 'noimage.jpg'){
            Storage::delete('public/img/submitCareers/cv'.$submit->cv);
        }

        $submit->delete();
        return Redirect('/dashboards/submitCareers')->with('success', 'portofolio telah dihapus');
    }
}
