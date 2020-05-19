<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Career;
use Illuminate\Http\Request;
use Auth;

class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request)
    {
        $companies = \App\Models\Company::findOrFail(1);
        $keyword = $request->get('search');
        $perPage = 15;

        if (!empty($keyword)) {
            $careers = Career::where('nama_career', 'LIKE', "%$keyword%")->orWhere('status', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $careers = Career::latest()->paginate($perPage);
        }

        return view('admin.career.index', compact('careers'), compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        $companies = \App\Models\Company::findOrFail(1);

        return view('admin.career.create', compact('companies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return void
     */
    public function store(Request $request)
    {
        $this->validate(
            $request, 
            [
                'jenis' => 'required',
                'desc' => 'required',
                'status' => 'required',
                'lokasi' => 'required',
                'expired' => 'required'
            ]
        );

        // Create Post
        $careers = new Career;
        $careers->nama_career = $request->input('jenis');
        $careers->desc_career = $request->input('desc');
        $careers->status = $request->input('status');
        $careers->lokasi_career = $request->input('lokasi');
        $careers->apllication_deadline = $request->input('expired');
        $careers->id_user = Auth::user()->id;
        $careers->save();

        return redirect('admin/career')->with('success', 'Lowongan Pekerjaan telah dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function show($id)
    {
        $careers = Career::findOrFail($id);
        $companies = \App\Models\Company::findOrFail(1);

        return view('admin.career.show', compact('careers', 'companies'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function edit($id)
    {
        $careers = Career::findOrFail($id);
        $companies = \App\Models\Company::findOrFail(1);

        return view('admin.career.edit', compact('companies'))->with('careers', $careers);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return void
     */
    public function update(Request $request, $id)
    {
        $this->validate(
            $request, 
            [
                'jenis' => 'required',
                'desc' => 'required',
                'status' => 'required',
                'lokasi' => 'required',
                'expired' => 'required'
            ]
        );

        $careers = Career::find($id);
        $careers->nama_career = $request->input('jenis');
        $careers->desc_career = $request->input('desc');
        $careers->status = $request->input('status');
        $careers->lokasi_career = $request->input('lokasi');
        $careers->apllication_deadline = $request->input('expired');
        $careers->id_user = Auth::user()->id;
        $careers->save();

        return redirect('admin/career')->with('success', 'Lowongan Pekerjaan telah diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function destroy($id)
    {
        Career::destroy($id);

        return redirect('admin/career')->with('flash_message', 'Karir deleted!');
    }
}
