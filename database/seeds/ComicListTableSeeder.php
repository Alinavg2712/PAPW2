<?php

use Illuminate\Database\Seeder;
use App\ComicList;
use App\Comic;
class ComicListTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
      
        $comic = new ComicList();
        $comic->comic_id = 1;
        $comic->user_id = 1;
        $comic->save();

        $comic = new ComicList();
        $comic->comic_id = 2;
        $comic->user_id = 1;
        $comic->save();

        $comic = new ComicList();
        $comic->comic_id = 3;
        $comic->user_id = 1;
        $comic->save();
       
        $comic = new ComicList();
        $comic->comic_id = 1;
        $comic->user_id = 2;
        $comic->save();

        $comic = new ComicList();
        $comic->comic_id = 3;
        $comic->user_id = 3;
        $comic->save();

       
    }
}
