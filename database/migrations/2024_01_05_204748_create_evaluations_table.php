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
        Schema::create('evaluations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->tinyInteger('punctuality')->default(1);
            $table->tinyInteger('attendance')->default(1);
            $table->tinyInteger('teamwork')->default(1);
            $table->tinyInteger('communication')->default(1);
            $table->tinyInteger('professionalism')->default(1);
            $table->tinyInteger('initiative')->default(1);
            $table->tinyInteger('productivity')->default(1);
            $table->tinyInteger('project_engagement')->default(1);
            $table->tinyInteger('unit_engagement')->default(1);
            $table->tinyInteger('overall');
            $table->text('comments')->nullable();
            $table->date('evaluated_on');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluations');
    }
};
