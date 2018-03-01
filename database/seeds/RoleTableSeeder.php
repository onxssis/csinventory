<?php

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // REGULAR CUSTOMER

        $role_customer = new Role();
        $role_customer->name = 'customer';
        $role_customer->display_name = 'Customer';
        $role_customer->description = 'A Customer User';

        $role_customer->save();

        // ADMIN

        $role_admin = new Role();
        $role_admin->name = 'admin';
        $role_admin->display_name = 'Admin';
        $role_admin->description = 'An Admin User';

        $role_admin->save();

        // SUPER ADMIN

        $role_superadmin = new Role();
        $role_superadmin->name = 'super admin';
        $role_superadmin->display_name = 'Super Admin';
        $role_superadmin->description = 'A Super Admin User';

        $role_superadmin->save();
    }
}
