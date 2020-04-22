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
        $jumbotron = new AboutUs;
        $jumbotron->id = 1;
        $jumbotron->title = 'Siapa Kami ?';
        $jumbotron->description = 'Kami adalah perusahaan jasa laundry profesioal. Berdiri sejak 2001 hingga kini kami memiliki 190 cabang di seluruh Indonesia. Pelayanan adalah prioritas kami. Jika mau laundry Laundry Jone aja tempatnya.';
        $jumbotron->image = 'images/about-us.jpg';
        $jumbotron->sumber_link = 'www.freepik.com';
        $jumbotron->sumber_label = 'Designed by macrovector / Freepik';
        $jumbotron->save();
    }
}
