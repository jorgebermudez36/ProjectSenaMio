<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChecksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checks', function (Blueprint $table) {
            $table->id();
            $table->string('sequence', 100);
            $table->smallInteger('qtyItem');
            $table->integer('subtotal');
            $table->integer('discount');
            $table->integer('total');
            $table->timestamps();

           $table->foreignId('dniC_id')->constrained('customers');
           $table->foreignId('nameC_id')->constrained('customers');
           $table->foreignId('surnameC_id')->constrained('customers');
           $table->foreignId('nameItem_id')->constrained('inventories'); 
           $table->foreignId('dniE_id')->constrained('employes');
           $table->foreignId('nameE_id')->constrained('employes'); 

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('checks');
    }
}
