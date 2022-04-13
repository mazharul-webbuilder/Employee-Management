<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employyes', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->integer('e_bc');
            $table->integer('e_nid');
            $table->string('e_designation');
            $table->string('e_salary');
            $table->string('edu_name');
            $table->integer('edu_result');
            $table->integer('edu_year');
            $table->text('address');
            $table->text('e_image');
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
        Schema::dropIfExists('employyes');
    }
};
