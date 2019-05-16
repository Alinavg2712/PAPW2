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
        $admin->pic1 = '../images/36.jpg';
        $admin->pic2 = '../images/48.jpg';
        $admin->pic3 = 'img3';
        $admin->pic4 = 'img4';
        $admin->video = 'video';
        $admin->save();
        $admin->roles()->attach($role_admin);

        $role_admin = Role::where('name','user')->first();
        $user = new User();
        $user->name = 'Luka';
        $user->email = 'luka@example.com';
        $user->password = Hash::make('him');
        $user->slug = 'Luga';
        $user->phone = '774598126';
        $user->address = 'P.Sherman 43';
        $user->pic1 = '../images/68.jpg';
        $user->pic2 = '../images/35.jpg';
        $user->pic3 = 'img3';
        $user->pic4 = 'img4';
        $user->video = 'video';
        $user->save();
        $user->roles()->attach($role_admin);
     
      
     
       
      
        }
}
