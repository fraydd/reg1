<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddictionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
$data=['id'=>1,'nombre'=>'Ninguna'] ;        
DB::table('addictions')->insert($data);

$data=['id'=>2,'nombre'=>'Alcohol'] ;        
DB::table('addictions')->insert($data);

$data=['id'=>3,'nombre'=>'Nicotina'] ;        
DB::table('addictions')->insert($data);

$data=['id'=>4,'nombre'=>'Psicofármacos'] ;        
DB::table('addictions')->insert($data);

$data=['id'=>5,'nombre'=>'Cafeína'] ;      
DB::table('addictions')->insert($data);

$data=['id'=>6,'nombre'=>'Cocaína'] ;        
DB::table('addictions')->insert($data);

$data=['id'=>7,'nombre'=>'Alucinógenos'] ;        
DB::table('addictions')->insert($data);

$data=['id'=>8,'nombre'=>'Esteroides'] ;        
DB::table('addictions')->insert($data);

$data=['id'=>9,'nombre'=>'Cannabis'] ;        
DB::table('addictions')->insert($data);


$data=['id'=>10,'nombre'=>'Juego'] ;        
DB::table('addictions')->insert($data);

$data=['id'=>11,'nombre'=>'Comida'] ;        
DB::table('addictions')->insert($data);



$data=['id'=>12,'nombre'=>'Compras'] ;        
DB::table('addictions')->insert($data);

$data=['id'=>13,'nombre'=>'Trabajo'] ;        
DB::table('addictions')->insert($data);

$data=['id'=>14,'nombre'=>'Pornografía y sexo'] ;        
DB::table('addictions')->insert($data);

$data=['id'=>15,'nombre'=>'Nuevas tecnologías'] ;        
DB::table('addictions')->insert($data);





    }
}
