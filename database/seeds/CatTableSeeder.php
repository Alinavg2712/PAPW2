<?php

use Illuminate\Database\Seeder;
use App\Categoria;
class CatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $cat = new Categoria();
        $cat->nombre = 'Romance';
        $cat->save();

        $cat = new Categoria();
        $cat->nombre = 'CienciaFiccion';
        $cat->save();

        $cat = new Categoria();
        $cat->nombre = 'Terror';
        $cat->save();
      
      

    }
}
