<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;
use Auth;

class CompanyController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $infoinfocompanies = Company::latest()->take(1)->get();
        $companies = \App\Models\Company::findOrFail(1);
        return view('admin.company.index', compact('infoinfocompanies', 'companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies = \App\Models\Company::findOrFail(1);
        return view('admin.company.create', compact('companies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(
            $request, 
            [
                'nama_company' => 'required',
                'slogan' => 'required',
                'about' => 'required',
                'whatsapp' => 'required',
                'instagram' => 'required',
                'facebook' => 'required',
                'twitter' => 'required',
                'youtube' => 'required',
                'logo' => 'image|nullable|max:1999',
                'about_image' => 'image|nullable|max:1999'
            ]
        );

        //Handle File Upload
        if($request->hasFile('logo')){
            // Get filename with the extension
            $filenameWithExt = $request->file('logo')->getClientOriginalName();
            // Get just filename 
            $filename = pathInfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('logo')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename."_".time().'.'.$extension;
            // Upload image
            $path = $request->file('logo')->storeAs('public/img/company', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.png';
        }

        //Handle File Upload
        if($request->hasFile('about_image')){
            // Get filename with the extension
            $filenameWithExt2 = $request->file('about_image')->getClientOriginalName();
            // Get just filename 
            $filename2 = pathInfo($filenameWithExt2, PATHINFO_FILENAME);
            // Get just ext
            $extension2 = $request->file('about_image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore2 = $filename2."_".time().'.'.$extension2;
            // Upload image
            $path = $request->file('about_image')->storeAs('public/img/company', $fileNameToStore2);
        } else {
            $fileNameToStore2 = 'noimage.png';
        }


        // Create Post
        $infocompanies = new Company;
        $infocompanies->nama_company = $request->input('nama_company');
        $infocompanies->slogan = $request->input('slogan');
        $infocompanies->about = $request->input('about');
        $infocompanies->whatsapp = $request->input('whatsapp');
        $infocompanies->instagram = $request->input('instagram');
        $infocompanies->facebook = $request->input('facebook');
        $infocompanies->twitter = $request->input('twitter');
        $infocompanies->youtube = $request->input('youtube');
        $infocompanies->logo = $fileNameToStore;
        $infocompanies->about_image = $fileNameToStore2;
        $infocompanies->id_user = Auth::user()->id;
        $infocompanies->save();

        return redirect('admin/company')->with('success', 'Detail perusahaan telah dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $infocompanies = Company::find($id);
        $companies = \App\Models\Company::findOrFail(1);
        return view('admin.company.details', compact('companies'))->with('infocompanies', $infocompanies);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $infocompanies = Company::findOrFail($id);
        $companies = \App\Models\Company::findOrFail(1);

        return view('admin.company.edit', compact('companies'))->with('infocompanies', $infocompanies);
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
        $this->validate(
            $request, 
            [
                'nama_company' => 'required',
                'slogan' => 'required',
                'about' => 'required',
                'whatsapp' => 'required',
                'instagram' => 'required',
                'facebook' => 'required',
                'twitter' => 'required',
                'youtube' => 'required',
                'logo' => 'image|nullable|max:1999',
                'about_image' => 'image|nullable|max:1999'
            ]
        );

        //Handle File Upload
        if($request->hasFile('logo')){
            // Get filename with the extension
            $filenameWithExt = $request->file('logo')->getClientOriginalName();
            // Get just filename 
            $filename = pathInfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('logo')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename."_".time().'.'.$extension;
            // Upload image
            $path = $request->file('logo')->storeAs('public/img/logo', $fileNameToStore);
        } 

        //Handle File Upload
        if($request->hasFile('about_image')){
            // Get filename with the extension
            $filenameWithExt2 = $request->file('about_image')->getClientOriginalName();
            // Get just filename 
            $filename2 = pathInfo($filenameWithExt2, PATHINFO_FILENAME);
            // Get just ext
            $extension2 = $request->file('about_image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore2 = $filename2."_".time().'.'.$extension2;
            // Upload image
            $path = $request->file('about_image')->storeAs('public/img/company', $fileNameToStore2);
        }

        // Create Post
        $infocompanies = Company::find($id);
        $infocompanies->nama_company = $request->input('nama_company');
        $infocompanies->slogan = $request->input('slogan');
        $infocompanies->about = $request->input('about');
        $infocompanies->whatsapp = $request->input('whatsapp');
        $infocompanies->instagram = $request->input('instagram');
        $infocompanies->facebook = $request->input('facebook');
        $infocompanies->twitter = $request->input('twitter');
        $infocompanies->youtube = $request->input('youtube');
        if($request->hasFile('logo')){
            $infocompanies->logo = $fileNameToStore;            
        }
        if($request->hasFile('about_image')){
            $infocompanies->about_image = $fileNameToStore2;            
        }
        $infocompanies->id_user = Auth::user()->id;
        $infocompanies->save();

        return redirect('admin/company')->with('success', 'Detail perusahaan telah diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
