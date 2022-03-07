<?php

namespace Modules\Cuadro\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CuadrosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::table('cuadros')->insert([
            'titulo' => 'Las Meninas',
            'autor' => 'Diego Velazquez',
            'medidas' => '3.18 metros de ancho por 2.76 metros de altura',
            'tecnica' => 'oleo',
            'material' => 'lienzo',
            'anio' => 1656
        ]);

        DB::table('cuadros')->insert([
            'titulo' => 'El beso',
            'autor' => 'Gustav Klimt',
            'medidas' => '1,8 metros de alto por 1,8 metros de largo',
            'tecnica' => 'óleo y pan de oro pintado',
            'material' => 'lienzo',
            'anio' => 1908
        ]);

        DB::table('cuadros')->insert([
            'titulo' => 'El jardín de las delicias',
            'autor' => 'El Bosco',
            'medidas' => '220 cm x 97 cm en cada panel',
            'tecnica' => 'oleo',
            'material' => 'tríptico de madera de roble',
            'anio' => 1490
        ]);

        DB::table('cuadros')->insert([
            'titulo' => 'La Mona Lisa',
            'autor' => 'Leonardo da Vinci',
            'medidas' => '77 x 53 cm',
            'tecnica' => 'oleo',
            'material' => 'madera',
            'anio' => 1503
        ]);

        DB::table('cuadros')->insert([
            'titulo' => 'Retrato de la infanta Margarita Teresa en un vestido azul,',
            'autor' => 'Diego Velazquez',
            'medidas' => '127 × 107',
            'tecnica' => 'oleo',
            'material' => 'lienzo',
            'anio' => 1659
        ]);
    }
}
