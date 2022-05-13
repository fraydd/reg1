<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $data=[
            'tipo'=>'Masculino',
        ];
        DB::table('genders')->insert($data);

        $data=[
            'tipo'=>'Femenino',
        ];
        DB::table('genders')->insert($data);

        $data=[
            'tipo'=>'Intersexual',
        ];
        DB::table('genders')->insert($data);

        $data=[
            'tipo'=>'Intersexual femenino',
        ];
        DB::table('genders')->insert($data);

        $data=[
            'tipo'=>'Intersexual masculino',
        ];
        DB::table('genders')->insert($data);

    }
}
