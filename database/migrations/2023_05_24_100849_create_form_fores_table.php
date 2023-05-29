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
        Schema::create('form_fores', function (Blueprint $table) {
            $table->id();

            $table->string('status');
            $table->string('status1');
            $table->string('supplementary');
            $table->string('supplementary_images');
            $table->string('back_images');
            $table->string('scale_width');
            $table->string('scale_height');
            $table->string('form_images');
            $table->string('form_width');
            $table->string('form_height');
            $table->string('title');
            $table->string('font_name');
            $table->string('font_size');
            $table->string('font_color');
            $table->string('text_orientation');
            $table->string('text_style');
            $table->string('text_underline');
            
            $table->string('sub_title');
            $table->string('add_images');
            $table->string('sub_name');
            $table->string('sub_size');
            $table->string('sub_color');
            $table->string('sub_orientation');
            $table->string('sub_style');
            $table->string('sub_underline');

            $table->string('body');
            $table->string('body_images');
            $table->string('body_name');
            $table->string('body_size');
            $table->string('body_color');
            $table->string('body_orientation');
            $table->string('body_style');
            $table->string('body_underline');

            $table->string('button_text');
            $table->string('button_link');
            $table->string('button_name');
            $table->string('button_size');
            $table->string('button_color');
            $table->string('button_color1');
            $table->string('button_width');
            $table->string('button_height');
            $table->string('button_images');

            $table->string('tile_height');
            $table->string('tile_color');
            $table->string('tile_width');
            $table->string('tile_texture');
            $table->string('round_button');
            $table->string('tile_images');
            $table->string('text_hover');

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
        Schema::dropIfExists('form_fores');
    }
};
