<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProjectIdSupplierIdToOordersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('oorders', function (Blueprint $table) {
            $table->dropColumn('project_title');
            $table->dropColumn('supplier_name');
            $table->integer('project_id')->unsigned()->default(12);
            $table->integer('supplier_id')->unsigned()->default(12);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('oorders', function (Blueprint $table) {
            //
        });
    }
}
