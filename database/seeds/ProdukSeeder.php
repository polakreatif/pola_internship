<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        
        DB::table('produk')->insert(
            array(
                array(
                    'nama_produk' => 'Nike React Infinity Run Flyknight',
                    'deskripsi_produk' => $faker->text,
                    'harga_produk' => $faker->randomNumber(7),
                    'gambar_produk' => 'sepatu1.jpg',
                    'kategori_id' => 2,
                    'created_at' => date("Y-m-d H:i:s"),
                    'updated_at' => date("Y-m-d H:i:s"),
                ),
                array(
                    'nama_produk' => 'Nike Air VaporMax 360',
                    'deskripsi_produk' => $faker->text,
                    'harga_produk' => $faker->randomNumber(7),
                    'gambar_produk' => 'sepatu2.jpg',
                    'kategori_id' => 3,
                    'created_at' => date("Y-m-d H:i:s"),
                    'updated_at' => date("Y-m-d H:i:s"),
                ),
                array(
                    'nama_produk' => 'Lebron 17',
                    'deskripsi_produk' => $faker->text,
                    'harga_produk' => $faker->randomNumber(7),
                    'gambar_produk' => 'sepatu3.jpg',
                    'kategori_id' => 4,
                    'created_at' => date("Y-m-d H:i:s"),
                    'updated_at' => date("Y-m-d H:i:s"),
                ),
            )
        );
    }
}
