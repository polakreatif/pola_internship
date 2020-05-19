<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Submit;

class SubmitController extends Controller
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
            $submits = Submit::where('id_career', 'LIKE', "%$keyword%")->orWhere('nama', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $submites = Submit::latest()->paginate($perPage);
        }

        return view('admin.submit.index', compact('submites'), compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        $companies = \App\Models\Company::findOrFail(1);
        return view('pages.submit', compact('companies'));
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
        //
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
        $submites = Submit::findOrFail($id);
        $companies = \App\Models\Company::findOrFail(1);
        
        return view('admin.submit.show', compact('submites', 'companies'));
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
        //
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
        //
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
        Submit::destroy($id);

        return redirect('admin/submit')->with('flash_message', 'Submit deleted!');
    }
}
