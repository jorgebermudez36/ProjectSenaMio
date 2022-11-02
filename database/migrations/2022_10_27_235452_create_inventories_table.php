<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventories', function (Blueprint $table) {
            $table->id();
            $table->dateTime('dateReginv', 0);
            $table->string('nameItem', 100);
            $table->integer('quantity');
            $table->string('appearance', 100);
            $table->integer('unit');
            $table->integer('inQty');
            $table->integer('outQty');      
            $table->integer('balanceItem');
            $table->integer('purchasePrice');
            $table->integer('salePrice');
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
        Schema::dropIfExists('inventories');
    }
}
