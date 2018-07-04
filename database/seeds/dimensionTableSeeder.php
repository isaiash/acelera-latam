<?php

use Illuminate\Database\Seeder;

use App\Dimension;

class dimensionTableSeeder extends Seeder
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
				'name' => 'Modelo de negocios', 
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime
			
			],


			[
				'name' => 'Gestión organizacional', 
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime 
			
			],


			[
				'name' => 'Gestión comercial', 
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime
			
			],


			[
				'name' => 'Gestión Financiera', 
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime
			
			],


			[
				'name' => 'Gestión innovación', 
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime
			
			],

			
		);
 
		Dimension::insert($data);
    }
}
