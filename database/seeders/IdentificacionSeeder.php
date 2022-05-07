<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Factory;
use Faker;
use App\Models\identificacion;

class IdentificacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $data1=[
            'tipo'=>'PAP',
            'desc'=>'Pasaporte'

        ];
        DB::table('identificacions')->insert($data1); $data2=[
            'tipo'=>'CC',
            'desc'=>'Cedula de ciudadania'
        ];
        DB::table('identificacions')->insert($data2);  $data3=[
            'tipo'=>'TI',
            'desc'=>'Tarjeta de identidad'

        ];
        DB::table('identificacions')->insert($data3); 

        $data4=[
            'tipo'=>'CE',
            'desc'=>'Cedula extranjera'

        ];
        DB::table('identificacions')->insert($data4); 

        $data5=[
            'tipo'=>'NIP',
            'desc'=>'Numero de identificación personal'

        ];
        DB::table('identificacions')->insert($data5); 

        $data5=[
            'tipo'=>'NIT',
            'desc'=>'Numero de identificación tributaria'

        ];
        DB::table('identificacions')->insert($data5); 

        $data5=[
            'tipo'=>'NA',
            'desc'=>'Indocumentado'

        ];
        DB::table('identificacions')->insert($data5); 

    }
}
