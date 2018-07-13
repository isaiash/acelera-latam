<?php

use Illuminate\Database\Seeder;

use App\Etapa;

class etapaTableSeeder extends Seeder
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
				'name' => 'Idea', 
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime
			
			],


			[
				'name' => 'Semilla', 
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime 
			
			],


			[
				'name' => 'Temprana', 
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime
			
			],


			[
				'name' => 'Expansión', 
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime
			
			],


			[
				'name' => 'Internacionalización', 
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime
			
			],

			[
				'name' => 'Optimización/Declive', 
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime
			
			],

			
		);
 
		Etapa::insert($data);
    }
}
