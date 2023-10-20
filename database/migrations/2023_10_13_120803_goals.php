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
        Schema::create('goals', function (Blueprint $table) {
            $table->id();
            $table->string('title_ar');
            $table->string('title_en');
            $table->text('desc_ar');
            $table->text('desc_en');
            $table->string('title_ar1');
            $table->string('title_en1');
            $table->text('desc_ar1');
            $table->text('desc_en1');
            $table->string('title_ar_g');
            $table->string('title_en_g');
            $table->text('goal_ar_1');
            $table->text('goal_en_1');
            $table->text('goal_ar_2');
            $table->text('goal_en_2');
            $table->text('goal_ar_3');
            $table->text('goal_en_3');
            $table->text('goal_ar_4');
            $table->text('goal_en_4');
            $table->text('goal_ar_5');
            $table->text('goal_en_5');
            $table->text('goal_ar_6');
            $table->text('goal_en_6');
            $table->text('goal_ar_7');
            $table->text('goal_en_7');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('goals');
    }
};
