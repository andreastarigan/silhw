<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWilayahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wilayahs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama',50);
            $table->timestamps();
        });
        DB::table('wilayahs')->insert([
            [
                'nama' => 'PMS',
            ],
            [
                'nama' => 'KIS',
            ],
            [
                'nama' => 'PSP',
            ],
            [
                'nama' => 'RAP',
            ],
            [
                'nama' => 'SBG',
            ],
            [
                'nama' => 'KBJ',
            ],
          
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wilayahs');
    }
}
