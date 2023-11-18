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
        Schema::create('alcohol_questions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('questionnare_id');
            $table->string('question');
            $table->timestamps();

            $table->foreign('questionnare_id')->references('id')->on('questionnares');
    
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alcohol_questions');
    }
};
