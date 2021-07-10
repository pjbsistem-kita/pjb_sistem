<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistorySerpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('history_serp', function (Blueprint $table) {
            $table->id('history_serp_id',255);
            $table->year('history_serp_tahun');
            $table->string('serp_main_equipment_id');
            $table->unsignedBigInteger('serp_system_id');
            $table->string('serp_main_equipment_name');
            $table->integer('OC');
            $table->integer('PT');
            $table->integer('PQ');
            $table->integer('SF');
            $table->integer('RC');
            $table->integer('PE');
            $table->integer('RT');
            $table->integer('SCR');
            $table->integer('OCR');
            $table->integer('ACR');
            $table->integer('AFPF');
            $table->integer('MPI');
            $table->unsignedBigInteger('serp_pic_id');
            $table->string('serp_main_equipment_keterangan');
            $table->timestamps();

            $table->foreign('serp_main_equipment_id')->references('serp_main_equipment_id')->on('serp_main_equipment');
            $table->foreign('serp_system_id')->references('serp_system_id')->on('serp_system');
            $table->foreign('serp_pic_id')->references('serp_pic_id')->on('serp_pic');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('history_serp');
    }
}
