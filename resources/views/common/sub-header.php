<style>
    .custome_logo{
        width: 100px
    }
    .custome_logo img{
        max-width:  100%
    }
</style>
<div class="fixed_header">
    <div class="Polaris-TopBar__Contentss header_wise">
        <div class="">
            <div class="Polaris-Tabs__Wrapper sticky main_polaris" style="border-bottom: unset;">
                <div class="main-box ">
                    <div class="polaris-logo custome_logo">
                        <a href="dashboard.php" style="text-decoration: none;"> <img
                                src="images/JITTERYGIT LOGO-TM.png"></a>
                    </div>
                    <div class="dashboard_btn">
                        <a href="setting-page.php" class="space_setting" style="text-decoration:none"> <button
                                class="Polaris-Button" type="button">
                                <span class="Polaris-Button__Content">
                                    <span class="Polaris-Button__Text">Setting</span>
                                </span>
                            </button>
                        </a>
                          <a href="dashboard.php" style="text-decoration:none"> <button
                                class="Polaris-Button" type="button">
                                <span class="Polaris-Button__Content">
                                    <span class="Polaris-Button__Text">Dashboard</span>
                                </span>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="Polaris-TopBar__SecondaryMenu"></div>

    </div>
</div>
<div>
    <div class="publish_model_open" style="display:none">
        <div id="PolarisPortalsContainer">
            <div data-portal-id="modal-Polarisportal1">
                <div>
                    <div class="Polaris-Modal-Dialog__Container" data-polaris-layer="true" data-polaris-overlay="true">
                        <div>
                            <div role="dialog" aria-modal="true" aria-labelledby="Polarismodal-header1" tabindex="-1"
                                class="Polaris-Modal-Dialog">
                                <div class="Polaris-Modal-Dialog__Modal custom_model">
                                    <div class="Polaris-Modal-Header">
                                        <div id="Polarismodal-header1"
                                            class="Polaris-Modal-Header__Title add_product_text "
                                            style="text-align:left">
                                            <h2 class="">Are You Sure You Want To Publish ? </h2>
                                        </div>
                                        <button class="Polaris-Modal-CloseButton hide_publish_model" aria-label="Close">
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
                                    <div class="Polaris-Modal__BodyWrapper">
                                        <div class="Polaris-Modal__Body Polaris-Scrollable Polaris-Scrollable--vertical Polaris-Scrollable--horizontal"
                                            data-polaris-scrollable="true">
                                            <section class="Polaris-Modal-Section">
                                                <div>
                                                    <div class="round_box">
                                                        <i class="fa fa-check" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                    <div class="Polaris-Modal-Footer">
                                        <div class="Polaris-Modal-Footer__FooterContent">
                                            <div class="Polaris-Stack Polaris-Stack--alignmentCenter">
                                                <div class="Polaris-Stack__Item Polaris-Stack__Item--fill">
                                                </div>
                                                <div class="Polaris-Stack__Item">
                                                    <div class="Polaris-ButtonGroup" style="justify-content: end;">
                                                        <div class="Polaris-ButtonGroup__Item"> <button
                                                                class="Polaris-Button Polaris-Button--primary"
                                                                type="button">
                                                                <span class="Polaris-Button__Content">
                                                                    <span class="Polaris-Button__Text">Yes</span>
                                                                </span>
                                                            </button></div>
                                                        <div class="Polaris-ButtonGroup__Item"><button
                                                                class="Polaris-Button hide_publish_model "
                                                                type="button"><span
                                                                    class="Polaris-Button__Content"><span
                                                                        class="Polaris-Button__Text">No</span></span></button>
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
                <div class="Polaris-Backdrop"></div>
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function() {
    $(".publish_model_click").click(function() {
        $(".publish_model_open").attr("style", "display:block")

    })
    $(".hide_publish_model").click(function() {
        $(".publish_model_open").attr("style", "display:none")
    })


})
</script>