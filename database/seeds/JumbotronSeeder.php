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
        $jumbotron->image = 'images/jumbotron.jpg';
        $jumbotron->sumber_link = 'www.freepik.com';
        $jumbotron->sumber_label = 'Designed by Freepik';
        $jumbotron->save();
    }
}
