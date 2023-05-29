<!DOCTYPE html>
<html lang="en">

<head>
    <title>Jitterygit HTML Design</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!-- <title>Jitterygit HTML Design</title> -->
    <link
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@700&family=Poppins:ital,wght@0,500;0,700;1,400;1,500&family=Roboto&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/@shopify/polaris@5.0.0/dist/styles.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://github.com/Shopify/polaris-react.git"></script>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;400;600;700&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.0/clipboard.min.js"></script>
    <link href="css/polaris.css" rel="stylesheet">
    <link href="css/custom_style.css?v=0.30" rel="stylesheet">
    <link href="css/media.css?v=0.12" rel="stylesheet">

    <style>
    .Navigation__Item {
        position: relative;
    }

    .Polaris-Navigation__Item::after {
        position: absolute;
        width: 4px;
        height: 30px;
        content: '';
        background: #027657;
        top: 3px;
        visibility: hidden;
    }

    .active_navigation .Polaris-Navigation__Text {
        color: #027657
    }

    .active_navigation .Polaris-Navigation__Item::after {
        visibility: visible;
    }

    .active_navigation .Polaris-Icon__Svg {
        fill: #027657 !important
    }

    #default_open {
        fill: #027657 !important
    }

    .Polaris-Tabs__TabContainer {
        outline: #fff !important
    }

    #all-customers-1 {
        outline: none !important
    }
    </style>
</head>
<!-- <script>
	$(window).resize(function(){
   console.log('resize called');
   var width = $(window).width();
   if(width > 767){
       $('.Polaris-Card ').removeClass('js-sticky');
   }
})
</script> -->

