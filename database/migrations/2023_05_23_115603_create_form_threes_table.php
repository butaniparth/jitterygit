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
        Schema::create('form_threes', function (Blueprint $table) {
            $table->id();

            $table->string('status');
            $table->string('title');
            $table->string('font_name');
            $table->string('font_size');
            $table->string('font_color');
            $table->string('text_orientation');
            $table->string('product_images');
            $table->string('product_name');
            $table->string('product_asin');
            $table->string('product_under');
            $table->string('back_images');
            $table->string('borders');
            $table->string('shadow_size');
            $table->string('shadow_size1');
            $table->string('shadow_color');
            $table->string('shadow_color1');
            $table->string('opacity');
            $table->string('opacity1');
            $table->string('shadow_orientation');
            $table->string('shadow_images');
            $table->string('tile_height');
            $table->string('tile_width');
            $table->string('tile_color');
            $table->string('tile_texture');
            $table->string('round_button');
            $table->string('text_hover');
            $table->string('tile_images');
            $table->string('notes');
            $table->string('id_name');
            $table->string('tab_name');
            $table->string('fav_language');
            $table->string('home_status');
            $table->string('home_status1');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_threes');
    }
};
