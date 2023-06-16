<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{


public function up(): void
    {
        Schema::create('asprak', function (Blueprint $table) {
            $table->id('id_asprak');
            $table->string('nama', 100);
            $table->text('email');
            $table->string('modul', 100);
            $table->string('norek', 100);
            $table->timestamps();
        });
    }
};