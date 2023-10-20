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
        Schema::create('nav', function (Blueprint $table) {
            $table->id();
            $table->string('title_ar');
            $table->string('title_en');
            $table->string('sub_title_ar');
            $table->string('sub_title_en');
            $table->string('img');
            $table->string('menu_1_ar');
            $table->string('menu_1_en');
            $table->string('menu_2_ar');
            $table->string('menu_2_en');
            $table->string('menu_3_ar');
            $table->string('menu_3_en');
            $table->string('menu_4_ar');
            $table->string('menu_4_en');
            $table->string('menu_5_ar');
            $table->string('menu_5_en');
            $table->string('menu_6_ar');
            $table->string('menu_6_en');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nav');
    }
};
