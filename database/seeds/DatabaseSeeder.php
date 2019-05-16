<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleTableSeeder::class);
         $this->call(UserTableSeeder::class);
         $this->call(ComicTableSeeder::class);
         $this->call(ComicListTableSeeder::class);
         $this->call(CommentSeeder::class);
         $this->call(FriendTableSeeder::class);
         $this->call(CatTableSeeder::class);
         $this->call(LikesSeeder::class);
    }
}
