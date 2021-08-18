<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnrolementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enrolements', function (Blueprint $table) {
            $table->id();
            // state of the enrolements 1 if approved or 0 if not
            $table->integer('state')->unsigned()->default('1')->comment('1 = approved, 0 = not approved');
            $table->timestamps();
            // add foreign key for trainer
            $table->unsignedBigInteger('sport_id');
            // index trainer foreign key
            $table->index('sport_id','sports_enrolements_key');
            // link foreign key with users table
            $table->foreign('sport_id')->references('id')->on('sports')->onDelete('cascade');
            // add foreign key for trainer
            $table->unsignedBigInteger('user_id');
            // index trainer foreign key
            $table->index('user_id','users_enrolements_key');
            // link foreign key with users table
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enrolements');
    }
}
