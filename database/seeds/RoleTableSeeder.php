<?php

use Illuminate\Database\Seeder;
use App\Role;
class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $role_admin = new Role();
        $role_admin->name = 'admin';
        $role_admin->description = 'Administrador';
        $role_admin->save();

        $role_user = new Role();
        $role_user->name = 'user';
        $role_user->description = 'User';
        $role_user->save();

        $role_guest = new Role();
        $role_guest->name = 'guest';
        $role_guest->description = 'Guest';
        $role_guest->save();

        $role_mode = new Role();
        $role_mode->name = 'moderator';
        $role_mode->description = 'Moderator';
        $role_mode->save();

    }
}
