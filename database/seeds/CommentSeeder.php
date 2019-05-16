<?php

use Illuminate\Database\Seeder;
use App\Comentario;
class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $comment = new Comentario();
        $comment->description = 'Good stuff!';
        $comment->comic_id = 1;
        $comment->user_id = 1;
        $comment->save();

        $comment = new Comentario();
        $comment->description = 'Bad stuff!';
        $comment->comic_id = 1;
        $comment->user_id = 2;
        $comment->save();

       
    }
}
