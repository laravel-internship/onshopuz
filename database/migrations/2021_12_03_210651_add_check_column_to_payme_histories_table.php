<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCheckColumnToPaymeHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('payme_histories', function (Blueprint $table) {
            $table->string('name_shop')->nullable(); ///sayt
            $table->string('organization')->nullable();
            $table->integer('order_id')->nullable();
            $table->dateTime('pay_time')->nullable();
            $table->bigInteger('merchanId')->nullable();
            $table->bigInteger('terminalId')->nullable();
            $table->integer('ckeckId')->nullable();
            $table->integer('all_price')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('payme_histories', function (Blueprint $table) {
            //
        });
    }
}
