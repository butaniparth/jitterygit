<style>

</style>
<form action="{{ route('Funnel-form.process') }}"  method="post" enctype="multipart/form-data">
    @csrf

<div class="Polaris-Frame__Content" style="padding:5px 15px">
    <div class="Polaris-Page view_page">
        <div class="main_home_page">
            <div class="heading_text">
                <h2>Funnel Settings</h2>
            </div>
            <div>
                <div class="pagination_active_section">
                    <ul>
                        <li><a href="Funnel-setting.php"><span class="Polaris-Button__Content"><span
                                        class="Polaris-Button__Icon"><span class="Polaris-Icon"><span
                                                class="Polaris-Text--root Polaris-Text--visuallyHidden"></span><svg
                                                viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false"
                                                aria-hidden="true">
                                                <path
                                                    d="M12 16a.997.997 0 0 1-.707-.293l-5-5a.999.999 0 0 1 0-1.414l5-5a.999.999 0 1 1 1.414 1.414l-4.293 4.293 4.293 4.293a.999.999 0 0 1-.707 1.707z">
                                                </path>
                                            </svg></span></span></span></a></li>
                        <li><a href="Funnel">1</a></li>
                        <li><a href="Marketplace">2</a></li>
                        <li><a href="Funnel-setting">3</a></li>
                        <li class="active_pagination"><a href="Funnel-form">4</a></li>
                        <li><a href="Funnel-step-first">5</a></li>
                        <li><a href="setting-promo">6</a></li>
                        <li style="margin:0px"><a href="Funnel-step-first.php"><span
                                    class="Polaris-Button__Content"><span class="Polaris-Button__Icon"><span
                                            class="Polaris-Icon"><span
                                                class="Polaris-Text--root Polaris-Text--visuallyHidden"></span><svg
                                                viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false"
                                                aria-hidden="true">
                                                <path
                                                    d="M8 16a.999.999 0 0 1-.707-1.707l4.293-4.293-4.293-4.293a.999.999 0 1 1 1.414-1.414l5 5a.999.999 0 0 1 0 1.414l-5 5a.997.997 0 0 1-.707.293z">
                                                </path>
                                            </svg></span></span></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="save_nd_publish_mode">
            <div class="enbaled_text">
                    <h5 class="hide_enable">Enabled</h5>
                    <h5 class="hide_disable">Disabled</h5>

                    <label class="switch" for="checkbox_">
                        <input type="checkbox" id="checkbox_" value="checked" name="status" {{ $form4 ? 'on' : '' }}>
                        <div class="slider round"></div>
                    </label>
                </div>  
                <div><button class="Polaris-Button" type="submit" style="margin-right:5px"><span
                            class="Polaris-Button__Content"><span
                                class="Polaris-Button__Text">Save</span></span></button><button
                        class="Polaris-Button Polaris-Button--primary publish_model_click" type="button"><span
                            class="Polaris-Button__Content"><span
                                class="Polaris-Button__Text">Publish</span></span></button></div>
            </div>
        </div>
        <div class="Polaris-FormLayout">
            <div role="group" class="Polaris-FormLayout--grouped">
                <div class="Polaris-FormLayout__Items">
                    <div class="Polaris-FormLayout__Item">
                        <div class="Polaris-Card">
                            <div class="Polaris-Card__Section">
                                <div class="Polaris-FormLayout">
                                    <div role="group" class="Polaris-FormLayout--grouped">
                                        <div class="enables_heading_block">
                                            <h3 class="text_hide" style="font-size:16px">Enable </h3>
                                            <h3 class="text_block" style="font-size:16px">Disable</h3>
                                            <label class="switch" for="checkbox_5">
                                                <input type="checkbox" id="checkbox_5" name="status1" {{ $form4 ? 'checked' : '' }}>
                                                <div class="slider round"></div>
                                            </label>
                                        </div>
                                       
                                        <div class="Polaris-FormLayout__Items">
                                            <div class="Polaris-FormLayout__Item">
                                                <div class="forms_section_toggle">
                                                    <p>Form Items</p>
                                                </div>
                                                <div class="toggle_btn">
                                                <div class="toggle_with_text"><label class="switch"
                                                        for="checkbox_9"><input type="checkbox" id="checkbox_9">
                                                        <div class="slider round"></div>
                                                    </label>
                                                    <h4 id="edit">Full name</h4>
                                                    <div class="editable_block">
                                                        <p type="submit" id="edit-button" style="margin-left:10px"><i
                                                                class=" fa fa-pencil" aria-hidden="true"
                                                                style="color:#008060"></i></p>
                                                        <p type="submit" id="end-editing" style="margin-left:10px">
                                                            Save</button>
                                                    </div>
                                                </div>
                                                <script>
                                                const paragraph = document.getElementById("edit");
                                                const edit_button = document.getElementById("edit-button");
                                                const end_button = document.getElementById("end-editing");

                                                edit_button.addEventListener("click", function() {
                                                        paragraph.contentEditable = true;
                                                        paragraph.style.border = "thin solid #CECECE";
                                                        paragraph.style.padding = "4px 20px";

                                                    }

                                                );

                                                end_button.addEventListener("click", function() {
                                                        paragraph.contentEditable = false;
                                                        paragraph.style.backgroundColor = "#fff";
                                                        paragraph.style.border = "#fff";
                                                        paragraph.style.padding = "0px";
                                                    }

                                                )
                                                </script>
                                                <div class="toggle_with_text"><label class="switch"
                                                        for="checkbox_7"><input type="checkbox" id="checkbox_7">
                                                        <div class="slider round"></div>
                                                    </label>
                                                    <h4 id="edit1">Email</h4>
                                                    <div class="editable_block">
                                                        <p type="submit" id="edit-button1" style="margin-left:10px"><i
                                                                class=" fa fa-pencil" aria-hidden="true"
                                                                style="color:#008060"></i></p>
                                                        <p type="submit" id="end-editing1" style="margin-left:10px">
                                                            Save</button>
                                                    </div>
                                                </div>
                                                <script>
                                                const paragraph1 = document.getElementById("edit1");
                                                const edit_button1 = document.getElementById("edit-button1");
                                                const end_button1 = document.getElementById("end-editing1");

                                                edit_button1.addEventListener("click", function() {
                                                        paragraph1.contentEditable = true;
                                                        paragraph1.style.border = "thin solid #CECECE";
                                                        paragraph1.style.padding = "4px 20px";

                                                    }

                                                );

                                                end_button1.addEventListener("click", function() {
                                                        paragraph1.contentEditable = false;
                                                        paragraph1.style.backgroundColor = "#fff";
                                                        paragraph1.style.border = "#fff";
                                                        paragraph1.style.padding = "0px";
                                                    }

                                                )
                                                </script>
                                                <div class="toggle_with_text"><label class="switch"
                                                        for="checkbox_8"><input type="checkbox" id="checkbox_8">
                                                        <div class="slider round"></div>
                                                    </label>
                                                    <h4 id="edit2">Phone</h4>
                                                    <div class="editable_block">
                                                        <p type="submit" id="edit-button2" style="margin-left:10px"><i
                                                                class=" fa fa-pencil" aria-hidden="true"
                                                                style="color:#008060"></i></p>
                                                        <p type="submit" id="end-editing2" style="margin-left:10px">
                                                            Save</button>
                                                    </div>
                                                </div>
                                                <script>
                                                const paragraph2 = document.getElementById("edit2");
                                                const edit_button2 = document.getElementById("edit-button2");
                                                const end_button2 = document.getElementById("end-editing2");
                                                const input_form = document.getElementById("end-editing2");


                                                edit_button2.addEventListener("click", function() {
                                                        paragraph2.contentEditable = true;
                                                        paragraph2.style.border = "thin solid #CECECE";
                                                        paragraph2.style.padding = "4px 20px";

                                                    }

                                                );

                                                end_button2.addEventListener("click", function() {
                                                        paragraph2.contentEditable = false;
                                                        paragraph2.style.backgroundColor = "#fff";
                                                        paragraph2.style.border = "#fff";
                                                        paragraph2.style.padding = "0px";
                                                    }

                                                )
                                                </script>
                                             
                                               
                                                </div>
                                                <script>
                                                const paragraph3 = document.getElementById("edit3");
                                                const edit_button3 = document.getElementById("edit-button3");
                                                const end_button3 = document.getElementById("end-editing3");
                                                const input_form = document.getElementById("end-editing3");


                                                edit_button3.addEventListener("click", function() {
                                                        paragraph3.contentEditable = true;
                                                        paragraph3.style.border = "thin solid #CECECE";
                                                        paragraph3.style.padding = "4px 20px";

                                                    }

                                                );

                                                end_button3.addEventListener("click", function() {
                                                        paragraph3.contentEditable = false;
                                                        paragraph3.style.backgroundColor = "#fff";
                                                        paragraph3.style.border = "#fff";
                                                        paragraph3.style.padding = "0px";
                                                    }

                                                )
                                                </script>
                                              
                                        
                                                <div style="margin:20px 0px 0px"><button class="Polaris-Button"
                                                        type="button"><span
                                                            class="Polaris-Button__Content append_data"><span
                                                                class="Polaris-Button__Text">Add New
                                                                Textbox</span></span></button></div>
                                            </div>
                                           
                                        </div>
                                      
                                        <div class="Polaris-FormLayout__Item">
                                            <div class="Polaris-FormLayout" style="margin-top:0px">
                                                <div role="group" class="Polaris-FormLayout--condensed">
                                                    <div class="Polaris-FormLayout__Items custome_block">
                                                        <div class="Polaris-FormLayout__Item">
                                                            <div class="">
                                                                <div class="wrapper">
                                                                    <div class="rounded_btn_block dropzone_heading"
                                                                        style="margin:0px">
                                                                        <h5 style="margin-bottom:0px">Supplementary 
                                                                            images</h5>
                                                                            <label class="switch" for="checkbox_3">
                                                                            <input type="checkbox" name="supplementary" {{ $form4 ? 'checked' : '' }}
                                                                                id="checkbox_3">
                                                                            <div class="slider round"></div>
                                                                        </label>
                                                                    </div>
                                                                    <div class="box add_promotion_box">
                                                                        <div class="upload-options"><label>
                                                                                <div class="Polaris-Labelled--hidden">
                                                                                    <div
                                                                                        class="Polaris-Labelled__LabelWrapper">
                                                                                        <div class="Polaris-Label">
                                                                                            <input type="file"
                                                                                                class="image-upload"
                                                                                                accept="image/*" name="supplementary_images">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="Polaris-DropZone Polaris-DropZone--hasOutline Polaris-DropZone--sizeMedium"
                                                                                        aria-disabled="false"><span
                                                                                            class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--visuallyHidden"><input
                                                                                                id="upload_file"
                                                                                                multiple="" type="file"
                                                                                                autocomplete="off"></span>
                                                                                        <div
                                                                                            class="Polaris-DropZone__Container">
                                                                                            <div
                                                                                                class="Polaris-DropZone-FileUpload">
                                                                                                <div class="Polaris-AlphaStack"
                                                                                                    style="--pc-stack-inline-align:center;--pc-stack-order:column;--pc-stack-gap-xs:var(--p-space-2)">
                                                                                                    <div class="Polaris-DropZone-FileUpload__Action"
                                                                                                        id="upload_file">
                                                                                                        Add files</div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </label></div>
                                                                        <div>
                                                                            <div class="js--image-preview">
                                                                                <div class="thumbnails_img">
                                                                                @if($form4 && $form4->supplementary_images)
                                                                                    <img width="134" height="104" src="{{ asset('Imges4/supplementary_images/' . $form4->supplementary_images) }}">
                                                                                @else
                                                                                    <img src="images/img_thumbanail.svg">
                                                                                @endif
                                                                                </div>
                                                                                <div class="close_img"><button
                                                                                        class="close_img_btn">x
                                                                                    </button></div>
                                                                            </div>
                                                                            <div class=""
                                                                                style="bottom:-0px !important">
                                                                                <p>(Image should be maximum<br> 1500 x
                                                                                    1500 jpg, png)</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="Polaris-FormLayout__Item">
                                                            <div class="">
                                                                <div class="wrapper">
                                                                    <div class="dropzone_heading">
                                                                        <h5>Background images </h5>
                                                                    </div>
                                                                    <div class="box add_promotion_box">
                                                                        <div class="upload-options"><label>
                                                                                <div class="Polaris-Labelled--hidden">
                                                                                    <div
                                                                                        class="Polaris-Labelled__LabelWrapper">
                                                                                        <div class="Polaris-Label">
                                                                                            <input type="file"
                                                                                                class="image-upload"
                                                                                                accept="image/*" name="back_images">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="Polaris-DropZone Polaris-DropZone--hasOutline Polaris-DropZone--sizeMedium"
                                                                                        aria-disabled="false"><span
                                                                                            class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--visuallyHidden"><input
                                                                                                id="upload_file"
                                                                                                multiple="" type="file"
                                                                                                autocomplete="off"></span>
                                                                                        <div
                                                                                            class="Polaris-DropZone__Container">
                                                                                            <div
                                                                                                class="Polaris-DropZone-FileUpload">
                                                                                                <div class="Polaris-AlphaStack"
                                                                                                    style="--pc-stack-inline-align:center;--pc-stack-order:column;--pc-stack-gap-xs:var(--p-space-2)">
                                                                                                    <div class="Polaris-DropZone-FileUpload__Action"
                                                                                                        id="upload_file">
                                                                                                        Add files</div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </label></div>
                                                                        <div>
                                                                            <div class="js--image-preview">
                                                                                <div class="thumbnails_img">
                                                                                @if($form4 && $form4->back_images)
                                                                                <img width="134" height="104" src="{{ asset('Imges4/back_images/' . $form4->back_images) }}">
                                                                            @else
                                                                                <img src="images/img_thumbanail.svg">
                                                                            @endif
                                                                                </div>
                                                                                <div class="close_img"><button
                                                                                        class="close_img_btn">x
                                                                                    </button></div>
                                                                            </div>
                                                                            <div class="img_dimantion"
                                                                                style="bottom:-0px !important">
                                                                                <p>(Image should be maximum<br> 1500 x
                                                                                    1500 jpg, png)</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="Polaris-FormLayout" style="margin-top:0px">
                                    <div role="group" class="Polaris-FormLayout--grouped">
                                        <div class="Polaris-FormLayout__Items">
                                            <div class="Polaris-FormLayout__Item">
                                                <div class="dropzone_heading">
                                                    <h5>Supplementary images Scale </h5>
                                                </div>
                                                <div class="Polaris-FormLayout">
                                                    <div role="group" class="Polaris-FormLayout--condensed">
                                                        <div class="Polaris-FormLayout__Items">
                                                            <div class="Polaris-FormLayout__Item">
                                                                <div class="">
                                                                    <div class="Polaris-Labelled__LabelWrapper">
                                                                        <div class="Polaris-Label"><label
                                                                                id="PolarisTextField1Label"
                                                                                for="PolarisTextField1"
                                                                                class="Polaris-Label__Text">Width</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="Polaris-Connected">
                                                                        <div
                                                                            class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                                            <div
                                                                                class="Polaris-TextField Add_custom_polaris">
                                                                                <input id="PolarisTextField1"
                                                                                    autocomplete="off"
                                                                                    class="Polaris-TextField__Input"
                                                                                    type="number"
                                                                                    aria-labelledby="PolarisTextField1Label"
                                                                                    aria-invalid="false" value="{{$form4->scale_width ?? ''}}" name="scale_width">
                                                                                <div
                                                                                    class="Polaris-TextField__Backdrop">
                                                                                </div>
                                                                                <div class="manage_dimension_pixel">
                                                                                    <p>PX</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="Polaris-FormLayout__Item">
                                                                <div class="">
                                                                    <div class="Polaris-Labelled__LabelWrapper">
                                                                        <div class="Polaris-Label"><label
                                                                                id="PolarisTextField2Label"
                                                                                for="PolarisTextField2"
                                                                                class="Polaris-Label__Text">Height</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="Polaris-Connected">
                                                                        <div
                                                                            class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                                            <div
                                                                                class="Polaris-TextField Add_custom_polaris">
                                                                                <input id="PolarisTextField1"
                                                                                    autocomplete="off"
                                                                                    class="Polaris-TextField__Input"
                                                                                    type="number"
                                                                                    aria-labelledby="PolarisTextField1Label"
                                                                                    aria-invalid="false" value="{{$form4->scale_height ?? ''}}" name="scale_height">
                                                                                <div
                                                                                    class="Polaris-TextField__Backdrop">
                                                                                </div>
                                                                                <div class="manage_dimension_pixel">
                                                                                    <p>PX</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="spaceing_manage_block">
                                                    <div class="dropzone_heading">
                                                        <h5>Form Background Image Scale </h5>
                                                    </div>
                                                    <div class="Polaris-FormLayout">
                                                        <div role="group" class="Polaris-FormLayout--condensed">
                                                            <div class="Polaris-FormLayout__Items">
                                                                <div class="Polaris-FormLayout__Item">
                                                                    <div class="">
                                                                        <div class="Polaris-Labelled__LabelWrapper">
                                                                            <div class="Polaris-Label"><label
                                                                                    id="PolarisTextField1Label"
                                                                                    for="PolarisTextField1"
                                                                                    class="Polaris-Label__Text">Width </label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="Polaris-Connected">
                                                                            <div
                                                                                class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                                                <div
                                                                                    class="Polaris-TextField Add_custom_polaris">
                                                                                    <input id="PolarisTextField1"
                                                                                        autocomplete="off"
                                                                                        class="Polaris-TextField__Input"
                                                                                        type="number"
                                                                                        aria-labelledby="PolarisTextField1Label"
                                                                                        aria-invalid="false" value="{{$form4->form_width ?? ''}}" name="form_width">
                                                                                    <div
                                                                                        class="Polaris-TextField__Backdrop">
                                                                                    </div>
                                                                                    <div class="manage_dimension_pixel">
                                                                                        <p>PX</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="Polaris-FormLayout__Item">
                                                                    <div class="">
                                                                        <div class="Polaris-Labelled__LabelWrapper">
                                                                            <div class="Polaris-Label"><label
                                                                                    id="PolarisTextField2Label"
                                                                                    for="PolarisTextField2"
                                                                                    class="Polaris-Label__Text">Height</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="Polaris-Connected">
                                                                            <div
                                                                                class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                                                <div
                                                                                    class="Polaris-TextField Add_custom_polaris">
                                                                                    <input id="PolarisTextField1"
                                                                                        autocomplete="off"
                                                                                        class="Polaris-TextField__Input"
                                                                                        type="number"
                                                                                        aria-labelledby="PolarisTextField1Label"
                                                                                        aria-invalid="false" value="{{$form4->form_height ?? ''}}" name="form_height">
                                                                                    <div
                                                                                        class="Polaris-TextField__Backdrop">
                                                                                    </div>
                                                                                    <div class="manage_dimension_pixel">
                                                                                        <p>PX</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="Polaris-FormLayout__Item">
                                                <div class="spaceing_manage_block" style="margin:0px">
                                                    <div class="wrapper" style="margin-left:10px">
                                                        <div class="dropzone_heading">
                                                            <h5>Form Background Image </h5>
                                                        </div>
                                                        <div class="box add_promotion_box" style="margin-bottom:0px">
                                                            <div class="upload-options"><label>
                                                                    <div class="Polaris-Labelled--hidden">
                                                                        <div class="Polaris-Labelled__LabelWrapper">
                                                                            <div class="Polaris-Label"><input
                                                                                    type="file" class="image-upload"
                                                                                    accept="image/*" name="form_images">
                                                                            </div>
                                                                        </div>
                                                                        <div class="Polaris-DropZone Polaris-DropZone--hasOutline Polaris-DropZone--sizeMedium"
                                                                            aria-disabled="false"><span
                                                                                class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--visuallyHidden"><input
                                                                                    id="upload_file" multiple=""
                                                                                    type="file"
                                                                                    autocomplete="off"></span>
                                                                            <div class="Polaris-DropZone__Container">
                                                                                <div
                                                                                    class="Polaris-DropZone-FileUpload">
                                                                                    <div class="Polaris-AlphaStack"
                                                                                        style="--pc-stack-inline-align:center;--pc-stack-order:column;--pc-stack-gap-xs:var(--p-space-2)">
                                                                                        <div class="Polaris-DropZone-FileUpload__Action"
                                                                                            id="upload_file">Add files
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </label></div>
                                                            <div>
                                                                <div class="js--image-preview">
                                                                    <div class="thumbnails_img">
                                                                    @if($form4 && $form4->form_images)
                                                                        <img width="134" height="104" src="{{ asset('Imges4/form_images/' . $form4->form_images) }}">
                                                                    @else
                                                                        <img src="images/img_thumbanail.svg">
                                                                    @endif
                                                                        </div>
                                                                    <div class="close_img"><button
                                                                            class="close_img_btn">x
                                                                        </button></div>
                                                                </div>
                                                                <div class="img_dimantion"
                                                                    style="bottom:-0px !important">
                                                                    <p>(Image should be maximum<br> 1500 x 1500 jpg,
                                                                        png)
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div></div>
                        </div>
                        <div class="Polaris-Card" style="padding:0px">
                            <div class="Polaris-Card__Section">
                                <div class="">
                                    <div class="funnel_heading" style="padding-bottom:10px">
                                        <h2 class="Polaris-Text--root Polaris-Text--headingMd">Form Copy </h2>
                                    </div>
                                    <div class="Polaris-FormLayout">
                                        <div class="Polaris-FormLayout__Item">
                                            <div class="">
                                                <div class="Polaris-Labelled__LabelWrapper">
                                                    <div class="Polaris-Label"><label id="PolarisTextField1Label"
                                                            for="PolarisTextField1"
                                                            class="Polaris-Label__Text">Title</label></div>
                                                </div>
                                                <div class="Polaris-Connected">
                                                    <div
                                                        class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                        <div class="Polaris-TextField">
                                                            <input id="PolarisTextField1"
                                                                autocomplete="off" class="Polaris-TextField__Input"
                                                                type="text" aria-labelledby="PolarisTextField1Label"
                                                                aria-invalid="false" value="{{$form4->title ?? ''}}" name="title">
                                                            <div class="Polaris-TextField__Backdrop"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="Polaris-FormLayout ">
                                        <div role="group" class="Polaris-FormLayout--grouped">
                                            <div class="Polaris-FormLayout__Items" style="margin-top:15px">
                                                <div class="Polaris-FormLayout__Item">
                                                    <div class="">
                                                        <div class="Polaris-Labelled__LabelWrapper">
                                                            <div class="Polaris-Label"><label
                                                                    id="PolarisTextField1Label" for="PolarisTextField1"
                                                                    class="Polaris-Label__Text">Font
                                                                    Name</label></div>
                                                        </div>
                                                        <div class="Polaris-Connected1">
                                                            <div class="Polaris-Select">
                                                                <select name="font_name"
                                                                    id="font_fname_text" class="Polaris-Select__Input"
                                                                    aria-invalid="false">
                                                                    <option selected="" value="Arial">Arial</option>
                                                                    <option value="Popins">Popins</option>
                                                                    <option value="Roboto">Roboto</option>
                                                                </select>
                                                                <div class="Polaris-Select__Content" aria-hidden="true">
                                                                    <span
                                                                        class="Polaris-Select__SelectedOption font_fname_text">{{$form4->font_name ?? ''}}</span><span
                                                                        class="Polaris-Select__Icon"><span
                                                                            class="Polaris-Icon"><span
                                                                                class="Polaris-VisuallyHidden"></span><svg
                                                                                viewBox="0 0 20 20"
                                                                                class="Polaris-Icon__Svg"
                                                                                focusable="false" aria-hidden="true">
                                                                                <path
                                                                                    d="M7.676 9h4.648c.563 0 .879-.603.53-1.014l-2.323-2.746a.708.708 0 0 0-1.062 0l-2.324 2.746c-.347.411-.032 1.014.531 1.014Zm4.648 2h-4.648c-.563 0-.878.603-.53 1.014l2.323 2.746c.27.32.792.32 1.062 0l2.323-2.746c.349-.411.033-1.014-.53-1.014Z">
                                                                                </path>
                                                                            </svg></span></span>
                                                                </div>
                                                                <div class="Polaris-Select__Backdrop"></div>
                                                            </div>
                                                            <script>
                                                            $('#font_fname_text').change(function() {
                                                                    var radiusunit = $(this).val();
                                                                    $('.font_fname_text').html(radiusunit);
                                                                }

                                                            );
                                                            </script>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="Polaris-FormLayout__Item">
                                                    <div class="">
                                                        <div class="Polaris-Labelled__LabelWrapper">
                                                            <div class="Polaris-Label"><label
                                                                    id="PolarisTextField2Label" for="PolarisTextField2"
                                                                    class="Polaris-Label__Text">Font
                                                                    Size</label></div>
                                                        </div>
                                                        <div class="Polaris-Select"><select name="font_size"
                                                                id="font_size_text" class="Polaris-Select__Input"
                                                                aria-invalid="false">
                                                                <option selected="" value="10">10</option>
                                                                <option value="20">20</option>
                                                                <option value="30">30</option>
                                                            </select>
                                                            <div class="Polaris-Select__Content" aria-hidden="true">
                                                                <span
                                                                    class="Polaris-Select__SelectedOption font_size_text">{{$form4->font_size ?? ''}}</span><span
                                                                    class="Polaris-Select__Icon"><span
                                                                        class="Polaris-Icon"><span
                                                                            class="Polaris-VisuallyHidden"></span><svg
                                                                            viewBox="0 0 20 20"
                                                                            class="Polaris-Icon__Svg" focusable="false"
                                                                            aria-hidden="true">
                                                                            <path
                                                                                d="M7.676 9h4.648c.563 0 .879-.603.53-1.014l-2.323-2.746a.708.708 0 0 0-1.062 0l-2.324 2.746c-.347.411-.032 1.014.531 1.014Zm4.648 2h-4.648c-.563 0-.878.603-.53 1.014l2.323 2.746c.27.32.792.32 1.062 0l2.323-2.746c.349-.411.033-1.014-.53-1.014Z">
                                                                            </path>
                                                                        </svg></span></span>
                                                            </div>
                                                            <div class="Polaris-Select__Backdrop"></div>
                                                            <script>
                                                            $('#font_size_text').change(function() {
                                                                    var radiusunit = $(this).val();
                                                                    $('.font_size_text').html(radiusunit);
                                                                }

                                                            );
                                                            </script>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="Polaris-FormLayout__Items ">
                                                <div class="Polaris-FormLayout__Item">
                                                    <div class="">
                                                        <div class="color_picker">
                                                            <div class="Polaris-Label"><label
                                                                    id="PolarisTextField11Label"
                                                                    for="PolarisTextField11"
                                                                    class="Polaris-Label__Text for_text label_text_font">Font
                                                                    Color (hexcode) </label></div>
                                                            <div style="padding: 4px 0px 2px;">
                                                                <div class="color_full_box">
                                                                    <input type="text"
                                                                        id="color21_hex" class="for_color_box" name="font_color">
                                                                    <input
                                                                        type="color" id="color21"
                                                                        class="color_picker_box colorpickerbox"
                                                                        value="{{isset($form4->font_color) ? $form4->font_color : ''}}" name="font_color"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="Polaris-FormLayout__Item">
                                                    <div class="">
                                                        <div class="Polaris-Labelled__LabelWrapper">
                                                            <div class="Polaris-Label"><label
                                                                    id="PolarisTextField2Label" for="PolarisTextField2"
                                                                    class="Polaris-Label__Text">Text 
                                                                    Orientation</label></div>
                                                        </div>
                                                        <div class="Polaris-Connected1">
                                                            <div class="Polaris-Select">
                                                                <select name="text_orientation"
                                                                    id="font_preview_align"
                                                                    class="Polaris-Select__Input" aria-invalid="false">
                                                                    <option selected="" value="Left">Left</option>
                                                                    <option value="Right">Right</option>
                                                                    <option value="Center">Center</option>
                                                                </select>
                                                                <div class="Polaris-Select__Content" aria-hidden="true">
                                                                    <span
                                                                        class="Polaris-Select__SelectedOption font_preview_align">{{$form4->text_orientation ?? ''}}</span><span
                                                                        class="Polaris-Select__Icon"><span
                                                                            class="Polaris-Icon"><span
                                                                                class="Polaris-VisuallyHidden"></span><svg
                                                                                viewBox="0 0 20 20"
                                                                                class="Polaris-Icon__Svg"
                                                                                focusable="false" aria-hidden="true">
                                                                                <path
                                                                                    d="M7.676 9h4.648c.563 0 .879-.603.53-1.014l-2.323-2.746a.708.708 0 0 0-1.062 0l-2.324 2.746c-.347.411-.032 1.014.531 1.014Zm4.648 2h-4.648c-.563 0-.878.603-.53 1.014l2.323 2.746c.27.32.792.32 1.062 0l2.323-2.746c.349-.411.033-1.014-.53-1.014Z">
                                                                                </path>
                                                                            </svg></span></span>
                                                                </div>
                                                                <div class="Polaris-Select__Backdrop"></div>
                                                            </div>
                                                            <script>
                                                            $('#font_preview_align').change(function() {
                                                                    var radiusunit = $(this).val();
                                                                    $('.font_preview_align').html(radiusunit);
                                                                }

                                                            );
                                                            </script>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="Polaris-FormLayout__Items">
                                                <div class="Polaris-FormLayout__Item">
                                                    <div class="">
                                                        <div class="Polaris-Labelled__LabelWrapper">
                                                            <div class="Polaris-Label"><label
                                                                    id="PolarisTextField1Label" for="PolarisTextField1"
                                                                    class="Polaris-Label__Text">Text
                                                                    Style</label></div>
                                                        </div>
                                                        <div class="Polaris-Connected1">
                                                            <div class="Polaris-Select">
                                                                <select name="text_style" 
                                                                    id="font_style_change" class="Polaris-Select__Input"
                                                                    aria-invalid="false">
                                                                    <option selected="" value="Regular">Regular</option>
                                                                    <option value="Italic">Italic</option>
                                                                    <option value="Medium">Medium</option>
                                                                </select>
                                                                <div class="Polaris-Select__Content" aria-hidden="true">
                                                                    <span
                                                                        class="Polaris-Select__SelectedOption font_style_change">{{$form4->text_style ?? ''}}</span><span
                                                                        class="Polaris-Select__Icon"><span
                                                                            class="Polaris-Icon"><span
                                                                                class="Polaris-VisuallyHidden"></span><svg
                                                                                viewBox="0 0 20 20"
                                                                                class="Polaris-Icon__Svg"
                                                                                focusable="false" aria-hidden="true">
                                                                                <path
                                                                                    d="M7.676 9h4.648c.563 0 .879-.603.53-1.014l-2.323-2.746a.708.708 0 0 0-1.062 0l-2.324 2.746c-.347.411-.032 1.014.531 1.014Zm4.648 2h-4.648c-.563 0-.878.603-.53 1.014l2.323 2.746c.27.32.792.32 1.062 0l2.323-2.746c.349-.411.033-1.014-.53-1.014Z">
                                                                                </path>
                                                                            </svg></span></span>
                                                                </div>
                                                                <div class="Polaris-Select__Backdrop"></div>
                                                            </div>
                                                            <script>
                                                            $('#font_style_change').change(function() {
                                                                    var radiusunit = $(this).val();
                                                                    $('.font_style_change').html(radiusunit);
                                                                }

                                                            );
                                                            </script>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="Polaris-FormLayout__Item">
                                                    <div class="">
                                                        <div class="Polaris-Labelled__LabelWrapper">
                                                            <div class="Polaris-Label"><label
                                                                    id="PolarisTextField2Label" for="PolarisTextField2"
                                                                    class="Polaris-Label__Text">Underline</label></div>
                                                        </div>
                                                        <div class="Polaris-Connected1">
                                                            <div class="Polaris-Select"><select name="text_underline"
                                                                    id="font_style_border" class="Polaris-Select__Input"
                                                                    aria-invalid="false">
                                                                    <option selected="" value="Solid">Solid</option>
                                                                    <option value="Dashed">Dashed</option>
                                                                    <option value="Dotted">Dotted</option>
                                                                </select>
                                                                <div class="Polaris-Select__Content" aria-hidden="true">
                                                                    <span
                                                                        class="Polaris-Select__SelectedOption font_style_border">{{$form4->text_underline ?? ''}}</span><span
                                                                        class="Polaris-Select__Icon"><span
                                                                            class="Polaris-Icon"><span
                                                                                class="Polaris-VisuallyHidden"></span><svg
                                                                                viewBox="0 0 20 20"
                                                                                class="Polaris-Icon__Svg"
                                                                                focusable="false" aria-hidden="true">
                                                                                <path
                                                                                    d="M7.676 9h4.648c.563 0 .879-.603.53-1.014l-2.323-2.746a.708.708 0 0 0-1.062 0l-2.324 2.746c-.347.411-.032 1.014.531 1.014Zm4.648 2h-4.648c-.563 0-.878.603-.53 1.014l2.323 2.746c.27.32.792.32 1.062 0l2.323-2.746c.349-.411.033-1.014-.53-1.014Z">
                                                                                </path>
                                                                            </svg></span></span>
                                                                </div>
                                                                <div class="Polaris-Select__Backdrop"></div>
                                                            </div>
                                                            <script>
                                                            $('#font_style_border').change(function() {
                                                                    var radiusunit = $(this).val();
                                                                    $('.font_style_border').html(radiusunit);
                                                                }

                                                            );
                                                            </script>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div></div>
                        </div>
                        <div class="Polaris-Card" style="padding:0px">
                            <div class="Polaris-Card__Section">
                                <div class="">
                                    <div class="Polaris-FormLayout ">
                                        <div role="group" class="Polaris-FormLayout--grouped">
                                            <div class="Polaris-FormLayout__Items ">
                                                <div class="Polaris-FormLayout__Item">
                                                    <div class="">
                                                        <div class="Polaris-Labelled__LabelWrapper">
                                                            <div class="Polaris-Label"><label
                                                                    id="PolarisTextField2Label" for="PolarisTextField2"
                                                                    class="Polaris-Label__Text">Subtitle</label></div>
                                                        </div>
                                                        <div class="Polaris-Connected">
                                                            <div
                                                                class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                                <div class="Polaris-TextField">
                                                                    <input
                                                                        id="PolarisTextField1" autocomplete="off"
                                                                        class="Polaris-TextField__Input" type="text"
                                                                        aria-labelledby="PolarisTextField1Label"
                                                                        aria-invalid="false" value="{{$form4->sub_title ?? ''}}" name="sub_title">
                                                                    <div class="Polaris-TextField__Backdrop"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="Polaris-FormLayout__Item">
                                                    <div class="wrapper">
                                                        <div class="dropzone_heading">
                                                            <h5>Add an Image </h5>
                                                        </div>
                                                        <div class="box add_promotion_box" style="margin-bottom:0px">
                                                            <div class="upload-options"><label>
                                                                    <div class="Polaris-Labelled--hidden">
                                                                        <div class="Polaris-Labelled__LabelWrapper">
                                                                            <div class="Polaris-Label">
                                                                                <input
                                                                                    type="file" class="image-upload"
                                                                                    accept="image/*" name="add_images">
                                                                            </div>
                                                                        </div>
                                                                        <div class="Polaris-DropZone Polaris-DropZone--hasOutline Polaris-DropZone--sizeMedium"
                                                                            aria-disabled="false"><span
                                                                                class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--visuallyHidden"><input
                                                                                    id="upload_file" multiple=""
                                                                                    type="file"
                                                                                    autocomplete="off"></span>
                                                                            <div class="Polaris-DropZone__Container">
                                                                                <div
                                                                                    class="Polaris-DropZone-FileUpload">
                                                                                    <div class="Polaris-AlphaStack"
                                                                                        style="--pc-stack-inline-align:center;--pc-stack-order:column;--pc-stack-gap-xs:var(--p-space-2)">
                                                                                        <div class="Polaris-DropZone-FileUpload__Action"
                                                                                            id="upload_file">Add files
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </label></div>
                                                            <div>
                                                                <div class="js--image-preview">
                                                                    <div class="thumbnails_img">
                                                                    @if($form4 && $form4->add_images)
                                                                        <img width="134" height="104" src="{{ asset('Imges4/add_images/' . $form4->add_images) }}">
                                                                    @else
                                                                        <img src="images/img_thumbanail.svg">
                                                                    @endif
                                                                        </div>
                                                                    <div class="close_img"><button
                                                                            class="close_img_btn">x
                                                                        </button></div>
                                                                </div>
                                                                <div class="img_dimantion"
                                                                    style="bottom:-0px !important">
                                                                    <p>(Image should be maximum<br> 1500 x 1500 jpg,
                                                                        png)
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="Polaris-FormLayout__Items">
                                                <div class="Polaris-FormLayout__Item">
                                                    <div class="">
                                                        <div class="Polaris-Labelled__LabelWrapper">
                                                            <div class="Polaris-Label"><label
                                                                    id="PolarisTextField1Label" for="PolarisTextField1"
                                                                    class="Polaris-Label__Text">Font
                                                                    Name</label></div>
                                                        </div>
                                                        <div class="Polaris-Connected1">
                                                            <div class="Polaris-Select">
                                                                <select name="sub_name"
                                                                    id="font_fname_subtitle_text"
                                                                    class="Polaris-Select__Input" aria-invalid="false">
                                                                    <option selected="" value="Arial">Arial</option>
                                                                    <option value="Popins">Popins</option>
                                                                    <option value="Roboto">Roboto</option>
                                                                </select>
                                                                <div class="Polaris-Select__Content" aria-hidden="true">
                                                                    <span
                                                                        class="Polaris-Select__SelectedOption font_fname_subtitle_text">{{$form4->sub_name ?? ''}}</span><span
                                                                        class="Polaris-Select__Icon"><span
                                                                            class="Polaris-Icon"><span
                                                                                class="Polaris-VisuallyHidden"></span><svg
                                                                                viewBox="0 0 20 20"
                                                                                class="Polaris-Icon__Svg"
                                                                                focusable="false" aria-hidden="true">
                                                                                <path
                                                                                    d="M7.676 9h4.648c.563 0 .879-.603.53-1.014l-2.323-2.746a.708.708 0 0 0-1.062 0l-2.324 2.746c-.347.411-.032 1.014.531 1.014Zm4.648 2h-4.648c-.563 0-.878.603-.53 1.014l2.323 2.746c.27.32.792.32 1.062 0l2.323-2.746c.349-.411.033-1.014-.53-1.014Z">
                                                                                </path>
                                                                            </svg></span></span>
                                                                </div>
                                                                <div class="Polaris-Select__Backdrop"></div>
                                                            </div>
                                                            <script>
                                                            $('#font_fname_subtitle_text').change(function() {
                                                                    var radiusunit = $(this).val();
                                                                    $('.font_fname_subtitle_text').html(radiusunit);
                                                                }

                                                            );
                                                            </script>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="Polaris-FormLayout__Item">
                                                    <div class="">
                                                        <div class="Polaris-Labelled__LabelWrapper">
                                                            <div class="Polaris-Label"><label
                                                                    id="PolarisTextField2Label" for="PolarisTextField2"
                                                                    class="Polaris-Label__Text">Font 
                                                                    Size</label></div>
                                                        </div>
                                                        <div class="Polaris-Select">
                                                            <select name="sub_size"
                                                                id="font_size_subtitle_text"
                                                                class="Polaris-Select__Input" aria-invalid="false">
                                                                <option selected="" value="10">10</option>
                                                                <option value="20">20</option>
                                                                <option value="30">30</option>
                                                            </select>
                                                            <div class="Polaris-Select__Content" aria-hidden="true">
                                                                <span
                                                                    class="Polaris-Select__SelectedOption font_size_subtitle_text">{{$form4->sub_size ?? ''}}</span><span
                                                                    class="Polaris-Select__Icon"><span
                                                                        class="Polaris-Icon"><span
                                                                            class="Polaris-VisuallyHidden"></span><svg
                                                                            viewBox="0 0 20 20"
                                                                            class="Polaris-Icon__Svg" focusable="false"
                                                                            aria-hidden="true">
                                                                            <path
                                                                                d="M7.676 9h4.648c.563 0 .879-.603.53-1.014l-2.323-2.746a.708.708 0 0 0-1.062 0l-2.324 2.746c-.347.411-.032 1.014.531 1.014Zm4.648 2h-4.648c-.563 0-.878.603-.53 1.014l2.323 2.746c.27.32.792.32 1.062 0l2.323-2.746c.349-.411.033-1.014-.53-1.014Z">
                                                                            </path>
                                                                        </svg></span></span>
                                                            </div>
                                                            <div class="Polaris-Select__Backdrop"></div>
                                                            <script>
                                                            $('#font_size_subtitle_text').change(function() {
                                                                    var radiusunit = $(this).val();
                                                                    $('.font_size_subtitle_text').html(radiusunit);
                                                                }

                                                            );
                                                            </script>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="Polaris-FormLayout__Items ">
                                                <div class="Polaris-FormLayout__Item">
                                                    <div class="">
                                                        <div class="color_picker">
                                                            <div class="Polaris-Label"><label
                                                                    id="PolarisTextField11Label"
                                                                    for="PolarisTextField11"
                                                                    class="Polaris-Label__Text for_text label_text_font">Font
                                                                    Color (hexcode) </label></div>
                                                            <div style="padding: 4px 0px 2px;">
                                                                <div class="color_full_box">
                                                                    <input type="text"
                                                                        id="color22_hex" class="for_color_box" name="sub_color">
                                                                        <input
                                                                        type="color" id="color22"
                                                                        class="color_picker_box colorpickerbox"
                                                                        value="{{$form4->sub_color ?? ''}}" name="sub_color"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="Polaris-FormLayout__Item">
                                                    <div class="">
                                                        <div class="Polaris-Labelled__LabelWrapper">
                                                            <div class="Polaris-Label"><label
                                                                    id="PolarisTextField2Label" for="PolarisTextField2"
                                                                    class="Polaris-Label__Text">Text
                                                                    Orientation</label></div>
                                                        </div>
                                                        <div class="Polaris-Connected1">
                                                            <div class="Polaris-Select">
                                                                <select name="sub_orientation"
                                                                    id="font_preview_align_subtitle"
                                                                    class="Polaris-Select__Input" aria-invalid="false">
                                                                    <option selected="" value="Left">Left</option>
                                                                    <option value="Right">Right</option>
                                                                    <option value="Center">Center</option>
                                                                </select>
                                                                <div class="Polaris-Select__Content" aria-hidden="true">
                                                                    <span
                                                                        class="Polaris-Select__SelectedOption font_preview_align_subtitle">{{$form4->sub_orientation ?? ''}}</span><span
                                                                        class="Polaris-Select__Icon"><span
                                                                            class="Polaris-Icon"><span
                                                                                class="Polaris-VisuallyHidden"></span><svg
                                                                                viewBox="0 0 20 20"
                                                                                class="Polaris-Icon__Svg"
                                                                                focusable="false" aria-hidden="true">
                                                                                <path
                                                                                    d="M7.676 9h4.648c.563 0 .879-.603.53-1.014l-2.323-2.746a.708.708 0 0 0-1.062 0l-2.324 2.746c-.347.411-.032 1.014.531 1.014Zm4.648 2h-4.648c-.563 0-.878.603-.53 1.014l2.323 2.746c.27.32.792.32 1.062 0l2.323-2.746c.349-.411.033-1.014-.53-1.014Z">
                                                                                </path>
                                                                            </svg></span></span>
                                                                </div>
                                                                <div class="Polaris-Select__Backdrop"></div>
                                                            </div>
                                                            <script>
                                                            $('#font_preview_align_subtitle').change(function() {
                                                                    var radiusunit = $(this).val();
                                                                    $('.font_preview_align_subtitle').html(
                                                                        radiusunit);
                                                                }

                                                            );
                                                            </script>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="Polaris-FormLayout__Items">
                                                <div class="Polaris-FormLayout__Item">
                                                    <div class="">
                                                        <div class="Polaris-Labelled__LabelWrapper">
                                                            <div class="Polaris-Label"><label
                                                                    id="PolarisTextField1Label" for="PolarisTextField1"
                                                                    class="Polaris-Label__Text">Text
                                                                    Style</label></div>
                                                        </div>
                                                        <div class="Polaris-Connected1">
                                                            <div class="Polaris-Select">
                                                                <select name="sub_style"
                                                                    id="font_style_change_subtitle"
                                                                    class="Polaris-Select__Input" aria-invalid="false">
                                                                    <option selected="" value="Regular">Regular</option>
                                                                    <option value="Italic">Italic</option>
                                                                    <option value="Medium">Medium</option>
                                                                </select>
                                                                <div class="Polaris-Select__Content" aria-hidden="true">
                                                                    <span
                                                                        class="Polaris-Select__SelectedOption font_style_change_subtitle">{{$form4->sub_style ?? ''}}</span><span
                                                                        class="Polaris-Select__Icon"><span
                                                                            class="Polaris-Icon"><span
                                                                                class="Polaris-VisuallyHidden"></span><svg
                                                                                viewBox="0 0 20 20"
                                                                                class="Polaris-Icon__Svg"
                                                                                focusable="false" aria-hidden="true">
                                                                                <path
                                                                                    d="M7.676 9h4.648c.563 0 .879-.603.53-1.014l-2.323-2.746a.708.708 0 0 0-1.062 0l-2.324 2.746c-.347.411-.032 1.014.531 1.014Zm4.648 2h-4.648c-.563 0-.878.603-.53 1.014l2.323 2.746c.27.32.792.32 1.062 0l2.323-2.746c.349-.411.033-1.014-.53-1.014Z">
                                                                                </path>
                                                                            </svg></span></span>
                                                                </div>
                                                                <div class="Polaris-Select__Backdrop"></div>
                                                            </div>
                                                            <script>
                                                            $('#font_style_change_subtitle').change(function() {
                                                                    var radiusunit = $(this).val();
                                                                    $('.font_style_change_subtitle').html(
                                                                        radiusunit);
                                                                }

                                                            );
                                                            </script>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="Polaris-FormLayout__Item">
                                                    <div class="">
                                                        <div class="Polaris-Labelled__LabelWrapper">
                                                            <div class="Polaris-Label"><label
                                                                    id="PolarisTextField2Label" for="PolarisTextField2"
                                                                    class="Polaris-Label__Text">Underline</label></div>
                                                        </div>
                                                        <div class="Polaris-Connected1">
                                                            <div class="Polaris-Select">
                                                                <select name="sub_underline"
                                                                    id="font_style_border_subtitle"
                                                                    class="Polaris-Select__Input" aria-invalid="false">
                                                                    <option selected="" value="Solid">Solid</option>
                                                                    <option value="Dashed">Dashed</option>
                                                                    <option value="Dotted">Dotted</option>
                                                                </select>
                                                                <div class="Polaris-Select__Content" aria-hidden="true">
                                                                    <span
                                                                        class="Polaris-Select__SelectedOption font_style_border_subtitle">{{$form4->sub_underline ?? ''}}</span><span
                                                                        class="Polaris-Select__Icon"><span
                                                                            class="Polaris-Icon"><span
                                                                                class="Polaris-VisuallyHidden"></span><svg
                                                                                viewBox="0 0 20 20"
                                                                                class="Polaris-Icon__Svg"
                                                                                focusable="false" aria-hidden="true">
                                                                                <path
                                                                                    d="M7.676 9h4.648c.563 0 .879-.603.53-1.014l-2.323-2.746a.708.708 0 0 0-1.062 0l-2.324 2.746c-.347.411-.032 1.014.531 1.014Zm4.648 2h-4.648c-.563 0-.878.603-.53 1.014l2.323 2.746c.27.32.792.32 1.062 0l2.323-2.746c.349-.411.033-1.014-.53-1.014Z">
                                                                                </path>
                                                                            </svg></span></span>
                                                                </div>
                                                                <div class="Polaris-Select__Backdrop"></div>
                                                            </div>
                                                            <script>
                                                            $('#font_style_border_subtitle').change(function() {
                                                                    var radiusunit = $(this).val();
                                                                    $('.font_style_border_subtitle').html(
                                                                        radiusunit);
                                                                }

                                                            );
                                                            </script>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div></div>
                        </div>
                        <div class="Polaris-Card">
                            <div class="Polaris-Card__Section">
                               
                                <div class="Polaris-FormLayout">
  <div role="group" class="Polaris-FormLayout--grouped">
    <div class="Polaris-FormLayout__Items">
      <div class="Polaris-FormLayout__Item">
   <div class="">
                                    <div class="Polaris-Labelled__LabelWrapper">
                                        <div class="Polaris-Label"><label id="PolarisTextField1Label"
                                                for="PolarisTextField1" class="Polaris-Label__Text">Body</label></div>
                                    </div>
                                    <div class="Polaris-Connected">
                                        <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                            <div
                                                class="Polaris-TextField Polaris-TextField--hasValue Polaris-TextField--multiline">
                                                <textarea id="PolarisTextField1" autocomplete="off"
                                                    class="Polaris-TextField__Input" type="text" rows="4"
                                                    aria-labelledby="PolarisTextField1Label" aria-invalid="false"
                                                    aria-multiline="true" style="height: 106px;" name="body">{{$form4->body ?? ''}}</textarea>
                                                <div class="Polaris-TextField__Backdrop"></div>
                                                <div aria-hidden="true" class="Polaris-TextField__Resizer">
                                                    <div class="Polaris-TextField__DummyInput">1776 Barnes
                                                        Street<br>Orlandoundefined FL 32801<br></div>
                                                    <div class="Polaris-TextField__DummyInput"><br><br><br><br></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
      </div>
      <div class="Polaris-FormLayout__Item">
      <div class="wrapper">
                                                        <div class="dropzone_heading">
                                                            <h5>Add an Image</h5>
                                                        </div>
                                                        <div class="box add_promotion_box" style="margin-bottom:0px">
                                                            <div class="upload-options"><label>
                                                                    <div class="Polaris-Labelled--hidden">
                                                                        <div class="Polaris-Labelled__LabelWrapper">
                                                                            <div class="Polaris-Label">
                                                                                <input type="file" class="image-upload" accept="image/*" name="body_images">
                                                                            </div>
                                                                        </div>
                                                                        <div class="Polaris-DropZone Polaris-DropZone--hasOutline Polaris-DropZone--sizeMedium" aria-disabled="false"><span class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--visuallyHidden"><input id="upload_file" multiple="" type="file" autocomplete="off"></span>
                                                                            <div class="Polaris-DropZone__Container">
                                                                                <div class="Polaris-DropZone-FileUpload">
                                                                                    <div class="Polaris-AlphaStack" style="--pc-stack-inline-align:center;--pc-stack-order:column;--pc-stack-gap-xs:var(--p-space-2)">
                                                                                        <div class="Polaris-DropZone-FileUpload__Action" id="upload_file">Add files
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </label></div>
                                                            <div>
                                                                <div class="js--image-preview">
                                                                    <div class="thumbnails_img">
                                                                        @if($form4 && $form4->body_images)
                                                                            <img width="134" height="104" src="{{ asset('Imges4/body_images/' . $form4->body_images) }}">
                                                                        @else
                                                                            <img src="images/img_thumbanail.svg">
                                                                        @endif
                                                                    </div>
                                                                    <div class="close_img"><button class="close_img_btn">x
                                                                        </button></div>
                                                                </div>
                                                                <div class="img_dimantion" style="bottom:-0px !important">
                                                                    <p>(Image should be maximum<br> 1500 x 1500 jpg,
                                                                        png)
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
      </div>
    </div>
  </div>
