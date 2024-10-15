<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJob extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job', function (Blueprint $table) {
            $table->Increments('job_id');
            $table->integer('category_id');
            $table->string('job_name1');
            $table->string('job_name2');            
            $table->text('job_desc');
            $table->text('job_requirement');
            $table->string('job_price');
            $table->string('job_location');
            $table->string('job_time');
            $table->integer('job_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job');
    }
}
