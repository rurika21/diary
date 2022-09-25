<?php

use Illuminate\Database\Seeder;

class TargetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('targets')->insert([
            [
                'id' => '1',
                'content' => '毎日更新1月',
                'user_id' => '1',
                'created_at' => '2022-01-01',
            ],
            [   
                'id' => '2',
                'content' => '毎日更新2月',
                'user_id' => '2',
                'created_at' => '2022-02-01',
            ],
            [   
                'id' => '3',
                'content' => '毎日更新3月',
                'user_id' => '3',
                'created_at' => '2022-03-01',
            ],
            [
                'id' => '4',
                'content' => '毎日更新4月',
                'user_id' => '4',
                'created_at' => '2022-04-01',
            ],
            [
                'id' => '5',
                'content' => '毎日更新5月',
                'user_id' => '5',
                'created_at' => '2022-05-01',
            ],
            [
                'id' => '6',
                'content' => '毎日更新6月',
                'user_id' => '6',
                'created_at' => '2022-06-01',
            ],
            [
                'id' => '7',
                'content' => '毎日更新7月',
                'user_id' => '7',
                'created_at' => '2022-07-01',
            ],   
            [
                'id' => '8',
                'content' => '毎日更新8月',
                'user_id' => '8',
                'created_at' => '2022-08-01',
            ],
            [
                'id' => '9',
                'content' => '毎日更新9月',
                'user_id' => '9',
                'created_at' => '2022-09-01',
            ],
            [
                'id' => '10',
                'content' => '毎日更新10月',
                'user_id' => '10',
                'created_at' => '2022-10-01',
            ],
            [
                'id' => '11',
                'content' => '毎日更新11月',
                'user_id' => '11',
                'created_at' => '2022-011-01',
            ],
            [
                'id' => '12',
                'content' => '毎日更新12月',
                'user_id' => '12',
                'created_at' => '2022-012-01',
            ],
            
        ]);
    }
}