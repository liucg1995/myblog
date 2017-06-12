<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => '2017-05-27 14:32:09',
                'updated_at' => '2017-05-27 14:32:09',
                'name' => 'Android',
            ),
            1 => 
            array (
                'id' => 2,
                'created_at' => '2017-05-27 14:32:09',
                'updated_at' => '2017-05-27 14:32:09',
                'name' => 'Java',
            ),
            2 => 
            array (
                'id' => 3,
                'created_at' => '2017-05-27 14:32:09',
                'updated_at' => '2017-05-27 14:32:09',
                'name' => 'Php',
            ),
            3 => 
            array (
                'id' => 4,
                'created_at' => '2017-05-27 14:32:10',
                'updated_at' => '2017-05-27 14:32:10',
                'name' => 'Spring',
            ),
            4 => 
            array (
                'id' => 5,
                'created_at' => '2017-05-27 14:32:10',
                'updated_at' => '2017-05-27 14:32:10',
                'name' => 'Laravel',
            ),
            5 => 
            array (
                'id' => 6,
                'created_at' => '2017-05-27 14:32:10',
                'updated_at' => '2017-05-27 14:32:10',
                'name' => 'Vue',
            ),
            6 => 
            array (
                'id' => 7,
                'created_at' => '2017-05-27 14:32:10',
                'updated_at' => '2017-05-27 14:32:10',
                'name' => 'Js',
            ),
        ));
        
        
    }
}