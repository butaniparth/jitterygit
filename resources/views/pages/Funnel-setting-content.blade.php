<style>
.close_img_btn {
    background-color: unset;
    border: unset;
    background: red;
    color: #fff;
    border-radius: 50px;
    display: none
}
</style>

<form action="{{ route('Funnel-setting.process') }}"  method="post" enctype="multipart/form-data">
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
                        <li><a href="marketplace.php"><span class="Polaris-Button__Content">
                                    <span class="Polaris-Button__Icon">
                                        <span class="Polaris-Icon">
                                            <span class="Polaris-Text--root Polaris-Text--visuallyHidden">
                                            </span>
                                            <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false"
                                                aria-hidden="true">
                                                <path
                                                    d="M12 16a.997.997 0 0 1-.707-.293l-5-5a.999.999 0 0 1 0-1.414l5-5a.999.999 0 1 1 1.414 1.414l-4.293 4.293 4.293 4.293a.999.999 0 0 1-.707 1.707z">
                                                </path>
                                            </svg>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </li>
                        <li><a href="Funnel">1</a></li>
                        <li><a href="Marketplace">2</a></li>
                        <li class="active_pagination"><a href="Funnel-setting">3</a></li>
                        <li><a href="Funnel-form">4</a></li>
                        <li><a href="Funnel-step-first">5</a></li>
                        <li><a href="setting-promo">6</a></li>
                        <li style="margin:0px"><a href="Funnel-form.php"><span
                                    class="Polaris-Button__Content">
                                    <span class="Polaris-Button__Icon">
                                        <span class="Polaris-Icon">
                                            <span class="Polaris-Text--root Polaris-Text--visuallyHidden">
                                            </span>
                                            <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false"
                                                aria-hidden="true">
                                                <path
                                                    d="M8 16a.999.999 0 0 1-.707-1.707l4.293-4.293-4.293-4.293a.999.999 0 1 1 1.414-1.414l5 5a.999.999 0 0 1 0 1.414l-5 5a.997.997 0 0 1-.707.293z">
                                                </path>
                                            </svg>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="save_nd_publish_mode">
                <div class="enbaled_text">
                    <h5 class="hide_enable">Disabled</h5>
                    <h5 class="hide_disable">Enabled</h5>

                    <label class="switch" for="checkbox_">
                        <input type="checkbox" id="checkbox_" value="checked" name="status" {{ $form3 ? 'checked' : '' }}>
                        <div class="slider round"></div>
                    </label>
                </div>
                <div>
                    <button class="Polaris-Button" type="submit" style="margin-right:5px">
                        <span class="Polaris-Button__Content">
                            <span class="Polaris-Button__Text">Save</span>
                        </span>
                    </button>
                    <button class="Polaris-Button Polaris-Button--primary publish_model_click" type="button">
                        <span class="Polaris-Button__Content">
                            <span class="Polaris-Button__Text">Publish</span>
                        </span>
                    </button>
                </div>
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
                                        <div class="Polaris-Card__Header funnel_heading">
                                            <h2 class="Polaris-Text--root Polaris-Text--headingMd">Main Page Design
                                            </h2>
                                        </div>
                                        <div class="Polaris-FormLayout__Items">

                                            <div class="Polaris-FormLayout__Item">
                                                <div class="">
                                                    <div class="Polaris-Labelled__LabelWrapper">
                                                        <div class="Polaris-Label">
                                                            <label id="PolarisTextField1Label" for="PolarisTextField1"
                                                                class="Polaris-Label__Text">Title</label>
                                                        </div>
                                                    </div>
                                                    <div class="Polaris-Connected">
                                                        <div
                                                            class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                            <div class="Polaris-TextField">
                                                                <input id="PolarisTextField1" autocomplete="off"
                                                                    class="Polaris-TextField__Input" type="text"
                                                                    aria-labelledby="PolarisTextField1Label"
                                                                    aria-invalid="false" name="title" value="{{ $form3->title ?? old('title') }}">
                                                                <div class="Polaris-TextField__Backdrop">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="Polaris-FormLayout__Item">
                                                <div class="">
                                                    <div class="Polaris-Labelled__LabelWrapper">
                                                        <div class="Polaris-Label">
                                                            <label id="PolarisTextField2Label" for="PolarisTextField2"
                                                                class="Polaris-Label__Text">Font Family</label>
                                                        </div>
                                                    </div>
                                                    <div class="Polaris-Select">
                                                        <select name="font_name" id="font_size"
                                                            class="Polaris-Select__Input" aria-invalid="false">
                                                            <option selected="" value="Arial">Arial</option>
                                                            <option value="Roboto">Roboto</option>
                                                            <option value="Popins">Popins</option>
                                                        </select>
                                                        <div class="Polaris-Select__Content" aria-hidden="true">
                                                            <span
                                                                class="Polaris-Select__SelectedOption font_size">{{$form3->font_name ??  ''}}</span>
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

                                        <div class="Polaris-FormLayout__Items">

                                            <div class="Polaris-FormLayout__Item">
                                                <div class="">
                                                    <div class="Polaris-Labelled__LabelWrapper">
                                                        <div class="Polaris-Label">
                                                            <label id="PolarisTextField1Label" for="PolarisTextField1"
                                                                class="Polaris-Label__Text">Font Size</label>
                                                        </div>
                                                    </div>
                                                    <div class="Polaris-Select">
                                                    <select  id="market_font_sizie" name="font_size"
                                                                    class="Polaris-Select__Input" aria-invalid="false">
                                                        <option selected="" value="10">10</option>
                                                        <option value="20">20</option>
                                                        <option value="30">30</option>
                                                    </select>
                                                    <div class="Polaris-Select__Content" aria-hidden="true">
                                                            <span
                                                                class="Polaris-Select__SelectedOption market_font_sizie">{{$form3->font_size ??  '' }}</span>
                                                            <span class="Polaris-Select__Icon">
                                                                <span class="Polaris-Icon">
                                                                    <span class="Polaris-VisuallyHidden">
                                                                    </span>
                                                                    <svg viewBox="0 0 20 20"
                                                                        class="Polaris-Icon__Svg"
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
                                            <div class="Polaris-FormLayout__Item">
                                                <div class="">
                                                    <div class="color_picker">
                                                        <div class="Polaris-Label">
                                                            <label id="PolarisTextField11Label" for="PolarisTextField11"
                                                                class="Polaris-Label__Text for_text label_text_font">
                                                                Font Color
                                                                (hexcode)
                                                            </label>
                                                        </div>
                                                        <div style="padding: 4px 0px 2px;">
                                                            <div class="color_full_box">
                                                                <input type="text" id="color2_hex"
                                                                    class="for_color_box" name="font_color">
                                                                <input type="color" id="color2"
                                                                    class="color_picker_box colorpickerbox"
                                                                    value="{{$form3->font_color ?? ''}}" name="font_color" >
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
                                                        <div class="Polaris-Label">
                                                            <label id="PolarisTextField1Label" for="PolarisTextField1"
                                                                class="Polaris-Label__Text">Text Location</label>
                                                        </div>
                                                    </div>
                                                    <div class="Polaris-Select">
                                                        <select name="text_orientation" id="Text_location"
                                                            class="Polaris-Select__Input" aria-invalid="false">
                                                            <option selected="" value="Right">Right</option>
                                                            <option value="Left">Left</option>
                                                            <option value="Center">Center</option>
                                                        </select>
                                                        <div class="Polaris-Select__Content" aria-hidden="true">
                                                            <span
                                                                class="Polaris-Select__SelectedOption Text_location">{{$form3->text_orientation ?? ''}}</span>
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
                                            <div class="Polaris-FormLayout__Item">
                                                <!-- <div class="">
                                                    <div class="Polaris-Labelled__LabelWrapper">
                                                        <div class="Polaris-Label">
                                                            <label id="PolarisTextField2Label" for="PolarisTextField2"
                                                                class="Polaris-Label__Text">Option</label>
                                                        </div>
                                                    </div>
                                                    <div class="Polaris-Select">
                                                        <select name="radiusunit" id="Option_text"
                                                            class="Polaris-Select__Input" aria-invalid="false">
                                                            <option selected="" value="Arial">Arial</option>
                                                            <option value="Roboto">Roboto</option>
                                                            <option value="Roboto">Roboto</option>
                                                        </select>
                                                        <div class="Polaris-Select__Content" aria-hidden="true">
                                                            <span
                                                                class="Polaris-Select__SelectedOption Option_text">Roboto</span>
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

                                                    <script>
                                                    $('#Option_text').change(function() {
                                                        var radiusunit = $(this).val();
                                                        $('.Option_text').html(radiusunit);
                                                    });
                                                    </script>
                                                </div> -->
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <div>
                            </div>
                        </div>
                        <div class="Polaris-Card">
                            <div class="Polaris-Card__Section">
                                <div class="Polaris-Card__Header funnel_heading" style="padding:0px 0px 20px">
                                    <h2 class="Polaris-Text--root Polaris-Text--headingMd">Product Design
                                    </h2>
                                </div>
                                <div>
                                    <button class="Polaris-Button add_product_btn" type="button" style="margin-top:0px">
                                        <span class="Polaris-Button__Content">
                                            <span class="Polaris-Button__Text">Add Product</span>
                                        </span>
                                    </button>
                                </div>

                                <div class="Polaris-FormLayout__Items">
                                    <div class="Polaris-FormLayout__Item" style="margin-left:0px">
                                        <div class="wrapper">
                                            <div class="box add_promotion_box">

                                                <div class="upload-options">
                                                    <label>
                                                        <div class="Polaris-Labelled--hidden">
                                                            <div class="Polaris-Labelled__LabelWrapper">
                                                                <div class="Polaris-Label">    
                                                                    <input type="file" class="image-upload"
                                                                        accept="image/*" name="product_images">
                                                                </div>
                                                            </div>
                                                            <div class="Polaris-DropZone Polaris-DropZone--hasOutline Polaris-DropZone--sizeMedium"
                                                                aria-disabled="false">
                                                                <span
                                                                    class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--visuallyHidden">
                                                                    <input id="upload_file" multiple="" type="file"
                                                                        autocomplete="off">
                                                                </span>
                                                                <div class="Polaris-DropZone__Container">
                                                                    <div class="Polaris-DropZone-FileUpload">
                                                                        <div class="Polaris-AlphaStack"
                                                                            style="--pc-stack-inline-align:center;--pc-stack-order:column;--pc-stack-gap-xs:var(--p-space-2)">
                                                                            <div class="Polaris-DropZone-FileUpload__Action"
                                                                                id="upload_file">
                                                                                Add
                                                                                files</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </label>
                                                </div>
                                                <div>
                                                    <div class="js--image-preview">
                                                        <div class="thumbnails_img">
                                                        @if($form3 && $form3->product_images)
                                                            <img width="134" height="104" src="{{ asset('Imges3/product_images/' . $form3->product_images) }}">
                                                        @else
                                                            <img src="images/img_thumbanail.svg">
                                                        @endif

                                                        </div>
                                                        <div class="close_img">
                                                            <button class="close_img_btn">
                                                                x
                                                            </button>
                                                        </div>

                                                    </div>
                                                    <div class="img_dimantion" style="bottom:-0px !important">
                                                        <p>(Image should be maximum<br> 1500 x
                                                            1500 jpg,png)</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="Polaris-FormLayout__Item" style="margin-left:0px">
                                        <div class="Polaris-Labelled__LabelWrapper">
                                            <div class="Polaris-Label">
                                                <label id="PolarisTextField1Label" for="PolarisTextField1"
                                                    class="Polaris-Label__Text">Product Name</label>
                                            </div>
                                        </div>
                                        <div class="Polaris-Connected">
                                            <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                <div class="Polaris-TextField">
                                                    <input id="PolarisTextField1" autocomplete="off"
                                                        class="Polaris-TextField__Input" type="text"
                                                        aria-labelledby="PolarisTextField1Label" aria-invalid="false"
                                                        value="{{$form3->product_name ?? ''}}" name="product_name">
                                                    <div class="Polaris-TextField__Backdrop">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="spacing_form_section">
                                    <div class="Polaris-FormLayout">
                                        <div role="group" class="Polaris-FormLayout--grouped">
                                            <div class="Polaris-FormLayout__Items">
                                                <div class="Polaris-FormLayout__Item">
                                                    <div class="">
                                                        <div class="Polaris-Labelled__LabelWrapper">
                                                            <div class="Polaris-Label">
                                                                <label id="PolarisTextField1Label"
                                                                    for="PolarisTextField1"
                                                                    class="Polaris-Label__Text">Product Asin</label>
                                                            </div>
                                                        </div>
                                                        <div class="Polaris-Connected">
                                                            <div
                                                                class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                                <div class="Polaris-TextField">
                                                                    <input id="PolarisTextField1" autocomplete="off"
                                                                        class="Polaris-TextField__Input" type="text"
                                                                        aria-labelledby="PolarisTextField1Label"
                                                                        aria-invalid="false" value="{{$form3->product_asin ?? ''}}" name="product_asin">
                                                                    <div class="Polaris-TextField__Backdrop">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="spaceing_manage_block" style="margin-bottom: 10px;">
                                                        <div class="Polaris-Labelled__LabelWrapper">
                                                            <div class="Polaris-Label">
                                                                <label id="PolarisTextField1Label"
                                                                    for="PolarisTextField1"
                                                                    class="Polaris-Label__Text">Background image</label>
                                                            </div>
                                                        </div>
                                                        <div class="Polaris-Connected2">
                                                            <div class="wrapper">
                                                                <div class="box add_promotion_box">

                                                                    <div class="upload-options">
                                                                        <label>
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
                                                                                    aria-disabled="false">
                                                                                    <span
                                                                                        class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--visuallyHidden">
                                                                                        <input id="upload_file"
                                                                                            multiple="" type="file"
                                                                                            autocomplete="off">
                                                                                    </span>
                                                                                    <div
                                                                                        class="Polaris-DropZone__Container">
                                                                                        <div
                                                                                            class="Polaris-DropZone-FileUpload">
                                                                                            <div class="Polaris-AlphaStack"
                                                                                                style="--pc-stack-inline-align:center;--pc-stack-order:column;--pc-stack-gap-xs:var(--p-space-2)">
                                                                                                <div class="Polaris-DropZone-FileUpload__Action"
                                                                                                    id="upload_file">
                                                                                                    Add
                                                                                                    files</div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <div class="js--image-preview">
                                                                            <div class="thumbnails_img">
                                                                            @if($form3 && $form3->back_images)
                                                                                <img width="134" height="104" src="{{ asset('Imges3/back_images/' . $form3->back_images) }}">
                                                                            @else
                                                                                <img src="images/img_thumbanail.svg">
                                                                            @endif

                                                                            </div>
                                                                            <div class="close_img">
                                                                                <button class="close_img_btn">
                                                                                    x
                                                                                </button>
                                                                            </div>

                                                                        </div>
                                                                        <div class="img_dimantion"
                                                                            style="bottom:-0px !important">
                                                                            <p>(Image should be maximum<br> 1500 x
                                                                                1500 jpg,png)</p>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="Polaris-FormLayout__Item">
                                                    <div class="">
                                                        <div class="Polaris-Labelled__LabelWrapper">
                                                            <div class="Polaris-Label">
                                                                <label id="PolarisTextField2Label"
                                                                    for="PolarisTextField2"
                                                                    class="Polaris-Label__Text">Picture Placement
                                                                    Under</label>
                                                            </div>
                                                        </div>
                                                        <div class="Polaris-Connected">
                                                            <div
                                                                class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                                <div class="Polaris-TextField">
                                                                    <input id="PolarisTextField2" autocomplete="off"
                                                                        class="Polaris-TextField__Input" type="text"
                                                                        aria-labelledby="PolarisTextField2Label"
                                                                        aria-invalid="false" value="{{$form3->product_under ?? ''}}" name="product_under">
                                                                    <div class="Polaris-TextField__Spinner"
                                                                        aria-hidden="true">
                                                                        <div role="button"
                                                                            class="Polaris-TextField__Segment"
                                                                            tabindex="-1">
                                                                            <div class="Polaris-TextField__SpinnerIcon">
                                                                                <span class="Polaris-Icon">
                                                                                    <span
                                                                                        class="Polaris-Text--root Polaris-Text--visuallyHidden">
                                                                                    </span>
                                                                                    <svg viewBox="0 0 20 20"
                                                                                        class="Polaris-Icon__Svg"
                                                                                        focusable="false"
                                                                                        aria-hidden="true">
                                                                                        <path
                                                                                            d="M6.902 12h6.196c.751 0 1.172-.754.708-1.268l-3.098-3.432c-.36-.399-1.055-.399-1.416 0l-3.098 3.433c-.464.513-.043 1.267.708 1.267Z">
                                                                                        </path>
                                                                                    </svg>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                        <div role="button"
                                                                            class="Polaris-TextField__Segment"
                                                                            tabindex="-1">
                                                                            <div class="Polaris-TextField__SpinnerIcon">
                                                                                <span class="Polaris-Icon">
                                                                                    <span
                                                                                        class="Polaris-Text--root Polaris-Text--visuallyHidden">
                                                                                    </span>
                                                                                    <svg viewBox="0 0 20 20"
                                                                                        class="Polaris-Icon__Svg"
                                                                                        focusable="false"
                                                                                        aria-hidden="true">
                                                                                        <path
                                                                                            d="M13.098 8h-6.196c-.751 0-1.172.754-.708 1.268l3.098 3.432c.36.399 1.055.399 1.416 0l3.098-3.433c.464-.513.043-1.267-.708-1.267Z">
                                                                                        </path>
                                                                                    </svg>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="Polaris-TextField__Backdrop">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="spaceing_manage_block">
                                                        <div class="">
                                                            <div class="Polaris-Labelled__LabelWrapper">
                                                                <div class="Polaris-Label">
                                                                    <label id="PolarisTextField2Label"
                                                                        for="PolarisTextField2"
                                                                        class="Polaris-Label__Text">Additional Modules /
                                                                        Add
                                                                        Section</label>
                                                                </div>
                                                            </div>
                                                            <div class="Polaris-Connected" style="margin:10px 0px 20px">
                                                                <button class="Polaris-Button" type="button">
                                                                    <span class="Polaris-Button__Content">
                                                                        <span class="Polaris-Button__Text">Add
                                                                            Modules</span>
                                                                    </span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div>
                            </div>
                        </div>
                        <div class="Polaris-Card">
                            <div class="Polaris-Card__Section">
                                <div class="Polaris-FormLayout">
                                    <div class="Polaris-FormLayout__Item">
                                        <div class="funnel_heading">
                                            <h2 class="Polaris-Text--root Polaris-Text--headingMd">Tile Design Details
                                                CSS
                                            </h2>
                                        </div>
                                        <div>
                                            <div class="Polaris-FormLayout">
                                                <div role="group" class="Polaris-FormLayout--grouped">
                                                    <div class="Polaris-FormLayout__Items">
                                                        <div class="Polaris-FormLayout__Item">
                                                            <div class="">
                                                                <div class="details_section">
                                                                    <h3>Shadow</h3>
                                                                </div>
                                                                <div class="Polaris-Labelled__LabelWrapper">
                                                                    <div class="Polaris-Label">
                                                                        <label id="PolarisTextField1Label"
                                                                            for="PolarisTextField1"
                                                                            class="Polaris-Label__Text">Size</label>
                                                                    </div>
                                                                </div>
                                                                <div class="Polaris-Connected">
                                                                    <div
                                                                        class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                                        <div class="Polaris-TextField">
                                                                            <input id="PolarisTextField1"
                                                                                autocomplete="off"
                                                                                class="Polaris-TextField__Input"
                                                                                type="text"
                                                                                aria-labelledby="PolarisTextField1Label"
                                                                                aria-invalid="false" value="{{$form3->shadow_size ?? ''}}" name="shadow_size">
                                                                            <div class="Polaris-TextField__Spinner"
                                                                                aria-hidden="true">
                                                                            </div>
                                                                            <div class="Polaris-TextField__Backdrop">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="Polaris-FormLayout__Item">
                                                            <div class="">
                                                                <div class="details_section border_site_toggle">
                                                                    <h3>Borders</h3>
                                                                    <label class="switch" for="checkbox_1">
                                                                        <input type="checkbox" id="checkbox_1" name="borders" {{ $form3 ? 'checked' : '' }}>
                                                                        <div class="slider round"></div>
                                                                    </label>
                                                                </div>
                                                                <div class="Polaris-Labelled__LabelWrapper">
                                                                    <div class="Polaris-Label">
                                                                        <label id="PolarisTextField2Label"
                                                                            for="PolarisTextField2"
                                                                            class="Polaris-Label__Text">Size</label>
                                                                    </div>
                                                                </div>
                                                                <div class="Polaris-Connected">
                                                                    <div
                                                                        class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                                        <div class="Polaris-TextField">
                                                                            <input id="PolarisTextField2"
                                                                                autocomplete="off"
                                                                                class="Polaris-TextField__Input"
                                                                                type="text"
                                                                                aria-labelledby="PolarisTextField2Label"
                                                                                aria-invalid="false" value="{{$form3->shadow_size1 ?? ''}}" name="shadow_size1">
                                                                            <div class="Polaris-TextField__Spinner"
                                                                                aria-hidden="true">
                                                                            </div>
                                                                            <div class="Polaris-TextField__Backdrop">
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
                                        <div class="spaceing_manage_block">
                                            <div class="Polaris-FormLayout">
                                                <div role="group" class="Polaris-FormLayout--grouped">
                                                    <div class="Polaris-FormLayout__Items">
                                                        <div class="Polaris-FormLayout__Item">
                                                            <div class="">
                                                                <div class="color_picker">
                                                                    <div class="Polaris-Label">
                                                                        <label id="PolarisTextField11Label"
                                                                            for="PolarisTextField11"
                                                                            class="Polaris-Label__Text for_text label_text_font">
                                                                            Color
                                                                            (hexcode)
                                                                        </label>
                                                                    </div>
                                                                    <div style="padding: 4px 0px 2px;">
                                                                        <div class="color_full_box">
                                                                            <input type="text" id="color8_hex"
                                                                                class="for_color_box">
                                                                            <input type="color" id="color8"
                                                                                class="color_picker_box colorpickerbox"
                                                                                value="{{$form3->shadow_color ?? ''}}" name="shadow_color">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="Polaris-FormLayout__Item">
                                                            <div class="">
                                                                <div class="color_picker">
                                                                    <div class="Polaris-Label">
                                                                        <label id="PolarisTextField11Label"
                                                                            for="PolarisTextField11"
                                                                            class="Polaris-Label__Text for_text label_text_font">Color
                                                                            (hexcode)
                                                                        </label>
                                                                    </div>
                                                                    <div style="padding: 4px 0px 2px;">
                                                                        <div class="color_full_box">
                                                                            <input type="text" id="color7_hex"
                                                                                class="for_color_box">
                                                                            <input type="color" id="color7"
                                                                                class="color_picker_box colorpickerbox"
                                                                                value="{{$form3->shadow_color1 ?? ''}}" name="shadow_color1">
                                                                        </div>
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
                                                        <div class="">
                                                            <div class="Polaris-Labelled__LabelWrapper">
                                                                <div class="Polaris-Label">
                                                                    <label id="PolarisTextField2Label"
                                                                        for="PolarisTextField2"
                                                                        class="Polaris-Label__Text">Opacity</label>
                                                                </div>
                                                            </div>
                                                            <div class="range_slider_dobule">
                                                                <div class="wrapper">
                                                                    <div class="container">
                                                                        <div class="slider-track"></div>
                                                                        <input type="range" min="0" max="100" value="{{$form3->opacity ?? ''}}"
                                                                            id="slider-1" oninput="slideOne()" name="opacity">
                                                                        <input type="range" min="0" max="100" value="{{$form3->opacity1 ?? ''}}"
                                                                            id="slider-2" oninput="slideTwo()" name="opacity1">
                                                                    </div>
                                                                    <div class="values">
                                                                        <span id="range1">
                                                                            0
                                                                        </span>
                                                                        <span id="range2">
                                                                            100
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="Polaris-FormLayout__Item">
                                                        <div class="">
                                                            <div class="img_upload_texture">
                                                                <div class="rounded_btn_block">
                                                                    <h5>Texture</h5>
                                                                    <label class="switch" for="checkbox_4">
                                                                        <input type="checkbox" id="checkbox_4" name="shadow_orientation"  {{ $form3 ? 'checked' : '' }}>
                                                                        <div class="slider round"></div>
                                                                    </label>
                                                                </div>
                                                                <div class="wrapper">
                                                                    <div class="box add_promotion_box">

                                                                        <div class="upload-options">
                                                                            <label>
                                                                                <div class="Polaris-Labelled--hidden">
                                                                                    
                                                                                    <div
                                                                                        class="Polaris-Labelled__LabelWrapper">
                                                                                        <div class="Polaris-Label">
                                                                                            <input type="file"
                                                                                                class="image-upload"
                                                                                                accept="image/*" name="shadow_images">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="Polaris-DropZone Polaris-DropZone--hasOutline Polaris-DropZone--sizeMedium"
                                                                                        aria-disabled="false">
                                                                                        <span
                                                                                            class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--visuallyHidden">
                                                                                            <input id="upload_file"
                                                                                                multiple="" type="file"
                                                                                                autocomplete="off">
                                                                                        </span>
                                                                                        <div
                                                                                            class="Polaris-DropZone__Container">
                                                                                            <div
                                                                                                class="Polaris-DropZone-FileUpload">
                                                                                                <div class="Polaris-AlphaStack"
                                                                                                    style="--pc-stack-inline-align:center;--pc-stack-order:column;--pc-stack-gap-xs:var(--p-space-2)">
                                                                                                    <div class="Polaris-DropZone-FileUpload__Action"
                                                                                                        id="upload_file">
                                                                                                        Add
                                                                                                        files</div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                            </label>
                                                                        </div>
                                                                        <div>
                                                                            <div class="js--image-preview">
                                                                                <div class="thumbnails_img">
                                                                                @if($form3 && $form3->shadow_images)
                                                                                    <img width="134" height="104" src="{{ asset('Imges3/shadow_images/' . $form3->shadow_images) }}">
                                                                                @else
                                                                                    <img src="images/img_thumbanail.svg">
                                                                                @endif

                                                                                </div>
                                                                                <div class="close_img">
                                                                                    <button class="close_img_btn">
                                                                                        x
                                                                                    </button>
                                                                                </div>

                                                                            </div>
                                                                            <div class="img_dimantion"
                                                                                style="bottom:-0px !important">
                                                                                <p>(Image should be maximum<br> 1500 x
                                                                                    1500 jpg,png)</p>
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
                            </div>
                        </div>
                        <div class="Polaris-Card">
                            <div class="Polaris-Card__Section">
                                <div class="Polaris-FormLayout">
                                    <div role="group" class="Polaris-FormLayout--grouped">
                                        <div class="Polaris-FormLayout__Items">
                                            <div class="Polaris-FormLayout__Item">
                                                <div class="">
                                                    <div class="details_section" style="margin-top:0px">
                                                        <h3>Tile Size</h3>
                                                    </div>
                                                    <div class="Polaris-Labelled__LabelWrapper">
                                                        <div class="Polaris-Label">
                                                            <label id="PolarisTextField1Label" for="PolarisTextField1"
                                                                class="Polaris-Label__Text">Height</label>
                                                        </div>
                                                    </div>
                                                    <div class="Polaris-Connected">
                                                        <div
                                                            class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                            <div class="Polaris-TextField Add_custom_polaris">
                                                                <input id="PolarisTextField1" autocomplete="off"
                                                                    class="Polaris-TextField__Input" type="text"
                                                                    aria-labelledby="PolarisTextField1Label"
                                                                    aria-invalid="false" value="{{$form3->tile_height ?? ''}}" name="tile_height">
                                                                <div class="Polaris-TextField__Backdrop">
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
                                                    <div class="details_section" style="margin-top:0px">
                                                        <h3>Tile Color</h3>
                                                    </div>
                                                    <div class="">
                                                        <div class="color_picker">
                                                            <div class="Polaris-Label">
                                                                <label id="PolarisTextField11Label"
                                                                    for="PolarisTextField11"
                                                                    class="Polaris-Label__Text for_text label_text_font">Color
                                                                    (hexcode)
                                                                </label>
                                                            </div>
                                                            <div style="padding: 4px 0px 2px;">
                                                                <div class="color_full_box">
                                                                    <input type="text" id="color9_hex"
                                                                        class="for_color_box" name="tile_color">
                                                                    <input type="color" id="color9"
                                                                        class="color_picker_box colorpickerbox"
                                                                        value="{{$form3->tile_color ?? ''}}" name="tile_color">
                                                                </div>
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
                                                        <div class="Polaris-Label">
                                                            <label id="PolarisTextField1Label" for="PolarisTextField1"
                                                                class="Polaris-Label__Text">Width</label>
                                                        </div>
                                                    </div>
                                                    <div class="Polaris-Connected">
                                                        <div
                                                            class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                            <div class="Polaris-TextField Add_custom_polaris">
                                                                <input id="PolarisTextField1" autocomplete="off"
                                                                    class="Polaris-TextField__Input" type="text"
                                                                    aria-labelledby="PolarisTextField1Label"
                                                                    aria-invalid="false" value="{{$form3->tile_width ?? ''}}" name="tile_width">
                                                                <div class="Polaris-TextField__Backdrop">
                                                                </div>
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
                                                        <label class="switch" for="checkbox_2">
                                                            <input type="checkbox" id="checkbox_2" name="round_button" {{ $form3 ? 'checked' : '' }}>
                                                            <div class="slider round"></div>
                                                        </label>
                                                    </div>
                                                    <div class="Polaris-Labelled__LabelWrapper">
                                                        <div class="Polaris-Label">
                                                            <label id="PolarisTextField1Label" for="PolarisTextField1"
                                                                class="Polaris-Label__Text">Text on 
                                                                hover</label>
                                                        </div>
                                                    </div>
                                                    <div class="Polaris-Connected">
                                                        <div
                                                            class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                            <div class="Polaris-TextField">
                                                                <input id="PolarisTextField1" autocomplete="off"
                                                                    class="Polaris-TextField__Input" type="text"
                                                                    aria-labelledby="PolarisTextField1Label"
                                                                    aria-invalid="false" value="{{$form3->text_hover ?? ''}}" name="text_hover">
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
                                                            <h5>Texture</h5>
                                                            <label class="switch" for="checkbox_3">
                                                                <input type="checkbox" id="checkbox_3" name="tile_texture" {{ $form3 ? 'checked' : '' }}>
                                                                <div class="slider round"></div>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="Polaris-Connected2">
                                                        <div class="wrapper">
                                                            <div class="box add_promotion_box">

                                                                <div class="upload-options">
                                                                    <label>
                                                                        <div class="Polaris-Labelled--hidden">
                                                                           
                                                                            <div class="Polaris-Labelled__LabelWrapper">
                                                                                <div class="Polaris-Label">
                                                                                    <input type="file"
                                                                                        class="image-upload"
                                                                                        accept="image/*" name="tile_images">
                                                                                </div>
                                                                            </div>
                                                                            <div class="Polaris-DropZone Polaris-DropZone--hasOutline Polaris-DropZone--sizeMedium"
                                                                                aria-disabled="false">
                                                                                <span
                                                                                    class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--visuallyHidden">
                                                                                    <input id="upload_file" multiple=""
                                                                                        type="file" autocomplete="off">
                                                                                </span>
                                                                                <div
                                                                                    class="Polaris-DropZone__Container">
                                                                                    <div
                                                                                        class="Polaris-DropZone-FileUpload">
                                                                                        <div class="Polaris-AlphaStack"
                                                                                            style="--pc-stack-inline-align:center;--pc-stack-order:column;--pc-stack-gap-xs:var(--p-space-2)">
                                                                                            <div class="Polaris-DropZone-FileUpload__Action"
                                                                                                id="upload_file">
                                                                                                Add
                                                                                                files</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </label>
                                                                </div>
                                                                <div>
                                                                    <div class="js--image-preview">
                                                                        <div class="thumbnails_img">
                                                                        @if($form3 && $form3->tile_images)
                                                                            <img width="134" height="104" src="{{ asset('Imges3/tile_images/' . $form3->tile_images) }}">
                                                                        @else
                                                                            <img src="images/img_thumbanail.svg">
                                                                        @endif

                                                                        </div>
                                                                        <div class="close_img">
                                                                            <button class="close_img_btn">
                                                                                x
                                                                            </button>
                                                                        </div>

                                                                    </div>
                                                                    <div class="img_dimantion"
                                                                        style="bottom:-0px !important">
                                                                        <p>(Image should be maximum<br> 1500 x
                                                                            1500 jpg,png)</p>
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
                                <div class="" style="padding-bottom:20px">
                                    <div class="Polaris-Labelled__LabelWrapper">
                                        <div class="Polaris-Label">
                                            <label id="PolarisTextField1Label" for="PolarisTextField1"
                                                class="Polaris-Label__Text">Notes</label>
                                        </div>
                                    </div>
                                    <div class="Polaris-Connected">
                                        <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                            <div
                                                class="Polaris-TextField Polaris-TextField--hasValue Polaris-TextField--multiline">
                                                <textarea id="PolarisTextField1" autocomplete="off"
                                                    class="Polaris-TextField__Input" type="text" rows="4"
                                                    aria-labelledby="PolarisTextField1Label" aria-invalid="false"
                                                    aria-multiline="true" style="height: 106px;" name="notes">{{ $form3->notes ?? old('notes') }}</textarea>
                                                <div class="Polaris-TextField__Backdrop">
                                                </div>
                                                <div aria-hidden="true" class="Polaris-TextField__Resizer">
                                                    <div class="Polaris-TextField__DummyInput">1776 Barnes
                                                        Street<br>Orlandoundefined FL 32801<br>
                                                    </div>
                                                    <div class="Polaris-TextField__DummyInput">
                                                        <br>
                                                        <br>
                                                        <br>
                                                        <br>
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
                                                    <div class="Polaris-Labelled__LabelWrapper">
                                                        <div class="Polaris-Label">
                                                            <label id="PolarisTextField1Label" for="PolarisTextField1"
                                                                class="Polaris-Label__Text">Google
                                                                Spreadsheet ID (name)</label>
                                                        </div>
                                                    </div>
                                                    <div class="Polaris-Connected">
                                                        <div
                                                            class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                            <div class="Polaris-TextField">
                                                                <input id="PolarisTextField1" autocomplete="off"
                                                                    class="Polaris-TextField__Input" type="text"
                                                                    aria-labelledby="PolarisTextField1Label"
                                                                    aria-invalid="false" value="{{$form3->id_name ?? ''}}" name="id_name">
                                                                <div class="Polaris-TextField__Backdrop">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="Polaris-FormLayout__Item">
                                                <div class="spaceing_manage_block" style="margin-bottom:0px">
                                                    <div class="Polaris-Labelled__LabelWrapper">
                                                        <div class="Polaris-Label">
                                                            <label id="PolarisTextField2Label" for="PolarisTextField2"
                                                                class="Polaris-Label__Text">Google
                                                                Spreadsheet Tab Name</label>
                                                        </div>
                                                    </div>
                                                    <div class="Polaris-Connected">
                                                        <div
                                                            class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                            <div class="Polaris-TextField">
                                                                <input id="PolarisTextField2" autocomplete="off"
                                                                    class="Polaris-TextField__Input" type="text"
                                                                    aria-labelledby="PolarisTextField2Label"
                                                                    aria-invalid="false" value="{{$form3->tab_name ?? ''}}" name="tab_name">
                                                                <div class="Polaris-TextField__Backdrop">
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
                                <div class="brands_img_text">
                                    <div class="text_select_brands">
                                        <p>Avoid Consecutive Submissions</p>
                                    </div>
                                </div>
                                <div class="check_box_section">
                                    <label>
                                        <input type="radio" id="Yes" name="fav_language" value="Yes" @if(isset($form3) && $form3->fav_language === 'Yes') checked @endif>
                                        <label for="Yes">Yes</label>
                                    </label>
                                    <label>
                                        <input type="radio" id="No" name="fav_language" value="No" @if(isset($form3) && $form3->fav_language === 'No') checked @endif>
                                        <label for="No">No</label>
                                    </label>
                                </div>
                                <div class="spacing_form_section">
                                    <div class="Polaris-Labelled__LabelWrapper">
                                        <div class="Polaris-Label">
                                            <label id="PolarisTextField1Label" for="PolarisTextField1"
                                                class="Polaris-Label__Text">Redirect for Consecutive
                                                Submissions</label>
                                        </div>
                                    </div>
                                    <div class="Polaris-Connected1">
                                        <div class="Polaris-Select">
                                            <select name="home_status" id="redirect_link_funnel_setting" class="Polaris-Select__Input"
                                                aria-invalid="false">
                                                <option selected="" value="Homepage">Homepage</option>
                                                <option value="Homepage2">Homepage2</option>
                                                <option value="Homepage3">Homepage3</option>
                                            </select>
                                            <div class="Polaris-Select__Content" aria-hidden="true">
                                                <span
                                                    class="Polaris-Select__SelectedOption redirect_link_funnel_setting">{{$form3->home_status ?? ''}}</span>
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
                            <div>
                            </div>
                        </div>
                    </div>
                    <div class="Polaris-FormLayout__Item">
                        <div class="sticky_section_preview">
                              <div class="Polaris-Card">
                            <div class="Polaris-Card__Header preview_heading">
                                <h2 class="Polaris-Text--root Polaris-Text--headingMd">Preview</h2>
                            </div>
                            <div class="Polaris-Card__Section">
                                <div class="preview_img main_product_purchase" style="padding:50px 20px">
                                    <div class="previw_text">
                                        <h2>Which product did your purchase</h2>
                                    </div>
                                    <div class="custome_preview_block" style="justify-content:unset">
                                        <div class="brands_block_preview bg_purchase_color">
                                            <img
                                                src="https://jitterygit.com/wp-content/uploads/2022/10/Voltroid-Winner-1.png">

                                        </div>
                                        <div class="brands_block_preview bg_purchase_color">
                                            <img
                                                src="https://jitterygit.com/wp-content/uploads/2022/10/Alphazor-winner.png">

                                        </div>
                                        <div class="brands_block_preview bg_purchase_color">
                                            <img
                                                src="https://jitterygit.com/wp-content/uploads/2022/10/Voltroid-Winner-1.png">

                                        </div>
                                        <div class="brands_block_preview bg_purchase_color">
                                            <img
                                                src="https://jitterygit.com/wp-content/uploads/2022/10/Grindburst-Winner.png">

                                        </div>
                                        <div class="brands_block_preview bg_purchase_color">
                                            <img
                                                src="https://jitterygit.com/wp-content/uploads/2022/10/Voltroid-Winner-1.png">

                                        </div>
                                    </div>
                                </div>
                                <div class="free_voucher_section">
                                    <h3>Get Your FREE VOUCHER , in 3 simple steps</h3>
                                </div>
                                <div class="custome_preview_block  edit_btn_sapce">
                                    <div class="brands_block_preview">
                                        <div>
                                            <img src="https://jitterygit.com/wp-content/uploads/2020/11/step1.jpg">
                                        </div>
                                        <h3>Fill out the Online Form
                                        </h3>
                                        <p>
                                            The first step to receive your FREE VOUCHER is to complete the form
                                            in
                                            this
                                            page. This offer is valid only for customers that bought the product
                                            through
                                            our Official Seller on Amazon.com


                                        </p>

                                    </div>
                                    <div class="brands_block_preview">
                                        <div>
                                            <img src="https://jitterygit.com/wp-content/uploads/2020/11/step2.jpg">
                                        </div>
                                        <h3>Provide Your Order ID
                                        </h3>
                                        <p>
                                            After filling the form you will be asked to input your Amazon order
                                            ID
                                            for
                                            us to locate your order and validate your gift. Your gift will be
                                            sent
                                            to
                                            the shipping address specified in your order.




                                        </p>

                                    </div>
                                    <div class="brands_block_preview">
                                        <div>
                                            <img src="https://jitterygit.com/wp-content/uploads/2020/11/VOUCHER.png">
                                        </div>
                                        <h3>Receive your FREE VOUCHER
                                        </h3>
                                        <p>
                                            If you qualify for a FREE VOUCHER we will send you an email
                                            confirming
                                            your
                                            submission within 72 hours. Once the process is completed you will
                                            receive
                                            your FREE VOUCHER by email automatically.




                                        </p>

                                    </div>
                                </div>
                                <div class="edit_btn_preview">
                                    <button class="Polaris-Button Polaris-Button--primary" type="button">
                                        <span class="Polaris-Button__Content">
                                            <span class="Polaris-Button__Text">Edit</span>
                                        </span>
                                    </button>
                                </div>
                            </div>

                        </div>

                        <div class="next_previsuos_section">
                            <button class="Polaris-Button" type="button">
                                <span class="Polaris-Button__Content">
                                    <span class="Polaris-Button__Text">Previous</span>
                                </span>
                            </button>
                            <button class="Polaris-Button" type="button">
                                <span class="Polaris-Button__Content">
                                    <span class="Polaris-Button__Text">Next</span>
                                </span>
                            </button>
                        </div>
                        </div>
                      
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="Polaris-FooterHelp">
                <div class="Polaris-FooterHelp__Content polaris_footer_bottom">
                    <div class="Polaris-FooterHelp__Icon">
                        <span class="Polaris-Icon Polaris-Icon--colorHighlight Polaris-Icon--applyColor">
                            <span class="Polaris-VisuallyHidden"></span>
                            <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-9 3a1 1 0 1 0 2 0v-2a1 1 0 1 0-2 0v2zm0-6a1 1 0 1 0 2 0 1 1 0 0 0-2 0z">
                                </path>
                            </svg>
                        </span>
                    </div>
                    <div class="Polaris-FooterHelp__Text">
                        Learn more about
                        <a target="_blank" class="Polaris-Link"
                            href="https://help.shopify.com/manual/orders/fulfill-orders" rel="noopener noreferrer"
                            data-polaris-unstyled="true">
                            fulfilling orders
                            <span class="Polaris-Link__IconLockup">
                                <span class="Polaris-Link__IconLayout">
                                    <span class="Polaris-Icon">
                                        <span class="Polaris-VisuallyHidden">(opens a new window)</span>
                                        <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false"
                                            aria-hidden="true">
                                            <path
                                                d="M14 13v1a1 1 0 0 1-1 1H6c-.575 0-1-.484-1-1V7a1 1 0 0 1 1-1h1c1.037 0 1.04 1.5 0 1.5-.178.005-.353 0-.5 0v6h6V13c0-1 1.5-1 1.5 0zm-3.75-7.25A.75.75 0 0 1 11 5h4v4a.75.75 0 0 1-1.5 0V7.56l-3.22 3.22a.75.75 0 1 1-1.06-1.06l3.22-3.22H11a.75.75 0 0 1-.75-.75z">
                                            </path>
                                        </svg>
                                    </span>
                                </span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div id="PolarisPortalsContainer"></div>
        </div>
    </div>
