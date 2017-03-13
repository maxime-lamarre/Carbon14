<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimeEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('time_entries', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('duration');
            $table->bigInteger('task_id');
            $table->bigInteger('time_sheet_id');
        });

        Schema::table('time_entries', function(Blueprint $table) {
            $table->foreign('task_id')->references('id')->on('tasks')
                        ->onDelete('restrict')
                        ->onUpdate('restrict');
        });

        Schema::table('time_entries', function(Blueprint $table) {
            $table->foreign('time_sheet_id')->references('id')->on('time_sheets')
                        ->onDelete('restrict')
                        ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('time_entries');
    }
}