</div>

                                <div class="Polaris-FormLayout" style="margin-top:0px">
                                    <div role="group" class="Polaris-FormLayout--grouped">
                                        <div class="Polaris-FormLayout__Items">
                                            <div class="Polaris-FormLayout__Item">
                                                <div class="">
                                                    <div class="Polaris-Labelled__LabelWrapper">
                                                        <div class="Polaris-Label"><label id="PolarisTextField1Label"
                                                                for="PolarisTextField1" class="Polaris-Label__Text">Font
                                                                Name</label></div>
                                                    </div>
                                                    <div class="Polaris-Connected1">
                                                        <div class="Polaris-Select">
                                                            <select name="body_name"
                                                                id="body_font_name" class="Polaris-Select__Input"
                                                                aria-invalid="false">
                                                                <option selected="" value="Arial">Arial</option>
                                                                <option value="Popins">Popins</option>
                                                                <option value="Roboto">Roboto</option>
                                                            </select>
                                                            <div class="Polaris-Select__Content" aria-hidden="true">
                                                                <span
                                                                    class="Polaris-Select__SelectedOption body_font_name">{{$form4->body_name ?? ''}}</span><span
                                                                    class="Polaris-Select__Icon"><span
                                                                        class="Polaris-Icon"><span
                                                                            class="Polaris-VisuallyHidden"></span><svg
                                                                            viewBox="0 0 20 20"
                                                                            class="Polaris-Icon__Svg" focusable="false"
                                                                            aria-hidden="true">
                                                                            <path
                                                                                d="M7.676 9h4.648c.563 0 .879-.603.53-1.014l-2.323-2.746a.708.708 0 0 0-1.062 0l-2.324 2.746c-.347.411-.032 1.014.531 1.014Zm4.648 2h-4.648c-.563 0-.878.603-.53 1.014l2.323 2.746c.27.32.792.32 1.062 0l2.323-2.746c.349-.411.033-1.014-.53-1.014Z">
                                                                            </path>
                                                                        </svg></span></span>
                                                            </div>
                                                            <div class="Polaris-Select__Backdrop"></div>
                                                        </div>
                                                        <script>
                                                        $('#body_font_name').change(function() {
                                                                var radiusunit = $(this).val();
                                                                $('.body_font_name').html(radiusunit);
                                                            }

                                                        );
                                                        </script>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="Polaris-FormLayout__Item">
                                                <div class="">
                                                    <div class="Polaris-Labelled__LabelWrapper">
                                                        <div class="Polaris-Label"><label id="PolarisTextField2Label"
                                                                for="PolarisTextField2" class="Polaris-Label__Text">Font
                                                                Size</label></div>
                                                    </div>
                                                    <div class="Polaris-Select">
                                                        <select name="body_size"
                                                            id="body_font_size" class="Polaris-Select__Input"
                                                            aria-invalid="false">
                                                            <option selected="" value="10">10</option>
                                                            <option value="20">20</option>
                                                            <option value="30">30</option>
                                                        </select>
                                                        <div class="Polaris-Select__Content" aria-hidden="true"><span
                                                                class="Polaris-Select__SelectedOption body_font_size">{{$form4->body_size ?? ''}}</span><span
                                                                class="Polaris-Select__Icon"><span
                                                                    class="Polaris-Icon"><span
                                                                        class="Polaris-VisuallyHidden"></span><svg
                                                                        viewBox="0 0 20 20" class="Polaris-Icon__Svg"
                                                                        focusable="false" aria-hidden="true">
                                                                        <path
                                                                            d="M7.676 9h4.648c.563 0 .879-.603.53-1.014l-2.323-2.746a.708.708 0 0 0-1.062 0l-2.324 2.746c-.347.411-.032 1.014.531 1.014Zm4.648 2h-4.648c-.563 0-.878.603-.53 1.014l2.323 2.746c.27.32.792.32 1.062 0l2.323-2.746c.349-.411.033-1.014-.53-1.014Z">
                                                                        </path>
                                                                    </svg></span></span></div>
                                                        <div class="Polaris-Select__Backdrop"></div>
                                                        <script>
                                                        $('#body_font_size').change(function() {
                                                                var radiusunit = $(this).val();
                                                                $('.body_font_size').html(radiusunit);
                                                            }

                                                        );
                                                        </script>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="Polaris-FormLayout__Items">
                                            <div class="Polaris-FormLayout__Item">
                                                <div class="">
                                                    <div class="color_picker">
                                                        <div class="Polaris-Label"><label id="PolarisTextField11Label"
                                                                for="PolarisTextField11"
                                                                class="Polaris-Label__Text for_text label_text_font">Font
                                                                Color (hexcode) </label></div>
                                                        <div style="padding: 4px 0px 2px;">
                                                            <div class="color_full_box">
                                                                <input type="text"
                                                                    id="color23_hex" class="for_color_box">
                                                                    <input
                                                                    type="color" id="color23"
                                                                    class="color_picker_box colorpickerbox"
                                                                    value="{{$form4->body_color ?? ''}}" name="body_color">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="Polaris-FormLayout__Item">
                                                <div class="">
                                                    <div class="Polaris-Labelled__LabelWrapper">
                                                        <div class="Polaris-Label"><label id="PolarisTextField2Label"
                                                                for="PolarisTextField2" class="Polaris-Label__Text">Text
                                                                Orientation</label></div>
                                                    </div>
                                                    <div class="Polaris-Connected1">
                                                        <div class="Polaris-Select">
                                                            <select name="body_orientation"
                                                                id="body_text_direction" class="Polaris-Select__Input"
                                                                aria-invalid="false">
                                                                <option selected="" value="Left">Left</option>
                                                                <option value="Right">Right</option>
                                                                <option value="Center">Center</option>
                                                            </select>
                                                            <div class="Polaris-Select__Content" aria-hidden="true">
                                                                <span
                                                                    class="Polaris-Select__SelectedOption body_text_direction">{{$form4->body_orientation ?? ''}}</span><span
                                                                    class="Polaris-Select__Icon"><span
                                                                        class="Polaris-Icon"><span
                                                                            class="Polaris-VisuallyHidden"></span><svg
                                                                            viewBox="0 0 20 20"
                                                                            class="Polaris-Icon__Svg" focusable="false"
                                                                            aria-hidden="true">
                                                                            <path
                                                                                d="M7.676 9h4.648c.563 0 .879-.603.53-1.014l-2.323-2.746a.708.708 0 0 0-1.062 0l-2.324 2.746c-.347.411-.032 1.014.531 1.014Zm4.648 2h-4.648c-.563 0-.878.603-.53 1.014l2.323 2.746c.27.32.792.32 1.062 0l2.323-2.746c.349-.411.033-1.014-.53-1.014Z">
                                                                            </path>
                                                                        </svg></span></span>
                                                            </div>
                                                            <div class="Polaris-Select__Backdrop"></div>
                                                        </div>
                                                        <script>
                                                        $('#body_text_direction').change(function() {
                                                                var radiusunit = $(this).val();
                                                                $('.body_text_direction').html(radiusunit);
                                                            }

                                                        );
                                                        </script>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="Polaris-FormLayout__Items">
                                            <div class="Polaris-FormLayout__Item">
                                                <div class="">
                                                    <div class="Polaris-Labelled__LabelWrapper">
                                                        <div class="Polaris-Label"><label id="PolarisTextField1Label"
                                                                for="PolarisTextField1" class="Polaris-Label__Text">Text
                                                                Style</label></div>
                                                    </div>
                                                    <div class="Polaris-Connected1">
                                                        <div class="Polaris-Select">
                                                            <select name="body_style"
                                                                id="body_font_style" class="Polaris-Select__Input"
                                                                aria-invalid="false">
                                                                <option selected="" value="Bold">Bold</option>
                                                                <option value="Italic">Italic</option>
                                                                <option value="Regular">Regular</option>
                                                            </select>
                                                            <div class="Polaris-Select__Content" aria-hidden="true">
                                                                <span
                                                                    class="Polaris-Select__SelectedOption body_font_style">{{$form4->body_style ?? ''}}</span><span
                                                                    class="Polaris-Select__Icon"><span
                                                                        class="Polaris-Icon"><span
                                                                            class="Polaris-VisuallyHidden"></span><svg
                                                                            viewBox="0 0 20 20"
                                                                            class="Polaris-Icon__Svg" focusable="false"
                                                                            aria-hidden="true">
                                                                            <path
                                                                                d="M7.676 9h4.648c.563 0 .879-.603.53-1.014l-2.323-2.746a.708.708 0 0 0-1.062 0l-2.324 2.746c-.347.411-.032 1.014.531 1.014Zm4.648 2h-4.648c-.563 0-.878.603-.53 1.014l2.323 2.746c.27.32.792.32 1.062 0l2.323-2.746c.349-.411.033-1.014-.53-1.014Z">
                                                                            </path>
                                                                        </svg></span></span>
                                                            </div>
                                                            <div class="Polaris-Select__Backdrop"></div>
                                                        </div>
                                                        <script>
                                                        $('#body_font_style').change(function() {
                                                                var radiusunit = $(this).val();
                                                                $('.body_font_style').html(radiusunit);
                                                            }

                                                        );
                                                        </script>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="Polaris-FormLayout__Item">
                                                <div class="">
                                                    <div class="Polaris-Labelled__LabelWrapper">
                                                        <div class="Polaris-Label"><label id="PolarisTextField2Label"
                                                                for="PolarisTextField2"
                                                                class="Polaris-Label__Text">Underline</label></div>
                                                    </div>
                                                    <div class="Polaris-Select">
                                                        <select name="body_underline"
                                                            id="body_font_border_style" class="Polaris-Select__Input"
                                                            aria-invalid="false">
                                                            <option selected="" value="Solid">Solid</option>
                                                            <option value="Dotted">Dotted</option>
                                                            <option value="Dashed">Dashed</option>
                                                        </select>
                                                        <div class="Polaris-Select__Content" aria-hidden="true"><span
                                                                class="Polaris-Select__SelectedOption body_font_border_style">{{$form4->body_underline ?? ''}}</span><span
                                                                class="Polaris-Select__Icon"><span
                                                                    class="Polaris-Icon"><span
                                                                        class="Polaris-VisuallyHidden"></span><svg
                                                                        viewBox="0 0 20 20" class="Polaris-Icon__Svg"
                                                                        focusable="false" aria-hidden="true">
                                                                        <path
                                                                            d="M7.676 9h4.648c.563 0 .879-.603.53-1.014l-2.323-2.746a.708.708 0 0 0-1.062 0l-2.324 2.746c-.347.411-.032 1.014.531 1.014Zm4.648 2h-4.648c-.563 0-.878.603-.53 1.014l2.323 2.746c.27.32.792.32 1.062 0l2.323-2.746c.349-.411.033-1.014-.53-1.014Z">
                                                                        </path>
                                                                    </svg></span></span></div>
                                                        <div class="Polaris-Select__Backdrop"></div>
                                                        <script>
                                                        $('#body_font_border_style').change(function() {
                                                                var radiusunit = $(this).val();
                                                                $('.body_font_border_style').html(radiusunit);
                                                            }

                                                        );
                                                        </script>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="Polaris-Card">
                            <div class="Polaris-Card__Section">
                                <div class="funnel_heading manage_add_button">
                                    <h2 class="Polaris-Text--root Polaris-Text--headingMd">Button Design Details CSS
                                    </h2>
                                    <button class="Polaris-Button append_btn_class" type="button"><span
                                            class="Polaris-Button__Content"><span class="Polaris-Button__Text ">Add New
                                                Button</span></span></button>
                                </div>
                            
                                <div class="Polaris-FormLayout">
                                    <div role="group" class="Polaris-FormLayout--grouped">
                                        <div class="Polaris-FormLayout__Items">
                                            <div class="Polaris-FormLayout__Item">
                                                <div class="spaceing_manage_block " style="margin-bottom:0px">
                                                    <div class="Polaris-Labelled__LabelWrapper">
                                                        <div class="Polaris-Label"><label id="PolarisTextField1Label"
                                                                for="PolarisTextField1"
                                                                class="Polaris-Label__Text">Button
                                                                Text</label></div>
                                                    </div>
                                                    <div class="Polaris-Connected">
                                                        <div
                                                            class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                            <div class="Polaris-TextField">
                                                                <input id="PolarisTextField1"
                                                                    autocomplete="off" class="Polaris-TextField__Input"
                                                                    type="text" aria-labelledby="PolarisTextField1Label"
                                                                    aria-invalid="false" value="{{$form4->button_text ?? ''}}" name="button_text">
                                                                <div class="Polaris-TextField__Backdrop"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="Polaris-FormLayout__Item">
                                                <div class="spaceing_manage_block" style="margin-bottom:0px">
                                                    <div class="Polaris-Labelled__LabelWrapper">
                                                        <div class="Polaris-Label"><label id="PolarisTextField2Label"
                                                                for="PolarisTextField2"
                                                                class="Polaris-Label__Text">Hyper
                                                                Link</label></div>
                                                    </div>
                                                    <div class="Polaris-Connected">
                                                        <div
                                                            class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                            <div class="Polaris-TextField">
                                                                <input id="PolarisTextField1"
                                                                    autocomplete="off" class="Polaris-TextField__Input"
                                                                    type="text" aria-labelledby="PolarisTextField1Label"
                                                                    aria-invalid="false" value="{{$form4->button_link ?? ''}}" name="button_link">
                                                                <div class="Polaris-TextField__Backdrop"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="Polaris-FormLayout">
                                    <div role="group" class="Polaris-FormLayout--grouped">
                                        <div class="Polaris-FormLayout__Items">
                                            <div class="Polaris-FormLayout__Item">
                                                <div class="spaceing_manage_block" style="margin-bottom:0px">
                                                    <div class="Polaris-Labelled__LabelWrapper">
                                                        <div class="Polaris-Label"><label id="PolarisTextField1Label"
                                                                for="PolarisTextField1" class="Polaris-Label__Text">Font
                                                                Name</label></div>
                                                    </div>
                                                    <div class="Polaris-Connected1">
                                                        <div class="Polaris-Select">
                                                            <select name="button_name"
                                                                id="Button_font_name" class="Polaris-Select__Input"
                                                                aria-invalid="false">
                                                                <option selected="" value="Arial">Arial</option>
                                                                <option value="Popins">Popins</option>
                                                                <option value="Roboto">Roboto</option>
                                                            </select>
                                                            <div class="Polaris-Select__Content" aria-hidden="true">
                                                                <span
                                                                    class="Polaris-Select__SelectedOption Button_font_name">{{$form4->button_name ?? ''}}</span><span
                                                                    class="Polaris-Select__Icon"><span
                                                                        class="Polaris-Icon"><span
                                                                            class="Polaris-VisuallyHidden"></span><svg
                                                                            viewBox="0 0 20 20"
                                                                            class="Polaris-Icon__Svg" focusable="false"
                                                                            aria-hidden="true">
                                                                            <path
                                                                                d="M7.676 9h4.648c.563 0 .879-.603.53-1.014l-2.323-2.746a.708.708 0 0 0-1.062 0l-2.324 2.746c-.347.411-.032 1.014.531 1.014Zm4.648 2h-4.648c-.563 0-.878.603-.53 1.014l2.323 2.746c.27.32.792.32 1.062 0l2.323-2.746c.349-.411.033-1.014-.53-1.014Z">
                                                                            </path>
                                                                        </svg></span></span>
                                                            </div>
                                                            <div class="Polaris-Select__Backdrop"></div>
                                                        </div>
                                                    </div>
                                                  
                                                </div>
                                            </div>
                                            <div class="Polaris-FormLayout__Item">
                                                <div class="spaceing_manage_block" style="margin-bottom:0px">
                                                    <div class="Polaris-Labelled__LabelWrapper">
                                                        <div class="Polaris-Label"><label id="PolarisTextField2Label"
                                                                for="PolarisTextField2" class="Polaris-Label__Text">Font
                                                                Size</label></div>
                                                    </div>
                                                    <div class="Polaris-Select">
                                                        <select name="button_size"
                                                            id="button_font_size" class="Polaris-Select__Input"
                                                            aria-invalid="false">
                                                            <option selected="" value="10">10</option>
                                                            <option value="20">20</option>
                                                            <option value="30">30</option>
                                                        </select>
                                                        <div class="Polaris-Select__Content" aria-hidden="true"><span
                                                                class="Polaris-Select__SelectedOption button_font_size">{{$form4->button_size ?? ''}}</span><span
                                                                class="Polaris-Select__Icon"><span
                                                                    class="Polaris-Icon"><span
                                                                        class="Polaris-VisuallyHidden"></span><svg
                                                                        viewBox="0 0 20 20" class="Polaris-Icon__Svg"
                                                                        focusable="false" aria-hidden="true">
                                                                        <path
                                                                            d="M7.676 9h4.648c.563 0 .879-.603.53-1.014l-2.323-2.746a.708.708 0 0 0-1.062 0l-2.324 2.746c-.347.411-.032 1.014.531 1.014Zm4.648 2h-4.648c-.563 0-.878.603-.53 1.014l2.323 2.746c.27.32.792.32 1.062 0l2.323-2.746c.349-.411.033-1.014-.53-1.014Z">
                                                                        </path>
                                                                    </svg></span></span></div>
                                                        <div class="Polaris-Select__Backdrop"></div>
                                                      
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="Polaris-FormLayout">
                                    <div role="group" class="Polaris-FormLayout--grouped">
                                        <div class="Polaris-FormLayout__Items">
                                            <div class="Polaris-FormLayout__Item">
                                                <div class="spaceing_manage_block " style="margin-bottom:0px">
                                                    <div class="">
                                                        <div class="color_picker">
                                                            <div class="Polaris-Label"><label
                                                                    id="PolarisTextField11Label"
                                                                    for="PolarisTextField11"
                                                                    class="Polaris-Label__Text for_text label_text_font">Background
                                                                    Color </label></div>
                                                            <div style="padding: 4px 0px 2px;">
                                                                <div class="color_full_box">
                                                                    <input type="text"
                                                                        id="color18_hex" class="for_color_box" name="button_color">
                                                                    <input
                                                                        type="color" id="color18"
                                                                        class="color_picker_box colorpickerbox"
                                                                        value="{{$form4->button_color ?? ''}}" name="button_color"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="Polaris-FormLayout__Item">
                                                <div class="spaceing_manage_block" style="margin-bottom:0px">
                                                    <div class="">
                                                        <div class="color_picker">
                                                            <div class="Polaris-Label"><label
                                                                    id="PolarisTextField11Label"
                                                                    for="PolarisTextField11"
                                                                    class="Polaris-Label__Text for_text label_text_font">Font
                                                                    Color </label></div>
                                                            <div style="padding: 4px 0px 2px;">
                                                                <div class="color_full_box">
                                                                    <input type="text"
                                                                        id="color17_hex" class="for_color_box" name="button_color1">
                                                                    <input
                                                                        type="color" id="color17"
                                                                        class="color_picker_box colorpickerbox"
                                                                        value="{{$form4->button_color1 ?? ''}}" name="button_color1"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="Polaris-FormLayout__Items">
                                            <div class="Polaris-FormLayout__Item">
                                                <div class="">
                                                    <div class="Polaris-Labelled__LabelWrapper">
                                                        <div class="Polaris-Label"><label id="PolarisTextField1Label"
                                                                for="PolarisTextField1"
                                                                class="Polaris-Label__Text">Width</label></div>
                                                    </div>
                                                    <div class="Polaris-Connected">
                                                        <div
                                                            class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                            <div class="Polaris-TextField Add_custom_polaris">
                                                                <input
                                                                    id="PolarisTextField1" autocomplete="off"
                                                                    class="Polaris-TextField__Input" type="number"
                                                                    aria-labelledby="PolarisTextField1Label"
                                                                    aria-invalid="false" value="{{$form4->button_width ?? ''}}" name="button_width">
                                                                <div class="Polaris-TextField__Backdrop"></div>
                                                                <div class="manage_dimension_pixel">
                                                                    <p>PX</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="Polaris-FormLayout__Item">
                                                <div class="">
                                                    <div class="Polaris-Labelled__LabelWrapper">
                                                        <div class="Polaris-Label"><label id="PolarisTextField2Label"
                                                                for="PolarisTextField2"
                                                                class="Polaris-Label__Text">Height</label></div>
                                                    </div>
                                                    <div class="Polaris-Connected">
                                                        <div
                                                            class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                            <div class="Polaris-TextField Add_custom_polaris">
                                                                <input
                                                                    id="PolarisTextField1" autocomplete="off"
                                                                    class="Polaris-TextField__Input" type="number"
                                                                    aria-labelledby="PolarisTextField1Label"
                                                                    aria-invalid="false" value="{{$form4->button_height ?? ''}}" name="button_height">
                                                                <div class="Polaris-TextField__Backdrop"></div>
                                                                <div class="manage_dimension_pixel">
                                                                    <p>PX</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="Polaris-Card">
                            <div class="Polaris-Card__Section">
                                <div class="Polaris-FormLayout">
                                    <div role="group" class="Polaris-FormLayout--grouped">
                                        <div class="Polaris-FormLayout__Items">
                                            <div class="Polaris-FormLayout__Item">
                                                <div class="wrapper">
                                                    <div class="dropzone_heading">
                                                        <h5>Background images</h5>
                                                    </div>
                                                    <div class="box add_promotion_box">
                                                        <div class="upload-options"><label>
                                                                <div class="Polaris-Labelled--hidden">
                                                                    <div class="Polaris-Labelled__LabelWrapper">
                                                                        <div class="Polaris-Label">
                                                                            <input type="file"
                                                                                class="image-upload" accept="image/*" name="button_images">
                                                                        </div>
                                                                    </div>
                                                                    <div class="Polaris-DropZone Polaris-DropZone--hasOutline Polaris-DropZone--sizeMedium"
                                                                        aria-disabled="false"><span
                                                                            class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--visuallyHidden"><input
                                                                                id="upload_file" multiple="" type="file"
                                                                                autocomplete="off"></span>
                                                                        <div class="Polaris-DropZone__Container">
                                                                            <div class="Polaris-DropZone-FileUpload">
                                                                                <div class="Polaris-AlphaStack"
                                                                                    style="--pc-stack-inline-align:center;--pc-stack-order:column;--pc-stack-gap-xs:var(--p-space-2)">
                                                                                    <div class="Polaris-DropZone-FileUpload__Action"
                                                                                        id="upload_file">Add files</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </label></div>
                                                        <div>
                                                            <div class="js--image-preview">
                                                                <div class="thumbnails_img">
                                                                @if($form4 && $form4->button_images)
                                                                    <img width="134" height="104" src="{{ asset('Imges4/button_images/' . $form4->button_images) }}">
                                                                @else
                                                                    <img src="images/img_thumbanail.svg">
                                                                @endif
                                                                    </div>
                                                                <div class="close_img"><button class="close_img_btn">x
                                                                    </button></div>
                                                            </div>
                                                            <div class="img_dimantion" style="bottom:-0px !important">
                                                                <p>(Image should be maximum<br> 1500 x 1500 jpg, png)
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="Polaris-FormLayout__Item">
                                                <div class="">
                                                    <div class="dropzone_heading">
                                                        <h5>Additional Modules / Add Sections </h5>
                                                    </div><button class="Polaris-Button" type="button"><span
                                                            class="Polaris-Button__Content"><span
                                                                class="Polaris-Button__Text">Add New
                                                                Module</span></span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="Polaris-Card">
                            <div class="Polaris-Card__Section">
                                <div class="funnel_heading" style="padding-bottom:10px">
                                    <h2 class="Polaris-Text--root Polaris-Text--headingMd">Tile Design Details CSS </h2>
                                </div>
                                <div class="Polaris-FormLayout">
                                    <div role="group" class="Polaris-FormLayout--grouped">
                                        <div class="Polaris-FormLayout__Items">
                                            <div class="Polaris-FormLayout__Item">
                                                <div class="">
                                                    <div class="details_section" style="margin-top:0px">
                                                        <h3>Tile Size</h3>
                                                    </div>
                                                    <div class="Polaris-Labelled__LabelWrapper">
                                                        <div class="Polaris-Label"><label id="PolarisTextField1Label"
                                                                for="PolarisTextField1"
                                                                class="Polaris-Label__Text">Height</label></div>
                                                    </div>
                                                    <div class="Polaris-Connected">
                                                        <div
                                                            class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                            <div class="Polaris-TextField Add_custom_polaris">
                                                                <input
                                                                    id="PolarisTextField1" autocomplete="off"
                                                                    class="Polaris-TextField__Input" type="text"
                                                                    aria-labelledby="PolarisTextField1Label"
                                                                    aria-invalid="false" value="{{$form4->tile_height ?? ''}}" name="tile_height">
                                                                <div class="Polaris-TextField__Backdrop"></div>
                                                                <div class="manage_dimension_pixel">
                                                                    <p>PX</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="Polaris-FormLayout__Item">
                                                <div class="">
                                                    <div class="details_section" style="margin-top:0px">
                                                        <h3>Tile Color</h3>
                                                    </div>
                                                    <div class="">
                                                        <div class="color_picker">
                                                            <div class="Polaris-Label"><label
                                                                    id="PolarisTextField11Label"
                                                                    for="PolarisTextField11"
                                                                    class="Polaris-Label__Text for_text label_text_font">Color
                                                                    (hexcode) </label></div>
                                                            <div style="padding: 4px 0px 2px;">
                                                                <div class="color_full_box">
                                                                    <input type="text"
                                                                        id="color15_hex" class="for_color_box" name="tile_color">
                                                                        <input
                                                                        type="color" id="color15"
                                                                        class="color_picker_box colorpickerbox"
                                                                        value="{{$form4->tile_color ?? ''}}" name="tile_color"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="Polaris-FormLayout">
                                    <div role="group" class="Polaris-FormLayout--grouped">
                                        <div class="Polaris-FormLayout__Items">
                                            <div class="Polaris-FormLayout__Item">
                                                <div class="spaceing_manage_block">
                                                    <div class="Polaris-Labelled__LabelWrapper">
                                                        <div class="Polaris-Label"><label id="PolarisTextField1Label"
                                                                for="PolarisTextField1"
                                                                class="Polaris-Label__Text">Width</label></div>
                                                    </div>
                                                    <div class="Polaris-Connected">
                                                        <div
                                                            class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                            <div class="Polaris-TextField Add_custom_polaris">
                                                                <input
                                                                    id="PolarisTextField1" autocomplete="off"
                                                                    class="Polaris-TextField__Input" type="text"
                                                                    aria-labelledby="PolarisTextField1Label"
                                                                    aria-invalid="false" value="{{$form4->tile_width ?? ''}}" name="tile_width">
                                                                <div class="Polaris-TextField__Backdrop"></div>
                                                                <div class="manage_dimension_pixel">
                                                                    <p>PX</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="spaceing_manage_block ">
                                                    <div class="rounded_btn_block">
                                                        <h5>Rounded Button</h5>
                                                        <!-- <label class="switch" for="checkbox_2">
                                                            <input type="checkbox" id="checkbox_2">
                                                            <div class="slider round"></div>
                                                        </label> -->
                                                    </div>
                                                    <div class="range-slider1" style="margin-bottom:10px">
                                                        <div id="tooltip" style="left: calc(60% + -3.2px);"><span>60</span></div>
                                                        <input id="range" type="range" step="10" value="{{$form4->round_button ?? ''}}" min="0" max="100" name="round_button">
                                                    </div>

                                                    <div class="Polaris-Labelled__LabelWrapper" style="padding-top:20px">
                                                        <div class="Polaris-Label">
                                                            <label id="PolarisTextField1Label" for="PolarisTextField1" class="Polaris-Label__Text">Text on
                                                                hover</label>
                                                        </div>
                                                    </div>
                                                    <div class="Polaris-Connected">
                                                        <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                            <div class="Polaris-TextField">
                                                                <input id="PolarisTextField1" autocomplete="off" class="Polaris-TextField__Input" type="text" aria-labelledby="PolarisTextField1Label" aria-invalid="false" value="{{$form4->text_hover ?? ''}}" name="text_hover">
                                                                <div class="Polaris-TextField__Backdrop">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="Polaris-FormLayout__Item">
                                                <div class="spaceing_manage_block">
                                                    <div class="Polaris-Labelled__LabelWrapper">
                                                        <div class="rounded_btn_block">
                                                            <h5>Texture</h5><label class="switch"
                                                                for="checkbox_3">
                                                                <input type="checkbox" id="checkbox_3" name="tile_texture" {{ $form4 ? 'checked' : '' }}>
                                                                <div class="slider round"></div>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="Polaris-Connected2">
                                                        <div class="wrapper" style="margin-left:10px">
                                                            <div class="dropzone_heading">
                                                                <h5>Texture images</h5>
                                                            </div>
                                                            <div class="box add_promotion_box">
                                                                <div class="upload-options"><label>
                                                                        <div class="Polaris-Labelled--hidden">
                                                                            <div class="Polaris-Labelled__LabelWrapper">
                                                                                <div class="Polaris-Label">
                                                                                    <input
                                                                                        type="file" class="image-upload"
                                                                                        accept="image/*" name="tile_images"></div>
                                                                            </div>
                                                                            <div class="Polaris-DropZone Polaris-DropZone--hasOutline Polaris-DropZone--sizeMedium"
                                                                                aria-disabled="false"><span
                                                                                    class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--visuallyHidden"><input
                                                                                        id="upload_file" multiple=""
                                                                                        type="file"
                                                                                        autocomplete="off"></span>
                                                                                <div
                                                                                    class="Polaris-DropZone__Container">
                                                                                    <div
                                                                                        class="Polaris-DropZone-FileUpload">
                                                                                        <div class="Polaris-AlphaStack"
                                                                                            style="--pc-stack-inline-align:center;--pc-stack-order:column;--pc-stack-gap-xs:var(--p-space-2)">
                                                                                            <div class="Polaris-DropZone-FileUpload__Action"
                                                                                                id="upload_file">Add
                                                                                                files
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </label></div>
                                                                <div>
                                                                    <div class="js--image-preview">
                                                                        <div class="thumbnails_img">
                                                                            @if($form4 && $form4->tile_images)
                                                                                <img width="134" height="104" src="{{ asset('Imges4/tile_images/' . $form4->tile_images) }}">
                                                                            @else
                                                                                <img src="images/img_thumbanail.svg">
                                                                            @endif
                                                                            </div>
                                                                        <div class="close_img"><button
                                                                                class="close_img_btn">x </button></div>
                                                                    </div>
                                                                    <div class="img_dimantion"
                                                                        style="bottom:-0px !important">
                                                                        <p>(Image should be maximum<br> 1500 x 1500 jpg,
                                                                            png)</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="Polaris-Card">
                            <div class="Polaris-Card__Section">
                                <div></div>
                                <div class="Polaris-FormLayout">
                                    <div role="group" class="Polaris-FormLayout--grouped">
                                        <div class="Polaris-FormLayout__Items">
                                            <div class="Polaris-FormLayout__Item">
                                                <div class="spaceing_manage_block " style="margin-bottom:0px">
                                                    <div class="Polaris-Labelled__LabelWrapper">
                                                        <div class="Polaris-Label"><label id="PolarisTextField1Label"
                                                                for="PolarisTextField1"
                                                                class="Polaris-Label__Text">Google
                                                                Spreadsheet ID (name)</label></div>
                                                    </div>
                                                    <div class="Polaris-Connected">
                                                        <div
                                                            class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                            <div class="Polaris-TextField">
                                                                <input id="PolarisTextField1"
                                                                    autocomplete="off" class="Polaris-TextField__Input"
                                                                    type="text" aria-labelledby="PolarisTextField1Label"
                                                                    aria-invalid="false" value="{{$form4->id_name ?? ''}}" name="id_name">
                                                                <div class="Polaris-TextField__Backdrop"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="Polaris-FormLayout__Item">
                                                <div class="spaceing_manage_block" style="margin-bottom:0px">
                                                    <div class="Polaris-Labelled__LabelWrapper">
                                                        <div class="Polaris-Label"><label id="PolarisTextField2Label"
                                                                for="PolarisTextField2"
                                                                class="Polaris-Label__Text">Google
                                                                Spreadsheet Tab Name</label></div>
                                                    </div>
                                                    <div class="Polaris-Connected">
                                                        <div
                                                            class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                            <div class="Polaris-TextField">
                                                                <input id="PolarisTextField2"
                                                                    autocomplete="off" class="Polaris-TextField__Input"
                                                                    type="text" aria-labelledby="PolarisTextField2Label"
                                                                    aria-invalid="false" value="{{$form4->tab_name ?? ''}}" name="tab_name">
                                                                <div class="Polaris-TextField__Backdrop"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="Polaris-Card">
                            <div class="Polaris-Card__Section">
                                <div class="brands_img_text">
                                    <div class="text_select_brands">
                                        <p>Avoid Consecutive Submissions</p>
                                    </div>
                                </div>
                                <div class="check_box_section">
                                <label>
                                        <input type="radio" id="Yes" name="fav_language" value="Yes" @if(isset($form4) && $form4->fav_language === 'Yes') checked @endif>
                                        <label for="Yes">Yes</label>
                                    </label>
                                    <label>
                                        <input type="radio" id="No" name="fav_language" value="No" @if(isset($form4) && $form4->fav_language === 'No') checked @endif>
                                        <label for="No">No</label>
                                    </label>
                                </div>
                                <div class="spacing_form_section">
                                    <div class="Polaris-Labelled__LabelWrapper">
                                        <div class="Polaris-Label"><label id="PolarisTextField1Label"
                                                for="PolarisTextField1" class="Polaris-Label__Text">Redirect for
                                                Consecutive
                                                Submissions</label></div>
                                    </div>
                                    <div class="Polaris-Connected1">
                                        <div class="Polaris-Select">
                                            <select name="home_status" id="redirect_link_funnel_form"
                                                class="Polaris-Select__Input" aria-invalid="false">
                                                <option selected="" value="Homepage">Homepage</option>
                                                <option value="Homepage2">Homepage2</option>
                                                <option value="Homepage3">Homepage3</option>
                                            </select>
                                            <div class="Polaris-Select__Content" aria-hidden="true"><span
                                                    class="Polaris-Select__SelectedOption redirect_link_funnel_form">{{$form4->home_status ?? ''}}</span><span
                                                    class="Polaris-Select__Icon"><span class="Polaris-Icon"><span
                                                            class="Polaris-VisuallyHidden"></span><svg
                                                            viewBox="0 0 20 20" class="Polaris-Icon__Svg"
                                                            focusable="false" aria-hidden="true">
                                                            <path
                                                                d="M7.676 9h4.648c.563 0 .879-.603.53-1.014l-2.323-2.746a.708.708 0 0 0-1.062 0l-2.324 2.746c-.347.411-.032 1.014.531 1.014Zm4.648 2h-4.648c-.563 0-.878.603-.53 1.014l2.323 2.746c.27.32.792.32 1.062 0l2.323-2.746c.349-.411.033-1.014-.53-1.014Z">
                                                            </path>
                                                        </svg></span></span></div>
                                            <div class="Polaris-Select__Backdrop"></div>
                                        </div>
                                    </div>
                                   
                                </div>

                                <div class="spacing_form_section" hidden>
                                    <div class="Polaris-Labelled__LabelWrapper">
                                        <div class="Polaris-Label">
                                            <label id="PolarisTextField1Label" for="PolarisTextField1"
                                                class="Polaris-Label__Text">Redirect for Consecutive
                                                Submissions</label>
                                        </div>
                                    </div>
                                    <div class="Polaris-Connected1">
                                        <div class="Polaris-Select">
                                        <select name="home_status1" id="redirect_link" class="Polaris-Select__Input"
                                                aria-invalid="false"  value="{{$data->home_status1 ??  ''}}">
                                                <option selected="" name="home_status1" hidden  value="Homepage">Homepage</option>
                                                <option name="home_status1" hidden value="Homepage2">Homepage2</option>
                                                <option name="home_status1" hidden value="Homepage3">Homepage3</option>
                                            </select>
                                            <div class="Polaris-Select__Content" aria-hidden="true">
                                                <span
                                                    class="Polaris-Select__SelectedOption redirect_link">Homepage</span>
                                                <span class="Polaris-Select__Icon">
                                                    <span class="Polaris-Icon">
                                                        <span class="Polaris-VisuallyHidden">
                                                        </span>
                                                        <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg"
                                                            focusable="false" aria-hidden="true">
                                                            <path
                                                                d="M7.676 9h4.648c.563 0 .879-.603.53-1.014l-2.323-2.746a.708.708 0 0 0-1.062 0l-2.324 2.746c-.347.411-.032 1.014.531 1.014Zm4.648 2h-4.648c-.563 0-.878.603-.53 1.014l2.323 2.746c.27.32.792.32 1.062 0l2.323-2.746c.349-.411.033-1.014-.53-1.014Z">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </span>
                                            </div>
                                            <div class="Polaris-Select__Backdrop">
                                            </div>
                                        </div>
                                    </div>
                                   
                                </div>


                            </div>
                            <div></div>
                        </div>
                    </div>
                    <div class="Polaris-FormLayout__Item">
                        <div class="sticky_section_preview">
                             <div class="Polaris-Card">
                            <div class="Polaris-Card__Header preview_heading">
                                <h2 class="Polaris-Text--root Polaris-Text--headingMd">Preview</h2>
                            </div>
                            <div class="Polaris-Card__Section">
                                <div class="preview_img" style="padding:50px 20px">
                                    <div class="forms_section_layouts">
                                        <div class="forms_img_preview"><img
                                                src="https://jitterygit.com/wp-content/uploads/2020/11/kid-promotios.png">
                                        </div>
                                        <div class="forms_layout">
                                            <h3>Claim Your FREE VOUCHER !</h3>
                                            <p>Fill this form to receive a FREE VOUCHER* Offer Limited to Existing
                                                Customers
                                            </p>
                                            <div class="form_column_append">
                                                <div class="form_fill_data">
                                                    <div class="">
                                                        <div class="Polaris-Connected">
                                                            <div
                                                                class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                                <div
                                                                    class="Polaris-TextField Polaris-TextField--hasValue">
                                                                    <input id="PolarisTextField1" autocomplete="off"
                                                                        class="Polaris-TextField__Input" type="text"
                                                                        aria-labelledby="PolarisTextField1Label"
                                                                        aria-invalid="false" value="Full Name">
                                                                    <div class="Polaris-TextField__Backdrop"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form_fill_data">
                                                    <div class="">
                                                        <div class="Polaris-Connected">
                                                            <div
                                                                class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                                <div
                                                                    class="Polaris-TextField Polaris-TextField--hasValue">
                                                                    <input id="PolarisTextField1" autocomplete="off"
                                                                        class="Polaris-TextField__Input" type="text"
                                                                        aria-labelledby="PolarisTextField1Label"
                                                                        aria-invalid="false" value="Email">
                                                                    <div class="Polaris-TextField__Backdrop"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form_fill_data">
                                                    <div class="">
                                                        <div class="Polaris-Connected">
                                                            <div
                                                                class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                                <div
                                                                    class="Polaris-TextField Polaris-TextField--hasValue">
                                                                    <input id="PolarisTextField1" autocomplete="off"
                                                                        class="Polaris-TextField__Input" type="text"
                                                                        aria-labelledby="PolarisTextField1Label"
                                                                        aria-invalid="false" value="Phone">
                                                                    <div class="Polaris-TextField__Backdrop"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="custome_btn_data">
                                                <div class="add_new_btn_manage">
                                                <button
                                                class="Polaris-Button Polaris-Button--primary Polaris-Button--fullWidth"
                                                type="button"><span class="Polaris-Button__Content"><span
                                                        class="Polaris-Button__Text">GET MY FREE
                                                        VOUCHERS</span></span></button>
                                                </div>
                                          
                                            </div>

                                          
                                            <div class="forms_text_block">
                                                <p>*Conditions Apply: Limited to one gift per email account. To qualify
                                                    participants must have purchased a qualifying product and must have
                                                    received gold winning sticker on the inside of the box. We don't
                                                    share your personal information with anyone</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="free_voucher_section">
                                    <h3>Get Your FREE VOUCHER,
                                        in 3 simple steps</h3>
                                </div>
                                <div class="custome_preview_block  edit_btn_sapce">
                                    <div class="brands_block_preview">
                                        <div><img src="https://jitterygit.com/wp-content/uploads/2020/11/step1.jpg">
                                        </div>
                                        <h3>Fill out the Online Form </h3>
                                        <p>The first step to receive your FREE VOUCHER is to complete the form in this
                                            page.
                                            This offer is valid only for customers that bought the product through our
                                            Official Seller on Amazon.com </p>
                                    </div>
                                    <div class="brands_block_preview">
                                        <div><img src="https://jitterygit.com/wp-content/uploads/2020/11/step2.jpg">
                                        </div>
                                        <h3>Provide Your Order ID </h3>
                                        <p>After filling the form you will be asked to input your Amazon order ID for us
                                            to
                                            locate your order and validate your gift. Your gift will be sent to the
                                            shipping
                                            address specified in your order. </p>
                                    </div>
                                    <div class="brands_block_preview">
                                        <div><img src="https://jitterygit.com/wp-content/uploads/2020/11/VOUCHER.png">
                                        </div>
                                        <h3>Receive your FREE VOUCHER </h3>
                                        <p>If you qualify for a FREE VOUCHER we will send you an email confirming your
                                            submission within 72 hours. Once the process is completed you will receive
                                            your
                                            FREE VOUCHER by email automatically. </p>
                                    </div>
                                </div>
                                <div class="edit_btn_preview"><button class="Polaris-Button Polaris-Button--primary"
                                        type="button"><span class="Polaris-Button__Content"><span
                                                class="Polaris-Button__Text">Edit</span></span></button></div>
                            </div>
                        </div>
                        <div class="next_previsuos_section"><button class="Polaris-Button" type="button"><span
                                    class="Polaris-Button__Content"><span
                                        class="Polaris-Button__Text">Previous</span></span></button><button
                                class="Polaris-Button" type="button"><span class="Polaris-Button__Content"><span
                                        class="Polaris-Button__Text">Next</span></span></button>
                                    </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="Polaris-FooterHelp">
                <div class="Polaris-FooterHelp__Content polaris_footer_bottom">
                    <div class="Polaris-FooterHelp__Icon"><span
                            class="Polaris-Icon Polaris-Icon--colorHighlight Polaris-Icon--applyColor"><span
                                class="Polaris-VisuallyHidden"></span><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg"
                                focusable="false" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-9 3a1 1 0 1 0 2 0v-2a1 1 0 1 0-2 0v2zm0-6a1 1 0 1 0 2 0 1 1 0 0 0-2 0z">
                                </path>
                            </svg></span></div>
                    <div class="Polaris-FooterHelp__Text">Learn more about <a target="_blank" class="Polaris-Link"
                            href="https://help.shopify.com/manual/orders/fulfill-orders" rel="noopener noreferrer"
                            data-polaris-unstyled="true">fulfilling orders <span class="Polaris-Link__IconLockup"><span
                                    class="Polaris-Link__IconLayout"><span class="Polaris-Icon"><span
                                            class="Polaris-VisuallyHidden">(opens a new window)</span><svg
                                            viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false"
                                            aria-hidden="true">
                                            <path
                                                d="M14 13v1a1 1 0 0 1-1 1H6c-.575 0-1-.484-1-1V7a1 1 0 0 1 1-1h1c1.037 0 1.04 1.5 0 1.5-.178.005-.353 0-.5 0v6h6V13c0-1 1.5-1 1.5 0zm-3.75-7.25A.75.75 0 0 1 11 5h4v4a.75.75 0 0 1-1.5 0V7.56l-3.22 3.22a.75.75 0 1 1-1.06-1.06l3.22-3.22H11a.75.75 0 0 1-.75-.75z">
                                            </path>
                                        </svg></span></span></span></a></div>
                </div>
            </div>
            <div id="PolarisPortalsContainer"></div>
        </div>
    </div>
</div>

</form>

<!-- range-slider---js---start -->
<script>
 const range = document.getElementById('range'),
 tooltip = document.getElementById('tooltip'),
 setValue = () => {
    const newValue = Number((range.value - range.min) * 100 / (
                range.max - range.min)),
            newPosition = 16 - (newValue * 0.32);
        tooltip.innerHTML = `<span>${range.value}</span>`;
        tooltip.style.left =
            `calc(${newValue}% + (${newPosition}px))`;
        document.documentElement.style.setProperty(
            "--range-progress",
            `calc(${newValue}% + (${newPosition}px))`);
    };
document.addEventListener("DOMContentLoaded", setValue);
range.addEventListener('input', setValue);
</script>

<!-- range-slider---js---end -->

<!-- all-page--start-js -->



<!-- all-page--end-js -->
