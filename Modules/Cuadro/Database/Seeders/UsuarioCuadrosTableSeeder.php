<?php

namespace Modules\Cuadro\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class UsuarioCuadrosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuario_cuadros')->insert(
            [
                'usuario_id' => '1',
                'cuadro_id' => '1',
            ],
        );
        DB::table('usuario_cuadros')->insert(
            [
                'usuario_id' => '2',
                'cuadro_id' => '2',
            ],
        );
        DB::table('usuario_cuadros')->insert(
            [
                'usuario_id' => '3',
                'cuadro_id' => '3',
            ],
        );
        DB::table('usuario_cuadros')->insert(
            [
                'usuario_id' => '1',
                'cuadro_id' => '3',
            ],
        );

        DB::table('usuario_cuadros')->insert(
            [
                'usuario_id' => '1',
                'cuadro_id' => '4',
            ],
        );
        DB::table('usuario_cuadros')->insert(
            [
                'usuario_id' => '1',
                'cuadro_id' => '5',
            ],
    );


    }
}
