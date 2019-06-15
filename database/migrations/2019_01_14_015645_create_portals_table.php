<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id')->unsigned()->index();
            $table->string('instructor_id')->unsigned()->nullable();
            $table->string('name');
            $table->string('code');
            $table->string('semester');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('instructor_id')->references('id')->on('instructors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('portals');
    }
}
