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
        Schema::create('contact', function (Blueprint $table) {
            $table->id();
            $table->string('title_ar');
            $table->string('title_en');
            $table->string('phone1');
            $table->string('phone2');
            $table->string('phone3');
            $table->string('phone4');
            $table->string('phone5');
            $table->string('title_ar_form');
            $table->string('title_en_form');
            $table->string('sub_title_ar_form');
            $table->string('sub_title_en_form');
            $table->string('button_ar_form');
            $table->string('button_en_form');
            $table->text('google_maps');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact');
    }
};
