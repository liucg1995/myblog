<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tags')->delete();
        
        \DB::table('tags')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => '2017-05-27 14:32:10',
                'updated_at' => '2017-05-27 14:32:10',
                'name' => 'I7ODa8D',
            ),
            1 => 
            array (
                'id' => 2,
                'created_at' => '2017-05-27 14:32:10',
                'updated_at' => '2017-05-27 14:32:10',
                'name' => '4Wtkn2G',
            ),
            2 => 
            array (
                'id' => 3,
                'created_at' => '2017-05-27 14:32:10',
                'updated_at' => '2017-05-27 14:32:10',
                'name' => 'I5kRb7p',
            ),
            3 => 
            array (
                'id' => 4,
                'created_at' => '2017-05-27 14:32:10',
                'updated_at' => '2017-05-27 14:32:10',
                'name' => '2Chnovg',
            ),
            4 => 
            array (
                'id' => 5,
                'created_at' => '2017-05-27 14:32:10',
                'updated_at' => '2017-05-27 14:32:10',
                'name' => 'lpnC1Jn',
            ),
            5 => 
            array (
                'id' => 6,
                'created_at' => '2017-05-27 14:32:10',
                'updated_at' => '2017-05-27 14:32:10',
                'name' => 'RGmdZy6',
            ),
            6 => 
            array (
                'id' => 7,
                'created_at' => '2017-05-27 14:32:10',
                'updated_at' => '2017-05-27 14:32:10',
                'name' => 'qn38KVU',
            ),
            7 => 
            array (
                'id' => 8,
                'created_at' => '2017-05-27 14:32:10',
                'updated_at' => '2017-05-27 14:32:10',
                'name' => 'mMTjmjk',
            ),
            8 => 
            array (
                'id' => 9,
                'created_at' => '2017-05-27 14:32:10',
                'updated_at' => '2017-05-27 14:32:10',
                'name' => 'nt3mm8j',
            ),
            9 => 
            array (
                'id' => 10,
                'created_at' => '2017-05-27 14:32:10',
                'updated_at' => '2017-05-27 14:32:10',
                'name' => 'NyfTl9f',
            ),
            10 => 
            array (
                'id' => 11,
                'created_at' => '2017-06-09 12:20:11',
                'updated_at' => '2017-06-09 12:20:24',
                'name' => 'ergfd',
            ),
        ));
        
        
    }
}