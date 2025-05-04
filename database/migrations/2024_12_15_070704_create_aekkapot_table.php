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
        Schema::create('aekkapot', function (Blueprint $table) {
            
            $table->integer('date')->nullable();
            $table->float('country')->nullable();
            $table->string('total')->nullable();
            $table->date('active')->nullable();
            $table->text('death')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aekkapot');
    }
};
