<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User;

        $admin->name = 'CS Super Admin';
        $admin->email = 'superadmin@email.com';
        $admin->username = 'superadmin';
        $admin->password = bcrypt('secret');

        $admin->save();

        $admin->roles()->attach(3);
        $admin->roles()->attach(2);
    }
}
