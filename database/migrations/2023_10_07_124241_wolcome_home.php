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
        Schema::create('wolcome_home', function (Blueprint $table) {
            $table->id();
            $table->string('title_ar_main');
            $table->string('title_en_main');
            $table->string('image1');
            $table->string('title_ar1');
            $table->string('title_en1');
            $table->string('image2');
            $table->string('title_ar2');
            $table->string('title_en2');
            $table->string('image3');
            $table->string('title_ar3');
            $table->string('title_en3');
            $table->string('image4');
            $table->string('title_ar4');
            $table->string('title_en4');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wolcome_home');
    }
};
