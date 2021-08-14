<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->json('08_09')->default("{'','','','','','',''}");
            $table->json('09_10')->default("{'','','','','','',''}");
            $table->json('10_11')->default("{'','','','','','',''}");
            $table->json('11_12')->default("{'','','','','','',''}");
            $table->json('12_13')->default("{'','','','','','',''}");
            $table->json('13_14')->default("{'','','','','','',''}");
            $table->json('14_15')->default("{'','','','','','',''}");
            $table->json('15_16')->default("{'','','','','','',''}");
            $table->json('16_17')->default("{'','','','','','',''}");
            $table->json('17_18')->default("{'','','','','','',''}");
            $table->json('18_19')->default("{'','','','','','',''}");
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
        Schema::dropIfExists('schedules');
    }
}
