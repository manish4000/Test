<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCareerWithJobsblocTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('career_with_jobsbloc', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('apply_for');
            $table->string('phone');
            $table->text('message')->nullable();
            $table->string('resume');
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
        Schema::dropIfExists('career_with_jobsbloc');
    }
}
