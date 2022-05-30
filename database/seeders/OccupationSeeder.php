<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OccupationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $data=['id'=>1,'nombre'=>'Reciclaje'] ;        
        DB::table('occupations')->insert($data);

        $data=['id'=>2,'nombre'=>'Mendicidad'] ;        
        DB::table('occupations')->insert($data);

        $data=['id'=>3,'nombre'=>'Limpiar vidrios, cuida carros'] ;        
        DB::table('occupations')->insert($data);

        $data=['id'=>4,'nombre'=>'Construcción'] ;        
        DB::table('occupations')->insert($data);

        $data=['id'=>5,'nombre'=>'Malabares, Artesanias'] ;        
        DB::table('occupations')->insert($data);

        $data=['id'=>6,'nombre'=>'Hurto'] ;        
        DB::table('occupations')->insert($data);

        $data=['id'=>7,'nombre'=>'Prostitución'] ;        
        DB::table('occupations')->insert($data);

        $data=['id'=>8,'nombre'=>'Venta ambulante'] ;        
        DB::table('occupations')->insert($data);

        $data=['id'=>9,'nombre'=>'Otro'] ;        
        DB::table('occupations')->insert($data);
    }
}
