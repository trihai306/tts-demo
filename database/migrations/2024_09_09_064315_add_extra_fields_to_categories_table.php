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
        Schema::table('categories', function (Blueprint $table) {
            $table->boolean('visible_in_menu')->default(true); // Hiển thị trong Menu
            $table->integer('position')->default(0); // Vị trí hiển thị trong Menu
            $table->text('seo_title')->nullable(); // Tiêu đề SEO
            $table->text('seo_description')->nullable(); // Mô tả SEO
            $table->string('seo_keywords')->nullable(); // Từ khóa SEO
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('categories', function (Blueprint $table) {
            //
        });
    }
};
