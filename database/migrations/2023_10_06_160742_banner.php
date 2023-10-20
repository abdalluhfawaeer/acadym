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
        Schema::create('banner', function (Blueprint $table) {
            $table->id();
            $table->string('image1');
            $table->string('title_ar1');
            $table->string('title_en1');
            $table->string('sub_title_ar1');
            $table->string('sub_title_en1');
            $table->string('image2');
            $table->string('title_ar2');
            $table->string('title_en2');
            $table->string('sub_title_ar2');
            $table->string('sub_title_en2');
            $table->string('image3');
            $table->string('title_ar3');
            $table->string('title_en3');
            $table->string('sub_title_ar3');
            $table->string('sub_title_en3');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banner');
    }
};
