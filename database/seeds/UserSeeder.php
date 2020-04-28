<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user01 = new User;
        $user01->id = 1;
        $user01->name = 'Super Admin';
        $user01->phone = '082133170120';
        $user01->email = 'super.admin@gmail.com';
        $user01->email_verified_at = now();
        $user01->password = Hash::make('123456789');
        $user01->avatar = 'images/avatar.png';
        $user01->address = 'Rt 04 Rw 02, Tambak Roto, Kesesi.';
        $user01->role_id = 1;
        $user01->save();

        $user02 = new User;
        $user02->id = 2;
        $user02->name = 'Admin';
        $user02->phone = '085875204463';
        $user02->email = 'admin@gmail.com';
        $user02->email_verified_at = now();
        $user02->password = Hash::make('123456789');
        $user02->avatar = 'images/avatar.png';
        $user02->address = 'Rt 04 Rw 02, Tambak Roto, Kesesi.';
        $user02->role_id = 2;
        $user02->save();

        $user03 = new User;
        $user03->id = 3;
        $user03->name = 'Steve';
        $user03->phone = '085875204400';
        $user03->email = 'steve@gmail.com';
        $user03->email_verified_at = now();
        $user03->password = Hash::make('123456789');
        $user03->avatar = 'images/avatar.png';
        $user03->address = 'Rt 04 Rw 03, Gandarum, Kajen.';
        $user03->role_id = 3;
        $user03->save();

        $user04 = new User;
        $user04->id = 4;
        $user04->name = 'Brook';
        $user04->phone = '085875204401';
        $user04->email = 'brook@gmail.com';
        $user04->email_verified_at = now();
        $user04->password = Hash::make('123456789');
        $user04->avatar = 'images/avatar.png';
        $user04->address = 'Rt 04 Rw 04, Gandarum, Kajen.';
        $user04->role_id = 3;
        $user04->save();

        $user05 = new User;
        $user05->id = 5;
        $user05->name = 'Mail';
        $user05->phone = '085875205411';
        $user05->email = 'mail@gmail.com';
        $user05->email_verified_at = now();
        $user05->password = Hash::make('123456789');
        $user05->avatar = 'images/avatar.png';
        $user05->address = 'Rt 05 Rw 05, Gandarum, Kajen.';
        $user05->role_id = 3;
        $user05->save();
    }
}
