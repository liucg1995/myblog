<?php

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menus')->delete();
        
        \DB::table('menus')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => '列表',
                'href' => 'lists',
                'sort' => 1,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '2017-06-09 12:11:18',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => '列表2',
                'href' => 'lists2',
                'sort' => 1,
                'created_at' => '2017-06-09 12:12:50',
                'updated_at' => '2017-06-09 12:14:58',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}