</div>
</form>



<!-- add-product--model ---start-->
<div>
    <div class="product_model" style="display:none">
        <div id="PolarisPortalsContainer">
            <div data-portal-id="modal-Polarisportal1">
                <div>
                    <div class="Polaris-Modal-Dialog__Container" data-polaris-layer="true" data-polaris-overlay="true">
                        <div>
                            <div role="dialog" aria-modal="true" aria-labelledby="Polarismodal-header1" tabindex="-1"
                                class="Polaris-Modal-Dialog">
                                <div class="Polaris-Modal-Dialog__Modal custom_model">
                                    <div class="Polaris-Modal-Header" style="align-items: center;">
                                        <div id="Polarismodal-header1"
                                            class="Polaris-Modal-Header__Title add_product_text "
                                            style="text-align:left">
                                            <h2 class="">Add Product</h2>
                                        </div>
                                        <button class="Polaris-Modal-CloseButton product_model_hide" aria-label="Close">
                                            <span class="Polaris-Icon Polaris-Icon--colorBase Polaris-Icon--applyColor">
                                                <span
                                                    class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--regular Polaris-Text--visuallyHidden"></span>
                                                <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false"
                                                    aria-hidden="true">
                                                    <path
                                                        d="m11.414 10 6.293-6.293a1 1 0 1 0-1.414-1.414l-6.293 6.293-6.293-6.293a1 1 0 0 0-1.414 1.414l6.293 6.293-6.293 6.293a1 1 0 1 0 1.414 1.414l6.293-6.293 6.293 6.293a.998.998 0 0 0 1.707-.707.999.999 0 0 0-.293-.707l-6.293-6.293z">
                                                    </path>
                                                </svg>
                                            </span>
                                        </button>

                                    </div>
                                    <div class="Polaris-Modal__BodyWrapper" style="display:block">
                                        <div class="Polaris-Modal__Body Polaris-Scrollable Polaris-Scrollable--vertical Polaris-Scrollable--horizontal"
                                            data-polaris-scrollable="true">
                                            <section class="Polaris-Modal-Section">

                                                <div class="">
                                                    <div class="media_blocking" style="display:flex">
                                                        <div style="flex:1">
                                                            <div class="Polaris-Filters">
                                                                <div class="Polaris-Filters-ConnectedFilterControl__ProxyButtonContainer"
                                                                    aria-hidden="true">
                                                                    <div data-key="taggedWith">
                                                                        <button class="Polaris-Button" type="button">
                                                                            <span class="Polaris-Button__Content">
                                                                                <span
                                                                                    class="Polaris-Button__Text">Tagged
                                                                                    with</span>
                                                                                <span class="Polaris-Button__Icon">
                                                                                    <div class="">
                                                                                        <span class="Polaris-Icon">
                                                                                            <span
                                                                                                class="Polaris-VisuallyHidden">
                                                                                            </span>
                                                                                            <svg viewBox="0 0 20 20"
                                                                                                class="Polaris-Icon__Svg"
                                                                                                focusable="false"
                                                                                                aria-hidden="true">
                                                                                                <path
                                                                                                    d="M13.098 8h-6.196c-.751 0-1.172.754-.708 1.268l3.098 3.432c.36.399 1.055.399 1.416 0l3.098-3.433c.464-.513.043-1.267-.708-1.267Z">
                                                                                                </path>
                                                                                            </svg>
                                                                                        </span>
                                                                                    </div>
                                                                                </span>
                                                                            </span>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="Polaris-Filters-ConnectedFilterControl__Wrapper">
                                                                    <div
                                                                        class="Polaris-Filters-ConnectedFilterControl Polaris-Filters-ConnectedFilterControl--right">
                                                                        <div
                                                                            class="Polaris-Filters-ConnectedFilterControl__CenterContainer">
                                                                            <div
                                                                                class="Polaris-Filters-ConnectedFilterControl__Item">
                                                                                <div class="Polaris-Labelled--hidden">
                                                                                    <div
                                                                                        class="Polaris-Labelled__LabelWrapper">
                                                                                        <div class="Polaris-Label">
                                                                                            <label
                                                                                                id="PolarisTextField1Label"
                                                                                                for="PolarisTextField1"
                                                                                                class="Polaris-Label__Text">Filter
                                                                                                items</label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="Polaris-Connected">
                                                                                        <div
                                                                                            class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                                                            <div
                                                                                                class="Polaris-TextField">
                                                                                                <div class="Polaris-TextField__Prefix"
                                                                                                    id="PolarisTextField1-Prefix">
                                                                                                    <span
                                                                                                        class="Polaris-Filters__SearchIcon">
                                                                                                        <span
                                                                                                            class="Polaris-Icon">
                                                                                                            <span
                                                                                                                class="Polaris-VisuallyHidden">
                                                                                                            </span>
                                                                                                            <svg viewBox="0 0 20 20"
                                                                                                                class="Polaris-Icon__Svg"
                                                                                                                focusable="false"
                                                                                                                aria-hidden="true">
                                                                                                                <path
                                                                                                                    d="M8 12a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm9.707 4.293-4.82-4.82a5.968 5.968 0 0 0 1.113-3.473 6 6 0 0 0-12 0 6 6 0 0 0 6 6 5.968 5.968 0 0 0 3.473-1.113l4.82 4.82a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414z">
                                                                                                                </path>
                                                                                                            </svg>
                                                                                                        </span>
                                                                                                    </span>
                                                                                                </div>
                                                                                                <input type="text"
                                                                                                    id="PolarisTextField1"
                                                                                                    placeholder="Search for products"
                                                                                                    autocomplete="off"
                                                                                                    class="Polaris-TextField__Input Polaris-TextField__Input--hasClearButton"
                                                                                                    aria-labelledby="PolarisTextField1Label PolarisTextField1-Prefix"
                                                                                                    aria-invalid="false"
                                                                                                    value="">
                                                                                                <button type="button"
                                                                                                    class="Polaris-TextField__ClearButton">
                                                                                                    <span
                                                                                                        class="Polaris-VisuallyHidden">Clear</span>
                                                                                                    <span
                                                                                                        class="Polaris-Icon Polaris-Icon--colorBase Polaris-Icon--applyColor">
                                                                                                        <span
                                                                                                            class="Polaris-VisuallyHidden">
                                                                                                        </span>
                                                                                                        <svg viewBox="0 0 20 20"
                                                                                                            class="Polaris-Icon__Svg"
                                                                                                            focusable="false"
                                                                                                            aria-hidden="true">
                                                                                                            <path
                                                                                                                fill-rule="evenodd"
                                                                                                                d="M10 2a8 8 0 1 0 0 16 8 8 0 0 0 0-16zm-2.293 4.293a1 1 0 0 0-1.414 1.414l2.293 2.293-2.293 2.293a1 1 0 1 0 1.414 1.414l2.293-2.293 2.293 2.293a1 1 0 1 0 1.414-1.414l-2.293-2.293 2.293-2.293a1 1 0 0 0-1.414-1.414l-2.293 2.293-2.293-2.293z">
                                                                                                            </path>
                                                                                                        </svg>
                                                                                                    </span>
                                                                                                </button>
                                                                                                <div
                                                                                                    class="Polaris-TextField__Backdrop">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="Polaris-Filters-ConnectedFilterControl__MoreFiltersButtonContainer Polaris-Filters-ConnectedFilterControl--onlyButtonVisible">
                                                                            <div
                                                                                class="Polaris-Filters-ConnectedFilterControl__Item">
                                                                                <div>
                                                                                    <button class="Polaris-Button"
                                                                                        type="button">
                                                                                        <span
                                                                                            class="Polaris-Button__Content">
                                                                                            <span
                                                                                                class="Polaris-Button__Text">More
                                                                                                filters</span>
                                                                                        </span>
                                                                                    </button>
                                                                                    <button class="Polaris-Button"
                                                                                        type="button">
                                                                                        <span
                                                                                            class="Polaris-Button__Content">
                                                                                            <span
                                                                                                class="Polaris-Button__Text"><span
                                                                                                    style="margin: 0px 4px 0px 0px;"><img
                                                                                                        src="images/down_.png"></span>Sort</span>
                                                                                        </span>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="Polaris-IndexTable">
                                                        <div class="Polaris-IndexTable__StickyTable"
                                                            role="presentation">
                                                            <div>
                                                                <div>
                                                                </div>
                                                                <div>
                                                                    <div class="Polaris-IndexTable__StickyTableHeader">
                                                                        <div
                                                                            class="Polaris-IndexTable__StickyTableColumnHeader">
                                                                            <div class="Polaris-IndexTable__TableHeading"
                                                                                data-index-table-sticky-heading="true"
                                                                                style="min-width: 153px;">
                                                                                <div
                                                                                    class="Polaris-Stack Polaris-Stack--spacingNone Polaris-Stack--alignmentCenter Polaris-Stack--noWrap">
                                                                                    <div class="Polaris-Stack__Item">
                                                                                        <div class="Polaris-IndexTable__FirstStickyHeaderElement"
                                                                                            style="min-width: calc(22px);">
                                                                                            <div
                                                                                                class="Polaris-IndexTable__ColumnHeaderCheckboxWrapper">
                                                                                                <label
                                                                                                    class="Polaris-Choice Polaris-Choice--labelHidden"
                                                                                                    for="PolarisCheckbox2">
                                                                                                    <span
                                                                                                        class="Polaris-Choice__Control">
                                                                                                        <span
                                                                                                            class="Polaris-Checkbox">
                                                                                                            <input
                                                                                                                id="PolarisCheckbox2"
                                                                                                                type="checkbox"
                                                                                                                class="Polaris-Checkbox__Input"
                                                                                                                aria-invalid="false"
                                                                                                                role="checkbox"
                                                                                                                aria-checked="false"
                                                                                                                value="" name="product[]">
                                                                                                            <span
                                                                                                                class="Polaris-Checkbox__Backdrop">
                                                                                                            </span>
                                                                                                            <span
                                                                                                                class="Polaris-Checkbox__Icon">
                                                                                                                <span
                                                                                                                    class="Polaris-Icon">
                                                                                                                    <span
                                                                                                                        class="Polaris-VisuallyHidden">
                                                                                                                    </span>
                                                                                                                    <svg viewBox="0 0 20 20"
                                                                                                                        class="Polaris-Icon__Svg"
                                                                                                                        focusable="false"
                                                                                                                        aria-hidden="true">
                                                                                                                        <path
                                                                                                                            d="M14.723 6.237a.94.94 0 0 1 .053 1.277l-5.366 6.193a.834.834 0 0 1-.611.293.83.83 0 0 1-.622-.264l-2.927-3.097a.94.94 0 0 1 0-1.278.82.82 0 0 1 1.207 0l2.297 2.43 4.763-5.498a.821.821 0 0 1 1.206-.056Z">
                                                                                                                        </path>
                                                                                                                    </svg>
                                                                                                                </span>
                                                                                                            </span>
                                                                                                        </span>
                                                                                                    </span>
                                                                                                    <span
                                                                                                        class="Polaris-Choice__Label">Select
                                                                                                        all
                                                                                                        customers</span>
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="Polaris-Stack__Item">
                                                                                        <div
                                                                                            class="Polaris-IndexTable--stickyTableHeadingSecondScrolling">
                                                                                            Name</div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="Polaris-IndexTable__StickyTableHeadings">
                                                                            <div class="Polaris-IndexTable__TableHeading Polaris-IndexTable__StickyTableHeading--second"
                                                                                data-index-table-sticky-heading="true"
                                                                                style="min-width: 99px;">Name
                                                                            </div>
                                                                            <div class="Polaris-IndexTable__TableHeading"
                                                                                data-index-table-sticky-heading="true"
                                                                                style="min-width: 139px;">
                                                                                Location</div>
                                                                            <div class="Polaris-IndexTable__TableHeading"
                                                                                data-index-table-sticky-heading="true"
                                                                                style="min-width: 109px;">Order
                                                                                count
                                                                            </div>
                                                                            <div class="Polaris-IndexTable__TableHeading"
                                                                                data-index-table-sticky-heading="true"
                                                                                style="min-width: 123px;">Amount
                                                                                spent
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="Polaris-IndexTable-ScrollContainer">
                                                            <table class="Polaris-IndexTable__Table">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="Polaris-IndexTable__TableHeading Polaris-IndexTable__TableHeading--first"
                                                                            colspan="1" data-index-table-heading="true"
                                                                            style="width:10px !important ;">
                                                                            <div
                                                                                class="Polaris-IndexTable__ColumnHeaderCheckboxWrapper">
                                                                                <label
                                                                                    class="Polaris-Choice Polaris-Choice--labelHidden"
                                                                                    for="3416">
                                                                                    <input type="checkbox" valeu="maker" name="product[]"
                                                                                        id="select-all"
                                                                                        style="width:18px;height:18px;border:1px solid #e1e3e5;margin-left:0px">
                                                                                    <span
                                                                                        class="Polaris-Choice__Label">Select
                                                                                        customer</span>
                                                                                </label>
                                                                            </div>
                                                                        </th>
                                                                        <!-- <th class="Polaris-IndexTable__TableHeading Polaris-IndexTable__TableHeading--second " data-index-table-heading="true" style="left: 54px;"></th> -->
                                                                        <th class="Polaris-IndexTable__TableHeading "
                                                                            data-index-table-heading="true"
                                                                            style="padding-left:0px ;">Product Name
                                                                        </th>
                                                                        <th class="Polaris-IndexTable__TableHeading text_center"
                                                                            data-index-table-heading="true">
                                                                            Price</th>
                                                                        <th class="Polaris-IndexTable__TableHeading text_center"
                                                                            data-index-table-heading="true">Product Live
                                                                        </th>
                                                                        <th class="Polaris-IndexTable__TableHeading text_center"
                                                                            data-index-table-heading="true">
                                                                            Priority
                                                                        </th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr class="Polaris-IndexTable__TableRow">
                                                                        <td
                                                                            class="Polaris-IndexTable__TableCell Polaris-IndexTable__TableCell--first">
                                                                            <div
                                                                                class="Polaris-IndexTable-Checkbox__TableCellContentContainer">
                                                                                <div
                                                                                    class="Polaris-IndexTable-Checkbox__Wrapper Polaris-IndexTable-Checkbox--expanded">
                                                                                    <label
                                                                                        class="Polaris-Choice Polaris-Choice--labelHidden"
                                                                                        for="3416">
                                                                                        <input type="checkbox" name="product[]"
                                                                                            valeu="maker"
                                                                                            id="rule_listing"
                                                                                            style="width:18px;height: 18px;border:1px solid #e1e3e5">
                                                                                        <span
                                                                                            class="Polaris-Choice__Label">Select
                                                                                            customer</span>
                                                                                    </label>
                                                                                </div>
                                                                                <div class="border_setup">
                                                                                    <span> <img
                                                                                            src="images/bus_icon.png"></span>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="Polaris-IndexTable__TableCell ">
                                                                            <span
                                                                                class="Polaris-TextStyle--variationStrong">Test
                                                                                04</span>
                                                                        </td>
                                                                        <td
                                                                            class="Polaris-IndexTable__TableCell text_center">
                                                                            <div><span>12</span>
                                                                            </div>
                                                                        </td>
                                                                        <td
                                                                            class="Polaris-IndexTable__TableCell text_center">
                                                                            <div class="live_product">
                                                                                <img src="images/amazon_market.png">
                                                                            </div>
                                                                        </td>
                                                                        <td
                                                                            class="Polaris-IndexTable__TableCell text_center">
                                                                            <p class="edit_btn_itme"><img
                                                                                    src="images/dot_icon.png">
                                                                            </p>
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="Polaris-IndexTable__TableRow">
                                                                        <td
                                                                            class="Polaris-IndexTable__TableCell Polaris-IndexTable__TableCell--first">
                                                                            <div
                                                                                class="Polaris-IndexTable-Checkbox__TableCellContentContainer">
                                                                                <div
                                                                                    class="Polaris-IndexTable-Checkbox__Wrapper Polaris-IndexTable-Checkbox--expanded">
                                                                                    <label
                                                                                        class="Polaris-Choice Polaris-Choice--labelHidden"
                                                                                        for="3416">
                                                                                        <input type="checkbox" name="product[]"
                                                                                            valeu="maker"
                                                                                            id="rule_listing"
                                                                                            style="width:18px;height: 18px;border:1px solid #e1e3e5">
                                                                                        <span
                                                                                            class="Polaris-Choice__Label">Select
                                                                                            customer</span>
                                                                                    </label>
                                                                                </div>
                                                                                <div class="border_setup">
                                                                                    <span> <img
                                                                                            src="images/bus_icon.png"></span>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="Polaris-IndexTable__TableCell">
                                                                            <span
                                                                                class="Polaris-TextStyle--variationStrong">Test
                                                                                04 </span>
                                                                        </td>
                                                                        <td
                                                                            class="Polaris-IndexTable__TableCell text_center">
                                                                            <div><span>12</span>
                                                                            </div>
                                                                        </td>
                                                                        <td
                                                                            class="Polaris-IndexTable__TableCell text_center">
                                                                            <div class="live_product">
                                                                                <img src="images/amazon_market.png">
                                                                            </div>
                                                                        </td>
                                                                        <td
                                                                            class="Polaris-IndexTable__TableCell text_center">
                                                                            <p><img src="images/dot_icon.png">
                                                                            </p>
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="Polaris-IndexTable__TableRow">
                                                                        <td
                                                                            class="Polaris-IndexTable__TableCell Polaris-IndexTable__TableCell--first">
                                                                            <div
                                                                                class="Polaris-IndexTable-Checkbox__TableCellContentContainer">
                                                                                <div
                                                                                    class="Polaris-IndexTable-Checkbox__Wrapper Polaris-IndexTable-Checkbox--expanded">
                                                                                    <label
                                                                                        class="Polaris-Choice Polaris-Choice--labelHidden"
                                                                                        for="3416">
                                                                                        <input type="checkbox" name="product[]"
                                                                                            valeu="maker"
                                                                                            id="rule_listing"
                                                                                            style="width:18px;height: 18px;border:1px solid #e1e3e5">
                                                                                        <span
                                                                                            class="Polaris-Choice__Label">Select
                                                                                            customer</span>
                                                                                    </label>
                                                                                </div>
                                                                                <div class="border_setup">
                                                                                    <span> <img
                                                                                            src="images/bus_icon.png"></span>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="Polaris-IndexTable__TableCell">
                                                                            <span
                                                                                class="Polaris-TextStyle--variationStrong">Test
                                                                                04 </span>
                                                                        </td>
                                                                        <td
                                                                            class="Polaris-IndexTable__TableCell text_center">
                                                                            <div><span>12</span>
                                                                        </td>
                                                                        <td
                                                                            class="Polaris-IndexTable__TableCell text_center">
                                                                            <div class="live_product">
                                                                                <img src="images/amazon_market.png">
                                                                            </div>
                                                                        </td>
                                                                        <td
                                                                            class="Polaris-IndexTable__TableCell text_center">
                                                                            <p class="edit_btn_itme"><img
                                                                                    src="images/dot_icon.png">
                                                                            </p>
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="Polaris-IndexTable__TableRow">
                                                                        <td
                                                                            class="Polaris-IndexTable__TableCell Polaris-IndexTable__TableCell--first">
                                                                            <div
                                                                                class="Polaris-IndexTable-Checkbox__TableCellContentContainer">
                                                                                <div
                                                                                    class="Polaris-IndexTable-Checkbox__Wrapper Polaris-IndexTable-Checkbox--expanded">
                                                                                    <label
                                                                                        class="Polaris-Choice Polaris-Choice--labelHidden"
                                                                                        for="3416">
                                                                                        <input type="checkbox" name="product[]"
                                                                                            valeu="maker"
                                                                                            id="rule_listing"
                                                                                            style="width:18px;height:18px;border:1px solid #e1e3e5">
                                                                                        <span
                                                                                            class="Polaris-Choice__Label">Select
                                                                                            customer</span>
                                                                                    </label>
                                                                                </div>
                                                                                <div class="border_setup">
                                                                                    <span> <img
                                                                                            src="images/bus_icon.png"></span>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="Polaris-IndexTable__TableCell">
                                                                            <span
                                                                                class="Polaris-TextStyle--variationStrong">Test
                                                                                04 </span>
                                                                        </td>
                                                                        <td
                                                                            class="Polaris-IndexTable__TableCell text_center">
                                                                            <div><span>12</span>
                                                                        </td>
                                                                        <td
                                                                            class="Polaris-IndexTable__TableCell text_center">
                                                                            <div class="live_product">
                                                                                <img src="images/amazon_market.png">
                                                                            </div>
                                                                        </td>
                                                                        <td
                                                                            class="Polaris-IndexTable__TableCell text_center">
                                                                            <p class="edit_btn_itme"><img
                                                                                    src="images/dot_icon.png">
                                                                            </p>
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="Polaris-IndexTable__TableRow"
                                                                        style="border:unset">
                                                                        <td
                                                                            class="Polaris-IndexTable__TableCell Polaris-IndexTable__TableCell--first">
                                                                            <div
                                                                                class="Polaris-IndexTable-Checkbox__TableCellContentContainer">
                                                                                <div
                                                                                    class="Polaris-IndexTable-Checkbox__Wrapper Polaris-IndexTable-Checkbox--expanded">
                                                                                    <label
                                                                                        class="Polaris-Choice Polaris-Choice--labelHidden"
                                                                                        for="3416">
                                                                                        <input type="checkbox" name="product[]"
                                                                                            valeu="maker"
                                                                                            id="rule_listing"
                                                                                            style="width:18px;height:18px;border:1px solid #e1e3e5">
                                                                                        <span
                                                                                            class="Polaris-Choice__Label">Select
                                                                                            customer</span>
                                                                                    </label>
                                                                                </div>
                                                                                <div class="border_setup">
                                                                                    <span> <img
                                                                                            src="images/bus_icon.png"></span>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="Polaris-IndexTable__TableCell">
                                                                            <span
                                                                                class="Polaris-TextStyle--variationStrong">Test
                                                                                04 </span>
                                                                        </td>
                                                                        <td
                                                                            class="Polaris-IndexTable__TableCell text_center">
                                                                            <div><span>12</span>
                                                                        </td>
                                                                        <td
                                                                            class="Polaris-IndexTable__TableCell text_center">
                                                                            <div class="live_product">
                                                                                <img src="images/amazon_market.png">
                                                                            </div>
                                                                        </td>
                                                                        <td
                                                                            class="Polaris-IndexTable__TableCell text_center">
                                                                            <p class="edit_btn_itme"><img
                                                                                    src="images/dot_icon.png">
                                                                            </p>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="Polaris-IndexTable__ScrollBarContainer Polaris-IndexTable--scrollBarContainerHidden"
                                                        style="border:unset !important">
                                                        <div class="Polaris-IndexTable__ScrollBar"
                                                            style="--pc-index-table-scroll-bar-content-width:521px;">
                                                            <div class="Polaris-IndexTable__ScrollBarContent">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                        <div class="Polaris-Modal-Footer">
                                            <div class="Polaris-Modal-Footer__FooterContent">
                                                <div class="Polaris-Stack Polaris-Stack--alignmentCenter">
                                                    <div class="Polaris-Stack__Item Polaris-Stack__Item--fill">
                                                    </div>
                                                    <div class="Polaris-Stack__Item">
                                                        <div class="Polaris-ButtonGroup" style="align-items: center;">
                                                            <div class="Polaris-ButtonGroup__Item"><button
                                                                    class="Polaris-Button product_model_hide "
                                                                    type="button"><span
                                                                        class="Polaris-Button__Content"><span
                                                                            class="Polaris-Button__Text">Cancel</span></span></button>
                                                            </div>
                                                            <div class="Polaris-ButtonGroup__Item"> <button
                                                                    class="Polaris-Button Polaris-Button--primary"
                                                                    type="button">
                                                                    <span class="Polaris-Button__Content">
                                                                        <span class="Polaris-Button__Text">Add</span>
                                                                    </span>
                                                                </button></div>
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
                    <div class="Polaris-Backdrop"></div>
                </div>
            </div>
        </div>
    </div>
