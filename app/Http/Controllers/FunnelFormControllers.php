<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\form_fore;

class FunnelFormControllers extends Controller
{
    public function index(){
        $form4 = form_fore::latest()
                ->first();

        return view('Funnel-form' , compact('form4'));
    }
    public function store(Request $request){
        $formnew = form_fore::where('home_status1', $request->home_status1)->first();
        // dd($formnew);
        if ($formnew) {
            $form = form_fore::find($formnew->id);
            // dd($form);
        } else {
            $form = new form_fore;
        }

 

    if ($request->hasFile('back_images')) {
        $back_images = time().'.'. $request->back_images->extension();
        $request->back_images->move(public_path('Imges4/back_images/'), $back_images);
      
    }else {
        $back_images = $form->back_images;
    }



    if ($request->hasFile('supplementary_images')) {
        $supplementary_images = time().'.'. $request->supplementary_images->extension();
        $request->supplementary_images->move(public_path('Imges4/supplementary_images/'), $supplementary_images);
      
    }else {
        $supplementary_images = $form->supplementary_images;
    }

    if ($request->hasFile('form_images')) {
        $form_images = time().'.'. $request->form_images->extension();
        $request->form_images->move(public_path('Imges4/form_images/'), $form_images);
      
    }else {
        $form_images = $form->form_images;
    }
    
    if ($request->hasFile('add_images')) {
        $add_images = time().'.'. $request->add_images->extension();
        $request->add_images->move(public_path('Imges4/add_images/'), $add_images);
      
    }else{
        $add_images = $form->add_images;
    }

    if ($request->hasFile('body_images')) {
        $body_images = time().'.'. $request->body_images->extension();
        $request->body_images->move(public_path('Imges4/body_images/'), $body_images);
      
    }else{
        $body_images = $form->body_images;
    }

    if ($request->hasFile('button_images')) {
        $button_images = time().'.'. $request->button_images->extension();
        $request->button_images->move(public_path('Imges4/button_images/'), $button_images);
      
    }else{
        $button_images = $form->button_images;
    }

    if ($request->hasFile('tile_images')) {
        $tile_images = time().'.'. $request->tile_images->extension();
        $request->tile_images->move(public_path('Imges4/tile_images/'), $tile_images);
      
    }else{
        $tile_images = $form->tile_images;
    }


    $form->back_images = $back_images;
    $form->supplementary_images = $supplementary_images;
    $form->form_images = $form_images;
    $form->add_images = $add_images;
    $form->body_images = $body_images;
    $form->button_images = $button_images;
    $form->tile_images = $tile_images;


    $form->supplementary = $request->supplementary ?? 'Off';
    $form->scale_width = $request->scale_width;
    $form->scale_height = $request->scale_height;
    $form->form_width = $request->form_width;
    $form->form_height = $request->form_height;
    $form->title = $request->title;
    $form->font_name = $request->font_name;
    $form->font_size = $request->font_size;
    $form->font_color = $request->font_color;
    $form->text_orientation = $request->text_orientation;
    $form->text_style = $request->text_style;
    $form->text_underline = $request->text_underline;
    $form->sub_title = $request->sub_title;
    $form->sub_name = $request->sub_name;
    $form->sub_size = $request->sub_size;
    $form->sub_color = $request->sub_color;
    $form->sub_orientation = $request->sub_orientation;
    $form->sub_style = $request->sub_style;
    $form->sub_underline = $request->sub_underline;
    $form->body = $request->body;
    $form->body_name = $request->body_name;
    $form->body_size = $request->body_size;
    $form->body_color = $request->body_color;
    $form->body_orientation = $request->body_orientation;
    $form->body_style = $request->body_style;
    $form->body_underline = $request->body_underline;
    $form->button_text = $request->button_text;
    $form->button_link = $request->button_link;
    $form->button_name = $request->button_name;
    $form->button_size = $request->button_size;
    $form->button_color = $request->button_color;
    $form->button_color1 = $request->button_color1;
    $form->button_width = $request->button_width;
    $form->button_height = $request->button_height;

    $form->tile_height = $request->tile_height;
    $form->tile_color = $request->tile_color;
    $form->tile_width = $request->tile_width;
    $form->tile_texture = $request->tile_texture ?? 'Off';
    $form->round_button = $request->round_button;
    $form->text_hover = $request->text_hover;


    $form->id_name = $request->id_name;
    $form->tab_name = $request->tab_name;
    $form->fav_language = $request->fav_language;

    // $form->fav_language = $request->has('fav_language') ?? $request->fav_language;
    // $form->radius = $request->radius;

    $form->status = $request->status ?? 'Off';
    $form->status1 = $request->status1 ?? 'Off';

    $form->home_status = $request->home_status;
    $form->home_status1 = $request->home_status1;



    $form->save();

     return back()->withSuccess('Successfully Insert Data !!!!!');

    }
        
    }

