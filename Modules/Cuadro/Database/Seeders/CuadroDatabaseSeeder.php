<?php

namespace Modules\Cuadro\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CuadroDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call("Modules\Cuadro\Database\Seeders\CuadrosTableSeeder");
        $this->call("Modules\Cuadro\Database\Seeders\UsuarioCuadrosTableSeeder");
    }
}
