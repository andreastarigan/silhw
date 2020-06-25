<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_wilayah',50);
            $table->date('tanggal');
            $table->smallInteger('target');
            $table->smallInteger('real_sale_2p');
            $table->smallInteger('real_sale_3p');
            $table->smallInteger('mig_2p');
            $table->smallInteger('mig_3p');
            $table->smallInteger('lite_brite');
            $table->smallInteger('churn_out');
            $table->smallInteger('non_indihome');
            $table->smallInteger('down_sell');
            $table->smallInteger('up_sell');
            $table->smallInteger('target_nal');
            $table->smallInteger('h1');
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
        Schema::dropIfExists('reports');
    }
}
