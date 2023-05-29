<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\form_two;

class Marketplace extends Controller
{
    public function create(){
        $form2 = form_two::latest()
                ->first();


        return view('marketplace',compact('form2'));
    }
    
    public function update(Request $request)
    {
        //  dd($request->all()); //value Check ok

       
        $formnew = form_two::where('home_status1', $request->home_status1)->first();
        // dd($formnew);
        if ($formnew) {
            $form = form_two::find($formnew->id);
            // dd($form);
        } else {
            $form = new form_two;
        }

 

    if ($request->hasFile('back_images')) {
        $back_images = time().'.'. $request->back_images->extension();
        $request->back_images->move(public_path('Imges2/back_images/'), $back_images);
      
    }else {
        $back_images = $form->back_images;
    }



    if ($request->hasFile('shadow_images')) {
        $shadow_images = time().'.'. $request->shadow_images->extension();
        $request->shadow_images->move(public_path('Imges2/shadow_images/'), $shadow_images);
      
    }else {
        $shadow_images = $form->shadow_images;
    }
    
    if ($request->hasFile('tile_images')) {
        $tile_images = time().'.'. $request->tile_images->extension();
        $request->tile_images->move(public_path('Imges2/tile_images/'), $tile_images);
      
    }else{
        $tile_images = $form->tile_images;
    }

    $form->back_images = $back_images;


    $form->shadow_images = $shadow_images;

    $form->tile_images = $tile_images;


    $form->titles = $request->titles;
    $form->font_names = $request->font_names;
    $form->font_sizes = $request->font_sizes;
    $form->main_color = $request->main_color;
    $form->text_orientation = $request->text_orientation;
    // $form->borders = $request->borders;
    $form->borders = $request->borders ?? 'Off';
    $form->shadow_size = $request->shadow_size;
    $form->shadow_size1 = $request->shadow_size1;
    $form->shadow_color = $request->shadow_color;
    $form->shadow_color1 = $request->shadow_color1;
    $form->opacity = $request->opacity;
    $form->opacity1 = $request->opacity1;
    // $form->texton = $request->texton;
    $form->shadow_orientation = $request->shadow_orientation ?? 'Off';


    $form->tile_height = $request->tile_height;
    $form->tile_color = $request->tile_color;
    $form->tile_width = $request->tile_width;
    // $form->text_check = $request->text_check;
    $form->tile_texture = $request->tile_texture ?? 'Off';

    $form->round_button = $request->round_button;
    $form->text_hover = $request->text_hover;

    $form->notes = $request->notes;
    $form->id_name = $request->id_name;
    $form->tab_name = $request->tab_name;
    $form->fav_language = $request->fav_language;

    // $form->fav_language = $request->has('fav_language') ?? $request->fav_language;
    // $form->radius = $request->radius;

    $form->status = $request->status ?? 'Off';
    $form->home_status = $request->home_status;
    $form->home_status1 = $request->home_status1;



    $form->save();

     return back()->withSuccess('Successfully Insert Data !!!!!');

    }
}

