<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class seedCompanies extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $limit = 1000;

        for ($i = 0; $i < $limit; $i++){
            DB::table('companies')->insert([
                'company_name' => 'Hoanghuulong',
                'company_web' => 'abc.com',
                'company_address' => 'Viet Nam',
                'company_code' => 'code 123',
                'company_phone' => '01234567891',
                'category_id' => 10,
            ]);
        }
    }
}
