<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class seedCategories extends Seeder
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
            DB::table('categories')->insert([
                'category_name' => 'HHL',
            ]);
        }
    }
}
