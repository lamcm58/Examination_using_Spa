<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(CauHoiTableSeeder::class);
         //$this->call(DeThiSeeder::class);
         //$this->call(MonThiSeeder::class);
    }
}
