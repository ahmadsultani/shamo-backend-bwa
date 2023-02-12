<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('transaction_items', function (Blueprint $table) {
            $table->bigInteger('user_id');
            $table->bigInteger('product_id');
            $table->bigInteger('transaction_id');
            $table->bigInteger('quantity');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('transaction_items', function (Blueprint $table) {
            $table->dropColumn('user_id');
            $table->dropColumn('product_id');
            $table->dropColumn('transaction_id');
            $table->dropColumn('quantity');
        });
    }
};
