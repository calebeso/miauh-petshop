<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatingServicesCalendarColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('services', function (Blueprint $table) {
            $table->string('title');
            $table->dateTime('start');
            $table->dateTime('end');
            $table->string('color');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('services', function($table)
        {
            $table->dropColumn('title');
            $table->dropColumn('start');
            $table->dropColumn('end');
            $table->dropColumn('color');
        });
    }
}
