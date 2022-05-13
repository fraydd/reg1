<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MartialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            'tipo'=>'Soltero',
        ];
        DB::table('martials')->insert($data);
        $data=[
            'tipo'=>'Casado',
        ];
        DB::table('martials')->insert($data);
        $data=[
            'tipo'=>'Unión marital de hecho',
        ];
        DB::table('martials')->insert($data);
       
        

    }
}
