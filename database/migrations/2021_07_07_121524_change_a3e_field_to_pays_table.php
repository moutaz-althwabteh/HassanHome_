<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeA3eFieldToPaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pays', function (Blueprint $table) {
            $table->string('total', 255)->nullable()->change();
            $table->string('carr_type', 255)->nullable()->change();
            $table->string('cashier', 255)->nullable()->change();
            $table->longText('notes', 255)->nullable()->change();

            


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pays', function (Blueprint $table) {
            //
        });
    }
}
