<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class seedCompany_has_category extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $limit = 20;

        for ($i = 0; $i < $limit; $i++){
            DB::table('company_has_category')->insert([
                'company_id' => rand(1, 20),
                'category_id' => rand(1, 20),
            ]);
        }
    }
}