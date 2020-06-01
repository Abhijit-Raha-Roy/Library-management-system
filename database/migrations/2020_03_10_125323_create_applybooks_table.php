<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplybooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applybooks', function (Blueprint $table) {
            $table->integer('book_id');
            $table->string('book_title');
            $table->string('author_name');
            $table->integer('useridno');
            $table->timestamps();
            $table->primary('book_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applybooks');
    }
}
