<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Auth;

class ProductController extends Controller
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
            $products = Product::where('name_product', 'LIKE', "%$keyword%")->orWhere('id_product', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $products = Product::latest()->paginate($perPage);
        }

        return view('admin.product.index', compact('products'), compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        $companies = \App\Models\Company::findOrFail(1);
        return view('admin.product.create', compact('companies'));
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
        		'nama' => 'required',
        		'deskripsi' => 'required',
        		'product_image' => 'image|nullable|max:1999'
        	]
        );

        //Handle File Upload
        if($request->hasFile('product_image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('product_image')->getClientOriginalName();
            // Get just filename 
            $filename = pathInfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('product_image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename."_".time().'.'.$extension;
            // Upload image
            $path = $request->file('product_image')->storeAs('public/img/product', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.png';
        }

        // Create Post
        $products = new Product;
        $products->name_product = $request->input('nama');
        $products->desc_product = $request->input('deskripsi');
        $products->product_image = $fileNameToStore;
        $products->id_user = Auth::user()->id;
        $products->save();

        return redirect('admin/product')->with('success', 'Produk telah dibuat!');
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
        $products = Product::findOrFail($id);
        $companies = \App\Models\Company::findOrFail(1);
        return view('admin.product.show', compact('products'), compact('companies'));
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
        $products = Product::findOrFail($id);
        $companies = \App\Models\Company::findOrFail(1);
        return view('admin.product.edit', compact('companies'))->with('products', $products);
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
                'nama' => 'required',
        		'deskripsi' => 'required',
        		'product_image' => 'image|nullable|max:1999'
            ]
        );

        if($request->hasFile('product_image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('product_image')->getClientOriginalName();
            // Get just filename 
            $filename = pathInfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('product_image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename."_".time().'.'.$extension;
            // Upload image
            $path = $request->file('product_image')->storeAs('public/img/product', $fileNameToStore);
        }

        $products = Product::find($id);
        $products->name_product = $request->input('nama');
        $products->desc_product = $request->input('deskripsi');
        if($request->hasFile('product_image')){
            $products->product_image = $fileNameToStore;
        }
        $products->id_user = Auth::user()->id;
        $products->save();

        return redirect('admin/product')->with('success', 'Product telah diubah!');
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
        Product::destroy($id);

        return redirect('admin/product')->with('flash_message', 'Product deleted!');
    }
}
