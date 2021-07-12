<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeAaaFieldToPaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pays', function (Blueprint $table) {
            // $table->string('payment_type', 255)->nullable()->change();
            // $table->string('payment_status', 255)->nullable()->change();
            // $table->date('check_date ', 255)->nullable()->change();

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
