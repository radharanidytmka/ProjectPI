<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Mapel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mapel',function(Blueprint $table){             
            $table->increments('id');             
            $table->string('kode');             
            $table->string('nama');             
            $table->integer('id_kelas')->index()->unsigned();             
            $table->text('deskripsi');                       
            $table->timestamps();         
        });

        Schema::table('mapel', function($table){
            $table->foreign('id_kelas')
            ->references('id')
            ->on('kelas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExist('mapel');
    }
}