<!-- slider---js--opacity---start -->
<script>
    window.onload = function() {
    slideOne();
    slideTwo();
    };

    let sliderOne = document.getElementById("slider-1");
    let sliderTwo = document.getElementById("slider-2");
    let displayValOne = document.getElementById("range1");
    let displayValTwo = document.getElementById("range2");
    let minGap = 0;
    let sliderTrack = document.querySelector(".slider-track");
    let sliderMaxValue = document.getElementById("slider-1").max;

    function slideOne() {
    if (parseInt(sliderTwo.value) - parseInt(sliderOne.value) <=
    minGap) {
    sliderOne.value = parseInt(sliderTwo.value) - minGap;
    }
    displayValOne.textContent = sliderOne.value;
    fillColor();
    }

    function slideTwo() {
    if (parseInt(sliderTwo.value) - parseInt(sliderOne.value) <=
    minGap) {
    sliderTwo.value = parseInt(sliderOne.value) + minGap;
    }
    displayValTwo.textContent = sliderTwo.value;
    fillColor();
    }

    function fillColor() {
    percent1 = (sliderOne.value / sliderMaxValue) * 100;
    percent2 = (sliderTwo.value / sliderMaxValue) * 100;
    sliderTrack.style.background =
    `linear-gradient(to right, #dadae5 ${percent1}% , #027657 ${percent1}% , #027657 ${percent2}%, #dadae5 ${percent2}%)`;
    }
</script>


<!-- slider---js--opacity---end -->


<!-- all-select-box-js---start -->
<script>
var selectAllItems = "#select-all";
var checkboxItem = ":checkbox";
$(selectAllItems).click(function() {
    if (this.checked) {
        $(checkboxItem).each(function() {
            this.checked = true;
        });
    } else {
        $(checkboxItem).each(function() {
            this.checked = false;
        });
    }
});
</script>

<!-- all-select-box-js---end -->

    <!-- add-product---model-----end -->