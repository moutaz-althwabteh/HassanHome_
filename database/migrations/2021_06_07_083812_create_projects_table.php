<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('project_name');
            $table->string('project_num');
            $table->string('Project_gps');
            $table->string('Project_owner');
            $table->string('Project_mfawd');
            $table->string('bulding_mfaud_id');
            $table->string('bulding_mfaud_address');
            $table->string('bulding_part');
            $table->string('project_flw');
            $table->string('project_emp');
            $table->string('project_type');
            $table->string('project_status');
            $table->date('project_sdate');
            $table->date('project_edate');
            $table->double('project_budget');
            $table->string('project_budget_curr');
            $table->text('project_contract');
            $table->string('project_notes');
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
        Schema::dropIfExists('projects');
    }
}
