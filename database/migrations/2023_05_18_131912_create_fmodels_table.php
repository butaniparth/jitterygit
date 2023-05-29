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
        Schema::create('fmodels', function (Blueprint $table) {
            $table->id();
            $table->string('backeground_image');
            $table->string('title');
            $table->string('logo_image');
            $table->string('image_tile');
            $table->string('imagetile');
            $table->string('notes');
            $table->string('status');
            $table->string('id_name');
            $table->string('tab_name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fmodels');
    }
};

