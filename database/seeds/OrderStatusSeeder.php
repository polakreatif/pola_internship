<?php

use Illuminate\Database\Seeder;

class OrderStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $order_status01 = new \App\OrderStatus;
        $order_status01->id = 1;
        $order_status01->name = "dipesan, belum dibayar";
        $order_status01->save();

        $order_status02 = new \App\OrderStatus;
        $order_status02->id = 2;
        $order_status02->name = "dipesan, sudah dibayar";
        $order_status02->save();

        $order_status03 = new \App\OrderStatus;
        $order_status03->id = 3;
        $order_status03->name = "diproses, belum dibayar";
        $order_status03->save();

        $order_status04 = new \App\OrderStatus;
        $order_status04->id = 4;
        $order_status04->name = "diproses, sudah dibayar";
        $order_status04->save();

        $order_status05 = new \App\OrderStatus;
        $order_status05->id = 5;
        $order_status05->name = "selesai, belum dikirim/diambil, belum dibayar";
        $order_status05->save();

        $order_status06 = new \App\OrderStatus;
        $order_status06->id = 6;
        $order_status06->name = "selesai, belum dikirim/diambil, sudah dibayar";
        $order_status06->save();

        $order_status07 = new \App\OrderStatus;
        $order_status07->id = 7;
        $order_status07->name = "selesai, sudah dikirim/diambil, belum dibayar";
        $order_status07->save();

        $order_status08 = new \App\OrderStatus;
        $order_status08->id = 8;
        $order_status08->name = "TUNTAS | selesai, sudah dikirim/diambil, sudah dibayar";
        $order_status08->save();
    }
}
