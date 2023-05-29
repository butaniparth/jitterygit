<div class="Polaris-Frame__Content" style="padding:5px 15px">
    <div class="Polaris-Page view_page">
        <div class="main_home_page">
            <div class="heading_text">
                <h2>Funnel setting</h2>
            </div>
            <div>
                <div class="pagination_active_section">
                    <ul>
                        <li><a href="Funnel-step-first.php"><span class="Polaris-Button__Content">
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
                        </a></li>
                        <li><a href="Funnel.php">1</a></li>
                        <li><a href="marketplace.php">2</a></li>
                        <li><a href="Funnel-setting.php">3</a></li>
                        <li><a href="Funnel-form.php">4</a></li>
                        <li><a href="Funnel-step-first.php">5</a></li>
                        <li class="active_pagination"><a href="setting-promo.php">6</a></li>

                        <li style="margin:0px"><a href="setting-promo.php"><span class="Polaris-Button__Content">
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
                        </a></li>
                    </ul>
                </div>
            </div>
            <div class="save_nd_publish_mode">
                <div class="enbaled_text">
                    <h5 class="hide_enable">Enable</h5>
                    <h5 class="hide_disable">Disable</h5>

                    <label class="switch" for="checkbox_">
                        <input type="checkbox" id="checkbox_" value="checked">
                        <div class="slider round"></div>
                    </label>

                    <script>
                    $('#checkbox_').click(function() {
                        $('.hide_enable').toggleClass('text_show');
                        $('.hide_disable').toggleClass('text_show1');
                    });
                    </script>
                </div>
                <div>
                    <button class="Polaris-Button" type="button" style="margin-right:5px">
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
                            <div class="Polaris-Card__Header funnel_heading">
                                <h2 class="Polaris-Text--root Polaris-Text--headingMd">Outside of promo box</h2>
                            </div>
                            <div class="Polaris-Card__Section">
                                <div class="Polaris-FormLayout">
                                    <div role="group" class="Polaris-FormLayout--condensed">
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
                                                                    aria-invalid="false" value="">
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
                                                                class="Polaris-Label__Text">Font Size</label>
                                                        </div>
                                                    </div>
                                                    <div class="Polaris-Select">
                                                        <select name="radiusunit" id="promo_font_size"
                                                            class="Polaris-Select__Input" aria-invalid="false">
                                                            <option selected="" value="10 px">10 px</option>
                                                            <option value="20 px">20 px</option>
                                                            <option value="21 px">21 px</option>
                                                        </select>
                                                        <div class="Polaris-Select__Content" aria-hidden="true">
                                                            <span
                                                                class="Polaris-Select__SelectedOption promo_font_size">10
                                                                px</span>
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
                                                    $('#promo_font_size').change(function() {
                                                        var radiusunit = $(this).val();
                                                        $('.promo_font_size').html(radiusunit);
                                                    });
                                                    </script>
                                                </div>
                                            </div>
                                            <div class="Polaris-FormLayout__Item">
                                                <div class="">
                                                    <div class="Polaris-Labelled__LabelWrapper">
                                                        <div class="Polaris-Label">
                                                            <label id="PolarisTextField3Label" for="PolarisTextField3"
                                                                class="Polaris-Label__Text">Color(hexcode)</label>
                                                        </div>
                                                    </div>
                                                    <div class="Polaris-Connected">
                                                        <div
                                                            class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                            <div class="Polaris-TextField">
                                                                <input id="PolarisTextField3" autocomplete="off"
                                                                    class="Polaris-TextField__Input" type="text"
                                                                    aria-labelledby="PolarisTextField3Label"
                                                                    aria-invalid="false" value="">
                                                                <div class="Polaris-TextField__Backdrop">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="Polaris-FormLayout__Items custome_block">
                                            <div class="Polaris-FormLayout__Item">
                                                <div class="">
                                                    <div class="Polaris-Labelled__LabelWrapper">
                                                        <div class="Polaris-Label">
                                                            <label id="PolarisTextField1Label" for="PolarisTextField1"
                                                                class="Polaris-Label__Text">Orientation</label>
                                                        </div>
                                                    </div>
                                                    <div class="Polaris-Connected">
                                                        <div
                                                            class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                            <div class="Polaris-TextField">
                                                                <input id="PolarisTextField1" autocomplete="off"
                                                                    class="Polaris-TextField__Input" type="text"
                                                                    aria-labelledby="PolarisTextField1Label"
                                                                    aria-invalid="false" value="">
                                                                <div class="Polaris-TextField__Backdrop">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="Polaris-FormLayout__Item">
                                                <div class="brands_img_text">
                                                    <div class="text_select_brands">
                                                        <p>Background Image</p>
                                                    </div>
                                                    <div>
                                                    </div>
                                                </div>
                                                <div class="wrapper">
                                                            <div class="box add_promotion_box">

                                                                <div class="upload-options">
                                                                    <label>
                                                                        <div class="Polaris-Labelled--hidden">
                                                                            <div class="Polaris-Labelled__LabelWrapper">
                                                                                <div class="Polaris-Label">
                                                                                    <input type="file"
                                                                                        class="image-upload"
                                                                                        accept="image/*">
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
                                                                            <img src="images/img_thumbanail.svg">

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
                                        <div class="Polaris-FormLayout__Items custome_block">
                                            <div class="Polaris-FormLayout__Item">
                                                <div class="text_select_brands">
                                                    <p>Supplement Image(left)</p>
                                                </div>
                                               <div class="wrapper">
                                                            <div class="box add_promotion_box">

                                                                <div class="upload-options">
                                                                    <label>
                                                                        <div class="Polaris-Labelled--hidden">
                                                                            <div class="Polaris-Labelled__LabelWrapper">
                                                                                <div class="Polaris-Label">
                                                                                    <input type="file"
                                                                                        class="image-upload"
                                                                                        accept="image/*">
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
                                                                            <img src="images/img_thumbanail.svg">

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
                                            <div class="Polaris-FormLayout__Item">
                                                <div class="text_select_brands">
                                                    <p>Supplement Image(Right)</p>
                                                </div>
                                               <div class="wrapper">
                                                            <div class="box add_promotion_box">

                                                                <div class="upload-options">
                                                                    <label>
                                                                        <div class="Polaris-Labelled--hidden">
                                                                            <div class="Polaris-Labelled__LabelWrapper">
                                                                                <div class="Polaris-Label">
                                                                                    <input type="file"
                                                                                        class="image-upload"
                                                                                        accept="image/*">
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
                                                                            <img src="images/img_thumbanail.svg">

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
                            <div>
                            </div>
                        </div>
                        <div class="Polaris-Card">
                            <div style="display:flex;align-items:baseline">
                                <div class=" Polaris-Card__Header funnel_heading">
                                    <h2 class="Polaris-Text--root Polaris-Text--headingMd">Promo Box</h2>

                                </div>

                                <div class="Polaris-Connected1 funnel_select_box">

                                    <div class="Polaris-Select">
                                        <select name="radiusunit" id="promobox_outsite" class="Polaris-Select__Input"
                                            aria-invalid="false">
                                            <option selected="" value="Option 1">Option 1</option>
                                            <option value="Option 2">Option 2</option>
                                            <option value="Option 3">Option 3</option>
                                        </select>
                                        <div class="Polaris-Select__Content" aria-hidden="true">
                                            <span class="Polaris-Select__SelectedOption promobox_outsite">Option
                                                1</span>
                                            <span class="Polaris-Select__Icon">
                                                <span class="Polaris-Icon">
                                                    <span class="Polaris-VisuallyHidden">
                                                    </span>
                                                    <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false"
                                                        aria-hidden="true">
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
                                    $('#promobox_outsite').change(function() {
                                        var radiusunit = $(this).val();
                                        $('.promobox_outsite').html(radiusunit);
                                    });
                                    </script>
                                </div>
                            </div>


                            <div>

                            </div>
                            <div class="Polaris-Card__Section">
                                <div class="open_code_text">
                                    <h3>Generate Individual Open Code</h3>
                                </div>
                                <div class="Polaris-FormLayout">

                                    <div role="group" class="Polaris-FormLayout--condensed">

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
                                                                    aria-invalid="false" value="">
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
                                                                class="Polaris-Label__Text">Font Size</label>
                                                        </div>
                                                    </div>
                                                    <div class="Polaris-Select">
                                                        <select name="radiusunit" id="promo_font_size_code"
                                                            class="Polaris-Select__Input" aria-invalid="false">
                                                            <option selected="" value="10 px">10 px</option>
                                                            <option value="20 px">20 px</option>
                                                            <option value="21 px">21 px</option>
                                                        </select>
                                                        <div class="Polaris-Select__Content" aria-hidden="true">
                                                            <span
                                                                class="Polaris-Select__SelectedOption promo_font_size_code">10
                                                                px</span>
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
                                                    $('#promo_font_size_code').change(function() {
                                                        var radiusunit = $(this).val();
                                                        $('.promo_font_size_code').html(radiusunit);
                                                    });
                                                    </script>
                                                </div>
                                            </div>
                                            <div class="Polaris-FormLayout__Item">
                                                <div class="">
                                                    <div class="Polaris-Labelled__LabelWrapper">
                                                        <div class="Polaris-Label">
                                                            <label id="PolarisTextField3Label" for="PolarisTextField3"
                                                                class="Polaris-Label__Text">Color(hexcode)</label>
                                                        </div>
                                                    </div>
                                                    <div class="Polaris-Connected">
                                                        <div
                                                            class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                            <div class="Polaris-TextField">
                                                                <input id="PolarisTextField3" autocomplete="off"
                                                                    class="Polaris-TextField__Input" type="text"
                                                                    aria-labelledby="PolarisTextField3Label"
                                                                    aria-invalid="false" value="">
                                                                <div class="Polaris-TextField__Backdrop">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="Polaris-FormLayout__Items custome_block">
                                            <div class="Polaris-FormLayout__Item">
                                                <div class="">
                                                    <div class="Polaris-Labelled__LabelWrapper">
                                                        <div class="Polaris-Label">
                                                            <label id="PolarisTextField1Label" for="PolarisTextField1"
                                                                class="Polaris-Label__Text">Orientation</label>
                                                        </div>
                                                    </div>
                                                    <div class="Polaris-Connected">
                                                        <div
                                                            class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                            <div class="Polaris-TextField">
                                                                <input id="PolarisTextField1" autocomplete="off"
                                                                    class="Polaris-TextField__Input" type="text"
                                                                    aria-labelledby="PolarisTextField1Label"
                                                                    aria-invalid="false" value="">
                                                                <div class="Polaris-TextField__Backdrop">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="Polaris-FormLayout__Item">
                                                <div class="brands_img_text">
                                                    <div class="text_select_brands">
                                                        <p>Background Image</p>
                                                    </div>
                                                    <div>
                                                    </div>
                                                </div>
                                                <div class="wrapper">
                                                            <div class="box add_promotion_box">

                                                                <div class="upload-options">
                                                                    <label>
                                                                        <div class="Polaris-Labelled--hidden">
                                                                            <div class="Polaris-Labelled__LabelWrapper">
                                                                                <div class="Polaris-Label">
                                                                                    <input type="file"
                                                                                        class="image-upload"
                                                                                        accept="image/*">
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
                                                                            <img src="images/img_thumbanail.svg">

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
                                        <div class="Polaris-FormLayout__Items">
                                            <div class="Polaris-FormLayout__Item">

                                                <div class="">
                                                    <div class="Polaris-Labelled__LabelWrapper">
                                                        <div class="Polaris-Label">
                                                            <label id="PolarisTextField1Label" for="PolarisTextField1"
                                                                class="Polaris-Label__Text">Body</label>
                                                        </div>
                                                    </div>
                                                    <div class="Polaris-Connected">
                                                        <div
                                                            class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                            <div
                                                                class="Polaris-TextField Polaris-TextField--hasValue Polaris-TextField--multiline">
                                                                <textarea id="PolarisTextField1" autocomplete="off"
                                                                    class="Polaris-TextField__Input" type="text"
                                                                    rows="4" aria-labelledby="PolarisTextField1Label"
                                                                    aria-invalid="false" aria-multiline="true"
                                                                    style="height: 277px;" spellcheck="false">1776 Barnes Street
                                                  Orlando, FL 32801</textarea>
                                                                <grammarly-extension data-grammarly-shadow-root="true"
                                                                    style="position: absolute; top: 0px; left: 0px; pointer-events: none; z-index: 20;"
                                                                    class="dnXmp"></grammarly-extension>
                                                                <grammarly-extension data-grammarly-shadow-root="true"
                                                                    style="position: absolute; top: 0px; left: 0px; pointer-events: none; z-index: 20;"
                                                                    class="dnXmp"></grammarly-extension>
                                                                <div class="Polaris-TextField__Backdrop">
                                                                </div>
                                                                <div aria-hidden="true"
                                                                    class="Polaris-TextField__Resizer">
                                                                    <div class="Polaris-TextField__DummyInput">1776
                                                                        Barnes
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
                                                <div class="spaceing_manage_block" style="margin-bottom: 10px;">
                                                    <div class="Polaris-Labelled__LabelWrapper">
                                                        <div class="Polaris-Label">
                                                            <label id="PolarisTextField1Label" for="PolarisTextField1"
                                                                class="Polaris-Label__Text">Font Name</label>
                                                        </div>
                                                    </div>
                                                    <button class="Polaris-Button" type="button">
                                                        <span class="Polaris-Button__Content">
                                                            <span class="Polaris-Button__Text">Login for Coupon</span>
                                                        </span>
                                                    </button>
                                                </div>

                                            </div>
                                            <div class="Polaris-FormLayout__Item">

                                                <div class="spaceing_manage_block" style="margin-bottom: 10px;">
                                                    <div class="Polaris-Labelled__LabelWrapper">
                                                        <div class="Polaris-Label">
                                                            <label id="PolarisTextField1Label" for="PolarisTextField1"
                                                                class="Polaris-Label__Text">Font Name</label>
                                                        </div>
                                                    </div>
                                                    <div class="Polaris-Connected1">
                                                        <div class="Polaris-Select">
                                                            <select name="radiusunit" id="open_code_font_name"
                                                                class="Polaris-Select__Input" aria-invalid="false">
                                                                <option selected="" value="Arial">Arial</option>
                                                                <option value="Roboto">Roboto</option>
                                                                <option value="Popins">Popins</option>
                                                            </select>
                                                            <div class="Polaris-Select__Content" aria-hidden="true">
                                                                <span
                                                                    class="Polaris-Select__SelectedOption open_code_font_name">Arial</span>
                                                                <span class="Polaris-Select__Icon">
                                                                    <span class="Polaris-Icon">
                                                                        <span class="Polaris-VisuallyHidden">
                                                                        </span>
                                                                        <svg viewBox="0 0 20 20"
                                                                            class="Polaris-Icon__Svg" focusable="false"
                                                                            aria-hidden="true">
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
                                                    <script>
                                                    $('#open_code_font_name').change(function() {
                                                        var radiusunit = $(this).val();
                                                        $('.open_code_font_name').html(radiusunit);
                                                    });
                                                    </script>
                                                </div>
                                                <div class="spaceing_manage_block" style="margin-bottom: 10px;">
                                                    <div class="Polaris-Labelled__LabelWrapper">
                                                        <div class="Polaris-Label">
                                                            <label id="PolarisTextField1Label" for="PolarisTextField1"
                                                                class="Polaris-Label__Text">Font Size</label>
                                                        </div>
                                                    </div>
                                                    <div class="Polaris-Connected">
                                                        <div
                                                            class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                            <div class="Polaris-TextField">
                                                                <input id="PolarisTextField1" autocomplete="off"
                                                                    class="Polaris-TextField__Input" type="text"
                                                                    aria-labelledby="PolarisTextField1Label"
                                                                    aria-invalid="false" value="">
                                                                <div class="Polaris-TextField__Backdrop">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="spaceing_manage_block" style="margin-bottom: 10px;">
                                                    <div class="Polaris-Labelled__LabelWrapper">
                                                        <div class="Polaris-Label">
                                                            <label id="PolarisTextField1Label" for="PolarisTextField1"
                                                                class="Polaris-Label__Text">Font Color (hexcode)</label>
                                                        </div>
                                                    </div>
                                                    <div class="Polaris-Connected">
                                                        <div
                                                            class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                            <div class="Polaris-TextField">
                                                                <input id="PolarisTextField1" autocomplete="off"
                                                                    class="Polaris-TextField__Input" type="text"
                                                                    aria-labelledby="PolarisTextField1Label"
                                                                    aria-invalid="false" value="">
                                                                <div class="Polaris-TextField__Backdrop">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="spaceing_manage_block" style="margin-bottom: 10px;">
                                                    <div class="Polaris-Labelled__LabelWrapper">
                                                        <div class="Polaris-Label">
                                                            <label id="PolarisTextField1Label" for="PolarisTextField1"
                                                                class="Polaris-Label__Text">Orientation</label>
                                                        </div>
                                                    </div>
                                                    <div class="Polaris-Connected">
                                                        <div
                                                            class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                            <div class="Polaris-TextField">
                                                                <input id="PolarisTextField1" autocomplete="off"
                                                                    class="Polaris-TextField__Input" type="text"
                                                                    aria-labelledby="PolarisTextField1Label"
                                                                    aria-invalid="false" value="">
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
                            <div class="Polaris-Card__Section">
                                <div class="spacing_form_section" style="margin-top:0px">
                                    <div class="Polaris-FormLayout">
                                        <div role="group" class="Polaris-FormLayout--grouped">
                                            <div class="Polaris-FormLayout__Items">
                                                <div class="Polaris-FormLayout__Item">
                                                    <div class="details_section">
                                                        <h3>Saving Box</h3>
                                                    </div>
                                                    <div class="">
                                                        <div class="Polaris-Labelled__LabelWrapper">
                                                            <div class="Polaris-Label">
                                                                <label id="PolarisTextField1Label"
                                                                    for="PolarisTextField1"
                                                                    class="Polaris-Label__Text">Text</label>
                                                            </div>
                                                        </div>
                                                        <div class="Polaris-Connected">
                                                            <div
                                                                class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                                <div class="Polaris-TextField">
                                                                    <input id="PolarisTextField1" autocomplete="off"
                                                                        class="Polaris-TextField__Input" type="text"
                                                                        aria-labelledby="PolarisTextField1Label"
                                                                        aria-invalid="false" value="">
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
                                                                    class="Polaris-Label__Text">Font Name</label>
                                                            </div>
                                                        </div>
                                                        <div class="Polaris-Connected">
                                                            <div
                                                                class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                                <div class="Polaris-TextField">
                                                                    <input id="PolarisTextField1" autocomplete="off"
                                                                        class="Polaris-TextField__Input" type="text"
                                                                        aria-labelledby="PolarisTextField1Label"
                                                                        aria-invalid="false" value="">
                                                                    <div class="Polaris-TextField__Backdrop">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="spaceing_manage_block">
                                                        <div class="Polaris-Labelled__LabelWrapper">
                                                            <div class="Polaris-Label">
                                                                <label id="PolarisTextField2Label"
                                                                    for="PolarisTextField2"
                                                                    class="Polaris-Label__Text">Font Size</label>
                                                            </div>
                                                        </div>
                                                        <div class="Polaris-Connected">
                                                            <div
                                                                class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                                <div class="Polaris-TextField">
                                                                    <input id="PolarisTextField2" autocomplete="off"
                                                                        class="Polaris-TextField__Input" type="text"
                                                                        aria-labelledby="PolarisTextField2Label"
                                                                        aria-invalid="false" value="">
                                                                    <div class="Polaris-TextField__Backdrop">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="spaceing_manage_block">
                                                        <div class="Polaris-Labelled__LabelWrapper">
                                                            <div class="Polaris-Label">
                                                                <label id="PolarisTextField2Label"
                                                                    for="PolarisTextField2"
                                                                    class="Polaris-Label__Text">Font Color
                                                                    (hexcode)</label>
                                                            </div>
                                                        </div>
                                                        <div class="Polaris-Connected">
                                                            <div
                                                                class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                                <div class="Polaris-TextField">
                                                                    <input id="PolarisTextField2" autocomplete="off"
                                                                        class="Polaris-TextField__Input" type="text"
                                                                        aria-labelledby="PolarisTextField2Label"
                                                                        aria-invalid="false" value="">
                                                                    <div class="Polaris-TextField__Backdrop">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="Polaris-FormLayout__Item">
                                                    <div class="">
                                                        <div class="details_section">
                                                            <h3>Click to copy box</h3>
                                                        </div>
                                                        <div class="Polaris-Labelled__LabelWrapper">
                                                            <div class="Polaris-Label">
                                                                <label id="PolarisTextField2Label"
                                                                    for="PolarisTextField2"
                                                                    class="Polaris-Label__Text">Text</label>
                                                            </div>
                                                        </div>
                                                        <div class="Polaris-Connected">
                                                            <div
                                                                class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                                <div class="Polaris-TextField">
                                                                    <input id="PolarisTextField2" autocomplete="off"
                                                                        class="Polaris-TextField__Input" type="text"
                                                                        aria-labelledby="PolarisTextField2Label"
                                                                        aria-invalid="false" value="">
                                                                    <div class="Polaris-TextField__Backdrop">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="spaceing_manage_block">
                                                        <div class="Polaris-Labelled__LabelWrapper">
                                                            <div class="Polaris-Label">
                                                                <label id="PolarisTextField2Label"
                                                                    for="PolarisTextField2"
                                                                    class="Polaris-Label__Text">Font Name</label>
                                                            </div>
                                                        </div>
                                                        <div class="Polaris-Connected">
                                                            <div
                                                                class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                                <div class="Polaris-TextField">
                                                                    <input id="PolarisTextField2" autocomplete="off"
                                                                        class="Polaris-TextField__Input" type="text"
                                                                        aria-labelledby="PolarisTextField2Label"
                                                                        aria-invalid="false" value="">
                                                                    <div class="Polaris-TextField__Backdrop">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="spaceing_manage_block">
                                                        <div class="Polaris-Labelled__LabelWrapper">
                                                            <div class="Polaris-Label">
                                                                <label id="PolarisTextField2Label"
                                                                    for="PolarisTextField2"
                                                                    class="Polaris-Label__Text">Font Size</label>
                                                            </div>
                                                        </div>
                                                        <div class="Polaris-Connected">
                                                            <div
                                                                class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                                <div class="Polaris-TextField">
                                                                    <input id="PolarisTextField2" autocomplete="off"
                                                                        class="Polaris-TextField__Input" type="text"
                                                                        aria-labelledby="PolarisTextField2Label"
                                                                        aria-invalid="false" value="">
                                                                    <div class="Polaris-TextField__Backdrop">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="spaceing_manage_block">
                                                        <div class="Polaris-Labelled__LabelWrapper">
                                                            <div class="Polaris-Label">
                                                                <label id="PolarisTextField2Label"
                                                                    for="PolarisTextField2"
                                                                    class="Polaris-Label__Text">Font Color
                                                                    (hexcode)</label>
                                                            </div>
                                                        </div>
                                                        <div class="Polaris-Connected">
                                                            <div
                                                                class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                                <div class="Polaris-TextField">
                                                                    <input id="PolarisTextField2" autocomplete="off"
                                                                        class="Polaris-TextField__Input" type="text"
                                                                        aria-labelledby="PolarisTextField2Label"
                                                                        aria-invalid="false" value="">
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
                                    <div class="Polaris-FormLayout">
                                        <div class="Polaris-FormLayout__Item">
                                            <div>
                                                <div class="Polaris-FormLayout">
                                                    <div role="group" class="Polaris-FormLayout--grouped">
                                                        <div class="Polaris-FormLayout__Items">
                                                            <div class="Polaris-FormLayout__Item">
                                                                <div class="">
                                                                    <div class="details_section">
                                                                        <h3>Symbol</h3>
                                                                    </div>
                                                                    <div class="Polaris-Connected">
                                                                        <div>
                                                                            <label>
                                                                                <input type="radio"
                                                                                    id="percentage_symbol"
                                                                                    name="fav_language">
                                                                                <label for="percentage_symbol"></label>
                                                                                <label>%
                                                                                    <input type="radio"
                                                                                        id="dollar_symbol"
                                                                                        name="fav_language">
                                                                                    <label for="dollar_symbol"></label>
                                                                                </label>$
                                                                                <label>
                                                                                    <input type="radio" id="symbol_none"
                                                                                        name="fav_language">
                                                                                    <label
                                                                                        for="symbol_none">None</label>
                                                                                </label>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="Polaris-FormLayout__Item">
                                                                <div class="">
                                                                    <div class="details_section border_site_toggle">
                                                                        <h3>Borders</h3>
                                                                    </div>
                                                                </div>
                                                                <div class="Polaris-FormLayout">
                                                                    <div role="group"
                                                                        class="Polaris-FormLayout--condensed">
                                                                        <div class="Polaris-FormLayout__Items">
                                                                            <div class="Polaris-FormLayout__Item">
                                                                                <div class="">
                                                                                    <div
                                                                                        class="Polaris-Labelled__LabelWrapper">
                                                                                        <div class="Polaris-Label">
                                                                                            <label
                                                                                                id="PolarisTextField1Label"
                                                                                                for="PolarisTextField1"
                                                                                                class="Polaris-Label__Text">Amount</label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="Polaris-Connected">
                                                                                        <div
                                                                                            class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                                                            <div
                                                                                                class="Polaris-TextField">
                                                                                                <input
                                                                                                    id="PolarisTextField1"
                                                                                                    autocomplete="off"
                                                                                                    class="Polaris-TextField__Input"
                                                                                                    type="text"
                                                                                                    aria-labelledby="PolarisTextField1Label"
                                                                                                    aria-invalid="false"
                                                                                                    value="">
                                                                                                <div
                                                                                                    class="Polaris-TextField__Backdrop">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="Polaris-FormLayout__Item">
                                                                                <div class="">
                                                                                    <div
                                                                                        class="Polaris-Labelled__LabelWrapper">
                                                                                        <div class="Polaris-Label">
                                                                                            <label
                                                                                                id="PolarisTextField2Label"
                                                                                                for="PolarisTextField2"
                                                                                                class="Polaris-Label__Text">Percentage</label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="Polaris-Connected">
                                                                                        <div
                                                                                            class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                                                            <div
                                                                                                class="Polaris-TextField">
                                                                                                <input
                                                                                                    id="PolarisTextField2"
                                                                                                    autocomplete="off"
                                                                                                    class="Polaris-TextField__Input"
                                                                                                    type="text"
                                                                                                    aria-labelledby="PolarisTextField2Label"
                                                                                                    aria-invalid="false"
                                                                                                    value="">
                                                                                                <div
                                                                                                    class="Polaris-TextField__Backdrop">
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
                                        </div>
                                    </div>


                                    <div class="Polaris-FormLayout">
                                        <div class="Polaris-FormLayout__Item">
                                            <div>
                                                <div class="Polaris-FormLayout">
                                                    <div role="group" class="Polaris-FormLayout--grouped">
                                                        <div class="Polaris-FormLayout__Items">
                                                            <div class="Polaris-FormLayout__Item">
                                                                <div class="">
                                                                    <div class="details_section">
                                                                        <h3>Product</h3>
                                                                    </div>
                                                                    <div class="Polaris-FormLayout">
                                                                        <div role="group"
                                                                            class="Polaris-FormLayout--condensed">
                                                                            <div class="Polaris-FormLayout__Items">
                                                                                <div class="Polaris-FormLayout__Item">
                                                                                    <div class="">
                                                                                        <div>
                                                                                            <div>
                                                                                                <label>
                                                                                                    <input type="radio"
                                                                                                        id="Exclude_radio"
                                                                                                        name="product_radio_btn">
                                                                                                    <label
                                                                                                        for="Exclude_radio">Exclude</label>
                                                                                                </label>
                                                                                            </div>
                                                                                            <div
                                                                                                class="radio_btn_spacing">
                                                                                                <label>
                                                                                                    <input type="radio"
                                                                                                        id="include_radio"
                                                                                                        name="product_radio_btn">
                                                                                                    <label
                                                                                                        for="include_radio">Include</label>
                                                                                                </label>
                                                                                            </div>
                                                                                            <div>
                                                                                                <label>
                                                                                                    <input type="radio"
                                                                                                        id="all_product"
                                                                                                        name="product_radio_btn">
                                                                                                    <label
                                                                                                        for="all_product">All
                                                                                                        Product</label>
                                                                                                </label>
                                                                                            </div>





                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="Polaris-FormLayout__Item">
                                                                                    <div class="">
                                                                                        <div
                                                                                            class="Polaris-Labelled__LabelWrapper">
                                                                                        </div>
                                                                                        <div class="Polaris-Connected">
                                                                                            <div
                                                                                                class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                                                                <div
                                                                                                    class="Polaris-TextField">
                                                                                                    <input
                                                                                                        id="PolarisTextField2"
                                                                                                        autocomplete="off"
                                                                                                        class="Polaris-TextField__Input"
                                                                                                        type="text"
                                                                                                        aria-labelledby="PolarisTextField2Label"
                                                                                                        aria-invalid="false"
                                                                                                        value="">
                                                                                                    <div class="Polaris-TextField__Spinner"
                                                                                                        aria-hidden="true">
                                                                                                        <div role="button"
                                                                                                            class="Polaris-TextField__Segment"
                                                                                                            tabindex="-1">
                                                                                                            <div
                                                                                                                class="Polaris-TextField__SpinnerIcon">
                                                                                                                <span
                                                                                                                    class="Polaris-Icon">
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
                                                                                                            <div
                                                                                                                class="Polaris-TextField__SpinnerIcon">
                                                                                                                <span
                                                                                                                    class="Polaris-Icon">
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
                                                                                                    <div
                                                                                                        class="Polaris-TextField__Backdrop">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="spaceing_manage_block">
                                                                                        <div class="Polaris-Connected">
                                                                                            <div
                                                                                                class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                                                                <div
                                                                                                    class="Polaris-TextField">
                                                                                                    <input
                                                                                                        id="PolarisTextField2"
                                                                                                        autocomplete="off"
                                                                                                        class="Polaris-TextField__Input"
                                                                                                        type="text"
                                                                                                        aria-labelledby="PolarisTextField2Label"
                                                                                                        aria-invalid="false"
                                                                                                        value="">
                                                                                                    <div class="Polaris-TextField__Spinner"
                                                                                                        aria-hidden="true">
                                                                                                        <div role="button"
                                                                                                            class="Polaris-TextField__Segment"
                                                                                                            tabindex="-1">
                                                                                                            <div
                                                                                                                class="Polaris-TextField__SpinnerIcon">
                                                                                                                <span
                                                                                                                    class="Polaris-Icon">
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
                                                                                                            <div
                                                                                                                class="Polaris-TextField__SpinnerIcon">
                                                                                                                <span
                                                                                                                    class="Polaris-Icon">
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
                                                                                                    <div
                                                                                                        class="Polaris-TextField__Backdrop">
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
                                                                <div class="">
                                                                    <div class="details_section border_site_toggle">
                                                                        <h3>Shipping</h3>
                                                                    </div>
                                                                </div>
                                                                <div class="Polaris-FormLayout">
                                                                    <div role="group"
                                                                        class="Polaris-FormLayout--condensed">
                                                                        <div class="Polaris-FormLayout__Items">
                                                                            <div class="Polaris-FormLayout__Item">
                                                                                <div class="">
                                                                                    <div>
                                                                                        <div>
                                                                                            <label>
                                                                                                <input type="radio"
                                                                                                    id="Free_radiobtn"
                                                                                                    name="shippping_radio_btn">
                                                                                                <label
                                                                                                    for="Free_radiobtn">Free</label>
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio_btn_spacing">
                                                                                            <label>
                                                                                                <input type="radio"
                                                                                                    id="not_free_radio"
                                                                                                    name="shippping_radio_btn">
                                                                                                <label
                                                                                                    for="not_free_radio">Not
                                                                                                    Free</label>
                                                                                            </label>
                                                                                        </div>
                                                                                        <div>
                                                                                            <label>
                                                                                                <input type="radio"
                                                                                                    id="Flate_rate"
                                                                                                    name="shippping_radio_btn">
                                                                                                <label
                                                                                                    for="Flate_rate">Flat
                                                                                                    Rate</label>
                                                                                            </label>
                                                                                        </div>





                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="Polaris-FormLayout__Item">
                                                                                <div class="">
                                                                                    <div
                                                                                        class="Polaris-Labelled__LabelWrapper">
                                                                                        <div class="Polaris-Label">
                                                                                            <label
                                                                                                id="PolarisTextField2Label"
                                                                                                for="PolarisTextField2"
                                                                                                class="Polaris-Label__Text">Percentage</label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="Polaris-Connected">
                                                                                        <div
                                                                                            class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                                                            <div
                                                                                                class="Polaris-TextField">
                                                                                                <input
                                                                                                    id="PolarisTextField2"
                                                                                                    autocomplete="off"
                                                                                                    class="Polaris-TextField__Input"
                                                                                                    type="text"
                                                                                                    aria-labelledby="PolarisTextField2Label"
                                                                                                    aria-invalid="false"
                                                                                                    value="">
                                                                                                <div
                                                                                                    class="Polaris-TextField__Backdrop">
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
                                                        <div class="Polaris-FormLayout__Items">
                                                            <div class="Polaris-FormLayout__Item">
                                                                <div class="">
                                                                    <div class="details_section">
                                                                        <h3>Free Product</h3>
                                                                    </div>
                                                                    <div class="Polaris-FormLayout">
                                                                        <div role="group"
                                                                            class="Polaris-FormLayout--condensed">
                                                                            <div class="Polaris-FormLayout__Items">
                                                                                <div class="Polaris-FormLayout__Item">
                                                                                    <div class="">
                                                                                        <div>
                                                                                            <label>
                                                                                                <input type="radio"
                                                                                                    id="Exclude_radio"
                                                                                                    name="product_radio_btn">
                                                                                                <label
                                                                                                    for="Exclude_radio">Yes</label>
                                                                                            </label>
                                                                                            <label>
                                                                                                <input type="radio"
                                                                                                    id="include_radio"
                                                                                                    name="product_radio_btn">
                                                                                                <label
                                                                                                    for="include_radio">No</label>
                                                                                            </label>





                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="Polaris-FormLayout__Item">

                                                                                    <div class="">
                                                                                        <div class="Polaris-Connected">
                                                                                            <div
                                                                                                class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                                                                <div
                                                                                                    class="Polaris-TextField">
                                                                                                    <input
                                                                                                        id="PolarisTextField2"
                                                                                                        autocomplete="off"
                                                                                                        class="Polaris-TextField__Input"
                                                                                                        type="text"
                                                                                                        aria-labelledby="PolarisTextField2Label"
                                                                                                        aria-invalid="false"
                                                                                                        value="">
                                                                                                    <div class="Polaris-TextField__Spinner"
                                                                                                        aria-hidden="true">
                                                                                                        <div role="button"
                                                                                                            class="Polaris-TextField__Segment"
                                                                                                            tabindex="-1">
                                                                                                            <div
                                                                                                                class="Polaris-TextField__SpinnerIcon">
                                                                                                                <span
                                                                                                                    class="Polaris-Icon">
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
                                                                                                            <div
                                                                                                                class="Polaris-TextField__SpinnerIcon">
                                                                                                                <span
                                                                                                                    class="Polaris-Icon">
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
                                                                                                    <div
                                                                                                        class="Polaris-TextField__Backdrop">
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
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="Polaris-FormLayout">
                                                    <div role="group" class="Polaris-FormLayout--grouped">
                                                        <div class="Polaris-FormLayout__Items">
                                                            <div class="Polaris-FormLayout__Item">
                                                                <div class="spaceing_manage_block "
                                                                    style="margin-bottom:0px">

                                                                    <div class="">
                                                                        <div class="Polaris-Labelled__LabelWrapper">
                                                                            <div class="Polaris-Label">
                                                                                <label id="PolarisTextField1Label"
                                                                                    for="PolarisTextField1"
                                                                                    class="Polaris-Label__Text">Body</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="Polaris-Connected">
                                                                            <div
                                                                                class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                                                <div
                                                                                    class="Polaris-TextField Polaris-TextField--hasValue Polaris-TextField--multiline">
                                                                                    <textarea id="PolarisTextField1"
                                                                                        autocomplete="off"
                                                                                        class="Polaris-TextField__Input"
                                                                                        type="text" rows="4"
                                                                                        aria-labelledby="PolarisTextField1Label"
                                                                                        aria-invalid="false"
                                                                                        aria-multiline="true"
                                                                                        style="height: 277px;"
                                                                                        spellcheck="false">1776 Barnes Street
                                                  Orlando, FL 32801</textarea>
                                                                                    <grammarly-extension
                                                                                        data-grammarly-shadow-root="true"
                                                                                        style="position: absolute; top: 0px; left: 0px; pointer-events: none; z-index: 20;"
                                                                                        class="dnXmp">
                                                                                    </grammarly-extension>
                                                                                    <grammarly-extension
                                                                                        data-grammarly-shadow-root="true"
                                                                                        style="position: absolute; top: 0px; left: 0px; pointer-events: none; z-index: 20;"
                                                                                        class="dnXmp">
                                                                                    </grammarly-extension>
                                                                                    <div
                                                                                        class="Polaris-TextField__Backdrop">
                                                                                    </div>
                                                                                    <div aria-hidden="true"
                                                                                        class="Polaris-TextField__Resizer">
                                                                                        <div
                                                                                            class="Polaris-TextField__DummyInput">
                                                                                            1776
                                                                                            Barnes
                                                                                            Street<br>Orlandoundefined
                                                                                            FL 32801<br>
                                                                                        </div>
                                                                                        <div
                                                                                            class="Polaris-TextField__DummyInput">
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
                                                                </div>
                                                            </div>
                                                            <div class="Polaris-FormLayout__Item">
                                                                <div class="spaceing_manage_block"
                                                                    style="margin-bottom:0px">
                                                                    <div class="Polaris-Labelled__LabelWrapper">
                                                                        <div class="Polaris-Label">
                                                                            <label id="PolarisTextField2Label"
                                                                                for="PolarisTextField2"
                                                                                class="Polaris-Label__Text">Font
                                                                                Name</label>
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
                                                                                    aria-invalid="false" value="">
                                                                                <div
                                                                                    class="Polaris-TextField__Backdrop">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="spaceing_manage_block"
                                                                    style="margin-bottom:0px">
                                                                    <div class="Polaris-Labelled__LabelWrapper">
                                                                        <div class="Polaris-Label">
                                                                            <label id="PolarisTextField2Label"
                                                                                for="PolarisTextField2"
                                                                                class="Polaris-Label__Text">Font
                                                                                Size</label>
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
                                                                                    aria-invalid="false" value="">
                                                                                <div
                                                                                    class="Polaris-TextField__Backdrop">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="spaceing_manage_block"
                                                                    style="margin-bottom:0px">
                                                                    <div class="Polaris-Labelled__LabelWrapper">
                                                                        <div class="Polaris-Label">
                                                                            <label id="PolarisTextField2Label"
                                                                                for="PolarisTextField2"
                                                                                class="Polaris-Label__Text">Font Color
                                                                                (hexcode)</label>
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
                                                                                    aria-invalid="false" value="">
                                                                                <div
                                                                                    class="Polaris-TextField__Backdrop">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="spaceing_manage_block"
                                                                    style="margin-bottom:0px">
                                                                    <div class="Polaris-Labelled__LabelWrapper">
                                                                        <div class="Polaris-Label">
                                                                            <label id="PolarisTextField2Label"
                                                                                for="PolarisTextField2"
                                                                                class="Polaris-Label__Text">Orientation</label>
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
                                                                                    aria-invalid="false" value="">
                                                                                <div
                                                                                    class="Polaris-TextField__Backdrop">
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

                                            <div class="Polaris-FormLayout">
                                                <div role="group" class="Polaris-FormLayout--grouped">
                                                    <div class="Polaris-FormLayout__Items">
                                                        <div class="Polaris-FormLayout__Item">
                                                            <div class="spaceing_manage_block "
                                                                style="margin-bottom:0px">
                                                                <div class="Polaris-Labelled__LabelWrapper">
                                                                    <div class="Polaris-Label">
                                                                        <label id="PolarisTextField1Label"
                                                                            for="PolarisTextField1"
                                                                            class="Polaris-Label__Text">Google
                                                                            Spreadsheet ID (name)</label>
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
                                                                                aria-invalid="false" value="">
                                                                            <div class="Polaris-TextField__Backdrop">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="Polaris-FormLayout__Item">
                                                            <div class="spaceing_manage_block"
                                                                style="margin-bottom:0px">
                                                                <div class="Polaris-Labelled__LabelWrapper">
                                                                    <div class="Polaris-Label">
                                                                        <label id="PolarisTextField2Label"
                                                                            for="PolarisTextField2"
                                                                            class="Polaris-Label__Text">Google
                                                                            Spreadsheet Tab Name</label>
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
                                                                                aria-invalid="false" value="">
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
                                </div>
                                <div class="Polaris-FormLayout__Item">
                                    <!-- gfdgndfjkg -->
                                </div>
                            </div>
                            <div>
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
                                        <input type="radio" id="Yes" name="fav_language" value="Yes">
                                        <label for="Yes">Yes</label>
                                    </label>
                                    <label>
                                        <input type="radio" id="No" name="fav_language" value="No">
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
                                            <select name="radiusunit" id="promo_dropdown" class="Polaris-Select__Input"
                                                aria-invalid="false">
                                                <option selected="" value="Homepage">Homepage</option>
                                                <option value="Homepage2">Homepage2</option>
                                                <option value="Homepage3">Homepage3</option>
                                            </select>
                                            <div class="Polaris-Select__Content" aria-hidden="true">
                                                <span
                                                    class="Polaris-Select__SelectedOption promo_dropdown">Homepage</span>
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
                                    <script>
                                    $('#promo_dropdown').change(function() {
                                        var radiusunit = $(this).val();
                                        $('.promo_dropdown').html(radiusunit);
                                    });
                                    </script>
                                </div>
                            </div>
                            <div>
                            </div>
                        </div>
                    </div>
                    <div class="Polaris-FormLayout__Item">
                        <div class="Polaris-Card">
                            <div class="Polaris-Card__Header preview_heading">
                                <h2 class="Polaris-Text--root Polaris-Text--headingMd">Preview</h2>
                            </div>
                            <div class="Polaris-Card__Section">
                                <div class="funnel_option_preview preview_img" style="padding:50px 20px 0px">
                                    <div class="preview_text_block Congratulation_block">
                                        <h3>CONGRATULATION</h3>
                                    </div>
                                    <div class="forms_section_layouts" style="    align-items: self-end;">
                                        <div class="forms_img_preview_option copoon_code">
                                            <div class="feed_back">
                                                <h4>THANK YOU FOR THE FEEDBACK</h4>
                                                <p>We have received your submission and want to reward you with a
                                                    discount on
                                                    <span style="color:#800080">Robotryx </span> and
                                                    <span style="color:#007bff"> Dinomaniacs</span>
                                                    product
                                                </p>
                                                <div>
                                                    <!-- <div class="text-wrap"> -->
                                                    <div class="coupon_code_section">
                                                        <div class="pricing_tag">
                                                            <span>$5</span>
                                                        </div>
                                                        <div class="text_copying">
                                                            <input id="textA">
                                                        </div>



                                                        <button class="copy_clip_text" id="copyToClipboard-a">
                                                            Click to copy
                                                            <div class="clipboard icon">
                                                            </div>
                                                        </button>

                                                    </div>
                                                    <div>
                                                        <p>if you have any question please email us
                                                            <span>info@atjittergit.com</span> Please allow between 4 to
                                                            5 business days to recieve the voucher on the email you
                                                            provide us

                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="forms_img_preview_option congratulation_img">
                                            <div class="thank_you_img">
                                                <img src="images/thank_you_img.png">
                                            </div>
                                        </div>
                                        <script>
                                        document.getElementById('copyToClipboard-a').addEventListener('click',
                                            function() {

                                                var text = document.getElementById('textA');
                                                text.select();
                                                document.execCommand('copy');

                                            })
                                        </script>

                                    </div>


                                </div>
                                <div class="custome_preview_block  edit_btn_sapce">

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