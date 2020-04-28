<?php

use Illuminate\Database\Seeder;
use App\Carousel;

class CarouselSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$carousel01 = new Carousel;
        $carousel01->title = 'Sesi Terakhir';
        $carousel01->caption = 'Diskon hingga 85% siapa cepat dia dapat.';
        $carousel01->image = 'images/carousel-01.jpg';
        $carousel01->sumber_link = 'www.freepik.com';
        $carousel01->sumber_label = 'Designed by Freepik';
        $carousel01->created_by = 1;
        $carousel01->save();

        $carousel02 = new Carousel;
        $carousel02->title = 'Super Sale';
        $carousel02->caption = 'Jangan lupa ada diskon hingga 50%.';
        $carousel02->image = 'images/carousel-02.jpg';
        $carousel02->sumber_link = 'www.freepik.com';
        $carousel02->sumber_label = 'Designed by BiZkettE1';
        $carousel02->created_by = 1;
        $carousel02->save();

        $carousel03 = new Carousel;
        $carousel03->title = 'Big Sale';
        $carousel03->caption = 'Cuma Minggu ini aja. Jangan sampai ketinggalan.';
        $carousel03->image = 'images/carousel-03.jpg';
        $carousel03->sumber_link = 'www.freepik.com';
        $carousel03->sumber_label = 'Designed by Freepik';
        $carousel03->created_by = 1;
        $carousel03->save();
    }
}
