<?php

use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 1 => true, 0 => false
     * @return void
     */
    public function run()
    {
        $order01 = new \App\Order;
        $order01->product_id = 1;
        $order01->weight = 10;
        $order01->name = 'Steve';
        $order01->phone = '085875204463';
        $order01->address = 'Rt 04 Rw 02, Pekiringan Ageng, Kajen.';
        $order01->note = 'Pakaian di depan rumah ambil seperti biasa.';
        $order01->save();

        $order02 = new \App\Order;
        $order02->product_id = 2;
        $order02->weight = 20;
        $order02->name = 'Mateo';
        $order02->phone = '082133170120';
        $order02->address = 'jalan salak no. 13, Gandarum, Kajen.';
        $order02->note = 'Klo dah sampai telepon yaa.';
        $order02->save();

        $order03 = new \App\Order;
        $order03->product_id = 2;
        $order03->weight = 30;
        $order03->name = 'Mas Boy';
        $order03->phone = '08213317599';
        $order03->address = 'jalan mengkudu no. 31, Gandarum, Kajen.';
        $order03->note = 'Klo dah sampai telepon yaa.';
        $order03->save();
    }
}
