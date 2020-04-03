<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kategori01 = new Category;
        $kategori01->name = "tips n trik";
        $kategori01->save();

        $kategori02 = new Category;
        $kategori02->name = "produk";
        $kategori02->save();

        $kategori03 = new Category;
        $kategori03->name = "edisi hemat";
        $kategori03->save();

        $kategori04 = new Category;
        $kategori04->name = "hidup sehat";
        $kategori04->save();

        $kategori04 = new Category;
        $kategori04->name = "diskon";
        $kategori04->save();
    }
}
