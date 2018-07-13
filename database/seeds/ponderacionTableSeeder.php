<?php

use Illuminate\Database\Seeder;

use App\Ponderacion;

class ponderacionTableSeeder extends Seeder
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
				'Ponderacion' => 1,
				'etapa_id' 	=> 1,
				'pregunta_id' 	=> 1, 
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime
			
			],


			[
				'Ponderacion' => 1,
				'etapa_id' 	=> 1,
				'pregunta_id' 	=> 2, 
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime
			
			],



			[
				'Ponderacion' => 1,
				'etapa_id' 	=> 1,
				'pregunta_id' 	=> 3, 
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime
			
			],



			[
				'Ponderacion' => 1,
				'etapa_id' 	=> 1,
				'pregunta_id' 	=> 4, 
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime
			
			],




			
		);
 
		Ponderacion::insert($data);
    }
}
