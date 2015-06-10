<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

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
              'marks_id' =>'1',
              'models_id' =>'1',
              'types_id' =>'1',
              'versions_id' =>'1',
              'colors_id' =>'1',
              'categories_id' =>'1',
              'nations_id' =>'1',
              'fuel_types_id' =>'1',
              'consumptionemissions_id' =>'1',
              'characteristics_id' =>'1',
              'publish_flag' =>'1',
              'reserved_flag' =>'1',
              'images_id' =>'1'),
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
              'marks_id' =>'2',
              'models_id' =>'2',
              'types_id' =>'2',
              'versions_id' =>'2',
              'colors_id' =>'2',
              'categories_id' =>'2',
              'nations_id' =>'2',
              'fuel_types_id' =>'2',
              'consumptionemissions_id' =>'2',
              'characteristics_id' =>'2',
              'publish_flag' =>'2',
              'reserved_flag' =>'2',
              'images_id' =>'2'),

          ));
       }
 
}