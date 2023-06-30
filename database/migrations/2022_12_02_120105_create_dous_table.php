<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dous', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('title_link');
            $table->string('dou-hierarquia');
            $table->string('abstract-marker');
            $table->string('dou-hierarquia1');
            $table->string('dou-hierarquia2');
            $table->string('dou-hierarquia3');
            
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
        Schema::dropIfExists('dous');
    }
};
