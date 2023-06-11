<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{


public function up(): void
    {
        Schema::create('narapidana', function (Blueprint $table) {
            $table->id('id_narapidana');
            $table->string('no_sel', 100);
            $table->string('name', 100);
            $table->text('address');
            $table->string('phone', 100);
            $table->timestamps();
        });
    }
};