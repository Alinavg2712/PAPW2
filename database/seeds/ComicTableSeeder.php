<?php

use Illuminate\Database\Seeder;
use App\Comic;
class ComicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
       
        $comic = new Comic();
        $comic->nombre = 'The Clone Wars';
        $comic->description = 'The clone army in their fight against the Separatists';
        $comic->likes = 10;
        $comic->publicado = true;
        $comic->pic1 = 'img1';
        $comic->pic2 = 'img2';
        $comic->pic3 = 'img3';
        $comic->pic4 = 'img4';
        $comic->video = 'video';
        $comic->user_id = 1;
        $comic->cat_id = 1;
        $comic->save();

        $comic = new Comic();
        $comic->nombre = 'Turf Wars';
        $comic->description = 'Graphic novel trilogy set in the Avatar universe';
        $comic->likes = 10;
        $comic->publicado = true;
        $comic->pic1 = 'img1';
        $comic->pic2 = 'img2';
        $comic->pic3 = 'img3';
        $comic->pic4 = 'img4';
        $comic->video = 'video';
        $comic->user_id = 1;
        $comic->cat_id = 1;
        $comic->save();

        $comic = new Comic();
        $comic->nombre = 'X-23: Target X';
        $comic->description = 'X-23 struggles to create a real life for herself.';
        $comic->likes = 10;
        $comic->publicado = true;
        $comic->pic1 = 'img1';
        $comic->pic2 = 'img2';
        $comic->pic3 = 'img3';
        $comic->pic4 = 'img4';
        $comic->video = 'video';
        $comic->user_id = 1;
        $comic->cat_id = 1;
        $comic->save();
      

       
    }
}
