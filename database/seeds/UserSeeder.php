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
        $user = new User;
        $user->id = 1;
        $user->name = 'admin';
        $user->email = 'admin@gmail.com';
        $user->email_verified_at = now();
        $user->password = Hash::make('123456789');
        $user->avatar = 'images/avatar.png';
        $user->save();
    }
}
