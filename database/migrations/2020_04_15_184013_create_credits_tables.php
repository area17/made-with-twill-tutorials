<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCreditsTables extends Migration
{
    public function up()
    {
        Schema::create('credits', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);
            $table->string('title', 200)->nullable();
            $table->integer('position')->unsigned()->nullable();
            $table->integer('project_id')->unsigned()->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('credits');
    }
}
