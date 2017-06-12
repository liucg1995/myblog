<?php

use Illuminate\Database\Seeder;

class AdminMenuTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin_menu')->delete();
        
        \DB::table('admin_menu')->insert(array (
            0 => 
            array (
                'id' => 1,
                'parent_id' => 0,
                'order' => 1,
                'title' => 'Index',
                'icon' => 'fa-bar-chart',
                'uri' => '/',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'parent_id' => 0,
                'order' => 2,
                'title' => 'Admin',
                'icon' => 'fa-tasks',
                'uri' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'parent_id' => 2,
                'order' => 3,
                'title' => 'Users',
                'icon' => 'fa-users',
                'uri' => 'auth/users',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'parent_id' => 2,
                'order' => 4,
                'title' => 'Roles',
                'icon' => 'fa-user',
                'uri' => 'auth/roles',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'parent_id' => 2,
                'order' => 5,
                'title' => 'Permission',
                'icon' => 'fa-user',
                'uri' => 'auth/permissions',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'parent_id' => 2,
                'order' => 6,
                'title' => 'Menu',
                'icon' => 'fa-bars',
                'uri' => 'auth/menu',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'parent_id' => 2,
                'order' => 7,
                'title' => 'Operation log',
                'icon' => 'fa-history',
                'uri' => 'auth/logs',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'parent_id' => 0,
                'order' => 8,
                'title' => 'Helpers',
                'icon' => 'fa-gears',
                'uri' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'parent_id' => 8,
                'order' => 9,
                'title' => 'Scaffold',
                'icon' => 'fa-keyboard-o',
                'uri' => 'helpers/scaffold',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'parent_id' => 8,
                'order' => 10,
                'title' => 'Database terminal',
                'icon' => 'fa-database',
                'uri' => 'helpers/terminal/database',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'parent_id' => 8,
                'order' => 11,
                'title' => 'Laravel artisan',
                'icon' => 'fa-terminal',
                'uri' => 'helpers/terminal/artisan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'parent_id' => 0,
                'order' => 0,
                'title' => 'Banner',
                'icon' => 'fa-bars',
                'uri' => '/banner',
                'created_at' => '2017-06-09 10:04:09',
                'updated_at' => '2017-06-09 12:02:55',
            ),
            12 => 
            array (
                'id' => 13,
                'parent_id' => 0,
                'order' => 0,
                'title' => '菜单',
                'icon' => 'fa-bars',
                'uri' => '/menu',
                'created_at' => '2017-06-09 12:05:24',
                'updated_at' => '2017-06-09 12:05:24',
            ),
            13 => 
            array (
                'id' => 14,
                'parent_id' => 0,
                'order' => 0,
                'title' => '分类',
                'icon' => 'fa-bars',
                'uri' => 'type',
                'created_at' => '2017-06-09 12:15:50',
                'updated_at' => '2017-06-09 12:15:50',
            ),
            14 => 
            array (
                'id' => 15,
                'parent_id' => 0,
                'order' => 0,
                'title' => '标签',
                'icon' => 'fa-bars',
                'uri' => 'tag',
                'created_at' => '2017-06-09 12:19:52',
                'updated_at' => '2017-06-09 12:19:52',
            ),
            15 => 
            array (
                'id' => 16,
                'parent_id' => 0,
                'order' => 0,
                'title' => '文章',
                'icon' => 'fa-bars',
                'uri' => 'post',
                'created_at' => '2017-06-09 12:28:37',
                'updated_at' => '2017-06-09 12:28:37',
            ),
            16 => 
            array (
                'id' => 17,
                'parent_id' => 0,
                'order' => 0,
                'title' => '评论',
                'icon' => 'fa-bars',
                'uri' => 'comment',
                'created_at' => '2017-06-09 13:22:14',
                'updated_at' => '2017-06-09 13:22:14',
            ),
            17 => 
            array (
                'id' => 18,
                'parent_id' => 0,
                'order' => 0,
                'title' => '友情链接',
                'icon' => 'fa-bars',
                'uri' => 'link',
                'created_at' => '2017-06-10 03:57:58',
                'updated_at' => '2017-06-10 03:57:58',
            ),
        ));
        
        
    }
}