<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDailyBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daily_books', function (Blueprint $table) {
            $table->id();
            $table->string('sequence', 100);
            $table->integer('regBuy');
            $table->integer('regExpenses');
            $table->timestamps();

            $table->foreignId('sequence_id')->constrained('checks');
            $table->foreignId('total_id')->constrained('checks'); 

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('daily_books');
    }
}
