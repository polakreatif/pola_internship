<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role01 = new \App\Role;
        $role01->id = 1;
        $role01->name = 'super admin';
        $role01->save();

        $role02 = new \App\Role;
        $role02->id = 2;
        $role02->name = 'Admin';
        $role02->save();

        $role03 = new \App\Role;
        $role03->id = 3;
        $role03->name = 'Customer';
        $role03->save();
    }
}
