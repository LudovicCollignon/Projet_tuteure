<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQcmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qcm', function (Blueprint $table) {
            $table->increments('id');
            $table->string('enonce');
            $table->string('reponse1');
            $table->boolean('isReponse1');
            $table->string('reponse2');
            $table->boolean('isReponse2');
            $table->string('reponse3');
            $table->boolean('isReponse3');
            $table->timestamps();
        });
    }
    //exemple d INSERT
    //
    //insert into qcm Values (null,"quel mot clé est utilisée pour CREER une table petit autiste ?","INSERT",false,"CREATE",true,"DELETE",false, "2018-12-26 19:42:50","2018-12-26 19:42:50") ;

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('qcm');
    }
}
