<?php

use Illuminate\Database\Seeder;

class MonThiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('monthi')->insert(
            [
                [
                    'name_monthi' => 'Toán',
                    'created_at'  => new DateTime()
                ],
                [
                    'name_monthi' => 'Văn',
                    'created_at'  => new DateTime()
                ],
                [
                    'name_monthi' => 'Anh',
                    'created_at'  => new DateTime()
                ],
                [
                    'name_monthi' => 'Lý',
                    'created_at'  => new DateTime()
                ],
                [
                    'name_monthi' => 'Hóa',
                    'created_at'  => new DateTime()
                ]
            ]           
           
            
        );
    }
}
