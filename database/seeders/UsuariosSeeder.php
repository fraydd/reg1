<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      /*   $data=[
            'Nombre1'=>'fredy',
            'Nombre2'=>'albeiro',
            'Apellido1'=>'chaves',
            'Apellido2'=>'burbano',
            'Tel'=>'3155403787',
            'Direccion'=>'barcelona',
            'edad'=>21,
            'foto'=>'public/images/home',
        ];
        DB::table('usuarios')->insert($data); */
        \App\Models\usuario::factory(100)->create();
    }
}
