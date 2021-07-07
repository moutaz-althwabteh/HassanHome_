<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flats', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('project_id');
            $table->string('flat_num');
            $table->string('flat_place');
            $table->string('flat_side');
            $table->string('flat_status');
            $table->double('money_price');
            $table->double('flat_price');
            $table->string('flat_contract');
            $table->string('flat_owner');
            $table->string('flat_owner_address');
            $table->string('flat_owner_job');
            $table->string('flat_owner_job_desc');
            $table->integer('flat_owner_mobile');
            $table->integer('flat_owner_id');
            $table->double('flat_price_nis');
            $table->date('flat_contract_date');
            $table->string('kafel1');
            $table->integer('kafel1_id');
            $table->string('kafel1_address');
            $table->string('kafel2');
            $table->integer('kafel2_id');
            $table->string('kafel2_address');
            $table->double('flat_area');
            $table->double('meter_price');
            $table->double('first_payment');
            $table->double('first_payment_done');
            $table->double('instalment_amonut');
            $table->double('instalment_value');
            $table->double('total_price');
            $table->double('monthly_installment');
            $table->double('total_pays');
            $table->double('no_monthes');
            $table->double('no_years');
            $table->double('monthly_profit_rate');
            $table->double('profit_rate');
            $table->double('profit_value');
            $table->double('installment_sdate');
            $table->double('installment_edate');
            $table->string('flat_shahed');
            $table->string('draft_img');
            $table->string('draft_daman');
            $table->string('contract_status');
            $table->string('cash_status');
            $table->string('rent_contract_status');
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
        Schema::dropIfExists('flats');
    }
}
