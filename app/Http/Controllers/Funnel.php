<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\form_one;

class Funnel extends Controller
{
    public function index(){
        $data = form_one::latest()
                ->first();


        return view('Funnel',compact('data'));
    }
    
    public function store(Request $request)
    {
        //  dd($request->all()); //value Check ok

       
        $formnew = form_one::where('home_status1', $request->home_status1)->first();
        // dd($formnew);
        if ($formnew) {
            $form = form_one::find($formnew->id);
            // dd($form);
        } else {
            $form = new form_one;
        }

 

    if ($request->hasFile('backeground_images')) {
        $backeground_images = time().'.'. $request->backeground_images->extension();
        $request->backeground_images->move(public_path('Imges/background/'), $backeground_images);
      
    }else {
        $backeground_images = $form->backeground_images;
    }

    if ($request->hasFile('logo_image')) {
        $logo_image = time().'.'. $request->logo_image->extension();
        $request->logo_image->move(public_path('Imges/logo/'), $logo_image);
      
    }else {
        $logo_image = $form->logo_image;
    }


    if ($request->hasFile('text_images')) {
        $text_images = time().'.'. $request->text_images->extension();
        $request->text_images->move(public_path('Imges/text_images/'), $text_images);
      
    }else {
        $text_images = $form->text_images;
    }
    
    if ($request->hasFile('tile_images')) {
        $tile_images = time().'.'. $request->tile_images->extension();
        $request->tile_images->move(public_path('Imges/tile_images/'), $tile_images);
      
    }else{
        $tile_images = $form->tile_images;
    }

    $form->backeground_images = $backeground_images;

    $form->logo_image = $logo_image;

    $form->text_images = $text_images;

    $form->tile_images = $tile_images;


    $form->title = $request->title;
    $form->font_name = $request->font_name;
    $form->font_size = $request->font_size;
    $form->font_color = $request->font_color;
    $form->text_orientation = $request->text_orientation;
    // $form->borders = $request->borders;
    $form->borders = $request->borders ?? 'Disabled';
    $form->radiusunit = $request->radiusunit;
    $form->radiusunits = $request->radiusunits;
    $form->color_tile = $request->color_tile;
    $form->color_tiles = $request->color_tiles;
    $form->opacity = $request->opacity;
    $form->opacity1 = $request->opacity1;
    // $form->texton = $request->texton;
    $form->texton = $request->texton ?? 'Disabled';


    $form->tile_height = $request->tile_height;
    $form->tile_color = $request->tile_color;
    $form->tile_width = $request->tile_width;
    // $form->text_check = $request->text_check;
    $form->text_check = $request->text_check ?? 'Disabled';

    $form->range = $request->range;
    $form->text_hover = $request->text_hover;
    $form->notes = $request->notes;
    $form->id_name = $request->id_name;
    $form->tab_name = $request->tab_name;
    $form->fav_language = $request->fav_language;

    // $form->fav_language = $request->has('fav_language') ?? $request->fav_language;
    // $form->radius = $request->radius;

    $form->status = $request->status ?? 'Disabled';
    $form->home_status = $request->home_status;
    $form->home_status1 = $request->home_status1;

    $form->save();

     return back()->withSuccess('Successfully Insert Data !!!!!');

    }
}

