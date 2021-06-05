<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyHasCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_has_category', function (Blueprint $table) {
            $table->integer('company_id', $autoIncrement=false);
            $table->integer('category_id', $autoIncrement=false);
              
        });
        
        /*Schema::create('trainers', function (Blueprint $table) {
            $table->integer('trainer_id',11);
            $table->string('trainer_name',55);
            $table->string('traniner_email',255);
            $table->string('trainer_phone',55);
            $table->integer('company_id', $autoIncrement=false);
        });
        */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('company_has_category');
    }
}
