<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\form_three;


class FunnelControllers extends Controller
{
    public function index(){
        $form3 = form_three::latest()
                ->first();

        return view('Funnel-setting', compact('form3') );
        // return view('Funnel-setting');
    }

    public function store(Request $request){
        

        $formnew = form_three::where('home_status1', $request->home_status1)->first();
        // dd($formnew);
        if ($formnew) {
            $form = form_three::find($formnew->id);
            // dd($form);
        } else {
            $form = new form_three;
        }

 

    if ($request->hasFile('back_images')) {
        $back_images = time().'.'. $request->back_images->extension();
        $request->back_images->move(public_path('Imges3/back_images/'), $back_images);
      
    }else {
        $back_images = $form->back_images;
    }



    if ($request->hasFile('product_images')) {
        $product_images = time().'.'. $request->product_images->extension();
        $request->product_images->move(public_path('Imges3/product_images/'), $product_images);
      
    }else {
        $product_images = $form->product_images;
    }

    if ($request->hasFile('shadow_images')) {
        $shadow_images = time().'.'. $request->shadow_images->extension();
        $request->shadow_images->move(public_path('Imges3/shadow_images/'), $shadow_images);
      
    }else {
        $shadow_images = $form->shadow_images;
    }
    
    if ($request->hasFile('tile_images')) {
        $tile_images = time().'.'. $request->tile_images->extension();
        $request->tile_images->move(public_path('Imges3/tile_images/'), $tile_images);
      
    }else{
        $tile_images = $form->tile_images;
    }

    $form->back_images = $back_images;


    $form->product_images = $product_images;

    $form->shadow_images = $shadow_images;


    $form->tile_images = $tile_images;


    $form->title = $request->title;
    $form->font_name = $request->font_name;
    $form->font_size = $request->font_size;
    $form->font_color = $request->font_color;
    $form->text_orientation = $request->text_orientation;
    // $form->borders = $request->borders;
    $form->product_name = $request->product_name;
    $form->product_asin = $request->product_asin;
    $form->product_under = $request->product_under;

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

    $form->round_button = $request->round_button ?? 'Off';
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