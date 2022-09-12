<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->integer('student_id')->autoIncrement();
            $table->string('name', 50);
            $table->string('username', 50);
            $table->bigInteger('phone');
            $table->string('email', 50);                                    
            $table->string('address', 150);
            $table->string('desc', 1000);
            $table->string('password', 100);
            $table->tinyInteger('status',4);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
