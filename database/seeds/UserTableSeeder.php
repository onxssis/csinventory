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

        $admin->name = 'CS Admin';
        $admin->email = 'admin@email.com';
        $admin->password = bcrypt('password');

        $admin->save();

        $admin->roles()->attach(3);

    }
}
