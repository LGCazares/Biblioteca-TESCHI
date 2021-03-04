<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ListasLibroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file = fopen(resource_path().'/db_libros/export_libros.csv','r');
        $cont=0;
        while (($line = fgetcsv($file)) !== FALSE) {

          	if($cont>0){
	            $id = $line[0];
	            $autor = $line[1];	              
	            $titulo = $line[2];	              
	            $editorial = $line[3];	              
	            $anio = $line[4];	              
	            $clasificacion = $line[5];	            
	              
	            DB::table('listas_libros')->insert([
	                'id' => $id,
	                'autor' => $autor,
	                'titulo' => $titulo,
	                'editorial' => $editorial,
	                'anio' => $anio,
	                'clasificacion' => $clasificacion,
	                'created_at' => date("Y-m-d H:i:s"),
	                'updated_at' => date("Y-m-d H:i:s"),
	            ]);
        	}
          	$cont++;
        }
        fclose($file);
    }
}
