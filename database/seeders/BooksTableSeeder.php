<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('books')->insert([
            [
                'user_id' => 1,
                'title' => '鬼滅の刀',
                'phonetic' => 'きめつのかたな',
                'author' => '吾峠呼世雨',
                'publisher' => 'ズビメディア',
                'volume' => 5,
                'chapter' => 60,
                'image_url' => '',
                'status' => 'ACTIVE'
            ],
            [
                'user_id' => 1,
                'title' => 'DRAGON BOWL',
                'phonetic' => 'どらごんぼうる',
                'author' => '鳥山暗',
                'publisher' => '集日社',
                'volume' => 114,
                'chapter' => 514,
                'image_url' => '',
                'status' => 'INACTIVE'
            ],
            [
                'user_id' => 1,
                'title' => '転生したら人間だった件',
                'phonetic' => 'てんせいしたらにんげんだったけん',
                'author' => '河本三郎',
                'publisher' => '人間出版',
                'volume' => 4,
                'chapter' => 18,
                'image_url' => '',
                'status' => 'COMPLETE'
            ],
            [
                'user_id' => 2,
                'title' => 'Re:イチから始める異世界生活',
                'phonetic' => 'り・いちからはじめるいせかいせいかつ',
                'author' => '短月達平',
                'publisher' => 'KADOKAMA',
                'volume' => 5,
                'chapter' => 50,
                'image_url' => '',
                'status' => 'ACTIVE'
            ],
            [
                'user_id' => 2,
                'title' => 'カラスの許嫁',
                'phonetic' => 'からすのいいなずけ',
                'author' => '吉川美里',
                'publisher' => '買談社',
                'volume' => 3,
                'chapter' => 16,
                'image_url' => '',
                'status' => 'INACTIVE'
            ],
            [
                'user_id' => 2,
                'title' => 'ONE PIERCE',
                'phonetic' => 'わんぴあす',
                'author' => '尾田栄六郎',
                'publisher' => '集独社',
                'volume' => 50,
                'chapter' => 300,
                'image_url' => '',
                'status' => 'COMPLETE'
            ],
        ]);
    }
}
