<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employes', function (Blueprint $table) {
            $table->id();
            $table->string('dniE', 100);
            $table->string('nameE', 100);
            $table->string('surnameE', 100);
            $table->string('addres', 100);
            $table->string('email')->unique();
            $table->string('phone', 100);
            $table->timestamps();

            $table->foreignId('cargo_id')->constrained('cargos');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employes');
    }
}
