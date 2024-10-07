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
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->string('title');
            $table->string('sidebar_title')->nullable(); // Added sidebar_title column for grouping sections
            $table->string('icon')->nullable();
            $table->string('url')->nullable();
            $table->integer('order')->default(0);
            $table->string('badge')->nullable();
            $table->bigInteger('visitor')->default(0);
            $table->string('permission')->nullable();
            $table->boolean('is_active')->default(true); // Added is_active column for menu visibility
            $table->string('tooltip')->nullable(); // Added tooltip for additional information on menu items
            $table->timestamps();

            $table->foreign('parent_id')->references('id')->on('menus')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};
