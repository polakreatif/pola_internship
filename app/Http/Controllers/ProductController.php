<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = \App\Product::all();
        $setting = \App\Setting::findOrFail(1);

        return view('products.index', [
            "products" => $products,
            "setting" => $setting,
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

        return view('products.create', [
            "setting" => $setting,
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
            "price" => "required",
            "type" => "required",
            "description" => "required|max:245",
            "image" => "required|file|max:2000|mimetypes:image/jpg,image/jpeg,image/png,image/bmp,image/tiff",
            "sumber_label" => "max:199"
        ])->validate();

        $file = $request->file('image')->store('images', 'public');
        $product = new \App\Product;
        $product->name = $request->input('name');
        $product->slug = \Str::slug($request->input('name'), '-');
        $product->price = $request->input('price');
        $product->type = $request->input('type');
        $product->description = $request->input('description');
        $product->sumber_link = $request->input('sumber_link');
        $product->sumber_label = $request->input('sumber_label');    
        $product->image = $file;
        $product->created_by = \Auth::user()->id;
        $product->save();

        return redirect('/products')->with('success', 'Produk berhasil di perbarui.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    // public function show(Product $product)
    // {
    //     //
    // }
    public function show($slug)
    {
        $setting = \App\Setting::findOrFail(1);
        $other = \App\Other::findOrFail(1);
        $product = \App\Product::where('slug', $slug)->first();

        return view('products.show', [
            'setting' => $setting,
            'other' => $other,
            'product' => $product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    // public function edit(Product $product)
    // {
    //     //
    // }
    public function edit($id)
    {
        $product = \App\Product::findOrFail($id);
        $setting = \App\Setting::findOrFail(1);

        return view('products.edit', [
            "product" => $product,
            "setting" => $setting,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = \Validator::make($request->all(), [
            "name" => "required|max:199",
            "price" => "required",
            "type" => "required",
            "description" => "required|max:245",
            "sumber_label" => "max:199",
            "image" => "file|max:2000|mimetypes:image/jpg,image/jpeg,image/png,image/bmp,image/tiff"
        ])->validate();

        $product = \App\Product::find($id);
        $product->name = $request->input('name');
        $product->slug = \Str::slug($request->input('name'), '-');
        $product->price = $request->input('price');
        $product->type = $request->input('type');
        $product->description = $request->input('description');
        $product->sumber_link = $request->input('sumber_link');
        $product->sumber_label = $request->input('sumber_label');
        $product->updated_by = \Auth::user()->id;
        
        if($request->hasFile('image')){
            if($product->image && file_exists(storage_path('app/public/'. $product->image))){
                \Storage::delete('public/'.$product->image);
            }
            
            $file = $request->file('image')->store('images', 'public');
            $product->image = $file;
        }

        $product->save();

        return redirect('/products/'.$id.'/edit')->with('success', 'Produk berhasil di perbarui.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = \App\Product::findOrFail($id);
            \Storage::delete('public/'.$product->image);

        $product->delete();
        
        return redirect('/products')->with('success', 'Produk berhasil di hapus');
    }
}
