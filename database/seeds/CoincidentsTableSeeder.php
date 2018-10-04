<?php

use Illuminate\Database\Seeder;

class CoincidentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('coincidents')->insert([
            'percentage' => 99.99,
            'comparison_id' => 1,
        ]);
    }
}
