<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

    /**
     * Reverse the migrations.
     */
    public function up(): void
    {
        Schema::create('class', function (Blueprint $table){
            $table->id('id');
            $table->string('lesson');
            $table->timestamps('time');
        });
    }
};
