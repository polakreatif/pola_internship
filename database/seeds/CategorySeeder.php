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
        $kategori01->id = 1;
        $kategori01->name = "tips n trik";
        $kategori01->save();

        $kategori02 = new Category;
        $kategori01->id = 2;
        $kategori02->name = "produk";
        $kategori02->save();

        $kategori03 = new Category;
        $kategori01->id = 3;
        $kategori03->name = "edisi hemat";
        $kategori03->save();

        $kategori04 = new Category;
        $kategori01->id = 4;
        $kategori04->name = "hidup sehat";
        $kategori04->save();

        $kategori04 = new Category;
        $kategori01->id = 5;
        $kategori04->name = "diskon";
        $kategori04->save();

        $kategori04 = new Category;
        $kategori01->id = 6;
        $kategori04->name = "event";
        $kategori04->save();
    }
}
