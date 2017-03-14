<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::table('time_sheets', function(Blueprint $table)
        {
            $table->integer('user_id')->unsigned()->after('id');
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });

        Schema::table('tasks', function(Blueprint $table)
        {
            $table->integer('category_id')->unsigned()->after('id');
            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onDelete('cascade');
        }); 

        Schema::table('time_entries', function(Blueprint $table)
        {
            $table->integer('tasks_id')->unsigned()->after('id');
            $table->foreign('tasks_id')
                ->references('id')
                ->on('tasks')
                ->onDelete('cascade');
        }); 

        Schema::table('time_entries', function(Blueprint $table)
        {
            $table->integer('time_sheets_id')->unsigned();
            $table->foreign('time_sheets_id')
                ->references('id')
                ->on('time_entries')
                ->onDelete('cascade');
        }); 

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foreignKeys');
    }
}
