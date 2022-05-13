<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SexSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        
        $data=[
            'tipo'=>'Hombre',
        ];
        DB::table('sexes')->insert($data);
        $data=[
            'tipo'=>'Mujer',
        ];
        DB::table('sexes')->insert($data);
    }
}
