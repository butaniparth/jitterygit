<link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">
<link href="https://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
<div class="Polaris-Frame__Content" style="padding:5px 15px">
    <div class="Polaris-Page view_page">
        <div class="brands_heading">
            <h2>Add New Channel</h2>
        </div>
        <div class="Polaris-Card">
            <div class="Polaris-Card__Header">
                <div class="">
                    <div class="Polaris-Page__Content">
                        <div class="Polaris-Layout">
                            <div class="Polaris-Layout__Section Polaris-Layout__Section--oneThird">
                                <div class="Polaris-LegacyCard">
                                    <div class="Polaris-FormLayout">
                                        <div class="Polaris-FormLayout__Item">
                                            <div class="">
                                                <div class="Polaris-Labelled__LabelWrapper">
                                                    <div class="Polaris-Label">
                                                        <label id="PolarisTextField1Label" for="PolarisTextField1"
                                                            class="Polaris-Label__Text">New Channel</label>
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
                            <div class="Polaris-Layout__Section Polaris-Layout__Section--oneThird">
                                <div class="Polaris-LegacyCard">
                                    <div class="Polaris-FormLayout">
                                        <div class="Polaris-FormLayout__Item">
                                            <div class="">
                                                <div class="Polaris-Labelled__LabelWrapper">
                                                    <div class="Polaris-Label">
                                                        <label id="PolarisTextField1Label" for="PolarisTextField1"
                                                            class="Polaris-Label__Text">Created Date</label>
                                                    </div>
                                                </div>

                                                <div class="Polaris-Connected">
                                                    <div
                                                        class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                        <div class="Polaris-TextField2">
                                                            <form>
                                                                <input id="datepicker" autocomplete="off"
                                                                    class="Polaris-TextField__Input" type="text"
                                                                    aria-labelledby="PolarisTextField1Label"
                                                                    aria-invalid="false" value="">
                                                            </form>
                                                            <script>
                                                            $(function() {
                                                                $(
                                                                    "#datepicker"
                                                                ).datepicker();
                                                            });
                                                            </script>
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
                            <div class="Polaris-Layout__Section Polaris-Layout__Section--oneThird">
                                <div class="Polaris-LegacyCard">
                                    <div class="Polaris-FormLayout">
                                        <div class="Polaris-FormLayout__Item">
                                            <div class="">
                                                <div class="Polaris-Labelled__LabelWrapper">
                                                    <div class="Polaris-Label">
                                                        <label id="PolarisTextField1Label" for="PolarisTextField1"
                                                            class="Polaris-Label__Text">Created By</label>
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
                    </div>
                </div>
            </div>
            <div class="Polaris-Card__Section" style="padding-top:0px">
                <div class="wrapper">
                    <div class="box">
                        <div class="js--image-preview">
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
                                            <input type="file" class="image-upload" accept="image/*" />
                                        </div>
                                    </div>
                                    <div class="Polaris-DropZone Polaris-DropZone--hasOutline Polaris-DropZone--sizeMedium"
                                        aria-disabled="false">
                                        <span
                                            class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--visuallyHidden">
                                            <input id="upload_file" multiple="" type="file" autocomplete="off">
                                        </span>
                                        <div class="Polaris-DropZone__Container">
                                            <div class="Polaris-DropZone-FileUpload">
                                                <div class="Polaris-AlphaStack"
                                                    style="--pc-stack-inline-align:center;--pc-stack-order:column;--pc-stack-gap-xs:var(--p-space-2)">
                                                    <div class="Polaris-DropZone-FileUpload__Action" id="upload_file">
                                                        Add
                                                        files</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </label>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="brands_market_save_btn">
            <button class="Polaris-Button Polaris-Button--primary" type="button">
                <span class="Polaris-Button__Content">
                    <span class="Polaris-Button__Text">Add</span>
                </span>
            </button>
        </div>
    </div>
</div>