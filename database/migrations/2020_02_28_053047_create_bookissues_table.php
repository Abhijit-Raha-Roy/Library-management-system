<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookissuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookissues', function (Blueprint $table) {
            
            $table->integer('book_id');
            $table->integer('useridno');
            $table->string('issuedate');
            $table->string('returndate');
            $table->timestamps();
            $table->primary('book_id','student_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookissues');
    }
}
