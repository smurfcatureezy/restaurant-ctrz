<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction_items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('transaction_id')->unsigned()->index();
            $table->integer('menu_id')->unsigned()->index();
            $table->integer('quantity');
            $table->integer('unit_price');
            $table->timestamps();

            $table->foreign('transaction_id')->references('id')->on('transactions')->onDelete('cascade');
            $table->foreign('menu_id')->references('id')->on('menus')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('transaction_items', function(Blueprint $table){
            $table->dropForeign(['transaction_id']);
            $table->dropForeign(['menu_id']);
        });

        Schema::dropIfExists('transaction_items');
    }
}
