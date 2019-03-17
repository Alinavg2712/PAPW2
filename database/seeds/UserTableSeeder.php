<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $role_admin = Role::where('name','admin')->first();
        $admin = new User();
        $admin->name = 'Admin User';
        $admin->email = 'admin@example.com';
        $admin->password = Hash::make('password');
        $admin->slug = 'Foxtrot';
        $admin->phone = '55789642';
        $admin->address = 'Wallaby 43';
        $admin->pic1 = 'imgadmin';
        $admin->pic2 = 'imgperfil';
        $admin->pic3 = 'img3';
        $admin->pic4 = 'img4';
        $admin->video = 'video';
        $admin->save();
        $admin->roles()->attach($role_admin);

       
     
      
     
       
      
        }
}
