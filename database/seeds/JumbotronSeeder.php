<?php

use Illuminate\Database\Seeder;
use App\Jumbotron;

class JumbotronSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jumbotron = new Jumbotron;
        $jumbotron->id = 1;
        $jumbotron->title = 'Laundry Jone';
        $jumbotron->caption = 'Profesional Laundry';
        $jumbotron->image = 'jumbotron-img.png';
        $jumbotron->sumber_link = 'bootstrapmade.com';
        $jumbotron->sumber_label = 'Bootstap Made';
        $jumbotron->save();
    }
}
