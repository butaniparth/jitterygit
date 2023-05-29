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
        Schema::create('form_ones', function (Blueprint $table) {
            $table->id();
            $table->string('status');
            $table->string('backeground_images');
            $table->string('title');
            $table->string('font_name');
            $table->string('font_size');
            $table->string('font_color');
            $table->string('text_orientation');
            $table->string('logo_image');
            $table->string('borders');
            $table->string('radiusunit');
            $table->string('radiusunits');
            $table->string('color_tile');
            $table->string('color_tiles');
            $table->string('opacity');
            $table->string('texton');
            $table->string('text_images');
            $table->string('tile_height');
            $table->string('tile_color');
            $table->string('tile_width');
            $table->string('text_check');
            $table->string('range');
            $table->string('tile_images');
            $table->string('text_hover');
            $table->string('notes');
            $table->string('id_name');
            $table->string('tab_name');
            $table->string('fav_language');
            $table->string('radius');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_ones');
    }
};
