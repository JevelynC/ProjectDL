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
        Schema::create('exercise4', function (Blueprint $table) {
            $table->id();
            $table->string('answer')->nullable();
            $table->text('answer_desc')->nullable();
            $table->text('answer_desc2')->nullable();
            $table->text('answer_desc3')->nullable();
            $table->text('answer_desc4')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exercise4');
    }
};
