<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePassations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('passations', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->foreignId('projets_id')->constrained('projets');
            $table->longText('generalites')->nullable();
            $table->longText('client')->nullable();
            $table->longText('diabolo')->nullable();
            $table->longText('mikado')->nullable();
            $table->longText('cogito')->nullable();
            $table->longText('lasido')->nullable();
            $table->longText('jeudemo')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
