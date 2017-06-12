<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'guo',
                'email' => '164445438@qq.com',
                'password' => '$2y$10$FkTHIRMWCewuucVhG72G.emO3U657p8JB2JChDFVinXGXKl0HP3Si',
                'register_from' => 'web_form',
                'github_id' => NULL,
                'github_name' => NULL,
                'website' => NULL,
                'real_name' => NULL,
                'description' => NULL,
                'meta' => NULL,
                'avatar' => NULL,
                'profile_image' => NULL,
                'remember_token' => NULL,
                'created_at' => '2017-05-27 14:36:20',
                'updated_at' => '2017-05-27 14:36:20',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Bobby Purdy',
                'email' => 'jsenger@example.com',
                'password' => '$2y$10$8/7QQGr9pkfOKlQB41uodOte3gEjh0NwD95OuogzTw0bAk6DK6iJm',
                'register_from' => 'web_form',
                'github_id' => NULL,
                'github_name' => NULL,
                'website' => NULL,
                'real_name' => NULL,
                'description' => NULL,
                'meta' => NULL,
                'avatar' => NULL,
                'profile_image' => NULL,
                'remember_token' => 'AeE23KQ9x2',
                'created_at' => '2017-05-27 14:32:10',
                'updated_at' => '2017-05-27 14:32:10',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Mortimer Mertz',
                'email' => 'raquel46@example.net',
                'password' => '$2y$10$vvsSiT.uGFdzV2Za0jS2qeK5O9lERDrxUbzFNZT.Czlp3CXLlBe32',
                'register_from' => 'web_form',
                'github_id' => NULL,
                'github_name' => NULL,
                'website' => NULL,
                'real_name' => NULL,
                'description' => NULL,
                'meta' => NULL,
                'avatar' => NULL,
                'profile_image' => NULL,
                'remember_token' => 'X7Ny73PmSa',
                'created_at' => '2017-05-27 14:32:10',
                'updated_at' => '2017-05-27 14:32:10',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Darrell Von DDS',
                'email' => 'marjorie.carroll@example.net',
                'password' => '$2y$10$tmCknb712g4pP0VEhDklFOjElOMrCh45TktKTzVb8NtznTJrwHGr2',
                'register_from' => 'web_form',
                'github_id' => NULL,
                'github_name' => NULL,
                'website' => NULL,
                'real_name' => NULL,
                'description' => NULL,
                'meta' => NULL,
                'avatar' => NULL,
                'profile_image' => NULL,
                'remember_token' => 'wDu8kz8CnO',
                'created_at' => '2017-05-27 14:32:10',
                'updated_at' => '2017-05-27 14:32:10',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Prof. Deangelo Smitham',
                'email' => 'clarabelle06@example.org',
                'password' => '$2y$10$nH51288f574iHYqAADx7zuaNckhF/A0kXj5i5YnMZj/Ck0MTKuGJS',
                'register_from' => 'web_form',
                'github_id' => NULL,
                'github_name' => NULL,
                'website' => NULL,
                'real_name' => NULL,
                'description' => NULL,
                'meta' => NULL,
                'avatar' => NULL,
                'profile_image' => NULL,
                'remember_token' => 'JM4cU0XQmq',
                'created_at' => '2017-05-27 14:32:10',
                'updated_at' => '2017-05-27 14:32:10',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Kacie Kuhic',
                'email' => 'sterling12@example.org',
                'password' => '$2y$10$ap9M6GjV6eL.6XPoM7agOOy5PjmKC/7wHaqHCR5QzykGOdCtc4pJW',
                'register_from' => 'web_form',
                'github_id' => NULL,
                'github_name' => NULL,
                'website' => NULL,
                'real_name' => NULL,
                'description' => NULL,
                'meta' => NULL,
                'avatar' => NULL,
                'profile_image' => NULL,
                'remember_token' => 'xmCDPMlBj4',
                'created_at' => '2017-05-27 14:32:10',
                'updated_at' => '2017-05-27 14:32:10',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Craig Bartoletti',
                'email' => 'osborne47@example.net',
                'password' => '$2y$10$4/H6BfPoUhHpoxUuOCCcvu4MwX8ug/FVlrT3xBO2gjxvszkp2fr8e',
                'register_from' => 'web_form',
                'github_id' => NULL,
                'github_name' => NULL,
                'website' => NULL,
                'real_name' => NULL,
                'description' => NULL,
                'meta' => NULL,
                'avatar' => NULL,
                'profile_image' => NULL,
                'remember_token' => 'QERYlmA8Ix',
                'created_at' => '2017-05-27 14:32:10',
                'updated_at' => '2017-05-27 14:32:10',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Alfonso Zulauf',
                'email' => 'ignatius46@example.net',
                'password' => '$2y$10$cl6Fy99ulOVmLTCbIvmnt.jXFklfPAYWUnYXSF.AS7QOrgaA1T5HO',
                'register_from' => 'web_form',
                'github_id' => NULL,
                'github_name' => NULL,
                'website' => NULL,
                'real_name' => NULL,
                'description' => NULL,
                'meta' => NULL,
                'avatar' => NULL,
                'profile_image' => NULL,
                'remember_token' => 'IYVzDwGwnh',
                'created_at' => '2017-05-27 14:32:11',
                'updated_at' => '2017-05-27 14:32:11',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Bud Zemlak',
                'email' => 'breitenberg.brielle@example.com',
                'password' => '$2y$10$6xT3HDmeYUmjK15pRh0w/.L1NaKwQ6TsSsB7i3mbXIPBry1yxa/ly',
                'register_from' => 'web_form',
                'github_id' => NULL,
                'github_name' => NULL,
                'website' => NULL,
                'real_name' => NULL,
                'description' => NULL,
                'meta' => NULL,
                'avatar' => NULL,
                'profile_image' => NULL,
                'remember_token' => 'ewTvHY0zvp',
                'created_at' => '2017-05-27 14:32:11',
                'updated_at' => '2017-05-27 14:32:11',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Edgardo Kautzer PhD',
                'email' => 'sheridan86@example.com',
                'password' => '$2y$10$yuud6trdwhPT9Vf1XlOaT.AmI8ZGmIIVURZ5e6e42OlEBxj/DU07G',
                'register_from' => 'web_form',
                'github_id' => NULL,
                'github_name' => NULL,
                'website' => NULL,
                'real_name' => NULL,
                'description' => NULL,
                'meta' => NULL,
                'avatar' => NULL,
                'profile_image' => NULL,
                'remember_token' => 'pXPaiJMKZ1',
                'created_at' => '2017-05-27 14:32:11',
                'updated_at' => '2017-05-27 14:32:11',
            ),
            10 => 
            array (
                'id' => 12,
                'name' => 'Dr. Riley Brekke',
                'email' => 'justyn26@example.net',
                'password' => '$2y$10$v0MZVP8lH.KYsSpFSe9trOsEKoI0bfRvJTiWiQyiUQMYzRbOCAgA.',
                'register_from' => 'web_form',
                'github_id' => NULL,
                'github_name' => NULL,
                'website' => NULL,
                'real_name' => NULL,
                'description' => NULL,
                'meta' => NULL,
                'avatar' => NULL,
                'profile_image' => NULL,
                'remember_token' => 'BxLXNQqpFp',
                'created_at' => '2017-05-27 14:32:10',
                'updated_at' => '2017-05-27 14:32:10',
            ),
        ));
        
        
    }
}