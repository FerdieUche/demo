<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->string('occupation');
            $table->string('employment');
            $table->string('income');
            $table->string('skill');
            $table->string('skill_level');
            $table->string('sch_location');
            $table->string('sch_name');
            $table->string('title');
            $table->string('course_major');
            $table->string('sch_year');
            $table->string('cert');
            $table->string('cert_year');
            $table->string('web');
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
        Schema::dropIfExists('professions');
    }
}
