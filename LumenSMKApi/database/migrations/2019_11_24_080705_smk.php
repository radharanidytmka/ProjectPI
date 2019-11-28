<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Smk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('smk',function(Blueprint $table){             
            $table->increments('id');             
            $table->string('npsn');             
            $table->string('nama'); 
            $table->integer('id_akreditasi')->index()->unsigned();             
            $table->string('alamat');             
            $table->text('profil');     
            $table->timestamps();     
        });

        Schema::table('smk', function($table){
            $table->foreign('id_akreditasi')
            ->references('id')
            ->on('akreditasi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExist('smk');
    }
}
