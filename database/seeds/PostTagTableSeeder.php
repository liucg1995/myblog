<?php

use Illuminate\Database\Seeder;

class PostTagTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('post_tag')->delete();
        
        \DB::table('post_tag')->insert(array (
            0 => 
            array (
                'post_id' => 1,
                'tag_id' => 2,
            ),
            1 => 
            array (
                'post_id' => 1,
                'tag_id' => 5,
            ),
            2 => 
            array (
                'post_id' => 1,
                'tag_id' => 7,
            ),
            3 => 
            array (
                'post_id' => 2,
                'tag_id' => 2,
            ),
            4 => 
            array (
                'post_id' => 2,
                'tag_id' => 3,
            ),
            5 => 
            array (
                'post_id' => 2,
                'tag_id' => 7,
            ),
            6 => 
            array (
                'post_id' => 2,
                'tag_id' => 8,
            ),
            7 => 
            array (
                'post_id' => 3,
                'tag_id' => 9,
            ),
            8 => 
            array (
                'post_id' => 3,
                'tag_id' => 10,
            ),
            9 => 
            array (
                'post_id' => 4,
                'tag_id' => 6,
            ),
            10 => 
            array (
                'post_id' => 4,
                'tag_id' => 8,
            ),
            11 => 
            array (
                'post_id' => 5,
                'tag_id' => 8,
            ),
            12 => 
            array (
                'post_id' => 6,
                'tag_id' => 2,
            ),
            13 => 
            array (
                'post_id' => 7,
                'tag_id' => 5,
            ),
            14 => 
            array (
                'post_id' => 7,
                'tag_id' => 10,
            ),
            15 => 
            array (
                'post_id' => 8,
                'tag_id' => 3,
            ),
            16 => 
            array (
                'post_id' => 8,
                'tag_id' => 9,
            ),
            17 => 
            array (
                'post_id' => 8,
                'tag_id' => 10,
            ),
            18 => 
            array (
                'post_id' => 9,
                'tag_id' => 3,
            ),
            19 => 
            array (
                'post_id' => 10,
                'tag_id' => 4,
            ),
            20 => 
            array (
                'post_id' => 10,
                'tag_id' => 8,
            ),
            21 => 
            array (
                'post_id' => 10,
                'tag_id' => 10,
            ),
            22 => 
            array (
                'post_id' => 11,
                'tag_id' => 4,
            ),
            23 => 
            array (
                'post_id' => 11,
                'tag_id' => 5,
            ),
            24 => 
            array (
                'post_id' => 11,
                'tag_id' => 8,
            ),
            25 => 
            array (
                'post_id' => 12,
                'tag_id' => 5,
            ),
            26 => 
            array (
                'post_id' => 12,
                'tag_id' => 6,
            ),
            27 => 
            array (
                'post_id' => 12,
                'tag_id' => 7,
            ),
            28 => 
            array (
                'post_id' => 13,
                'tag_id' => 5,
            ),
            29 => 
            array (
                'post_id' => 13,
                'tag_id' => 9,
            ),
            30 => 
            array (
                'post_id' => 14,
                'tag_id' => 5,
            ),
            31 => 
            array (
                'post_id' => 15,
                'tag_id' => 7,
            ),
            32 => 
            array (
                'post_id' => 16,
                'tag_id' => 10,
            ),
            33 => 
            array (
                'post_id' => 17,
                'tag_id' => 5,
            ),
            34 => 
            array (
                'post_id' => 17,
                'tag_id' => 8,
            ),
            35 => 
            array (
                'post_id' => 18,
                'tag_id' => 2,
            ),
            36 => 
            array (
                'post_id' => 18,
                'tag_id' => 4,
            ),
            37 => 
            array (
                'post_id' => 18,
                'tag_id' => 10,
            ),
            38 => 
            array (
                'post_id' => 19,
                'tag_id' => 8,
            ),
            39 => 
            array (
                'post_id' => 19,
                'tag_id' => 10,
            ),
            40 => 
            array (
                'post_id' => 20,
                'tag_id' => 2,
            ),
            41 => 
            array (
                'post_id' => 20,
                'tag_id' => 5,
            ),
            42 => 
            array (
                'post_id' => 21,
                'tag_id' => 4,
            ),
            43 => 
            array (
                'post_id' => 21,
                'tag_id' => 8,
            ),
            44 => 
            array (
                'post_id' => 22,
                'tag_id' => 2,
            ),
            45 => 
            array (
                'post_id' => 22,
                'tag_id' => 10,
            ),
            46 => 
            array (
                'post_id' => 23,
                'tag_id' => 3,
            ),
            47 => 
            array (
                'post_id' => 23,
                'tag_id' => 4,
            ),
            48 => 
            array (
                'post_id' => 23,
                'tag_id' => 9,
            ),
            49 => 
            array (
                'post_id' => 24,
                'tag_id' => 2,
            ),
            50 => 
            array (
                'post_id' => 25,
                'tag_id' => 6,
            ),
            51 => 
            array (
                'post_id' => 25,
                'tag_id' => 7,
            ),
            52 => 
            array (
                'post_id' => 25,
                'tag_id' => 8,
            ),
            53 => 
            array (
                'post_id' => 26,
                'tag_id' => 4,
            ),
            54 => 
            array (
                'post_id' => 26,
                'tag_id' => 7,
            ),
            55 => 
            array (
                'post_id' => 26,
                'tag_id' => 8,
            ),
            56 => 
            array (
                'post_id' => 27,
                'tag_id' => 10,
            ),
            57 => 
            array (
                'post_id' => 28,
                'tag_id' => 6,
            ),
            58 => 
            array (
                'post_id' => 28,
                'tag_id' => 7,
            ),
            59 => 
            array (
                'post_id' => 28,
                'tag_id' => 9,
            ),
            60 => 
            array (
                'post_id' => 29,
                'tag_id' => 3,
            ),
            61 => 
            array (
                'post_id' => 29,
                'tag_id' => 4,
            ),
            62 => 
            array (
                'post_id' => 30,
                'tag_id' => 2,
            ),
            63 => 
            array (
                'post_id' => 30,
                'tag_id' => 5,
            ),
            64 => 
            array (
                'post_id' => 31,
                'tag_id' => 5,
            ),
            65 => 
            array (
                'post_id' => 32,
                'tag_id' => 3,
            ),
            66 => 
            array (
                'post_id' => 32,
                'tag_id' => 5,
            ),
            67 => 
            array (
                'post_id' => 33,
                'tag_id' => 8,
            ),
            68 => 
            array (
                'post_id' => 34,
                'tag_id' => 3,
            ),
            69 => 
            array (
                'post_id' => 34,
                'tag_id' => 4,
            ),
            70 => 
            array (
                'post_id' => 35,
                'tag_id' => 8,
            ),
            71 => 
            array (
                'post_id' => 35,
                'tag_id' => 10,
            ),
            72 => 
            array (
                'post_id' => 36,
                'tag_id' => 8,
            ),
            73 => 
            array (
                'post_id' => 36,
                'tag_id' => 10,
            ),
            74 => 
            array (
                'post_id' => 37,
                'tag_id' => 2,
            ),
            75 => 
            array (
                'post_id' => 37,
                'tag_id' => 3,
            ),
            76 => 
            array (
                'post_id' => 38,
                'tag_id' => 5,
            ),
            77 => 
            array (
                'post_id' => 39,
                'tag_id' => 4,
            ),
            78 => 
            array (
                'post_id' => 39,
                'tag_id' => 5,
            ),
            79 => 
            array (
                'post_id' => 39,
                'tag_id' => 10,
            ),
            80 => 
            array (
                'post_id' => 40,
                'tag_id' => 10,
            ),
            81 => 
            array (
                'post_id' => 41,
                'tag_id' => 3,
            ),
            82 => 
            array (
                'post_id' => 41,
                'tag_id' => 4,
            ),
            83 => 
            array (
                'post_id' => 41,
                'tag_id' => 6,
            ),
            84 => 
            array (
                'post_id' => 42,
                'tag_id' => 4,
            ),
            85 => 
            array (
                'post_id' => 42,
                'tag_id' => 5,
            ),
            86 => 
            array (
                'post_id' => 42,
                'tag_id' => 6,
            ),
            87 => 
            array (
                'post_id' => 43,
                'tag_id' => 9,
            ),
            88 => 
            array (
                'post_id' => 44,
                'tag_id' => 5,
            ),
            89 => 
            array (
                'post_id' => 44,
                'tag_id' => 7,
            ),
            90 => 
            array (
                'post_id' => 44,
                'tag_id' => 10,
            ),
            91 => 
            array (
                'post_id' => 45,
                'tag_id' => 7,
            ),
            92 => 
            array (
                'post_id' => 45,
                'tag_id' => 9,
            ),
            93 => 
            array (
                'post_id' => 46,
                'tag_id' => 3,
            ),
            94 => 
            array (
                'post_id' => 46,
                'tag_id' => 6,
            ),
            95 => 
            array (
                'post_id' => 46,
                'tag_id' => 7,
            ),
            96 => 
            array (
                'post_id' => 47,
                'tag_id' => 3,
            ),
            97 => 
            array (
                'post_id' => 47,
                'tag_id' => 4,
            ),
            98 => 
            array (
                'post_id' => 47,
                'tag_id' => 5,
            ),
            99 => 
            array (
                'post_id' => 48,
                'tag_id' => 5,
            ),
            100 => 
            array (
                'post_id' => 48,
                'tag_id' => 7,
            ),
            101 => 
            array (
                'post_id' => 49,
                'tag_id' => 2,
            ),
            102 => 
            array (
                'post_id' => 49,
                'tag_id' => 6,
            ),
            103 => 
            array (
                'post_id' => 50,
                'tag_id' => 5,
            ),
            104 => 
            array (
                'post_id' => 51,
                'tag_id' => 3,
            ),
            105 => 
            array (
                'post_id' => 51,
                'tag_id' => 6,
            ),
            106 => 
            array (
                'post_id' => 51,
                'tag_id' => 7,
            ),
            107 => 
            array (
                'post_id' => 52,
                'tag_id' => 2,
            ),
            108 => 
            array (
                'post_id' => 52,
                'tag_id' => 3,
            ),
            109 => 
            array (
                'post_id' => 52,
                'tag_id' => 10,
            ),
        ));
        
        
    }
}