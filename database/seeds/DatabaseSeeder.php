<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,            
            JumbotronSeeder::class,
            AboutUsSeeder::class,
            CarouselSeeder::class,
            ProductSeeder::class,
            SettingSeeder::class,
            OtherSeeder::class,
        ]);
    }
}
