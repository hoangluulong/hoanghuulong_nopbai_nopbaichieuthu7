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
        $limit = 1000000;

        for ($i = 0; $i < $limit; $i++){
            DB::table('trainers')->insert([
                'trainer_name' => 'abc',
                'traniner_email' => 'abc@gmail.com',
                'trainer_phone' => '0981986059',
                'company_id' => rand(1, 1000000),
            ]);
        }

        /*
Schema::create('trainers', function (Blueprint $table) {
            $table->integer('trainer_id',11);
            $table->string('trainer_name',55);
            $table->string('traniner_email',255);
            $table->string('trainer_phone',55);
            $table->integer('company_id')->unique();
        });
        */
    }
}
