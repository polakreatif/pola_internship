<?php

use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $setting = new \App\Setting;
        $setting->id = 1;
        $setting->app_name = 'Laundry Jone';       
        $setting->app_slogan = 'Make Your Clothes and You Happy';
        $setting->save();
    }
}
