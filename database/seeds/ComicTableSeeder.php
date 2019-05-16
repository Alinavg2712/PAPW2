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
        $comic->pic1 = '../images/55.jpg';
        $comic->pic2 = '../images/62.jpg';
        $comic->pic3 = '../images/63.jpg';
        $comic->pic4 = '../images/64.jpg';
        $comic->video = '../images/61.mp4';
        $comic->user_id = 1;
        $comic->cat_id = 2;
        $comic->save();

        $comic = new Comic();
        $comic->nombre = 'Turf Wars';
        $comic->description = 'Graphic novel trilogy set in the Avatar universe';
        $comic->likes = 10;
        $comic->publicado = true;
        $comic->pic1 = '../images/56.jpg';
        $comic->pic2 = '../images/65.jpg';
        $comic->pic3 = '../images/66.jpg';
        $comic->pic4 = '../images/67.jpg';
        $comic->video = '../images/61.mp4';
        $comic->user_id = 1;
        $comic->cat_id = 1;
        $comic->save();

        $comic = new Comic();
        $comic->nombre = 'X-23: Target X';
        $comic->description = 'X-23 struggles to create a real life for herself.';
        $comic->likes = 10;
        $comic->publicado = true;
        $comic->pic1 = '../images/57.jpg';
        $comic->pic2 = '../images/58.jpg';
        $comic->pic3 = '../images/59.jpg';
        $comic->pic4 = '../images/60.jpg';
        $comic->video = '../images/61.mp4';
        $comic->user_id = 1;
        $comic->cat_id = 2;
        $comic->save();
      

       
    }
}