<body>

    <div>
        <div
            style="--p-background:rgba(246, 246, 247, 1); --p-background-hovered:rgba(241, 242, 243, 1); --p-background-pressed:rgba(237, 238, 239, 1); --p-background-selected:rgba(237, 238, 239, 1); --p-surface:rgba(255, 255, 255, 1); --p-surface-neutral:rgba(228, 229, 231, 1); --p-surface-neutral-hovered:rgba(219, 221, 223, 1); --p-surface-neutral-pressed:rgba(201, 204, 208, 1); --p-surface-neutral-disabled:rgba(241, 242, 243, 1); --p-surface-neutral-subdued:rgba(246, 246, 247, 1); --p-surface-subdued:rgba(250, 251, 251, 1); --p-surface-disabled:rgba(250, 251, 251, 1); --p-surface-hovered:rgba(246, 246, 247, 1); --p-surface-pressed:rgba(241, 242, 243, 1); --p-surface-depressed:rgba(237, 238, 239, 1); --p-surface-search-field:rgba(241, 242, 243, 1); --p-backdrop:rgba(0, 0, 0, 0.5); --p-overlay:rgba(255, 255, 255, 0.5); --p-shadow-from-dim-light:rgba(0, 0, 0, 0.2); --p-shadow-from-ambient-light:rgba(23, 24, 24, 0.05); --p-shadow-from-direct-light:rgba(0, 0, 0, 0.15); --p-hint-from-direct-light:rgba(0, 0, 0, 0.15); --p-border:rgba(140, 145, 150, 1); --p-border-neutral-subdued:rgba(186, 191, 195, 1); --p-border-hovered:rgba(153, 158, 164, 1); --p-border-disabled:rgba(210, 213, 216, 1); --p-border-subdued:rgba(201, 204, 207, 1); --p-border-depressed:rgba(87, 89, 89, 1); --p-border-shadow:rgba(174, 180, 185, 1); --p-border-shadow-subdued:rgba(186, 191, 196, 1); --p-divider:rgba(225, 227, 229, 1); --p-icon:rgba(92, 95, 98, 1); --p-icon-hovered:rgba(26, 28, 29, 1); --p-icon-pressed:rgba(68, 71, 74, 1); --p-icon-disabled:rgba(186, 190, 195, 1); --p-icon-subdued:rgba(140, 145, 150, 1); --p-text:rgba(32, 34, 35, 1); --p-text-disabled:rgba(140, 145, 150, 1); --p-text-subdued:rgba(109, 113, 117, 1); --p-interactive:rgba(44, 110, 203, 1); --p-interactive-disabled:rgba(189, 193, 204, 1); --p-interactive-hovered:rgba(31, 81, 153, 1); --p-interactive-pressed:rgba(16, 50, 98, 1); --p-icon-interactive:rgba(44, 110, 203, 1); --p-focused:rgba(69, 143, 255, 1); --p-surface-selected:rgba(242, 247, 254, 1); --p-surface-selected-hovered:rgba(237, 244, 254, 1); --p-surface-selected-pressed:rgba(229, 239, 253, 1); --p-icon-on-interactive:rgba(255, 255, 255, 1); --p-text-on-interactive:rgba(255, 255, 255, 1); --p-action-secondary:rgba(255, 255, 255, 1); --p-action-secondary-disabled:rgba(255, 255, 255, 1); --p-action-secondary-hovered:rgba(246, 246, 247, 1); --p-action-secondary-pressed:rgba(241, 242, 243, 1); --p-action-secondary-depressed:rgba(109, 113, 117, 1); --p-action-primary:rgba(0, 128, 96, 1); --p-action-primary-disabled:rgba(241, 241, 241, 1); --p-action-primary-hovered:rgba(0, 110, 82, 1); --p-action-primary-pressed:rgba(0, 94, 70, 1); --p-action-primary-depressed:rgba(0, 61, 44, 1); --p-icon-on-primary:rgba(255, 255, 255, 1); --p-text-on-primary:rgba(255, 255, 255, 1); --p-text-primary:rgba(0, 123, 92, 1); --p-text-primary-hovered:rgba(0, 108, 80, 1); --p-text-primary-pressed:rgba(0, 92, 68, 1); --p-surface-primary-selected:rgba(241, 248, 245, 1); --p-surface-primary-selected-hovered:rgba(179, 208, 195, 1); --p-surface-primary-selected-pressed:rgba(162, 188, 176, 1); --p-border-critical:rgba(253, 87, 73, 1); --p-border-critical-subdued:rgba(224, 179, 178, 1); --p-border-critical-disabled:rgba(255, 167, 163, 1); --p-icon-critical:rgba(215, 44, 13, 1); --p-surface-critical:rgba(254, 211, 209, 1); --p-surface-critical-subdued:rgba(255, 244, 244, 1); --p-surface-critical-subdued-hovered:rgba(255, 240, 240, 1); --p-surface-critical-subdued-pressed:rgba(255, 233, 232, 1); --p-surface-critical-subdued-depressed:rgba(254, 188, 185, 1); --p-text-critical:rgba(215, 44, 13, 1); --p-action-critical:rgba(216, 44, 13, 1); --p-action-critical-disabled:rgba(241, 241, 241, 1); --p-action-critical-hovered:rgba(188, 34, 0, 1); --p-action-critical-pressed:rgba(162, 27, 0, 1); --p-action-critical-depressed:rgba(108, 15, 0, 1); --p-icon-on-critical:rgba(255, 255, 255, 1); --p-text-on-critical:rgba(255, 255, 255, 1); --p-interactive-critical:rgba(216, 44, 13, 1); --p-interactive-critical-disabled:rgba(253, 147, 141, 1); --p-interactive-critical-hovered:rgba(205, 41, 12, 1); --p-interactive-critical-pressed:rgba(103, 15, 3, 1); --p-border-warning:rgba(185, 137, 0, 1); --p-border-warning-subdued:rgba(225, 184, 120, 1); --p-icon-warning:rgba(185, 137, 0, 1); --p-surface-warning:rgba(255, 215, 157, 1); --p-surface-warning-subdued:rgba(255, 245, 234, 1); --p-surface-warning-subdued-hovered:rgba(255, 242, 226, 1); --p-surface-warning-subdued-pressed:rgba(255, 235, 211, 1); --p-text-warning:rgba(145, 106, 0, 1); --p-border-highlight:rgba(68, 157, 167, 1); --p-border-highlight-subdued:rgba(152, 198, 205, 1); --p-icon-highlight:rgba(0, 160, 172, 1); --p-surface-highlight:rgba(164, 232, 242, 1); --p-surface-highlight-subdued:rgba(235, 249, 252, 1); --p-surface-highlight-subdued-hovered:rgba(228, 247, 250, 1); --p-surface-highlight-subdued-pressed:rgba(213, 243, 248, 1); --p-text-highlight:rgba(52, 124, 132, 1); --p-border-success:rgba(0, 164, 124, 1); --p-border-success-subdued:rgba(149, 201, 180, 1); --p-icon-success:rgba(0, 127, 95, 1); --p-surface-success:rgba(174, 233, 209, 1); --p-surface-success-subdued:rgba(241, 248, 245, 1); --p-surface-success-subdued-hovered:rgba(236, 246, 241, 1); --p-surface-success-subdued-pressed:rgba(226, 241, 234, 1); --p-text-success:rgba(0, 128, 96, 1); --p-decorative-one-icon:rgba(126, 87, 0, 1); --p-decorative-one-surface:rgba(255, 201, 107, 1); --p-decorative-one-text:rgba(61, 40, 0, 1); --p-decorative-two-icon:rgba(175, 41, 78, 1); --p-decorative-two-surface:rgba(255, 196, 176, 1); --p-decorative-two-text:rgba(73, 11, 28, 1); --p-decorative-three-icon:rgba(0, 109, 65, 1); --p-decorative-three-surface:rgba(146, 230, 181, 1); --p-decorative-three-text:rgba(0, 47, 25, 1); --p-decorative-four-icon:rgba(0, 106, 104, 1); --p-decorative-four-surface:rgba(145, 224, 214, 1); --p-decorative-four-text:rgba(0, 45, 45, 1); --p-decorative-five-icon:rgba(174, 43, 76, 1); --p-decorative-five-surface:rgba(253, 201, 208, 1); --p-decorative-five-text:rgba(79, 14, 31, 1); --p-border-radius-slim:0.2rem; --p-border-radius-base:0.4rem; --p-border-radius-wide:0.8rem; --p-border-radius-full:50%; --p-card-shadow:0px 0px 5px var(--p-shadow-from-ambient-light), 0px 1px 2px var(--p-shadow-from-direct-light); --p-popover-shadow:-1px 0px 20px var(--p-shadow-from-ambient-light), 0px 1px 5px var(--p-shadow-from-direct-light); --p-modal-shadow:0px 26px 80px var(--p-shadow-from-dim-light), 0px 0px 1px var(--p-shadow-from-dim-light); --p-top-bar-shadow:0 2px 2px -1px var(--p-shadow-from-direct-light); --p-button-drop-shadow:0 1px 0 rgba(0, 0, 0, 0.05); --p-button-inner-shadow:inset 0 -1px 0 rgba(0, 0, 0, 0.2); --p-button-pressed-inner-shadow:inset 0 1px 0 rgba(0, 0, 0, 0.15); --p-override-none:none; --p-override-transparent:transparent; --p-override-one:1; --p-override-visible:visible; --p-override-zero:0; --p-override-loading-z-index:514; --p-button-font-weight:500; --p-non-null-content:&quot;&quot;; --p-choice-size:2rem; --p-icon-size:1rem; --p-choice-margin:0.1rem; --p-control-border-width:0.2rem; --p-banner-border-default:inset 0 0.1rem 0 0 var(--p-border-neutral-subdued), inset 0 0 0 0.1rem var(--p-border-neutral-subdued); --p-banner-border-success:inset 0 0.1rem 0 0 var(--p-border-success-subdued), inset 0 0 0 0.1rem var(--p-border-success-subdued); --p-banner-border-highlight:inset 0 0.1rem 0 0 var(--p-border-highlight-subdued), inset 0 0 0 0.1rem var(--p-border-highlight-subdued); --p-banner-border-warning:inset 0 0.1rem 0 0 var(--p-border-warning-subdued), inset 0 0 0 0.1rem var(--p-border-warning-subdued); --p-banner-border-critical:inset 0 0.1rem 0 0 var(--p-border-critical-subdued), inset 0 0 0 0.1rem var(--p-border-critical-subdued); --p-badge-mix-blend-mode:luminosity; --p-thin-border-subdued:0.1rem solid var(--p-border-subdued); --p-text-field-spinner-offset:0.2rem; --p-text-field-focus-ring-offset:-0.4rem; --p-text-field-focus-ring-border-radius:0.7rem; --p-button-group-item-spacing:-0.1rem; --p-duration-1-0-0:100ms; --p-duration-1-5-0:150ms; --p-ease-in:cubic-bezier(0.5, 0.1, 1, 1); --p-ease:cubic-bezier(0.4, 0.22, 0.28, 1); --p-range-slider-thumb-size-base:1.6rem; --p-range-slider-thumb-size-active:2.4rem; --p-range-slider-thumb-scale:1.5; --p-badge-font-weight:400; --p-frame-offset:0px;">
            <div class="Polaris-Frame Polaris-Frame--hasNav Polaris-Frame--hasTopBar" data-polaris-layer="true"
                data-has-navigation="true">
                <div class="Polaris-Frame__Skip"><a href="#AppFrameMain">Skip to content</a></div>
                <div class="Polaris-Frame__TopBar" data-polaris-layer="true" data-polaris-top-bar="true"
                    id="AppFrameTopBar">
                    <div class="Polaris-TopBar">
                        <button type="button" class="Polaris-TopBar__NavigationIcon" aria-label="Toggle menu">
                            <span class="Polaris-Icon">
                                <span class="Polaris-VisuallyHidden"></span>
                                <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                    <path
                                        d="M19 11H1a1 1 0 0 1 0-2h18a1 1 0 1 1 0 2zm0-7H1a1 1 0 0 1 0-2h18a1 1 0 1 1 0 2zm0 14H1a1 1 0 0 1 0-2h18a1 1 0 0 1 0 2z">
                                    </path>
                                </svg>
                            </span>
                        </button>
                        <div class="Polaris-TopBar__Contents">
                            <div class="polaris_top_header_wise">
                                <h2><img src="images/logo.svg"><span>Jitterygit</span></h2>
                            </div>
                            <div class="Polaris-TopBar__SearchField" style="margin:0px">
                                <div class="Polaris-TopBar-SearchField">
                                    <span class="Polaris-Text--root Polaris-Text--visuallyHidden"><label
                                            for="PolarisSearchField1">Search</label></span><input
                                        id="PolarisSearchField1" class="Polaris-TopBar-SearchField__Input"
                                        placeholder="Search" type="search" autocapitalize="off" autocomplete="off"
                                        autocorrect="off" value="">
                                    <span class="Polaris-TopBar-SearchField__Icon">
                                        <span class="Polaris-Icon">
                                            <span class="Polaris-Text--root Polaris-Text--visuallyHidden"></span>
                                            <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false"
                                                aria-hidden="true">
                                                <path
                                                    d="M8 12a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm9.707 4.293-4.82-4.82a5.968 5.968 0 0 0 1.113-3.473 6 6 0 0 0-12 0 6 6 0 0 0 6 6 5.968 5.968 0 0 0 3.473-1.113l4.82 4.82a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414z">
                                                </path>
                                            </svg>
                                        </span>
                                    </span>
                                    <div class="Polaris-TopBar-SearchField__Backdrop"></div>
                                </div>
                                <div class="Polaris-TopBar-Search">
                                    <div class="Polaris-TopBar-Search__SearchContent">
                                        <div class="Polaris-TopBar-Search__Results">
                                            <div class="Polaris-Box">
                                                <ul class="Polaris-Box Polaris-Box--listReset"
                                                    style="--pc-box-padding-block-end-xs:var(--p-space-2);--pc-box-padding-block-start-xs:var(--p-space-2);--pc-box-padding-inline-start-xs:var(--p-space-2);--pc-box-padding-inline-end-xs:var(--p-space-2)"
                                                    tabindex="-1">
                                                    <li>
                                                        <button type="button" class="Polaris-ActionList__Item">
                                                            <div class="Polaris-Inline"
                                                                style="--pc-inline-block-align:center;--pc-inline-wrap:wrap;--pc-inline-gap-xs:var(--p-space-4)">
                                                                <span class="Polaris-ActionList__Text">Shopify help
                                                                    center</span>
                                                            </div>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button type="button" class="Polaris-ActionList__Item">
                                                            <div class="Polaris-Inline"
                                                                style="--pc-inline-block-align:center;--pc-inline-wrap:wrap;--pc-inline-gap-xs:var(--p-space-4)">
                                                                <span class="Polaris-ActionList__Text">Community
                                                                    forums</span>
                                                            </div>
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="Polaris-TopBar__SecondaryMenu"></div>
                            <div style="position: relative;">
                                <button type="button" class="Polaris-TopBar-Menu__Activator Polarispopover1"
                                    tabindex="0" aria-controls="Polarispopover1" aria-owns="Polarispopover1"
                                    aria-expanded="false">
                                    <div class="Polaris-MessageIndicator__MessageIndicatorWrapper">
                                        <span aria-label="Avatar with initials M B" role="img"
                                            class="Polaris-Avatar Polaris-Avatar--sizeSmall Polaris-Avatar--styleSix">
                                            <span class="Polaris-Avatar__Initials">
                                                <svg class="Polaris-Avatar__Svg" viewBox="0 0 40 40">
                                                    <text x="50%" y="50%" dy="0.35em" fill="currentColor" font-size="20"
                                                        text-anchor="middle">MB</text>
                                                </svg>
                                            </span>
                                        </span>
                                    </div>
                                    <span class="Polaris-TopBar-UserMenu__Details" style="margin-bottom: 0px;">
                                        <p class="Polaris-TopBar-UserMenu__Name owner_name">Manthan Bhavsar</p>
                                        <p class="Polaris-TopBar-UserMenu__Detail">metiz-storelocator-demo.myshopify.com
                                        </p>
                                    </span>
                                </button>
                                <div class="Polaris-PositionedOverlay Polaris-Popover__PopoverOverlay Polaris-Popover__PopoverOverlay--open "
                                    style="top: 50px;right: 0px;z-index: 513; ">
                                    <div class="Polaris-Popover" data-polaris-overlay="true">
                                        <div class="Polaris-Popover__FocusTracker" tabindex="0"></div>
                                        <div class="Polaris-Popover__Wrapper">
                                            <div id="Polarispopover1" tabindex="-1" class="Polaris-Popover__Content"
                                                style="height: 60px;width: 160px; display: none;">
                                                <div class="Polaris-Popover__Pane_yisof Polaris-Scrollable Polaris-Scrollable--vertical"
                                                    data-polaris-scrollable="true">
                                                    <ul class="Polaris-ActionList">
                                                        <li class="Polaris-ActionList__Section">
                                                            <div class="Polaris-ActionList__Section--withoutTitle">
                                                                <ul class="Polaris-ActionList__Actions">
                                                                    <li>
                                                                        <a type="button"
                                                                            class="Polaris-ActionList__Item"
                                                                            href="https://storelocator.metizapps.com/login/logout">
                                                                            <div class="Polaris-ActionList__Content">
                                                                                <div
                                                                                    class="Polaris-ActionList__Prefix add_ActionList__Prefix">
                                                                                    <span class="Polaris-Icon">
                                                                                        <svg viewBox="0 0 20 20"
                                                                                            class="Polaris-Icon__Svg"
                                                                                            focusable="false"
                                                                                            aria-hidden="true">
                                                                                            <path
                                                                                                d="M10 19a8 8 0 1 0 0-16 8 8 0 0 0 0 16zM9.293 8.707a1 1 0 0 1 1.414-1.414l3 3a1 1 0 0 1 0 1.414l-3 3a1 1 0 0 1-1.414-1.414L10.586 12H7a1 1 0 1 1 0-2h3.586L9.293 8.707z">
                                                                                            </path>
                                                                                        </svg>
                                                                                    </span>
                                                                                </div>
                                                                                <div class="Polaris-ActionList__Text">
                                                                                    Log out</div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="Polaris-Popover__FocusTracker" tabindex="0"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div aria-label="Navigation" class="Polaris-Frame__Navigation" id="AppFrameNav" hidden="">
                        <nav class="Polaris-Navigation">
                            <div class="Polaris-Navigation__LogoContainer">
                                <p class="Polaris-Navigation__LogoLink" href="#" data-polaris-unstyled="true" style="">
                                <h2><img src="images/logo.svg"><span></span></h2>
                                </p>
                            </div>
                            <div class="Polaris-Navigation__PrimaryNavigation Polaris-Scrollable Polaris-Scrollable--vertical"
                                data-polaris-scrollable="true">
                                <ul class="Polaris-Navigation__Section">
                                    <li class="Polaris-Navigation__ListItem"
                                        style="border-bottom:1px solid #e1e3e5;padding-bottom: 10px;">
                                        <button type="button" class="Polaris-Navigation__Item">
                                            <div class="Polaris-Navigation__Icon">
                                                <span class="Polaris-Icon">
                                                    <span class="Polaris-VisuallyHidden"></span>
                                                    <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false"
                                                        aria-hidden="true">
                                                        <path
                                                            d="M17 9H5.414l3.293-3.293a.999.999 0 1 0-1.414-1.414l-5 5a.999.999 0 0 0 0 1.414l5 5a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414L5.414 11H17a1 1 0 1 0 0-2z">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </div>
                                            <span class="Polaris-Navigation__Text">Back to Shopify</span>
                                        </button>
                                    </li>
                                    <li class="Polaris-Navigation__SectionHeading"><span
                                            class="Polaris-Navigation__Text">PRIMARY MENU</span></li>
                                    <li class="Polaris-Navigation__ListItem home_section">
                                        <button type="button" class="Polaris-Navigation__Item">
                                            <div class="Polaris-Navigation__Icon">
                                                <span class="Polaris-Icon">
                                                    <span class="Polaris-VisuallyHidden"></span>
                                                    <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false"
                                                        aria-hidden="true">
                                                        <path
                                                            d="M18 7.261V17.5c0 .841-.672 1.5-1.5 1.5h-2c-.828 0-1.5-.659-1.5-1.5V13H7v4.477C7 18.318 6.328 19 5.5 19h-2c-.828 0-1.5-.682-1.5-1.523V7.261a1.5 1.5 0 0 1 .615-1.21l6.59-4.82a1.481 1.481 0 0 1 1.59 0l6.59 4.82A1.5 1.5 0 0 1 18 7.26z">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </div>
                                            <span class="Polaris-Navigation__Text " id="default_open">Home</span>
                                        </button>
                                    </li>
                                    <li class="Polaris-Navigation__ListItem" id="zip">
                                        <button type="button" class="Polaris-Navigation__Item">
                                            <div class="Polaris-Navigation__Icon">
                                                <span class="Polaris-Icon">
                                                    <span class="Polaris-VisuallyHidden"></span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="Polaris-Icon__Svg"
                                                        width="18.833" height="18.833" viewBox="0 0 18.833 18.833">
                                                        <path id="Zip_Code-595b40b85ba036ed117dba03"
                                                            data-name="Zip Code-595b40b85ba036ed117dba03"
                                                            d="M11.417,2a.409.409,0,0,0-.183.043l-9.007,4.5A.41.41,0,0,0,2,6.913v.819a.409.409,0,0,0,.593.366l8.824-4.412L20.241,8.1a.411.411,0,0,0,.4-.018.411.411,0,0,0,.194-.349V6.913a.409.409,0,0,0-.226-.366L11.6,2.043A.408.408,0,0,0,11.417,2Zm0,2.6L2.959,8.831a1.3,1.3,0,0,1-.14.05V20.424a.41.41,0,0,0,.409.409H19.6a.41.41,0,0,0,.409-.409V8.881a1.213,1.213,0,0,1-.14-.05Zm2.913,5.869a2.377,2.377,0,0,1,1.706.518,1.985,1.985,0,0,1,.545,1.462,2.076,2.076,0,0,1-2.14,2.233,1.594,1.594,0,0,1-.234-.011V16.33H13.054V10.6A5.812,5.812,0,0,1,14.33,10.471ZM6.76,10.6h3.428v.787L8.041,15.356v.03h2.147v.944H6.759v-.64l2.206-4.123v-.02H6.76Zm4.247,0h1.228V16.33H11.007Zm3.5.756a.78.78,0,0,0-.305.051V13.78a.551.551,0,0,0,.194.02c.706,0,1.1-.487,1.1-1.269C15.5,11.891,15.239,11.353,14.512,11.353Z"
                                                            transform="translate(-2 -2)" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <span class="Polaris-Navigation__Text">Orders</span>
                                        </button>
                                    </li>
                                    <li class="Polaris-Navigation__ListItem" id="zipcode_widget">
                                        <button type="button" class="Polaris-Navigation__Item">
                                            <div class="Polaris-Navigation__Icon">
                                                <span class="Polaris-Icon">
                                                    <span class="Polaris-VisuallyHidden"></span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="Polaris-Icon__Svg"
                                                        width="24" height="24" viewBox="0 0 24 24">
                                                        <g id="Icons" transform="translate(3 2)">
                                                            <g id="Rounded" transform="translate(-205 -1750)">
                                                                <g id="Device" transform="translate(100 1650)">
                                                                    <g id="_-Round-_-Device-_-widgets"
                                                                        data-name="-Round-/-Device-/-widgets"
                                                                        transform="translate(102 98)">
                                                                        <g id="Group_1286" data-name="Group 1286">
                                                                            <path id="Path" d="M0,0H24V24H0Z"
                                                                                fill="none" />
                                                                            <path id="_Icon-Color"
                                                                                data-name="🔹Icon-Color"
                                                                                d="M13,14v6a1,1,0,0,0,1,1h6a1,1,0,0,0,1-1V14a1,1,0,0,0-1-1H14A1,1,0,0,0,13,14ZM4,21h6a1,1,0,0,0,1-1V14a1,1,0,0,0-1-1H4a1,1,0,0,0-1,1v6A1,1,0,0,0,4,21ZM3,4v6a1,1,0,0,0,1,1h6a1,1,0,0,0,1-1V4a1,1,0,0,0-1-1H4A1,1,0,0,0,3,4ZM15.95,2.4,11.7,6.64a1,1,0,0,0,0,1.41l4.25,4.25a1,1,0,0,0,1.41,0l4.25-4.25a1,1,0,0,0,0-1.41L17.37,2.4A1.008,1.008,0,0,0,15.95,2.4Z" />
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </span>
                                            </div>
                                            <span class="Polaris-Navigation__Text">Products</span>
                                        </button>
                                    </li>
                                    <li class="Polaris-Navigation__ListItem" id="setting_nav">
                                        <button type="button" class="Polaris-Navigation__Item">
                                            <div class="Polaris-Navigation__Icon">
                                                <span class="Polaris-Icon">
                                                    <span class="Polaris-VisuallyHidden"></span>
                                                    <svg class="Polaris-Icon__Svg" xmlns="http://www.w3.org/2000/svg"
                                                        width="18.722" height="20" viewBox="0 0 18.722 20">
                                                        <path id="Path_718" data-name="Path 718"
                                                            d="M29.028,848a1,1,0,0,0-.99.859l-.371,2.6a6.99,6.99,0,0,0-1.924,1.113l-2.438-.979a1,1,0,0,0-1.239.428l-1.133,1.962a1,1,0,0,0,.249,1.287l2.066,1.621a7.089,7.089,0,0,0,0,2.222l-2.066,1.621a1,1,0,0,0-.249,1.287l1.133,1.962a1,1,0,0,0,1.239.428l2.438-.979a6.99,6.99,0,0,0,1.924,1.113l.371,2.6a1,1,0,0,0,.99.859h2.266a1,1,0,0,0,.99-.859l.371-2.6a6.99,6.99,0,0,0,1.924-1.113l2.438.979a1,1,0,0,0,1.239-.428l1.133-1.962a1,1,0,0,0-.249-1.287l-2.066-1.621A7.066,7.066,0,0,0,37.16,858c0-.123,0-.246-.01-.368a7.055,7.055,0,0,0-.078-.743l2.066-1.621a1,1,0,0,0,.249-1.287l-1.133-1.962a1,1,0,0,0-1.239-.428l-2.438.979a6.99,6.99,0,0,0-1.924-1.113l-.371-2.6a1,1,0,0,0-.99-.859Zm1.133,13a3,3,0,1,0-3-3A3,3,0,0,0,30.16,861Z"
                                                            transform="translate(-20.799 -848)" fill-rule="evenodd">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </div>
                                            <span class="Polaris-Navigation__Text">Setting</span>
                                        </button>
                                    </li>
                                    <li class="Polaris-Navigation__ListItem" id="waiting_nav">
                                        <button type="button" class="Polaris-Navigation__Item"
                                            style="border-bottom:1px solid #e1e3e5;padding-bottom: 10px;">
                                            <div class="Polaris-Navigation__Icon">
                                                <span class="Polaris-Icon">
                                                    <span class="Polaris-VisuallyHidden"></span>
                                                    <svg id="Group_1288" data-name="Group 1288"
                                                        class="Polaris-Icon__Svg" xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="21.822"
                                                        height="18.472" viewBox="0 0 21.822 18.472">
                                                        <defs>
                                                            <clipPath id="clip-path">
                                                                <rect id="Rectangle_686" data-name="Rectangle 686"
                                                                    width="21.822" height="18.472" fill="#5c5f62" />
                                                            </clipPath>
                                                        </defs>
                                                        <g id="Group_1287" data-name="Group 1287"
                                                            clip-path="url(#clip-path)">
                                                            <path id="Path_771" data-name="Path 771"
                                                                d="M6.9,520.76H.153c-.155,0-.16,0-.151-.156a8.222,8.222,0,0,1,.234-1.546A7.154,7.154,0,0,1,1.58,516.31a7.82,7.82,0,0,1,2.351-1.962,10.342,10.342,0,0,1,2.7-1.023,11.074,11.074,0,0,1,1.894-.281,16.715,16.715,0,0,1,2.3.023c.453.037.9.108,1.345.189.12.022.125.031.062.138a5.286,5.286,0,0,0-.681,1.933,5.58,5.58,0,0,0,.318,2.885,5.7,5.7,0,0,0,1.477,2.134,4.005,4.005,0,0,0,.407.332c.021.015.055.031.046.062s-.047.02-.072.021c-.058,0-.117,0-.175,0H6.9"
                                                                transform="translate(0 -502.435)" />
                                                            <path id="Path_772" data-name="Path 772"
                                                                d="M228.942,0a4.645,4.645,0,0,1,2.723.873,4.744,4.744,0,0,1,2,3.189,4.775,4.775,0,0,1-.682,3.4A4.724,4.724,0,0,1,232,8.585a4.79,4.79,0,0,1-1.539.878,4.953,4.953,0,0,1-1.137.239,4.546,4.546,0,0,1-1.433-.1,4.632,4.632,0,0,1-1.629-.7,4.837,4.837,0,0,1-1.613-1.826,4.907,4.907,0,0,1-.517-1.833,4.775,4.775,0,0,1,.32-2.173A4.769,4.769,0,0,1,226.6.6a4.6,4.6,0,0,1,2.339-.6"
                                                                transform="translate(-219.494 0)" />
                                                            <path id="Path_773" data-name="Path 773"
                                                                d="M603.694,446.1a4.733,4.733,0,1,1,4.757-4.71,4.727,4.727,0,0,1-4.757,4.71m.452-6.328c0-.44,0-.88,0-1.32a.422.422,0,0,0-.52-.4.431.431,0,0,0-.343.463c0,.917,0,1.835,0,2.752a.677.677,0,0,0,.183.477c.166.184.334.364.5.548q.435.482.867.966c.126.14.248.285.38.42a.435.435,0,1,0,.622-.609c-.053-.058-.105-.118-.158-.177q-.7-.772-1.4-1.543a.458.458,0,0,1-.134-.34c.009-.412,0-.825,0-1.237"
                                                                transform="translate(-586.63 -427.633)" />
                                                        </g>
                                                    </svg>
                                                </span>
                                            </div>
                                            <span class="Polaris-Navigation__Text">Waiting List</span>
                                        </button>
                                    </li>
                                    <li class="Polaris-Navigation__SectionHeading"><span
                                            class="Polaris-Navigation__Text">MORE FEATURES</span></li>
                                    <li class="Polaris-Navigation__ListItem">
                                        <button type="button" class="Polaris-Navigation__Item"
                                            style="border-bottom:1px solid #e1e3e5;padding-bottom: 10px;">
                                            <div class="Polaris-Navigation__Icon">
                                                <span class="Polaris-Icon">
                                                    <span class="Polaris-VisuallyHidden"></span>
                                                    <svg class="Polaris-Icon__Svg" xmlns="http://www.w3.org/2000/svg"
                                                        width="18" height="18" viewBox="0 0 18 18">
                                                        <g id="Group_1233" data-name="Group 1233"
                                                            transform="translate(-21 -299)">
                                                            <path id="Path_655" data-name="Path 655"
                                                                d="M29,307H21v-6.5a1.5,1.5,0,0,1,1.5-1.5H29Z"></path>
                                                            <path id="Path_656" data-name="Path 656"
                                                                d="M29,309v8H22.5a1.5,1.5,0,0,1-1.5-1.5V309Z"></path>
                                                            <path id="Path_657" data-name="Path 657"
                                                                d="M31,309v8h6.5a1.5,1.5,0,0,0,1.5-1.5V309Z"></path>
                                                            <path id="Path_658" data-name="Path 658"
                                                                d="M35,299a1,1,0,0,1,1,1v2h2a1,1,0,0,1,0,2H36v2a1,1,0,0,1-2,0v-2H32a1,1,0,0,1,0-2h2v-2A1,1,0,0,1,35,299Z">
                                                            </path>
                                                        </g>
                                                    </svg>
                                                </span>
                                            </div>
                                            <span class="Polaris-Navigation__Text">Our Other Apps</span>
                                        </button>
                                    </li>
                                    <li class="Polaris-Navigation__SectionHeading"><span
                                            class="Polaris-Navigation__Text">HELP CENTER</span></li>
                                    <li class="Polaris-Navigation__ListItem">
                                        <button type="button" class="Polaris-Navigation__Item">
                                            <div class="Polaris-Navigation__Icon">
                                                <span class="Polaris-Icon">
                                                    <span class="Polaris-VisuallyHidden"></span>
                                                    <svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                                                        class="Polaris-Icon__Svg">
                                                        <path fill-rule="evenodd"
                                                            d="M0 10C0 4.478 4.478 0 10 0c5.523 0 10 4.478 10 10 0 5.523-4.477 10-10 10-5.522 0-10-4.477-10-10zm11.125 2.002H8.989v-.141c.01-1.966.492-2.254 1.374-2.782.093-.056.19-.114.293-.178.73-.459 1.292-1.038 1.292-1.883 0-.948-.743-1.564-1.666-1.564-.851 0-1.657.398-1.712 1.533H6.304C6.364 4.693 8.18 3.5 10.294 3.5c2.306 0 3.894 1.447 3.894 3.488 0 1.382-.695 2.288-1.805 2.952l-.238.144c-.79.475-1.009.607-1.02 1.777V12zm.17 3.012a1.344 1.344 0 01-1.327 1.328 1.32 1.32 0 01-1.328-1.328 1.318 1.318 0 011.328-1.316c.712 0 1.322.592 1.328 1.316z" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <span class="Polaris-Navigation__Text">Documents</span>
                                        </button>
                                    </li>
                                    <li class="Polaris-Navigation__ListItem">
                                        <button type="button" class="Polaris-Navigation__Item">
                                            <div class="Polaris-Navigation__Icon">
                                                <span class="Polaris-Icon">
                                                    <span class="Polaris-VisuallyHidden"></span>
                                                    <svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                                                        class="Polaris-Icon__Svg">
                                                        <path fill-rule="evenodd"
                                                            d="M13 10a1 1 0 102 0 1 1 0 00-2 0zm-4 0a1 1 0 102 0 1 1 0 00-2 0zm-4 0a1 1 0 102 0 1 1 0 00-2 0zm5-8c-4.411 0-8 3.589-8 8 0 1.504.425 2.908 1.15 4.111l-1.069 2.495a1 1 0 001.314 1.313l2.494-1.069A7.939 7.939 0 0010 18c4.411 0 8-3.589 8-8s-3.589-8-8-8z" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <span class="Polaris-Navigation__Text">Help Desk</span>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                        <button type="button" class="Polaris-Frame__NavigationDismiss" aria-hidden="true"
                            aria-label="Close navigation" tabindex="-1">
                            <span class="Polaris-Icon">
                                <span class="Polaris-VisuallyHidden"></span>
                                <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                    <path
                                        d="m11.414 10 6.293-6.293a1 1 0 1 0-1.414-1.414L10 8.586 3.707 2.293a1 1 0 0 0-1.414 1.414L8.586 10l-6.293 6.293a1 1 0 1 0 1.414 1.414L10 11.414l6.293 6.293A.998.998 0 0 0 18 17a.999.999 0 0 0-.293-.707L11.414 10z">
                                    </path>
                                </svg>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="Polaris-Frame__ContextualSaveBar Polaris-Frame-CSSAnimation--startFade"></div>
                <main class="Polaris-Frame__Main" id="AppFrameMain" data-has-global-ribbon="false">