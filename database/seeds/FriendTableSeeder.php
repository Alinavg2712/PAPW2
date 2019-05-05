<?php

use Illuminate\Database\Seeder;
use App\amigo;
class FriendTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $nfriend = new amigo();
        $nfriend->mainuser_id =  1;
        $nfriend->frienduser_id =2;
        $nfriend->accept=0;
    
        $nfriend->save();
    }
}
