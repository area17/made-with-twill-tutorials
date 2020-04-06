<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToProject extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->string('sector', 200)->nullable();
            $table->boolean('commercial')->default(0);
            $table->date('launch_date')->nullable();
            $table->string('layout')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn('sector');
            $table->dropColumn('commercial');
            $table->dropColumn('launch_date');
            $table->dropColumn('layout');

        });
    }
}
