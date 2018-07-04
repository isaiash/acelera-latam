<?php

use Illuminate\Database\Seeder;

use App\Pregunta;

class preguntaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                $data = array(

        	[
				'name' => '¿Cuál es la propuesta de valor de su empresa?', 
				'dimension_id' 	=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime
			
			],


			[
				'name' => '¿Ha realizado un estudio de mercado?', 
				'dimension_id' 	=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime 
			
			],


			[
				'name' => '¿Tiene segmentación de clientes?', 
				'dimension_id' 	=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime
			
			],


			[
				'name' => '¿Tiene canales de distribución?', 
				'dimension_id' 	=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime
			
			],

			
		);
 
		Pregunta::insert($data);
    }
}
