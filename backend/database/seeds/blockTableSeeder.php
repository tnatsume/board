<?php

use Illuminate\Database\Seeder;

class blockTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blocks')->insert([
        [
            'block_id' => 1,
            'block_name' => '北海道地方',
            'pref_id' => 1,
            'pref_name' => '北海道',
        ],[
            'block_id' => 2,
            'block_name' => '東北地方',
            'pref_id' => 2,
            'pref_name' => '青森県',
        ],[
            'block_id' => 2,
            'block_name' => '東北地方',
            'pref_id' => 3,
            'pref_name' => '岩手県',
        ],[
            'block_id' => 2,
            'block_name' => '東北地方',
            'pref_id' => 4,
            'pref_name' => '宮城県',
        ],[
            'block_id' => 2,
            'block_name' => '東北地方',
            'pref_id' => 5,
            'pref_name' => '秋田県',
        ],[
            'block_id' => 2,
            'block_name' => '東北地方',
            'pref_id' => 6,
            'pref_name' => '山形県',
        ],[
            'block_id' => 2,
            'block_name' => '東北地方',
            'pref_id' => 7,
            'pref_name' => '福島県',
        ],[
            'block_id' => 3,
            'block_name' => '関東地方',
            'pref_id' => 8,
            'pref_name' => '茨城県',
        ],[
            'block_id' => 3,
            'block_name' => '関東地方',
            'pref_id' => 9,
            'pref_name' => '栃木県',
        ],[
            'block_id' => 3,
            'block_name' => '関東地方',
            'pref_id' => 10,
            'pref_name' => '群馬県',
        ],[
            'block_id' => 3,
            'block_name' => '関東地方',
            'pref_id' => 11,
            'pref_name' => '埼玉県',
        ],[
            'block_id' => 3,
            'block_name' => '関東地方',
            'pref_id' => 12,
            'pref_name' => '千葉県',
        ],[
            'block_id' => 3,
            'block_name' => '関東地方',
            'pref_id' => 13,
            'pref_name' => '東京都',
        ],[
            'block_id' => 3,
            'block_name' => '関東地方',
            'pref_id' => 14,
            'pref_name' => '神奈川県',
        ],[
            'block_id' => 4,
            'block_name' => '中部地方',
            'pref_id' => 15,
            'pref_name' => '新潟県',
        ],[
            'block_id' => 4,
            'block_name' => '中部地方',
            'pref_id' => 16,
            'pref_name' => '富山県',
        ],[
            'block_id' => 4,
            'block_name' => '中部地方',
            'pref_id' => 17,
            'pref_name' => '石川県',
        ],[
            'block_id' => 4,
            'block_name' => '中部地方',
            'pref_id' => 18,
            'pref_name' => '福井県',
        ],[
            'block_id' => 4,
            'block_name' => '中部地方',
            'pref_id' => 19,
            'pref_name' => '山梨県',
        ],[
            'block_id' => 4,
            'block_name' => '中部地方',
            'pref_id' => 20,
            'pref_name' => '長野県',
        ],[
            'block_id' => 4,
            'block_name' => '中部地方',
            'pref_id' => 21,
            'pref_name' => '岐阜県',
        ],[
            'block_id' => 4,
            'block_name' => '中部地方',
            'pref_id' => 22,
            'pref_name' => '静岡県',
        ],[
            'block_id' => 4,
            'block_name' => '中部地方',
            'pref_id' => 23,
            'pref_name' => '愛知県',
        ],[
            'block_id' => 5,
            'block_name' => '近畿地方',
            'pref_id' => 24,
            'pref_name' => '三重県',
        ],[
            'block_id' => 5,
            'block_name' => '近畿地方',
            'pref_id' => 25,
            'pref_name' => '滋賀県',
        ],[
            'block_id' => 5,
            'block_name' => '近畿地方',
            'pref_id' => 26,
            'pref_name' => '京都府',
        ],[
            'block_id' => 5,
            'block_name' => '近畿地方',
            'pref_id' => 27,
            'pref_name' => '大阪府',
        ],[
            'block_id' => 5,
            'block_name' => '近畿地方',
            'pref_id' => 28,
            'pref_name' => '兵庫県',
        ],[
            'block_id' => 5,
            'block_name' => '近畿地方',
            'pref_id' => 29,
            'pref_name' => '奈良県',
        ],[
            'block_id' => 5,
            'block_name' => '近畿地方',
            'pref_id' => 30,
            'pref_name' => '和歌山県',
        ],[
            'block_id' => 6,
            'block_name' => '中国地方',
            'pref_id' => 31,
            'pref_name' => '鳥取県',
        ],[
            'block_id' => 6,
            'block_name' => '中国地方',
            'pref_id' => 32,
            'pref_name' => '島根県',
        ],[
            'block_id' => 6,
            'block_name' => '中国地方',
            'pref_id' => 33,
            'pref_name' => '岡山県',
        ],[
            'block_id' => 6,
            'block_name' => '中国地方',
            'pref_id' => 34,
            'pref_name' => '広島県',
        ],[
            'block_id' => 6,
            'block_name' => '中国地方',
            'pref_id' => 35,
            'pref_name' => '山口県',
        ],[
            'block_id' => 7,
            'block_name' => '四国地方',
            'pref_id' => 36,
            'pref_name' => '徳島県',
        ],[
            'block_id' => 7,
            'block_name' => '四国地方',
            'pref_id' => 37,
            'pref_name' => '香川県',
        ],[
            'block_id' => 7,
            'block_name' => '四国地方',
            'pref_id' => 38,
            'pref_name' => '愛媛県',
        ],[
            'block_id' => 7,
            'block_name' => '四国地方',
            'pref_id' => 39,
            'pref_name' => '高知県',
        ],[
            'block_id' => 8,
            'block_name' => '九州地方',
            'pref_id' => 40,
            'pref_name' => '福岡県',
        ],[
            'block_id' => 8,
            'block_name' => '九州地方',
            'pref_id' => 41,
            'pref_name' => '佐賀県',
        ],[
            'block_id' => 8,
            'block_name' => '九州地方',
            'pref_id' => 42,
            'pref_name' => '長崎県',
        ],[
            'block_id' => 8,
            'block_name' => '九州地方',
            'pref_id' => 43,
            'pref_name' => '熊本県',
        ],[
            'block_id' => 8,
            'block_name' => '九州地方',
            'pref_id' => 44,
            'pref_name' => '大分県',
        ],[
            'block_id' => 8,
            'block_name' => '九州地方',
            'pref_id' => 45,
            'pref_name' => '宮崎県',
        ],[
            'block_id' => 8,
            'block_name' => '九州地方',
            'pref_id' => 46,
            'pref_name' => '鹿児島県',
        ],[
            'block_id' => 8,
            'block_name' => '九州地方',
            'pref_id' => 47,
            'pref_name' => '沖縄県',
        ],
        ]
    );
    }
}
