<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResumeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resumes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('gender');
            $table->string('phone');
            $table->string('age');
            $table->string('years_work');
            $table->string('apply_job');
            $table->string('office_status');
            $table->string('education_level');
            $table->string('expect_workplace');
            $table->string('induction_time');
            $table->text('educational_experience');
            $table->text('work_experience');
            $table->text('self_evaluation');
            $table->string('annex');
            $table->timestamps();
        });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('resumes');
    }
}
