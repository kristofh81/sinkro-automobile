<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
class DatabaseSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
		$this->call('NationsTableSeeder');
		$this->call('MarksTableSeeder');
		$this->call('CarModelsTableSeeder');
	}
}

class NationsTableSeeder extends Seeder {
 
    public function run()
    {
         //delete users table records
         DB::table('nations')->delete();
         //insert some dummy records
         DB::table('nations')->insert(array(
            ['name'=>'Italy'],
            ['name'=>'Germany'],
            ['name'=>'Austria'],
            ['name'=>'Svizzera'],
            ['name'=>'Francia'],			
          ));
    }
}

class CarModelsTableSeeder extends Seeder {
 
    public function run()
    {
         //delete users table records
         DB::table('models')->delete();
         //insert some dummy records
         DB::table('models')->insert(array(
            ['name'=>'500', 'marks_id' => 1],
            ['name'=>'Punto', 'marks_id' => 1],
            ['name'=>'Musa', 'marks_id' => 2],
            ['name'=>'Acenta', 'marks_id' => 3],
            ['name'=>'Almera', 'marks_id' => 3],	
            ['name'=>'Note', 'marks_id' => 3],	
            ['name'=>'Corsa', 'marks_id' => 4],	
            ['name'=>'Grand Scenic', 'marks_id' => 5],	
            ['name'=>'Pulse', 'marks_id' => 6],	
            ['name'=>'Land Cruiser', 'marks_id' => 7],	
            ['name'=>'RAV4', 'marks_id' => 7],  
            ['name'=>'Altro', 'marks_id' => 8],	
         ));
    }
}


class MarksTableSeeder extends Seeder {
 
    public function run()
    {
         //delete users table records
         DB::table('marks')->delete();
         //insert some dummy records
         DB::table('marks')->insert(array(
            ['name'=>'Fiat'],
            ['name'=>'Lancia'],
            ['name'=>'Nissan'],
            ['name'=>'Opel'],
            ['name'=>'Renault'],
            ['name'=>'Smart'],			
            ['name'=>'Toyota'],			
            ['name'=>'Altro'],			
          ));
    }
}
/*
class CarsTableSeeder extends Seeder {
 
    public function run()
    {
         //delete users table records
         DB::table('cars')->delete();
         //insert some dummy records
         DB::table('cars')->insert(array(
             array('type'=>'berlina', 
              'potency' =>'100',
              'mileage' =>'50000',
              'inscription_date' =>'12/06/2010',
              'doors' =>'4',
              'cilinders' =>'4',
              'production_date' =>'12/06/2011',
              'revision_expiry_date' =>'12/06/2012',
              'bollino_blu_expiry_date' =>'12/06/2012',
              'immatriculation' =>'12/06/2012',
              'total_owners' =>'1',
              'accident_history' =>'0',
              'travel_ability' =>'1',
              'insert_code' =>'',
              'vin' =>'testdata',
              'availability_period' =>'12/06/2010',
              'description' =>'lorem Ipsum',
              'price' =>'10000',
              'price_b2b' =>'8000',
			),
             array('type'=>'citycar', 
              'potency' =>'120',
              'mileage' =>'12000',
              'inscription_date' =>'12/06/2012',
              'doors' =>'12/06/2013',
              'cilinders' =>'12/06/2015',
              'production_date' =>'12/06/2015',
              'revision_expiry_date' =>'12/06/2015',
              'bollino_blu_expiry_date' =>'12/06/2015',
              'immatriculation' =>'12/06/2015',
              'total_owners' =>'2',
              'accident_history' =>'0',
              'travel_ability' =>'1',
              'insert_code' =>'testdata',
              'vin' =>'testdata',
              'availability_period' =>'testdata',
              'description' =>'testdata',
              'price' =>'testdata',
              'price_b2b' =>'22222',
              ),

          ));
    }

}

*/