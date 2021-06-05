<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class seedTrainers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
//        $limit = 1000;
//
//        for ($i = 0; $i < $limit; $i++){
//            DB::table('trainers')->insert([
//                'trainer_name' => 'abc',
//                'traniner_email' => 'abc@gmail.com',
//                'trainer_phone' => '0981986059',
//                'company_id' => rand(1, 999),
//            ]);
//        }
        
        $limit = 10;

        for ($i = 0; $i < $limit; $i++){
            DB::table('trainers')->insert([
                'company_id' => $i+1,
            ]);
        }
    }
}
