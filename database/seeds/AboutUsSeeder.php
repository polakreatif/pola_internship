<?php

use Illuminate\Database\Seeder;
use App\AboutUs;

class AboutUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $about_us = new AboutUs;
        $about_us->id = 1;
        $about_us->title = 'Siapa Kami ?';
        $about_us->description = 'Kami adalah perusahaan jasa laundry profesioal. Berdiri sejak 2001 hingga kini kami memiliki 190 cabang di seluruh Indonesia. Pelayanan adalah prioritas kami. Jika mau laundry Laundry Ruum aja tempatnya.';
        $about_us->image = 'images/about-us.jpg';
        $about_us->sumber_link = 'www.freepik.com';
        $about_us->sumber_label = 'Designed by macrovector / Freepik';
        $about_us->save();
    }
}
