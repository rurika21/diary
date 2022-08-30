<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    
        public function run()
        {
        $this->call([
            TargetsTableSeeder::class, // 呼び出すように追加
        ]);
    }
}