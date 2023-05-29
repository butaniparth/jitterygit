<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class form_three extends Model
{
    use HasFactory;
    protected $fillable = [
        'status',
        'title',
        'font_name',
        'font_size',
        'font_color',
        'text_orientation',
        'product_images',
        'product_name',
        'product_asin',
        'product_under',
        'back_images',
        'borders',
        'shadow_size',
        'shadow_size1',
        'shadow_color',
        'shadow_color1',
        'opacity',
        'opacity1',
        'shadow_orientation',
        'shadow_images',
        'tile_height',
        'tile_width',
        'tile_color',
        'round_button',
        'tile_texture',
        'text_hover',
        'tile_images',
        'notes',
        'id_name',
        'tab_name',
        'fav_language',
        'home_status',

    ];
}
