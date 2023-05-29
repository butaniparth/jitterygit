<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class form_fore extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'status',
        'status1',
        'supplementary',
        'supplementary_images',
        'back_images',
        'scale_width',
        'scale_height',
        'form_images',
        'form_width',
        'form_height',

        'title',
        'font_name',
        'font_size',
        'font_color',
        'text_orientation',
        'text_style',
        'text_underline',

        'sub_title',
        'add_images',
        'sub_name',
        'sub_size',
        'sub_color',
        'sub_orientation',
        'sub_style',
        'sub_underline',

        'body',
        'body_images',
        'body_name',
        'body_size',
        'body_color',
        'body_orientation',
        'body_style',
        'body_underline',

        'button_text',
        'button_link',
        'button_name',
        'button_size',
        'button_color',
        'button_color1',
        'button_width',
        'button_height',
        'button_images',

        'tile_height',
        'tile_color',
        'tile_width',
        'tile_texture',
        'round_button',
        'tile_images',
        'text_hover',

        'id_name',
        'tab_name',
        'fav_language',
        'home_status',
    ];
}
