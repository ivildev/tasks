<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("user_id");
            $table->integer("category_id");
            $table->integer("client_id");
            $table->integer("project_id");
            $table->string("name",140);
            $table->enum('type',['onetime', 'repetitive']);
            $table->enum('frequency',['daily','weekly','monthly','yearly']);
            $table->integer('duration');
            $table->dateTime('showDateRangeFrom');
            $table->dateTime('showDateRangeTo');
            $table->enum('status',['started', 'completed']);
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
        Schema::dropIfExists('tasks');
    }
}
