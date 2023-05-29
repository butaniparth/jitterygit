<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class form_two extends Model
{
    use HasFactory;

    

    protected $fillable = [
        'status',
        'back_images',
        'titles',
        'font_names',
        'font_sizes',
        'main_color',
        'text_orientation',
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
        'tile_color',
        'tile_width',
        'tile_texture',
        'round_button',
        'text_hover',
        'tile_images',
        'notes',
        'id_name',
        'tab_name',
        'fav_language',
        'home_status',
            ];  
}
