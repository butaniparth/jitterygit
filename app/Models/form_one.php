<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class form_one extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'backeground_images',
        'title',
        'font_name',
        'font_size',
        'font_color',
        'text_orientation',
        'logo_image',
        'borders',
        'radiusunit',
        'radiusunits',
        'color_tile',
        'color_tiles',
        'opacity',
        'opacity1',
        'texton',
        'text_images',
        'tile_height',
        'tile_color',
        'tile_width',
        'text_check',
        'range',
        'tile_images',
        'text_hover',
        'notes',
        'id_name',
        'tab_name',
        'fav_language',
        'fav_language',
        'home_status',

    ];
}
