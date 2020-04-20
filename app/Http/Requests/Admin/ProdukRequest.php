<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ProdukRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nama_produk' => 'required|max:255',
            'deskripsi_produk' => 'required|max:255',
            'harga_produk' => 'required|integer',
            'gambar_produk' => 'required|image',
            'kategori_id' => 'required|integer|exists:kategori,id'
        ];
    }
}
