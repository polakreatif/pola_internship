<?php

use App\Blog;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $blog01 = new Blog;
        $blog01->title = "Title 01";
        $blog01->description = "Deskripsi 01";
        $blog01->mediaUrl = "1.png";
        $blog01->categoryId = 1;
        $blog01->save();

        $blog02 = new Blog;
        $blog02->title = "Title 02";
        $blog02->description = "Deskripsi 02";
        $blog02->mediaUrl = "2.png";
        $blog02->categoryId = 1;
        $blog02->save();

        $blog03 = new Blog;
        $blog03->title = "Title 03";
        $blog03->description = "Deskripsi 03";
        $blog03->mediaUrl = "3.png";
        $blog03->categoryId = 1;
        $blog03->save();
    }
}
