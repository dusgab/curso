<?php

use Illuminate\Database\Seeder;

class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('categorias')->delete();
        
        \DB::table('categorias')->insert(array (
            0 => 
            array (
                'descripcion' => 'Lacteos',
            ),
            1 => 
            array (
                'descripcion' => 'Bebidas',
            ),
            2 => 
            array (
                'descripcion' => 'Comestibles',
            ),
            3 => 
            array (
                'descripcion' => 'Golosinas',
            ),
            4 => 
            array (
                'descripcion' => 'Varios',
            ),
        ));
    }
}
