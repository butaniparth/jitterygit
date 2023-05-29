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
                        <li><a href="Funnel.php">1</a></li>
                        <li><a href="marketplace.php">2</a></li>
                        <li class="active_pagination"><a href="Funnel-setting.php">3</a></li>
                        <li><a href="Funnel-form.php">4</a></li>
                        <li><a href="Funnel-step-first.php">5</a></li>
                        <li><a href="setting-promo.php">6</a></li>
                        <li style="margin:0px"><a href="Funnel-form.php"><span class="Polaris-Button__Content">
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
                    <h5>Enable</h5>
                    <label class="switch" for="checkbox_">
                        <input type="checkbox" id="checkbox_">
                        <div class="slider round"></div>
                    </label>
                    <!-- <div class="active_default_page"></div> -->
                </div>
                <div>
                    <button class="Polaris-Button" type="button" style="margin-right:5px">
                        <span class="Polaris-Button__Content">
                            <span class="Polaris-Button__Text">Save</span>
                        </span>
                    </button>
                    <button class="Polaris-Button Polaris-Button--primary" type="button">
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
                                                                class="Polaris-Label__Text">Font Family</label>
                                                        </div>
                                                    </div>
                                                    <div class="Polaris-Select">
                                                        <select name="radiusunit" id="font_size"
                                                            class="Polaris-Select__Input" aria-invalid="false">
                                                            <option selected="" value="Arial">Arial</option>
                                                            <option value="Roboto">Roboto</option>
                                                            <option value="Poppins">Poppins</option>
                                                        </select>
                                                        <div class="Polaris-Select__Content" aria-hidden="true">
                                                            <span
                                                                class="Polaris-Select__SelectedOption font_size">Roboto</span>
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
                                                    $('#font_size').change(function() {
                                                        var radiusunit = $(this).val();
                                                        $('.font_size').html(radiusunit);
                                                    });
                                                    </script>
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
                                                        <select name="radiusunit" id="font_size_funnel"
                                                            class="Polaris-Select__Input" aria-invalid="false">
                                                            <option selected="" value="Arial">10</option>
                                                            <option value="20">20</option>
                                                            <option value="30">30</option>
                                                        </select>
                                                        <div class="Polaris-Select__Content" aria-hidden="true">
                                                            <span
                                                                class="Polaris-Select__SelectedOption font_size_funnel">30</span>
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
                                                <div class="">
                                                    <div class="Polaris-Labelled__LabelWrapper">
                                                        <div class="Polaris-Label">
                                                            <label id="PolarisTextField2Label" for="PolarisTextField2"
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
                                                    <script>
                                                    $('#font_size_funnel').change(function() {
                                                        var radiusunit = $(this).val();
                                                        $('.font_size_funnel').html(radiusunit);
                                                    });
                                                    </script>
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
                                                        <select name="radiusunit" id="Text_location"
                                                            class="Polaris-Select__Input" aria-invalid="false">
                                                            <option selected="" value="Right">Right</option>
                                                            <option value="Left">Left</option>
                                                            <option value="Center">Center</option>
                                                        </select>
                                                        <div class="Polaris-Select__Content" aria-hidden="true">
                                                            <span
                                                                class="Polaris-Select__SelectedOption Text_location">Right</span>
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
                                                        <script>
                                                        $('#Text_location').change(function() {
                                                            var radiusunit = $(this).val();
                                                            $('.Text_location').html(radiusunit);
                                                        });
                                                        </script>
                                                        <div class="Polaris-Select__Backdrop">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="Polaris-FormLayout__Item">
                                              <!--   <div class="">
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

                                <div>
                                    <button class="Polaris-Button" type="button">
                                        <span class="Polaris-Button__Content">
                                            <span class="Polaris-Button__Text" style="color:gray">Choose Product</span>
                                        </span>
                                    </button>
                                    <button class="Polaris-Button add_product_btn" type="button">
                                        <span class="Polaris-Button__Content">
                                            <span class="Polaris-Button__Text">Add Product</span>
                                        </span>
                                    </button>
                                </div>

                                <div class="Polaris-FormLayout__Items">
                                    <div class="Polaris-FormLayout__Item" style="margin-left:0px">
                                        <div class="wrapper">
                                            <div class="box add_promotion_box">
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
                                                <div class="upload-options">
                                                    <label>
                                                        <div class="Polaris-Labelled--hidden">
                                                            <div class="Polaris-Labelled__LabelWrapper">
                                                                <div class="Polaris-Label">
                                                                    <input type="file" class="image-upload"
                                                                        accept="image/*" />
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
                                                <div class="img_dimantion" style="bottom:-0px !important">
                                                    <p>(Image should be maximum<br> 1500 x
                                                        1500 jpg,png)</p>
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
                                                        value="">
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
                                                                    class="Polaris-Label__Text">Background image</label>
                                                            </div>
                                                        </div>
                                                        <div class="Polaris-Connected2">
                                                            <div class="wrapper">
                                                                <div class="box add_promotion_box">
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
                                                                    <div class="upload-options">
                                                                        <label>
                                                                            <div class="Polaris-Labelled--hidden">
                                                                                <div
                                                                                    class="Polaris-Labelled__LabelWrapper">
                                                                                    <div class="Polaris-Label">
                                                                                        <input type="file"
                                                                                            class="image-upload"
                                                                                            accept="image/*" />
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
                                                                        aria-invalid="false" value="">
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
                                                                        <span class="Polaris-Button__Text">Add New
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
                                                        aria-multiline="true" style="height: 106px;">1776 Barnes Street
                                                  Orlando, FL 32801</textarea>
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
                                        <div class="Polaris-FormLayout__Item">
                                            <div class="funnel_heading">
                                                <h2 class="Polaris-Text--root Polaris-Text--headingMd">Css Details
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
                                                                                    aria-invalid="false" value="">
                                                                                <div class="Polaris-TextField__Spinner"
                                                                                    aria-hidden="true">
                                                                                </div>
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
                                                                    <div class="details_section border_site_toggle">
                                                                        <h3>Borders</h3>
                                                                        <label class="switch" for="checkbox_1">
                                                                            <input type="checkbox" id="checkbox_1">
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
                                                                                    aria-invalid="false" value="">
                                                                                <div class="Polaris-TextField__Spinner"
                                                                                    aria-hidden="true">
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
                                            <div class="spaceing_manage_block">
                                                <div class="Polaris-FormLayout">
                                                    <div role="group" class="Polaris-FormLayout--grouped">
                                                        <div class="Polaris-FormLayout__Items">
                                                            <div class="Polaris-FormLayout__Item">
                                                                <div class="">
                                                                    <div class="Polaris-Labelled__LabelWrapper">
                                                                        <div class="Polaris-Label">
                                                                            <label id="PolarisTextField1Label"
                                                                                for="PolarisTextField1"
                                                                                class="Polaris-Label__Text">Color
                                                                                (hexcode)</label>
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
                                                                                <div class="Polaris-TextField__Spinner"
                                                                                    aria-hidden="true">
                                                                                </div>
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
                                                                    <div class="Polaris-Labelled__LabelWrapper">
                                                                        <div class="Polaris-Label">
                                                                            <label id="PolarisTextField2Label"
                                                                                for="PolarisTextField2"
                                                                                class="Polaris-Label__Text">Color
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
                                                                                <div class="Polaris-TextField__Spinner"
                                                                                    aria-hidden="true">
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
                                                                            <input type="range" min="0" max="100"
                                                                                value="30" id="slider-1"
                                                                                oninput="slideOne()">
                                                                            <input type="range" min="0" max="100"
                                                                                value="70" id="slider-2"
                                                                                oninput="slideTwo()">
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
                                                                            <input type="checkbox" id="checkbox_4">
                                                                            <div class="slider round"></div>
                                                                        </label>
                                                                    </div>
                                                                    <div class="wrapper">
                                                                        <div class="box add_promotion_box">
                                                                            <div class="js--image-preview">
                                                                                <div class="thumbnails_img">
                                                                                    <img
                                                                                        src="images/img_thumbanail.svg">

                                                                                </div>
                                                                                <div class="close_img">
                                                                                    <button class="close_img_btn">
                                                                                        x
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <div class="upload-options">
                                                                                <label>
                                                                                    <div
                                                                                        class="Polaris-Labelled--hidden">
                                                                                        <div
                                                                                            class="Polaris-Labelled__LabelWrapper">
                                                                                            <div class="Polaris-Label">
                                                                                                <input type="file"
                                                                                                    class="image-upload"
                                                                                                    accept="image/*" />
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="Polaris-DropZone Polaris-DropZone--hasOutline Polaris-DropZone--sizeMedium"
                                                                                            aria-disabled="false">
                                                                                            <span
                                                                                                class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--visuallyHidden">
                                                                                                <input id="upload_file"
                                                                                                    multiple=""
                                                                                                    type="file"
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
                                            </div>
                                            <div class="Polaris-FormLayout">
                                                <div role="group" class="Polaris-FormLayout--grouped">
                                                    <div class="Polaris-FormLayout__Items">
                                                        <div class="Polaris-FormLayout__Item">
                                                            <div class="">
                                                                <div class="heading_block_funnel">
                                                                    <h4>Tile Size</h4>
                                                                </div>
                                                                <div class="Polaris-Labelled__LabelWrapper">
                                                                    <div class="Polaris-Label">
                                                                        <label id="PolarisTextField1Label"
                                                                            for="PolarisTextField1"
                                                                            class="Polaris-Label__Text">X
                                                                            Dimension</label>
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
                                                            <div class="">
                                                                <div class="heading_block_funnel">
                                                                    <h4>Tile Color</h4>
                                                                </div>
                                                                <div class="Polaris-Labelled__LabelWrapper">
                                                                    <div class="Polaris-Label">
                                                                        <label id="PolarisTextField2Label"
                                                                            for="PolarisTextField2"
                                                                            class="Polaris-Label__Text">Color
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
                                                <div role="group" class="Polaris-FormLayout--grouped">
                                                    <div class="Polaris-FormLayout__Items">
                                                        <div class="Polaris-FormLayout__Item">
                                                            <div class="spaceing_manage_block">
                                                                <div class="Polaris-Labelled__LabelWrapper">
                                                                    <div class="Polaris-Label">
                                                                        <label id="PolarisTextField1Label"
                                                                            for="PolarisTextField1"
                                                                            class="Polaris-Label__Text">Y
                                                                            Dimension</label>
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
                                                            <div class="spaceing_manage_block ">
                                                                <div class="rounded_btn_block">
                                                                    <h5>Rounded Button</h5>
                                                                    <label class="switch" for="checkbox_2">
                                                                        <input type="checkbox" id="checkbox_2">
                                                                        <div class="slider round"></div>
                                                                    </label>
                                                                </div>
                                                                <div class="Polaris-Labelled__LabelWrapper">
                                                                    <div class="Polaris-Label">
                                                                        <label id="PolarisTextField1Label"
                                                                            for="PolarisTextField1"
                                                                            class="Polaris-Label__Text">Text on
                                                                            hover</label>
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
                                                            <div class="spaceing_manage_block">
                                                                <div class="Polaris-Labelled__LabelWrapper">
                                                                    <div class="rounded_btn_block">
                                                                        <h5>Texture</h5>
                                                                        <label class="switch" for="checkbox_3">
                                                                            <input type="checkbox" id="checkbox_3">
                                                                            <div class="slider round"></div>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="Polaris-Connected2">
                                                                    <div class="wrapper">
                                                                        <div class="box add_promotion_box">
                                                                            <div class="js--image-preview">
                                                                                <div class="thumbnails_img">
                                                                                    <img
                                                                                        src="images/img_thumbanail.svg">

                                                                                </div>
                                                                                <div class="close_img">
                                                                                    <button class="close_img_btn">
                                                                                        x
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <div class="upload-options">
                                                                                <label>
                                                                                    <div
                                                                                        class="Polaris-Labelled--hidden">
                                                                                        <div
                                                                                            class="Polaris-Labelled__LabelWrapper">
                                                                                            <div class="Polaris-Label">
                                                                                                <input type="file"
                                                                                                    class="image-upload"
                                                                                                    accept="image/*" />
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="Polaris-DropZone Polaris-DropZone--hasOutline Polaris-DropZone--sizeMedium"
                                                                                            aria-disabled="false">
                                                                                            <span
                                                                                                class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--visuallyHidden">
                                                                                                <input id="upload_file"
                                                                                                    multiple=""
                                                                                                    type="file"
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
                                            <select name="radiusunit" id="redirect_link" class="Polaris-Select__Input"
                                                aria-invalid="false">
                                                <option selected="" value="Homepage">Homepage</option>
                                                <option value="Homepage2">Homepage2</option>
                                                <option value="Homepage3">Homepage3</option>
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
                                    <script>
                                    $('#redirect_link').change(function() {
                                        var radiusunit = $(this).val();
                                        $('.redirect_link').html(radiusunit);
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
                                            The first step to receive your FREE VOUCHER is to complete the form in
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
                                            After filling the form you will be asked to input your Amazon order ID
                                            for
                                            us to locate your order and validate your gift. Your gift will be sent
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
                                            If you qualify for a FREE VOUCHER we will send you an email confirming
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
        <script>
        var btnUpload = $("#upload_file"),
            btnOuter = $(".button_outer");
        btnUpload.on("change", function(e) {
            var ext = btnUpload.val().split('.').pop().toLowerCase();
            if ($.inArray(ext, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
                $(".error_msg").text("Not an Image...");
            } else {
                $(".error_msg").text("");
                btnOuter.addClass("file_uploading");
                setTimeout(function() {
                    btnOuter.addClass("file_uploaded");
                }, 3000);
                var uploadedFile = URL.createObjectURL(e.target.files[0]);
                setTimeout(function() {
                    $("#uploaded_view").append('<img src="' + uploadedFile + '" />').addClass(
                        "show");
                }, 3500);
            }
        });
        $(".file_remove").on("click", function(e) {
            $("#uploaded_view").removeClass("show");
            $("#uploaded_view").find("img").remove();
            btnOuter.removeClass("file_uploading");
            btnOuter.removeClass("file_uploaded");
        });
        </script>
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