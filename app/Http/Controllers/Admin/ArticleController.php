<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Auth;

class ArticleController extends Controller
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
            $articles = Article::where('judul', 'LIKE', "%$keyword%")->orWhere('isi', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $articles = Article::latest()->paginate($perPage);
        }

        return view('admin.article.index', compact('articles'), compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        $companies = \App\Models\Company::findOrFail(1);
        return view('admin.article.create', compact('companies'));
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
        		'judul' => 'required',
        		'isi' => 'required',
        		'gambar' => 'image|nullable|max:1999'
        	]
        );

        //Handle File Upload
        if($request->hasFile('gambar')){
            // Get filename with the extension
            $filenameWithExt = $request->file('gambar')->getClientOriginalName();
            // Get just filename 
            $filename = pathInfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('gambar')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename."_".time().'.'.$extension;
            // Upload image
            $path = $request->file('gambar')->storeAs('public/img/article', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.png';
        }

        // Create Post
        $articles = new Article;
        $articles->judul = $request->input('judul');
        $articles->isi = $request->input('isi');
        $articles->gambar = $fileNameToStore;
        $articles->id_user = Auth::user()->id;
        $articles->save();

        return redirect('admin/article')->with('success', 'Artikel telah dibuat!');
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
        $articles = Article::findOrFail($id);
        $companies = \App\Models\Company::findOrFail(1);
        
        return view('admin.article.show', compact('articles'), compact('companies'));
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
        $articles = Article::findOrFail($id);
        $companies = \App\Models\Company::findOrFail(1);
        return view('admin.article.edit', compact('companies'))->with('articles', $articles);
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
                'judul' => 'required',
                'isi' => 'required',
            ]
        );

        //Handle File Upload
        if($request->hasFile('gambar')){
            // Get filename with the extension
            $filenameWithExt = $request->file('gambar')->getClientOriginalName();
            // Get just filename 
            $filename = pathInfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('gambar')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename."_".time().'.'.$extension;
            // Upload image
            $path = $request->file('gambar')->storeAs('public/img/article', $fileNameToStore);
        }

        $articles = Article::find($id);
        $articles->judul = $request->input('judul');
        $articles->isi = $request->input('isi');
        if($request->hasFile('gambar')){
            $articles->gambar = $fileNameToStore;
        }
        $articles->id_user = Auth::user()->id;
        $articles->save();

        return redirect('admin/article')->with('success', 'Artikel telah diubah!');
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
        Article::destroy($id);

        return redirect('admin/article')->with('flash_message', 'Article deleted!');
    }
}
