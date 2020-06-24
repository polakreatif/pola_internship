<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public $items = [];
    public $totalQty;
    public $totalPrice;

    public function __Construct($cart = null)
    {
        if($cart)
        {
            $this->items = $cart->items;
            $this->totalQty = $cart->totalQty;
            $this->totalPrice = $cart->totalPrice;
        } else {
            $this->items = [];
            $this->totalQty = 0;
            $this->totalPrice = 0;
        }
    }

    public function add($product,$size)
    {
        $item = [
            'id'          => $product->id,
            'nama_produk' => $product->nama_produk,
            'harga_produk' => $product->harga_produk,
            'gambar_produk' => $product->gambar_produk,
            'size' => $size,
            'qty' => 0,
        ];

        if( !array_key_exists($product->id, $this->items) )
        {
            $this->items[$product->id] = $item;
            $this->totalQty += 1;
            $this->totalPrice += $product->harga_produk;
        } else {
            $this->totalQty += 1;
            $this->totalPrice += $product->harga_produk;
        }

        $this->items[$product->id]['qty'] += 1;

    }

    public function remove($id)
    {
        if (array_key_exists($id, $this->items)) 
        {
            $this->totalQty -= $this->items[$id]['qty'];
            $this->totalPrice -= $this->items[$id]['qty'] * $this->items[$id]['harga_produk'];
            unset($this->items[$id]);
        }
    }

    public function updateQty($id, $qty)
    {
        // lakukan reset Qty dan harga_produk yang ada dalam cart
        $this->totalQty -= $this->items[$id]['qty'];
        $this->totalPrice -= $this->items[$id]['harga_produk'] * $this->items[$id]['qty'];

        
        // tambah items dengan qty yang baru
        $this->items[$id]['qty'] = $qty;

        // totalprice dan totalqty di cart
        $this->totalQty += $qty;
        $this->totalPrice += $this->items[$id]['harga_produk'] * $qty;
    }
}
