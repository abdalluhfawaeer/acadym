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
        Schema::table('story', function (Blueprint $table) {
            $table->string('sub_title_ar1');
            $table->string('sub_title_en1');
            $table->text('desc_ar_1');
            $table->text('desc_en_1');
            $table->text('desc_ar_2');
            $table->text('desc_en_2');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('story', function (Blueprint $table) {
            //
        });
    }
};
