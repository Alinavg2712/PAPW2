<?php

use Illuminate\Database\Seeder;
use App\Likes;
class LikesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $lick = new Likes();
        $lick->comic_id = 3;
        $lick->user_id = 2;
        $lick->save();


    }
}
