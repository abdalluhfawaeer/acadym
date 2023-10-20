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
        Schema::create('story', function (Blueprint $table) {
            $table->id();
            $table->string('image1');
            $table->string('title_ar');
            $table->string('title_en');
            $table->string('sub_title_ar');
            $table->string('sub_title_en');
            $table->text('desc_ar');
            $table->text('desc_en');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('story');
    }
};
