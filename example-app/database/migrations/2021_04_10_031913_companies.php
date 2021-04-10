<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Companies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->integer('company_id',11);
            $table->string('company_name',55);
            $table->string('company_web',255);
            $table->string('company_address', 500);
            $table->string('company_code',55);
            $table->string('company_phone',55);
        });

        // for ($i = 0; $i < 1000000; $i++){
        //     DB::table('companies')->insert([
        //         'company_name' => 'Hoanghuulong',
        //         'company_web' => '.com',
        //         'company_address' => 'Viet Nam',
        //         'company_code' => 'code 123',
        //         'company_phone' => 'phone 123',
        //     ]);
        //     }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
