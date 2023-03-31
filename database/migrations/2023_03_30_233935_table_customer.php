<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('customer', function($table){
            $table->id();
            $table->string('nama')->nullable();
            $table->enum('jk')->nullable();
            $table->string('alamat')->nullable();
            $table->string('email')->nullable();
            $table->bigInteger('hp')->defaulte(0);
            $table->string('foto')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer');
    }
};
