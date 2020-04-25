<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * 1 => Express, 2 => Reguler
     */
    public function run()
    {
        $produk01 = new Product;
        $produk01->name = 'Laundry Satuan Express';
        $produk01->slug = 'laundry-satuan-express';
        $produk01->price = 12500;
        $produk01->type = 1;
        $produk01->description = 'Paket Cuci + Setrika segala jenis pakaian satuan. Dijamin jadi 1/2 hari (1/2 x 24 jam). Hasil bersih, rapi, wangi tahan lama. Pakaian putih otomatis dipisah. Minimal 1 pakainan. Harga satuan.';
        $produk01->image = 'images/produk-01.jpg';
        $produk01->sumber_link = 'www.freepik.com';
        $produk01->sumber_label = 'Designed by Freepik';
        $produk01->save();

        $produk02 = new Product;
        $produk02->name = 'Laundry Satuan';
        $produk02->slug = 'laundry-satuan';
        $produk02->price = 4500;
        $produk02->type = 2;
        $produk02->description = 'Paket Cuci + Setrika segala jenis pakaian satuan. Dijamin jadi 3 hari (3 x 24 jam). Hasil bersih, rapi, wangi tahan lama. Pakaian putih otomatis dipisah. Minimal 1 pakainan. Harga satuan.';
        $produk02->image = 'images/produk-02.jpg';
        $produk02->sumber_link = 'www.freepik.com';
        $produk02->sumber_label = 'Designed by Freepik';
        $produk02->save();

        $produk03 = new Product;
        $produk03->name = 'Laundry Kiloan Express';
        $produk03->slug = 'laundry-kiloan-express';
        $produk03->price = 8500;
        $produk03->type = 1;
        $produk03->description = 'Paket Cuci + Setrika segala jenis pakaian. Dijamin jadi 1 hari (1 x 24 jam). Hasil bersih, rapi, wangi tahan lama. Pakaian putih otomatis dipisah. Minimal 3 kilo. Harga kiloan.';
        $produk03->image = 'images/produk-03.jpg';
        $produk03->sumber_link = 'www.freepik.com';
        $produk03->sumber_label = 'Designed by brgfx';
        $produk03->save();

        $produk04 = new Product;
        $produk04->name = 'Laundry Kiloan';
        $produk04->slug = 'laundry-kiloan';
        $produk04->price = 4500;
        $produk04->type = 2;
        $produk04->description = 'Paket Cuci + Setrika segala jenis pakaian. Dijamin jadi 3 hari (3 x 24 jam). Hasil bersih, rapi, wangi tahan lama. Pakaian putih otomatis dipisah. Minimal 3 kilo. Harga kiloan.';
        $produk04->image = 'images/produk-04.jpg';
        $produk04->sumber_link = 'www.freepik.com';
        $produk04->sumber_label = 'Designed by brgfx';
        $produk04->save(); 

        $produk05 = new Product;
        $produk05->name = 'Cuci Aja';
        $produk05->slug = 'cuci-aja';
        $produk05->price = 3500;
        $produk05->type = 2;
        $produk05->description = 'Paket HANYA CUCI AJA segala jenis pakaian. Dijamin jadi 3 hari (3 x 24 jam). Hasil bersih, rapi, wangi tahan lama. Pakaian putih otomatis dipisah. Minimal 3 kilo. Harga kiloan.';
        $produk05->image = 'images/produk-05.jpg';
        $produk05->sumber_link = 'www.freepik.com';
        $produk05->sumber_label = 'Designed by gstudioimagen';
        $produk05->save();

        $produk06 = new Product;
        $produk06->name = 'Setrika Aja';
        $produk06->slug = 'setrika-aja';
        $produk06->price = 2500;
        $produk06->type = 2;
        $produk06->description = 'Paket HANYA SETRIKA AJA segala jenis pakaian. Dijamin jadi 3 hari (3 x 24 jam). Hasil bersih, rapi, wangi tahan lama. Minimal 3 kilo. Harga kiloan.';
        $produk06->image = 'images/produk-06.jpg';
        $produk06->sumber_link = 'www.freepik.com';
        $produk06->sumber_label = 'Designed by studiogstock';
        $produk06->save();
    }
}
