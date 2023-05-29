<style>
.class_model {
    display: none
}

.channnel_model {
    display: none
}

#ui-datepicker-div {
    z-index: 999 !important
}
</style>
<link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">
<link href="https://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
<div class="Polaris-Frame__Content" style="padding:5px 15px">
    <div class="Polaris-Page view_page">
        <div class="poaris_tab_section">
            <div class="Polaris-LegacyCard">
                <div class="tabs_click_events">
                    <div class="Polaris-Box"
                        style="--pc-box-border-block-end:var(--p-border-divider);--pc-box-padding-inline-start-xs:var(--p-space-2);--pc-box-padding-inline-end-xs:var(--p-space-2)">
                        <ul role="tablist" class="Polaris-Tabs Polaris-Tabs--fitted tabular_list">
                            <li onclick="openCity(event, 'Brands')"
                                class="tablinks Polaris-Tabs__TabContainer tabing_ng active brands_click select_tab"
                                role="presentation">
                                <button id="all-customers-1" role="tab" type="button" tabindex="0"
                                    class="Polaris-Tabs__Tab btn_tab" aria-selected="true"
                                    aria-controls="all-customers-content-1" aria-label="All customers">
                                    <span class="Polaris-Tabs__Title nav_link">
                                        <span>Class</span>
                                    </span>
                                </button>
                            </li>
                            <li class="tablinks Polaris-Tabs__TabContainer tabing_ng market_place_click"
                                onclick="openCity(event, 'MarketPlace')" role="presentation">
                                <button id="accepts-marketing-1" role="tab" type="button" tabindex="-1"
                                    class="Polaris-Tabs__Tab btn_tab " aria-selected="false"
                                    aria-controls="accepts-marketing-content-1">
                                    <span class="Polaris-Tabs__Title nd-der nav_link">
                                        <span>Channel</span>
                                    </span>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
                <script>
                $(document).ready(function() {
                    $(".market_place_click").click(function() {
                        $(".brands_text").attr("style", "display:none");
                        $(".market_place_text").attr("style", "display:block")
                    })
                    $(".brands_click").click(function() {
                        $(".brands_text").attr("style", "display:block");
                        $(".market_place_text").attr("style", "display:none")
                    })

                })
                </script>
                <div>
                    <div class="brands_text">
                        <div class="main_home_page ">
                            <div class="heading_text">
                                <h2>Class</h2>
                            </div>
                            <div class="addNew_btn">
                                <button class="Polaris-Button Polaris-Button--primary new_class_ad" type="button">
                                    <span class="Polaris-Button__Content">
                                        <span class="Polaris-Button__Text"> Add New</span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="market_place_text">
                        <div class="main_home_page ">
                            <div class="heading_text">
                                <h2>Channel</h2>
                            </div>
                            <div class="addNew_btn">
                                <button class="Polaris-Button Polaris-Button--primary add_new_channels" type="button">
                                    <span class="Polaris-Button__Content">
                                        <span class="Polaris-Button__Text"> Add New</span>
                                    </span>
                                </button>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="Polaris-Card">
                    <div class="Polaris-Card__Header">
                        <div class="Polaris-Tabs__Panel tabcontent1" id="Brands" role="tabpanel"
                            aria-labelledby="all-customers-fitted-2" tabindex="-1">
                            <div class="Polaris-LegacyCard__Section">
                                <div class="table_block">
                                    <div class="Polaris-LegacyCard">
                                        <div class="Polaris-IndexTable">
                                            <div class="Polaris-IndexTable__IndexTableWrapper">
                                                <div class="Polaris-IndexTable__StickyTable" role="presentation">
                                                    <div>
                                                        <div>
                                                        </div>
                                                        <div>
                                                            <div class="Polaris-IndexTable__StickyTableHeader">
                                                                <div
                                                                    class="Polaris-IndexTable__StickyTableColumnHeader">
                                                                    <div class="Polaris-IndexTable__TableHeading"
                                                                        data-index-table-sticky-heading="true">
                                                                        <div
                                                                            class="Polaris-LegacyStack Polaris-LegacyStack--spacingNone Polaris-LegacyStack--alignmentCenter Polaris-LegacyStack--noWrap">
                                                                            <div class="Polaris-LegacyStack__Item">
                                                                                <div
                                                                                    class="Polaris-IndexTable__FirstStickyHeaderElement">
                                                                                    Name
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="Polaris-IndexTable__StickyTableHeadings">
                                                                    <div class="Polaris-IndexTable__TableHeading "
                                                                        data-index-table-sticky-heading="true">Name
                                                                    </div>
                                                                    <div class="Polaris-IndexTable__TableHeading"
                                                                        data-index-table-sticky-heading="true">Location
                                                                    </div>
                                                                    <div class="Polaris-IndexTable__TableHeading"
                                                                        data-index-table-sticky-heading="true">
                                                                        <span
                                                                            class="Polaris-Text--root Polaris-Text--block Polaris-Text--end">Order
                                                                            count</span>
                                                                    </div>
                                                                    <div class="Polaris-IndexTable__TableHeading"
                                                                        data-index-table-sticky-heading="true">
                                                                        <span
                                                                            class="Polaris-Text--root Polaris-Text--block Polaris-Text--end">Amount
                                                                            spent</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="Polaris-IndexTable-ScrollContainer">
                                                    <div>

                                                    </div>
                                                    <table
                                                        class="Polaris-IndexTable__Table Polaris-IndexTable__Table--unselectable Polaris-IndexTable__Table--sticky">
                                                        <thead>
                                                            <tr>
                                                                <!-- <th class="Polaris-IndexTable__TableHeading "
                                                                    data-index-table-heading="true">
                                                                    Promotion Name</th> -->
                                                                <th class="Polaris-IndexTable__TableHeading "
                                                                    data-index-table-heading="true">
                                                                    Class</th>
                                                                <!-- <th class="Polaris-IndexTable__TableHeading "
                                                                    data-index-table-heading="true">
                                                                    Market Place</th> -->
                                                                <th class="Polaris-IndexTable__TableHeading "
                                                                    data-index-table-heading="true" tabindex="0"
                                                                    aria-controls="Polarispopover1"
                                                                    aria-owns="Polarispopover1" aria-expanded="true">

                                                                    <div
                                                                        class="dropdown_pop_up_icon date_created_dropdown">
                                                                        <p tabindex="0" aria-controls="Polarispopover1"
                                                                            aria-owns="Polarispopover1"
                                                                            aria-expanded="true">
                                                                            <span class="Polaris-Button__Content">
                                                                                <span class="Polaris-Button__Text">Date
                                                                                    Created</span>
                                                                                <span class="Polaris-Button__Icon">

                                                                                </span>
                                                                            </span>
                                                                        </p>
                                                                        <div class="drop_icon">
                                                                            <span class="Polaris-Icon">
                                                                                <span
                                                                                    class="Polaris-Text--root Polaris-Text--visuallyHidden"></span>
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
                                                                    <div>
                                                                        <div tabindex="-1"
                                                                            class="Polaris-Popover__Content date_created_model">
                                                                            <div class="Polaris-Popover__Pane Polaris-Scrollable "
                                                                                data-polaris-scrollable="true">
                                                                                <div class="Polaris-Box">
                                                                                    <ul class="Polaris-Box Polaris-Box--listReset"
                                                                                        role="menu" tabindex="-1"
                                                                                        style="--pc-box-padding-block-end-xs:var(--p-space-2); --pc-box-padding-block-start-xs:var(--p-space-2); --pc-box-padding-inline-start-xs:var(--p-space-2); --pc-box-padding-inline-end-xs:var(--p-space-2);">
                                                                                        <li role="presentation">
                                                                                            <button type="button"
                                                                                                class="Polaris-ActionList__Item"
                                                                                                role="menuitem">
                                                                                                <div class="Polaris-Inline"
                                                                                                    style="--pc-inline-block-align:center; --pc-inline-wrap:wrap; --pc-inline-gap-xs:var(--p-space-4);">
                                                                                                    <span
                                                                                                        class="Polaris-ActionList__Text">Newset
                                                                                                        to oldest</span>
                                                                                                </div>
                                                                                            </button>
                                                                                        </li>
                                                                                        <li role="presentation">
                                                                                            <button type="button"
                                                                                                class="Polaris-ActionList__Item"
                                                                                                role="menuitem">
                                                                                                <div class="Polaris-Inline"
                                                                                                    style="--pc-inline-block-align:center; --pc-inline-wrap:wrap; --pc-inline-gap-xs:var(--p-space-4);">
                                                                                                    <span
                                                                                                        class="Polaris-ActionList__Text">Oldest
                                                                                                        to newset</span>
                                                                                                </div>
                                                                                            </button>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </th>

                                                                <th class="Polaris-IndexTable__TableHeading  "
                                                                    data-index-table-heading="true">
                                                                    <div
                                                                        class="dropdown_pop_up_icon date_created_dropdown">
                                                                        <p tabindex="0" aria-controls="Polarispopover1"
                                                                            aria-owns="Polarispopover1"
                                                                            aria-expanded="true">
                                                                            <span class="Polaris-Button__Content">
                                                                                <span class="Polaris-Button__Text">Last
                                                                                    Modified</span>
                                                                                <span class="Polaris-Button__Icon">

                                                                                </span>
                                                                            </span>
                                                                        </p>
                                                                        <div class="drop_icon">
                                                                            <span class="Polaris-Icon">
                                                                                <span
                                                                                    class="Polaris-Text--root Polaris-Text--visuallyHidden"></span>
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
                                                                    <div>
                                                                        <div tabindex="-1"
                                                                            class="Polaris-Popover__Content date_created_model">
                                                                            <div class="Polaris-Popover__Pane Polaris-Scrollable "
                                                                                data-polaris-scrollable="true">
                                                                                <div class="Polaris-Box">
                                                                                    <ul class="Polaris-Box Polaris-Box--listReset"
                                                                                        role="menu" tabindex="-1"
                                                                                        style="--pc-box-padding-block-end-xs:var(--p-space-2); --pc-box-padding-block-start-xs:var(--p-space-2); --pc-box-padding-inline-start-xs:var(--p-space-2); --pc-box-padding-inline-end-xs:var(--p-space-2);">
                                                                                        <li role="presentation">
                                                                                            <button type="button"
                                                                                                class="Polaris-ActionList__Item"
                                                                                                role="menuitem">
                                                                                                <div class="Polaris-Inline"
                                                                                                    style="--pc-inline-block-align:center; --pc-inline-wrap:wrap; --pc-inline-gap-xs:var(--p-space-4);">
                                                                                                    <span
                                                                                                        class="Polaris-ActionList__Text">Newset
                                                                                                        to oldest</span>
                                                                                                </div>
                                                                                            </button>
                                                                                        </li>
                                                                                        <li role="presentation">
                                                                                            <button type="button"
                                                                                                class="Polaris-ActionList__Item"
                                                                                                role="menuitem">
                                                                                                <div class="Polaris-Inline"
                                                                                                    style="--pc-inline-block-align:center; --pc-inline-wrap:wrap; --pc-inline-gap-xs:var(--p-space-4);">
                                                                                                    <span
                                                                                                        class="Polaris-ActionList__Text">Oldest
                                                                                                        to newset</span>
                                                                                                </div>
                                                                                            </button>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </th>
                                                                <th class="Polaris-IndexTable__TableHeading  "
                                                                    data-index-table-heading="true">
                                                                    <div
                                                                        class="dropdown_pop_up_icon date_created_dropdown">
                                                                        <p tabindex="0" aria-controls="Polarispopover1"
                                                                            aria-owns="Polarispopover1"
                                                                            aria-expanded="true">
                                                                            <span class="Polaris-Button__Content">
                                                                                <span
                                                                                    class="Polaris-Button__Text">Created
                                                                                    By</span>
                                                                                <span class="Polaris-Button__Icon">

                                                                                </span>
                                                                            </span>
                                                                        </p>
                                                                        <div class="drop_icon">
                                                                            <span class="Polaris-Icon">
                                                                                <span
                                                                                    class="Polaris-Text--root Polaris-Text--visuallyHidden"></span>
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
                                                                    <div>
                                                                        <div tabindex="-1"
                                                                            class="Polaris-Popover__Content date_created_model">
                                                                            <div class="Polaris-Popover__Pane Polaris-Scrollable "
                                                                                data-polaris-scrollable="true">
                                                                                <div class="Polaris-Box">
                                                                                    <ul class="Polaris-Box Polaris-Box--listReset"
                                                                                        role="menu" tabindex="-1"
                                                                                        style="--pc-box-padding-block-end-xs:var(--p-space-2); --pc-box-padding-block-start-xs:var(--p-space-2); --pc-box-padding-inline-start-xs:var(--p-space-2); --pc-box-padding-inline-end-xs:var(--p-space-2);">
                                                                                        <li role="presentation">
                                                                                            <button type="button"
                                                                                                class="Polaris-ActionList__Item"
                                                                                                role="menuitem">
                                                                                                <div class="Polaris-Inline"
                                                                                                    style="--pc-inline-block-align:center; --pc-inline-wrap:wrap; --pc-inline-gap-xs:var(--p-space-4);">
                                                                                                    <span
                                                                                                        class="Polaris-ActionList__Text">Ash</span>
                                                                                                </div>
                                                                                            </button>
                                                                                        </li>
                                                                                        <li role="presentation">
                                                                                            <button type="button"
                                                                                                class="Polaris-ActionList__Item"
                                                                                                role="menuitem">
                                                                                                <div class="Polaris-Inline"
                                                                                                    style="--pc-inline-block-align:center; --pc-inline-wrap:wrap; --pc-inline-gap-xs:var(--p-space-4);">
                                                                                                    <span
                                                                                                        class="Polaris-ActionList__Text">Eduardo</span>
                                                                                                </div>
                                                                                            </button>
                                                                                        </li>
                                                                                        <li role="presentation">
                                                                                            <button type="button"
                                                                                                class="Polaris-ActionList__Item"
                                                                                                role="menuitem">
                                                                                                <div class="Polaris-Inline"
                                                                                                    style="--pc-inline-block-align:center; --pc-inline-wrap:wrap; --pc-inline-gap-xs:var(--p-space-4);">
                                                                                                    <span
                                                                                                        class="Polaris-ActionList__Text">Reine</span>
                                                                                                </div>
                                                                                            </button>
                                                                                        </li>
                                                                                        <li role="presentation">
                                                                                            <button type="button"
                                                                                                class="Polaris-ActionList__Item"
                                                                                                role="menuitem">
                                                                                                <div class="Polaris-Inline"
                                                                                                    style="--pc-inline-block-align:center; --pc-inline-wrap:wrap; --pc-inline-gap-xs:var(--p-space-4);">
                                                                                                    <span
                                                                                                        class="Polaris-ActionList__Text">Noam</span>
                                                                                                </div>
                                                                                            </button>
                                                                                        </li>
                                                                                        <li role="presentation">
                                                                                            <button type="button"
                                                                                                class="Polaris-ActionList__Item"
                                                                                                role="menuitem">
                                                                                                <div class="Polaris-Inline"
                                                                                                    style="--pc-inline-block-align:center; --pc-inline-wrap:wrap; --pc-inline-gap-xs:var(--p-space-4);">
                                                                                                    <span
                                                                                                        class="Polaris-ActionList__Text">etc.</span>
                                                                                                </div>
                                                                                            </button>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </th>
                                                                <th class="Polaris-IndexTable__TableHeading "
                                                                    data-index-table-heading="true">
                                                                    <div
                                                                        class="dropdown_pop_up_icon date_created_dropdown">
                                                                        <p tabindex="0" aria-controls="Polarispopover1"
                                                                            aria-owns="Polarispopover1"
                                                                            aria-expanded="true">
                                                                            <span class="Polaris-Button__Content">
                                                                                <span class="Polaris-Button__Text">Last
                                                                                    Modified</span>
                                                                                <span class="Polaris-Button__Icon">

                                                                                </span>
                                                                            </span>
                                                                        </p>
                                                                        <div class="drop_icon">
                                                                            <span class="Polaris-Icon">
                                                                                <span
                                                                                    class="Polaris-Text--root Polaris-Text--visuallyHidden"></span>
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
                                                                    <div>
                                                                        <div tabindex="-1"
                                                                            class="Polaris-Popover__Content date_created_model">
                                                                            <div class="Polaris-Popover__Pane Polaris-Scrollable "
                                                                                data-polaris-scrollable="true">
                                                                                <div class="Polaris-Box">
                                                                                    <ul class="Polaris-Box Polaris-Box--listReset"
                                                                                        role="menu" tabindex="-1"
                                                                                        style="--pc-box-padding-block-end-xs:var(--p-space-2); --pc-box-padding-block-start-xs:var(--p-space-2); --pc-box-padding-inline-start-xs:var(--p-space-2); --pc-box-padding-inline-end-xs:var(--p-space-2);">
                                                                                        <li role="presentation">
                                                                                            <button type="button"
                                                                                                class="Polaris-ActionList__Item"
                                                                                                role="menuitem">
                                                                                                <div class="Polaris-Inline"
                                                                                                    style="--pc-inline-block-align:center; --pc-inline-wrap:wrap; --pc-inline-gap-xs:var(--p-space-4);">
                                                                                                    <span
                                                                                                        class="Polaris-ActionList__Text">Ash</span>
                                                                                                </div>
                                                                                            </button>
                                                                                        </li>
                                                                                        <li role="presentation">
                                                                                            <button type="button"
                                                                                                class="Polaris-ActionList__Item"
                                                                                                role="menuitem">
                                                                                                <div class="Polaris-Inline"
                                                                                                    style="--pc-inline-block-align:center; --pc-inline-wrap:wrap; --pc-inline-gap-xs:var(--p-space-4);">
                                                                                                    <span
                                                                                                        class="Polaris-ActionList__Text">Eduardo</span>
                                                                                                </div>
                                                                                            </button>
                                                                                        </li>
                                                                                        <li role="presentation">
                                                                                            <button type="button"
                                                                                                class="Polaris-ActionList__Item"
                                                                                                role="menuitem">
                                                                                                <div class="Polaris-Inline"
                                                                                                    style="--pc-inline-block-align:center; --pc-inline-wrap:wrap; --pc-inline-gap-xs:var(--p-space-4);">
                                                                                                    <span
                                                                                                        class="Polaris-ActionList__Text">Reine</span>
                                                                                                </div>
                                                                                            </button>
                                                                                        </li>
                                                                                        <li role="presentation">
                                                                                            <button type="button"
                                                                                                class="Polaris-ActionList__Item"
                                                                                                role="menuitem">
                                                                                                <div class="Polaris-Inline"
                                                                                                    style="--pc-inline-block-align:center; --pc-inline-wrap:wrap; --pc-inline-gap-xs:var(--p-space-4);">
                                                                                                    <span
                                                                                                        class="Polaris-ActionList__Text">Noam</span>
                                                                                                </div>
                                                                                            </button>
                                                                                        </li>
                                                                                        <li role="presentation">
                                                                                            <button type="button"
                                                                                                class="Polaris-ActionList__Item"
                                                                                                role="menuitem">
                                                                                                <div class="Polaris-Inline"
                                                                                                    style="--pc-inline-block-align:center; --pc-inline-wrap:wrap; --pc-inline-gap-xs:var(--p-space-4);">
                                                                                                    <span
                                                                                                        class="Polaris-ActionList__Text">etc.</span>
                                                                                                </div>
                                                                                            </button>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </th>
                                                                <th class="Polaris-IndexTable__TableHeading  Polaris-IndexTable__TableHeading--unselectable "
                                                                    style="text-align: center;"
                                                                    data-index-table-heading="true">
                                                                    <span
                                                                        class="Polaris-Text--root Polaris-Text--block Polaris-Text--end">Action</span>
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <script>
                                                        $(document).ready(function() {
                                                            $(".date_created_dropdown").click(function() {
                                                                $(this).parent(
                                                                    '.Polaris-IndexTable__TableHeading '
                                                                ).find(
                                                                    ".date_created_model").toggle(
                                                                    "date_created_open")
                                                            })

                                                        })
                                                        </script>
                                                        <tbody>
                                                            <tr
                                                                class="Polaris-IndexTable__TableRow Polaris-IndexTable__TableRow--unclickable">
                                                                <td class="Polaris-IndexTable__TableCell">
                                                                    <div class="table_block_img">
                                                                        <img src="images/Robotryx_brands.png">
                                                                    </div>
                                                                </td>
                                                                <td class="Polaris-IndexTable__TableCell">03/11/2023
                                                                </td>
                                                                <td class="Polaris-IndexTable__TableCell">03/11/2023
                                                                </td>
                                                                <td class="Polaris-IndexTable__TableCell">ash</td>

                                                                <td class="Polaris-IndexTable__TableCell">
                                                                    <span
                                                                        class="Polaris-Text--root Polaris-Text--block Polaris-Text--end Polaris-Text--numeric">Ash</span>
                                                                </td>
                                                                <td class="Polaris-IndexTable__TableCell">
                                                                    <span
                                                                        class="Polaris-Text--root Polaris-Text--block Polaris-Text--end Polaris-Text--numeric">
                                                                        <div class="d-flex fb-track-all-button-">
                                                                            <div class="fb-track-edit-button">
                                                                                <div>
                                                                                    <img
                                                                                        src="images/edit_model_btn.png">
                                                                                </div>
                                                                            </div>
                                                                            <div class="fb-track-deleted-button">
                                                                                <div class="class_btn_click">
                                                                                    <img
                                                                                        src="images/deleted_model_btn.png">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </span>
                                                                </td>
                                                            </tr>
                                                            <tr
                                                                class="Polaris-IndexTable__TableRow Polaris-IndexTable__TableRow--unclickable">
                                                                <td class="Polaris-IndexTable__TableCell">
                                                                    <div class="table_block_img">
                                                                        <img src="images/Robotryx_brands.png">
                                                                    </div>
                                                                </td>
                                                                <td class="Polaris-IndexTable__TableCell">03/11/2023
                                                                </td>
                                                                <td class="Polaris-IndexTable__TableCell">03/11/2023
                                                                </td>
                                                                <td class="Polaris-IndexTable__TableCell">ash</td>

                                                                <td class="Polaris-IndexTable__TableCell">
                                                                    <span
                                                                        class="Polaris-Text--root Polaris-Text--block Polaris-Text--end Polaris-Text--numeric">Ash</span>
                                                                </td>
                                                                <td class="Polaris-IndexTable__TableCell">
                                                                    <span
                                                                        class="Polaris-Text--root Polaris-Text--block Polaris-Text--end Polaris-Text--numeric">
                                                                        <div class="d-flex fb-track-all-button-">
                                                                            <div class="fb-track-edit-button">
                                                                                <div>
                                                                                    <img
                                                                                        src="images/edit_model_btn.png">
                                                                                </div>
                                                                            </div>
                                                                            <div class="fb-track-deleted-button">
                                                                                <div class="class_btn_click">
                                                                                    <img
                                                                                        src="images/deleted_model_btn.png">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </span>
                                                                </td>
                                                            </tr>
                                                            <tr
                                                                class="Polaris-IndexTable__TableRow Polaris-IndexTable__TableRow--unclickable">
                                                                <td class="Polaris-IndexTable__TableCell">
                                                                    <div class="table_block_img">
                                                                        <img src="images/Robotryx_brands.png">
                                                                    </div>
                                                                </td>
                                                                <td class="Polaris-IndexTable__TableCell">03/11/2023
                                                                </td>
                                                                <td class="Polaris-IndexTable__TableCell">03/11/2023
                                                                </td>
                                                                <td class="Polaris-IndexTable__TableCell">ash</td>

                                                                <td class="Polaris-IndexTable__TableCell">
                                                                    <span
                                                                        class="Polaris-Text--root Polaris-Text--block Polaris-Text--end Polaris-Text--numeric">Ash</span>
                                                                </td>
                                                                <td class="Polaris-IndexTable__TableCell">
                                                                    <span
                                                                        class="Polaris-Text--root Polaris-Text--block Polaris-Text--end Polaris-Text--numeric">
                                                                        <div class="d-flex fb-track-all-button-">
                                                                            <div class="fb-track-edit-button">
                                                                                <div>
                                                                                    <img
                                                                                        src="images/edit_model_btn.png">
                                                                                </div>
                                                                            </div>
                                                                            <div class="fb-track-deleted-button">
                                                                                <div class="class_btn_click">
                                                                                    <img
                                                                                        src="images/deleted_model_btn.png">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </span>
                                                                </td>
                                                            </tr>
                                                            <tr
                                                                class="Polaris-IndexTable__TableRow Polaris-IndexTable__TableRow--unclickable">
                                                                <td class="Polaris-IndexTable__TableCell">
                                                                    <div class="table_block_img">
                                                                        <img src="images/Robotryx_brands.png">
                                                                    </div>
                                                                </td>
                                                                <td class="Polaris-IndexTable__TableCell">03/11/2023
                                                                </td>
                                                                <td class="Polaris-IndexTable__TableCell">03/11/2023
                                                                </td>
                                                                <td class="Polaris-IndexTable__TableCell">ash</td>

                                                                <td class="Polaris-IndexTable__TableCell">
                                                                    <span
                                                                        class="Polaris-Text--root Polaris-Text--block Polaris-Text--end Polaris-Text--numeric">Ash</span>
                                                                </td>
                                                                <td class="Polaris-IndexTable__TableCell">
                                                                    <span
                                                                        class="Polaris-Text--root Polaris-Text--block Polaris-Text--end Polaris-Text--numeric">
                                                                        <div class="d-flex fb-track-all-button-">
                                                                            <div class="fb-track-edit-button">
                                                                                <div>
                                                                                    <img
                                                                                        src="images/edit_model_btn.png">
                                                                                </div>
                                                                            </div>
                                                                            <div class="fb-track-deleted-button">
                                                                                <div class="class_btn_click">
                                                                                    <img
                                                                                        src="images/deleted_model_btn.png">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </span>
                                                                </td>
                                                            </tr>
                                                            <tr
                                                                class="Polaris-IndexTable__TableRow Polaris-IndexTable__TableRow--unclickable">
                                                                <td class="Polaris-IndexTable__TableCell">
                                                                    <div class="table_block_img">
                                                                        <img src="images/Robotryx_brands.png">
                                                                    </div>
                                                                </td>
                                                                <td class="Polaris-IndexTable__TableCell">03/11/2023
                                                                </td>
                                                                <td class="Polaris-IndexTable__TableCell">03/11/2023
                                                                </td>
                                                                <td class="Polaris-IndexTable__TableCell">ash</td>

                                                                <td class="Polaris-IndexTable__TableCell">
                                                                    <span
                                                                        class="Polaris-Text--root Polaris-Text--block Polaris-Text--end Polaris-Text--numeric">Ash</span>
                                                                </td>
                                                                <td class="Polaris-IndexTable__TableCell">
                                                                    <span
                                                                        class="Polaris-Text--root Polaris-Text--block Polaris-Text--end Polaris-Text--numeric">
                                                                        <div class="d-flex fb-track-all-button-">
                                                                            <div class="fb-track-edit-button">
                                                                                <div>
                                                                                    <img
                                                                                        src="images/edit_model_btn.png">
                                                                                </div>
                                                                            </div>
                                                                            <div class="fb-track-deleted-button">
                                                                                <div class="class_btn_click">
                                                                                    <img
                                                                                        src="images/deleted_model_btn.png">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </span>
                                                                </td>
                                                            </tr>
                                                            <tr
                                                                class="Polaris-IndexTable__TableRow Polaris-IndexTable__TableRow--unclickable">
                                                                <td class="Polaris-IndexTable__TableCell">
                                                                    <div class="table_block_img">
                                                                        <img src="images/Robotryx_brands.png">
                                                                    </div>
                                                                </td>
                                                                <td class="Polaris-IndexTable__TableCell">03/11/2023
                                                                </td>
                                                                <td class="Polaris-IndexTable__TableCell">03/11/2023
                                                                </td>
                                                                <td class="Polaris-IndexTable__TableCell">ash</td>

                                                                <td class="Polaris-IndexTable__TableCell">
                                                                    <span
                                                                        class="Polaris-Text--root Polaris-Text--block Polaris-Text--end Polaris-Text--numeric">Ash</span>
                                                                </td>
                                                                <td class="Polaris-IndexTable__TableCell">
                                                                    <span
                                                                        class="Polaris-Text--root Polaris-Text--block Polaris-Text--end Polaris-Text--numeric">
                                                                        <div class="d-flex fb-track-all-button-">
                                                                            <div class="fb-track-edit-button">
                                                                                <div>
                                                                                    <img
                                                                                        src="images/edit_model_btn.png">
                                                                                </div>
                                                                            </div>
                                                                            <div class="fb-track-deleted-button">
                                                                                <div class="class_btn_click">
                                                                                    <img
                                                                                        src="images/deleted_model_btn.png">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </span>
                                                                </td>
                                                            </tr>
                                                            <tr
                                                                class="Polaris-IndexTable__TableRow Polaris-IndexTable__TableRow--unclickable">
                                                                <td class="Polaris-IndexTable__TableCell">
                                                                    <div class="table_block_img">
                                                                        <img src="images/Robotryx_brands.png">
                                                                    </div>
                                                                </td>
                                                                <td class="Polaris-IndexTable__TableCell">03/11/2023
                                                                </td>
                                                                <td class="Polaris-IndexTable__TableCell">03/11/2023
                                                                </td>
                                                                <td class="Polaris-IndexTable__TableCell">ash</td>

                                                                <td class="Polaris-IndexTable__TableCell">
                                                                    <span
                                                                        class="Polaris-Text--root Polaris-Text--block Polaris-Text--end Polaris-Text--numeric">Ash</span>
                                                                </td>
                                                                <td class="Polaris-IndexTable__TableCell">
                                                                    <span
                                                                        class="Polaris-Text--root Polaris-Text--block Polaris-Text--end Polaris-Text--numeric">
                                                                        <div class="d-flex fb-track-all-button-">
                                                                            <div class="fb-track-edit-button">
                                                                                <div>
                                                                                    <img
                                                                                        src="images/edit_model_btn.png">
                                                                                </div>
                                                                            </div>
                                                                            <div class="fb-track-deleted-button">
                                                                                <div class="class_btn_click">
                                                                                    <img
                                                                                        src="images/deleted_model_btn.png">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </span>
                                                                </td>
                                                            </tr>
                                                            <tr
                                                                class="Polaris-IndexTable__TableRow Polaris-IndexTable__TableRow--unclickable">
                                                                <td class="Polaris-IndexTable__TableCell">
                                                                    <div class="table_block_img">
                                                                        <img src="images/Robotryx_brands.png">
                                                                    </div>
                                                                </td>
                                                                <td class="Polaris-IndexTable__TableCell">03/11/2023
                                                                </td>
                                                                <td class="Polaris-IndexTable__TableCell">03/11/2023
                                                                </td>
                                                                <td class="Polaris-IndexTable__TableCell">ash</td>

                                                                <td class="Polaris-IndexTable__TableCell">
                                                                    <span
                                                                        class="Polaris-Text--root Polaris-Text--block Polaris-Text--end Polaris-Text--numeric">Ash</span>
                                                                </td>
                                                                <td class="Polaris-IndexTable__TableCell">
                                                                    <span
                                                                        class="Polaris-Text--root Polaris-Text--block Polaris-Text--end Polaris-Text--numeric">
                                                                        <div class="d-flex fb-track-all-button-">
                                                                            <div class="fb-track-edit-button">
                                                                                <div>
                                                                                    <img
                                                                                        src="images/edit_model_btn.png">
                                                                                </div>
                                                                            </div>
                                                                            <div class="fb-track-deleted-button">
                                                                                <div class="class_btn_click">
                                                                                    <img
                                                                                        src="images/deleted_model_btn.png">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </span>
                                                                </td>
                                                            </tr>
                                                            <tr
                                                                class="Polaris-IndexTable__TableRow Polaris-IndexTable__TableRow--unclickable">
                                                                <td class="Polaris-IndexTable__TableCell">
                                                                    <div class="table_block_img">
                                                                        <img src="images/Robotryx_brands.png">
                                                                    </div>
                                                                </td>
                                                                <td class="Polaris-IndexTable__TableCell">03/11/2023
                                                                </td>
                                                                <td class="Polaris-IndexTable__TableCell">03/11/2023
                                                                </td>
                                                                <td class="Polaris-IndexTable__TableCell">ash</td>

                                                                <td class="Polaris-IndexTable__TableCell">
                                                                    <span
                                                                        class="Polaris-Text--root Polaris-Text--block Polaris-Text--end Polaris-Text--numeric">Ash</span>
                                                                </td>
                                                                <td class="Polaris-IndexTable__TableCell">
                                                                    <span
                                                                        class="Polaris-Text--root Polaris-Text--block Polaris-Text--end Polaris-Text--numeric">
                                                                        <div class="d-flex fb-track-all-button-">
                                                                            <div class="fb-track-edit-button">
                                                                                <div>
                                                                                    <img
                                                                                        src="images/edit_model_btn.png">
                                                                                </div>
                                                                            </div>
                                                                            <div class="fb-track-deleted-button">
                                                                                <div class="class_btn_click">
                                                                                    <img
                                                                                        src="images/deleted_model_btn.png">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </span>
                                                                </td>
                                                            </tr>
                                                            <tr
                                                                class="Polaris-IndexTable__TableRow Polaris-IndexTable__TableRow--unclickable">
                                                                <td class="Polaris-IndexTable__TableCell">
                                                                    <div class="table_block_img">
                                                                        <img src="images/Robotryx_brands.png">
                                                                    </div>
                                                                </td>
                                                                <td class="Polaris-IndexTable__TableCell">03/11/2023
                                                                </td>
                                                                <td class="Polaris-IndexTable__TableCell">03/11/2023
                                                                </td>
                                                                <td class="Polaris-IndexTable__TableCell">ash</td>

                                                                <td class="Polaris-IndexTable__TableCell">
                                                                    <span
                                                                        class="Polaris-Text--root Polaris-Text--block Polaris-Text--end Polaris-Text--numeric">Ash</span>
                                                                </td>
                                                                <td class="Polaris-IndexTable__TableCell">
                                                                    <span
                                                                        class="Polaris-Text--root Polaris-Text--block Polaris-Text--end Polaris-Text--numeric">
                                                                        <div class="d-flex fb-track-all-button-">
                                                                            <div class="fb-track-edit-button">
                                                                                <div>
                                                                                    <img
                                                                                        src="images/edit_model_btn.png">
                                                                                </div>
                                                                            </div>
                                                                            <div class="fb-track-deleted-button">
                                                                                <div class="class_btn_click">
                                                                                    <img
                                                                                        src="images/deleted_model_btn.png">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </span>
                                                                </td>
                                                            </tr>




                                                        </tbody>
                                                    </table>

                                                </div>
                                                <div class="Polaris-DataTable__Footer" style="background-color: #fff;">
                                                    <div class="pagination_section">
                                                        <nav aria-label="Pagination">
                                                            <div class="Polaris-ButtonGroup Polaris-ButtonGroup--segmented"
                                                                data-buttongroup-segmented="true">
                                                                <div class="Polaris-ButtonGroup__Item">
                                                                    <button id="previousURL"
                                                                        class="Polaris-Button Polaris-Button--outline Polaris-Button--iconOnly"
                                                                        aria-label="Previous" type="button">
                                                                        <span class="Polaris-Button__Content">
                                                                            <span class="Polaris-Button__Icon">
                                                                                <span class="Polaris-Icon">
                                                                                    <span
                                                                                        class="Polaris-Text--root Polaris-Text--visuallyHidden">
                                                                                    </span>
                                                                                    <svg viewBox="0 0 20 20"
                                                                                        class="Polaris-Icon__Svg"
                                                                                        focusable="false"
                                                                                        aria-hidden="true">
                                                                                        <path
                                                                                            d="M12 16a.997.997 0 0 1-.707-.293l-5-5a.999.999 0 0 1 0-1.414l5-5a.999.999 0 1 1 1.414 1.414l-4.293 4.293 4.293 4.293a.999.999 0 0 1-.707 1.707z">
                                                                                        </path>
                                                                                    </svg>
                                                                                </span>
                                                                            </span>
                                                                        </span>
                                                                    </button>
                                                                </div>
                                                                <div class="Polaris-ButtonGroup__Item">
                                                                    <button id="nextURL"
                                                                        class="Polaris-Button Polaris-Button--outline Polaris-Button--iconOnly"
                                                                        aria-label="Next" type="button">
                                                                        <span class="Polaris-Button__Content">
                                                                            <span class="Polaris-Button__Icon">
                                                                                <span class="Polaris-Icon">
                                                                                    <span
                                                                                        class="Polaris-Text--root Polaris-Text--visuallyHidden">
                                                                                    </span>
                                                                                    <svg viewBox="0 0 20 20"
                                                                                        class="Polaris-Icon__Svg"
                                                                                        focusable="false"
                                                                                        aria-hidden="true">
                                                                                        <path
                                                                                            d="M8 16a.999.999 0 0 1-.707-1.707l4.293-4.293-4.293-4.293a.999.999 0 1 1 1.414-1.414l5 5a.999.999 0 0 1 0 1.414l-5 5a.997.997 0 0 1-.707.293z">
                                                                                        </path>
                                                                                    </svg>
                                                                                </span>
                                                                            </span>
                                                                        </span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </nav>
                                                    </div>
                                                </div>
                                                <div>
                                                </div>
                                            </div>
                                            <div class="Polaris-IndexTable__ScrollBarContainer Polaris-IndexTable--scrollBarContainerHidden"
                                                style="border-top:unset">
                                                <div class="Polaris-IndexTable__ScrollBar"
                                                    style="--pc-index-table-scroll-bar-content-width:740px;">
                                                    <div class="Polaris-IndexTable__ScrollBarContent">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div></div>











                                    <div>
                                        <div id="PolarisPortalsContainer"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="Polaris-Tabs__Panel Polaris-Tabs__Panel--hidden tabcontent1 " id="MarketPlace"
                            role="tabpanel" aria-labelledby="accepts-marketing-fitted-2" tabindex="-1">
                            <div class="table_block">
                                <div class="Polaris-LegacyCard">
                                    <div class="Polaris-IndexTable">
                                        <div class="Polaris-IndexTable__IndexTableWrapper">
                                            <div class="Polaris-IndexTable__StickyTable" role="presentation">
                                                <div>
                                                    <div>
                                                    </div>
                                                    <div>
                                                        <div class="Polaris-IndexTable__StickyTableHeader">
                                                            <div class="Polaris-IndexTable__StickyTableColumnHeader">
                                                                <div class="Polaris-IndexTable__TableHeading"
                                                                    data-index-table-sticky-heading="true">
                                                                    <div
                                                                        class="Polaris-LegacyStack Polaris-LegacyStack--spacingNone Polaris-LegacyStack--alignmentCenter Polaris-LegacyStack--noWrap">
                                                                        <div class="Polaris-LegacyStack__Item">
                                                                            <div
                                                                                class="Polaris-IndexTable__FirstStickyHeaderElement">
                                                                                Name
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="Polaris-IndexTable__StickyTableHeadings">
                                                                <div class="Polaris-IndexTable__TableHeading "
                                                                    data-index-table-sticky-heading="true">Name
                                                                </div>
                                                                <div class="Polaris-IndexTable__TableHeading"
                                                                    data-index-table-sticky-heading="true">Location
                                                                </div>
                                                                <div class="Polaris-IndexTable__TableHeading"
                                                                    data-index-table-sticky-heading="true">
                                                                    <span
                                                                        class="Polaris-Text--root Polaris-Text--block Polaris-Text--end">Order
                                                                        count</span>
                                                                </div>
                                                                <div class="Polaris-IndexTable__TableHeading"
                                                                    data-index-table-sticky-heading="true">
                                                                    <span
                                                                        class="Polaris-Text--root Polaris-Text--block Polaris-Text--end">Amount
                                                                        spent</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="Polaris-IndexTable-ScrollContainer">
                                                <div>

                                                </div>
                                                <table
                                                    class="Polaris-IndexTable__Table Polaris-IndexTable__Table--unselectable Polaris-IndexTable__Table--sticky">
                                                    <thead>
                                                        <tr>
                                                            <th class="Polaris-IndexTable__TableHeading "
                                                                data-index-table-heading="true">
                                                                Channels</th>
                                                            <th class="Polaris-IndexTable__TableHeading "
                                                                data-index-table-heading="true" tabindex="0"
                                                                aria-controls="Polarispopover1"
                                                                aria-owns="Polarispopover1" aria-expanded="true">

                                                                <div class="dropdown_pop_up_icon date_created_dropdown">
                                                                    <p tabindex="0" aria-controls="Polarispopover1"
                                                                        aria-owns="Polarispopover1"
                                                                        aria-expanded="true">
                                                                        <span class="Polaris-Button__Content">
                                                                            <span class="Polaris-Button__Text">Date
                                                                                Created</span>
                                                                            <span class="Polaris-Button__Icon">

                                                                            </span>
                                                                        </span>
                                                                    </p>
                                                                    <div class="drop_icon">
                                                                        <span class="Polaris-Icon">
                                                                            <span
                                                                                class="Polaris-Text--root Polaris-Text--visuallyHidden"></span>
                                                                            <svg viewBox="0 0 20 20"
                                                                                class="Polaris-Icon__Svg"
                                                                                focusable="false" aria-hidden="true">
                                                                                <path
                                                                                    d="M13.098 8h-6.196c-.751 0-1.172.754-.708 1.268l3.098 3.432c.36.399 1.055.399 1.416 0l3.098-3.433c.464-.513.043-1.267-.708-1.267Z">
                                                                                </path>
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <div tabindex="-1"
                                                                        class="Polaris-Popover__Content date_created_model">
                                                                        <div class="Polaris-Popover__Pane Polaris-Scrollable "
                                                                            data-polaris-scrollable="true">
                                                                            <div class="Polaris-Box">
                                                                                <ul class="Polaris-Box Polaris-Box--listReset"
                                                                                    role="menu" tabindex="-1"
                                                                                    style="--pc-box-padding-block-end-xs:var(--p-space-2); --pc-box-padding-block-start-xs:var(--p-space-2); --pc-box-padding-inline-start-xs:var(--p-space-2); --pc-box-padding-inline-end-xs:var(--p-space-2);">
                                                                                    <li role="presentation">
                                                                                        <button type="button"
                                                                                            class="Polaris-ActionList__Item"
                                                                                            role="menuitem">
                                                                                            <div class="Polaris-Inline"
                                                                                                style="--pc-inline-block-align:center; --pc-inline-wrap:wrap; --pc-inline-gap-xs:var(--p-space-4);">
                                                                                                <span
                                                                                                    class="Polaris-ActionList__Text">Newset
                                                                                                    to oldest</span>
                                                                                            </div>
                                                                                        </button>
                                                                                    </li>
                                                                                    <li role="presentation">
                                                                                        <button type="button"
                                                                                            class="Polaris-ActionList__Item"
                                                                                            role="menuitem">
                                                                                            <div class="Polaris-Inline"
                                                                                                style="--pc-inline-block-align:center; --pc-inline-wrap:wrap; --pc-inline-gap-xs:var(--p-space-4);">
                                                                                                <span
                                                                                                    class="Polaris-ActionList__Text">Oldest
                                                                                                    to newset</span>
                                                                                            </div>
                                                                                        </button>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </th>

                                                            <th class="Polaris-IndexTable__TableHeading  "
                                                                data-index-table-heading="true">
                                                                <div class="dropdown_pop_up_icon date_created_dropdown">
                                                                    <p tabindex="0" aria-controls="Polarispopover1"
                                                                        aria-owns="Polarispopover1"
                                                                        aria-expanded="true">
                                                                        <span class="Polaris-Button__Content">
                                                                            <span class="Polaris-Button__Text">Last
                                                                                Modified</span>
                                                                            <span class="Polaris-Button__Icon">

                                                                            </span>
                                                                        </span>
                                                                    </p>
                                                                    <div class="drop_icon">
                                                                        <span class="Polaris-Icon">
                                                                            <span
                                                                                class="Polaris-Text--root Polaris-Text--visuallyHidden"></span>
                                                                            <svg viewBox="0 0 20 20"
                                                                                class="Polaris-Icon__Svg"
                                                                                focusable="false" aria-hidden="true">
                                                                                <path
                                                                                    d="M13.098 8h-6.196c-.751 0-1.172.754-.708 1.268l3.098 3.432c.36.399 1.055.399 1.416 0l3.098-3.433c.464-.513.043-1.267-.708-1.267Z">
                                                                                </path>
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <div tabindex="-1"
                                                                        class="Polaris-Popover__Content date_created_model">
                                                                        <div class="Polaris-Popover__Pane Polaris-Scrollable "
                                                                            data-polaris-scrollable="true">
                                                                            <div class="Polaris-Box">
                                                                                <ul class="Polaris-Box Polaris-Box--listReset"
                                                                                    role="menu" tabindex="-1"
                                                                                    style="--pc-box-padding-block-end-xs:var(--p-space-2); --pc-box-padding-block-start-xs:var(--p-space-2); --pc-box-padding-inline-start-xs:var(--p-space-2); --pc-box-padding-inline-end-xs:var(--p-space-2);">
                                                                                    <li role="presentation">
                                                                                        <button type="button"
                                                                                            class="Polaris-ActionList__Item"
                                                                                            role="menuitem">
                                                                                            <div class="Polaris-Inline"
                                                                                                style="--pc-inline-block-align:center; --pc-inline-wrap:wrap; --pc-inline-gap-xs:var(--p-space-4);">
                                                                                                <span
                                                                                                    class="Polaris-ActionList__Text">Newset
                                                                                                    to oldest</span>
                                                                                            </div>
                                                                                        </button>
                                                                                    </li>
                                                                                    <li role="presentation">
                                                                                        <button type="button"
                                                                                            class="Polaris-ActionList__Item"
                                                                                            role="menuitem">
                                                                                            <div class="Polaris-Inline"
                                                                                                style="--pc-inline-block-align:center; --pc-inline-wrap:wrap; --pc-inline-gap-xs:var(--p-space-4);">
                                                                                                <span
                                                                                                    class="Polaris-ActionList__Text">Oldest
                                                                                                    to newset</span>
                                                                                            </div>
                                                                                        </button>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </th>
                                                            <th class="Polaris-IndexTable__TableHeading  "
                                                                data-index-table-heading="true">
                                                                <div class="dropdown_pop_up_icon date_created_dropdown">
                                                                    <p tabindex="0" aria-controls="Polarispopover1"
                                                                        aria-owns="Polarispopover1"
                                                                        aria-expanded="true">
                                                                        <span class="Polaris-Button__Content">
                                                                            <span class="Polaris-Button__Text">Created
                                                                                By</span>
                                                                            <span class="Polaris-Button__Icon">

                                                                            </span>
                                                                        </span>
                                                                    </p>
                                                                    <div class="drop_icon">
                                                                        <span class="Polaris-Icon">
                                                                            <span
                                                                                class="Polaris-Text--root Polaris-Text--visuallyHidden"></span>
                                                                            <svg viewBox="0 0 20 20"
                                                                                class="Polaris-Icon__Svg"
                                                                                focusable="false" aria-hidden="true">
                                                                                <path
                                                                                    d="M13.098 8h-6.196c-.751 0-1.172.754-.708 1.268l3.098 3.432c.36.399 1.055.399 1.416 0l3.098-3.433c.464-.513.043-1.267-.708-1.267Z">
                                                                                </path>
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <div tabindex="-1"
                                                                        class="Polaris-Popover__Content date_created_model">
                                                                        <div class="Polaris-Popover__Pane Polaris-Scrollable "
                                                                            data-polaris-scrollable="true">
                                                                            <div class="Polaris-Box">
                                                                                <ul class="Polaris-Box Polaris-Box--listReset"
                                                                                    role="menu" tabindex="-1"
                                                                                    style="--pc-box-padding-block-end-xs:var(--p-space-2); --pc-box-padding-block-start-xs:var(--p-space-2); --pc-box-padding-inline-start-xs:var(--p-space-2); --pc-box-padding-inline-end-xs:var(--p-space-2);">
                                                                                    <li role="presentation">
                                                                                        <button type="button"
                                                                                            class="Polaris-ActionList__Item"
                                                                                            role="menuitem">
                                                                                            <div class="Polaris-Inline"
                                                                                                style="--pc-inline-block-align:center; --pc-inline-wrap:wrap; --pc-inline-gap-xs:var(--p-space-4);">
                                                                                                <span
                                                                                                    class="Polaris-ActionList__Text">Ash</span>
                                                                                            </div>
                                                                                        </button>
                                                                                    </li>
                                                                                    <li role="presentation">
                                                                                        <button type="button"
                                                                                            class="Polaris-ActionList__Item"
                                                                                            role="menuitem">
                                                                                            <div class="Polaris-Inline"
                                                                                                style="--pc-inline-block-align:center; --pc-inline-wrap:wrap; --pc-inline-gap-xs:var(--p-space-4);">
                                                                                                <span
                                                                                                    class="Polaris-ActionList__Text">Eduardo</span>
                                                                                            </div>
                                                                                        </button>
                                                                                    </li>
                                                                                    <li role="presentation">
                                                                                        <button type="button"
                                                                                            class="Polaris-ActionList__Item"
                                                                                            role="menuitem">
                                                                                            <div class="Polaris-Inline"
                                                                                                style="--pc-inline-block-align:center; --pc-inline-wrap:wrap; --pc-inline-gap-xs:var(--p-space-4);">
                                                                                                <span
                                                                                                    class="Polaris-ActionList__Text">Reine</span>
                                                                                            </div>
                                                                                        </button>
                                                                                    </li>
                                                                                    <li role="presentation">
                                                                                        <button type="button"
                                                                                            class="Polaris-ActionList__Item"
                                                                                            role="menuitem">
                                                                                            <div class="Polaris-Inline"
                                                                                                style="--pc-inline-block-align:center; --pc-inline-wrap:wrap; --pc-inline-gap-xs:var(--p-space-4);">
                                                                                                <span
                                                                                                    class="Polaris-ActionList__Text">Noam</span>
                                                                                            </div>
                                                                                        </button>
                                                                                    </li>
                                                                                    <li role="presentation">
                                                                                        <button type="button"
                                                                                            class="Polaris-ActionList__Item"
                                                                                            role="menuitem">
                                                                                            <div class="Polaris-Inline"
                                                                                                style="--pc-inline-block-align:center; --pc-inline-wrap:wrap; --pc-inline-gap-xs:var(--p-space-4);">
                                                                                                <span
                                                                                                    class="Polaris-ActionList__Text">etc.</span>
                                                                                            </div>
                                                                                        </button>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </th>
                                                            <th class="Polaris-IndexTable__TableHeading "
                                                                data-index-table-heading="true">
                                                                <div class="dropdown_pop_up_icon date_created_dropdown">
                                                                    <p tabindex="0" aria-controls="Polarispopover1"
                                                                        aria-owns="Polarispopover1"
                                                                        aria-expanded="true">
                                                                        <span class="Polaris-Button__Content">
                                                                            <span class="Polaris-Button__Text">Last
                                                                                Modified</span>
                                                                            <span class="Polaris-Button__Icon">

                                                                            </span>
                                                                        </span>
                                                                    </p>
                                                                    <div class="drop_icon">
                                                                        <span class="Polaris-Icon">
                                                                            <span
                                                                                class="Polaris-Text--root Polaris-Text--visuallyHidden"></span>
                                                                            <svg viewBox="0 0 20 20"
                                                                                class="Polaris-Icon__Svg"
                                                                                focusable="false" aria-hidden="true">
                                                                                <path
                                                                                    d="M13.098 8h-6.196c-.751 0-1.172.754-.708 1.268l3.098 3.432c.36.399 1.055.399 1.416 0l3.098-3.433c.464-.513.043-1.267-.708-1.267Z">
                                                                                </path>
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <div tabindex="-1"
                                                                        class="Polaris-Popover__Content date_created_model">
                                                                        <div class="Polaris-Popover__Pane Polaris-Scrollable "
                                                                            data-polaris-scrollable="true">
                                                                            <div class="Polaris-Box">
                                                                                <ul class="Polaris-Box Polaris-Box--listReset"
                                                                                    role="menu" tabindex="-1"
                                                                                    style="--pc-box-padding-block-end-xs:var(--p-space-2); --pc-box-padding-block-start-xs:var(--p-space-2); --pc-box-padding-inline-start-xs:var(--p-space-2); --pc-box-padding-inline-end-xs:var(--p-space-2);">
                                                                                    <li role="presentation">
                                                                                        <button type="button"
                                                                                            class="Polaris-ActionList__Item"
                                                                                            role="menuitem">
                                                                                            <div class="Polaris-Inline"
                                                                                                style="--pc-inline-block-align:center; --pc-inline-wrap:wrap; --pc-inline-gap-xs:var(--p-space-4);">
                                                                                                <span
                                                                                                    class="Polaris-ActionList__Text">Ash</span>
                                                                                            </div>
                                                                                        </button>
                                                                                    </li>
                                                                                    <li role="presentation">
                                                                                        <button type="button"
                                                                                            class="Polaris-ActionList__Item"
                                                                                            role="menuitem">
                                                                                            <div class="Polaris-Inline"
                                                                                                style="--pc-inline-block-align:center; --pc-inline-wrap:wrap; --pc-inline-gap-xs:var(--p-space-4);">
                                                                                                <span
                                                                                                    class="Polaris-ActionList__Text">Eduardo</span>
                                                                                            </div>
                                                                                        </button>
                                                                                    </li>
                                                                                    <li role="presentation">
                                                                                        <button type="button"
                                                                                            class="Polaris-ActionList__Item"
                                                                                            role="menuitem">
                                                                                            <div class="Polaris-Inline"
                                                                                                style="--pc-inline-block-align:center; --pc-inline-wrap:wrap; --pc-inline-gap-xs:var(--p-space-4);">
                                                                                                <span
                                                                                                    class="Polaris-ActionList__Text">Reine</span>
                                                                                            </div>
                                                                                        </button>
                                                                                    </li>
                                                                                    <li role="presentation">
                                                                                        <button type="button"
                                                                                            class="Polaris-ActionList__Item"
                                                                                            role="menuitem">
                                                                                            <div class="Polaris-Inline"
                                                                                                style="--pc-inline-block-align:center; --pc-inline-wrap:wrap; --pc-inline-gap-xs:var(--p-space-4);">
                                                                                                <span
                                                                                                    class="Polaris-ActionList__Text">Noam</span>
                                                                                            </div>
                                                                                        </button>
                                                                                    </li>
                                                                                    <li role="presentation">
                                                                                        <button type="button"
                                                                                            class="Polaris-ActionList__Item"
                                                                                            role="menuitem">
                                                                                            <div class="Polaris-Inline"
                                                                                                style="--pc-inline-block-align:center; --pc-inline-wrap:wrap; --pc-inline-gap-xs:var(--p-space-4);">
                                                                                                <span
                                                                                                    class="Polaris-ActionList__Text">etc.</span>
                                                                                            </div>
                                                                                        </button>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </th>
                                                            <th class="Polaris-IndexTable__TableHeading  Polaris-IndexTable__TableHeading--unselectable "
                                                                style="text-align: center;"
                                                                data-index-table-heading="true">
                                                                <span
                                                                    class="Polaris-Text--root Polaris-Text--block Polaris-Text--end">Action</span>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <script>
                                                    $(document).ready(function() {
                                                        $(".date_created_dropdown").click(function() {
                                                            $(this).parent(
                                                                '.Polaris-IndexTable__TableHeading '
                                                            ).find(
                                                                ".date_created_model").toggle(
                                                                "date_created_open")
                                                        })

                                                    })
                                                    </script>
                                                    <tbody>
                                                        <tr
                                                            class="Polaris-IndexTable__TableRow Polaris-IndexTable__TableRow--unclickable">
                                                            <td class="Polaris-IndexTable__TableCell">
                                                                <div class="table_block_img">
                                                                    <img src="images/amazon_market.png">
                                                                </div>
                                                            </td>
                                                            <td class="Polaris-IndexTable__TableCell">03/11/2023
                                                            </td>
                                                            <td class="Polaris-IndexTable__TableCell">03/11/2023
                                                            </td>
                                                            <td class="Polaris-IndexTable__TableCell">ash</td>

                                                            <td class="Polaris-IndexTable__TableCell">
                                                                <span
                                                                    class="Polaris-Text--root Polaris-Text--block Polaris-Text--end Polaris-Text--numeric">Ash</span>
                                                            </td>
                                                            <td class="Polaris-IndexTable__TableCell">
                                                                <span
                                                                    class="Polaris-Text--root Polaris-Text--block Polaris-Text--end Polaris-Text--numeric">
                                                                    <div class="d-flex fb-track-all-button-">
                                                                        <div class="fb-track-edit-button">
                                                                            <div>
                                                                                <img src="images/edit_model_btn.png">
                                                                            </div>
                                                                        </div>
                                                                        <div class="fb-track-deleted-button">
                                                                            <div class="class_deleted_btn">
                                                                                <img src="images/deleted_model_btn.png">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </span>
                                                            </td>
                                                        </tr>
                                                        <tr
                                                            class="Polaris-IndexTable__TableRow Polaris-IndexTable__TableRow--unclickable">
                                                            <td class="Polaris-IndexTable__TableCell">
                                                                <div class="table_block_img">
                                                                    <img src="images/amazon_market.png">
                                                                </div>
                                                            </td>
                                                            <td class="Polaris-IndexTable__TableCell">03/11/2023
                                                            </td>
                                                            <td class="Polaris-IndexTable__TableCell">03/11/2023
                                                            </td>
                                                            <td class="Polaris-IndexTable__TableCell">ash</td>

                                                            <td class="Polaris-IndexTable__TableCell">
                                                                <span
                                                                    class="Polaris-Text--root Polaris-Text--block Polaris-Text--end Polaris-Text--numeric">Ash</span>
                                                            </td>
                                                            <td class="Polaris-IndexTable__TableCell">
                                                                <span
                                                                    class="Polaris-Text--root Polaris-Text--block Polaris-Text--end Polaris-Text--numeric">
                                                                    <div class="d-flex fb-track-all-button-">
                                                                        <div class="fb-track-edit-button">
                                                                            <div>
                                                                                <img src="images/edit_model_btn.png">
                                                                            </div>
                                                                        </div>
                                                                        <div class="fb-track-deleted-button">
                                                                            <div class="class_deleted_btn">
                                                                                <img src="images/deleted_model_btn.png">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </span>
                                                            </td>
                                                        </tr>
                                                        <tr
                                                            class="Polaris-IndexTable__TableRow Polaris-IndexTable__TableRow--unclickable">
                                                            <td class="Polaris-IndexTable__TableCell">
                                                                <div class="table_block_img">
                                                                    <img src="images/amazon_market.png">
                                                                </div>
                                                            </td>
                                                            <td class="Polaris-IndexTable__TableCell">03/11/2023
                                                            </td>
                                                            <td class="Polaris-IndexTable__TableCell">03/11/2023
                                                            </td>
                                                            <td class="Polaris-IndexTable__TableCell">ash</td>

                                                            <td class="Polaris-IndexTable__TableCell">
                                                                <span
                                                                    class="Polaris-Text--root Polaris-Text--block Polaris-Text--end Polaris-Text--numeric">Ash</span>
                                                            </td>
                                                            <td class="Polaris-IndexTable__TableCell">
                                                                <span
                                                                    class="Polaris-Text--root Polaris-Text--block Polaris-Text--end Polaris-Text--numeric">
                                                                    <div class="d-flex fb-track-all-button-">
                                                                        <div class="fb-track-edit-button">
                                                                            <div>
                                                                                <img src="images/edit_model_btn.png">
                                                                            </div>
                                                                        </div>
                                                                        <div class="fb-track-deleted-button">
                                                                            <div class="class_deleted_btn">
                                                                                <img src="images/deleted_model_btn.png">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </span>
                                                            </td>
                                                        </tr>
                                                        <tr
                                                            class="Polaris-IndexTable__TableRow Polaris-IndexTable__TableRow--unclickable">
                                                            <td class="Polaris-IndexTable__TableCell">
                                                                <div class="table_block_img">
                                                                    <img src="images/amazon_market.png">
                                                                </div>
                                                            </td>
                                                            <td class="Polaris-IndexTable__TableCell">03/11/2023
                                                            </td>
                                                            <td class="Polaris-IndexTable__TableCell">03/11/2023
                                                            </td>
                                                            <td class="Polaris-IndexTable__TableCell">ash</td>

                                                            <td class="Polaris-IndexTable__TableCell">
                                                                <span
                                                                    class="Polaris-Text--root Polaris-Text--block Polaris-Text--end Polaris-Text--numeric">Ash</span>
                                                            </td>
                                                            <td class="Polaris-IndexTable__TableCell">
                                                                <span
                                                                    class="Polaris-Text--root Polaris-Text--block Polaris-Text--end Polaris-Text--numeric">
                                                                    <div class="d-flex fb-track-all-button-">
                                                                        <div class="fb-track-edit-button">
                                                                            <div>
                                                                                <img src="images/edit_model_btn.png">
                                                                            </div>
                                                                        </div>
                                                                        <div class="fb-track-deleted-button">
                                                                            <div class="class_deleted_btn">
                                                                                <img src="images/deleted_model_btn.png">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </span>
                                                            </td>
                                                        </tr>
                                                        <tr
                                                            class="Polaris-IndexTable__TableRow Polaris-IndexTable__TableRow--unclickable">
                                                            <td class="Polaris-IndexTable__TableCell">
                                                                <div class="table_block_img">
                                                                    <img src="images/amazon_market.png">
                                                                </div>
                                                            </td>
                                                            <td class="Polaris-IndexTable__TableCell">03/11/2023
                                                            </td>
                                                            <td class="Polaris-IndexTable__TableCell">03/11/2023
                                                            </td>
                                                            <td class="Polaris-IndexTable__TableCell">ash</td>

                                                            <td class="Polaris-IndexTable__TableCell">
                                                                <span
                                                                    class="Polaris-Text--root Polaris-Text--block Polaris-Text--end Polaris-Text--numeric">Ash</span>
                                                            </td>
                                                            <td class="Polaris-IndexTable__TableCell">
                                                                <span
                                                                    class="Polaris-Text--root Polaris-Text--block Polaris-Text--end Polaris-Text--numeric">
                                                                    <div class="d-flex fb-track-all-button-">
                                                                        <div class="fb-track-edit-button">
                                                                            <div>
                                                                                <img src="images/edit_model_btn.png">
                                                                            </div>
                                                                        </div>
                                                                        <div class="fb-track-deleted-button">
                                                                            <div class="class_deleted_btn">
                                                                                <img src="images/deleted_model_btn.png">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </span>
                                                            </td>
                                                        </tr>
                                                        <tr
                                                            class="Polaris-IndexTable__TableRow Polaris-IndexTable__TableRow--unclickable">
                                                            <td class="Polaris-IndexTable__TableCell">
                                                                <div class="table_block_img">
                                                                    <img src="images/amazon_market.png">
                                                                </div>
                                                            </td>
                                                            <td class="Polaris-IndexTable__TableCell">03/11/2023
                                                            </td>
                                                            <td class="Polaris-IndexTable__TableCell">03/11/2023
                                                            </td>
                                                            <td class="Polaris-IndexTable__TableCell">ash</td>

                                                            <td class="Polaris-IndexTable__TableCell">
                                                                <span
                                                                    class="Polaris-Text--root Polaris-Text--block Polaris-Text--end Polaris-Text--numeric">Ash</span>
                                                            </td>
                                                            <td class="Polaris-IndexTable__TableCell">
                                                                <span
                                                                    class="Polaris-Text--root Polaris-Text--block Polaris-Text--end Polaris-Text--numeric">
                                                                    <div class="d-flex fb-track-all-button-">
                                                                        <div class="fb-track-edit-button">
                                                                            <div>
                                                                                <img src="images/edit_model_btn.png">
                                                                            </div>
                                                                        </div>
                                                                        <div class="fb-track-deleted-button">
                                                                            <div class="class_deleted_btn">
                                                                                <img src="images/deleted_model_btn.png">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </span>
                                                            </td>
                                                        </tr>
                                                        <tr
                                                            class="Polaris-IndexTable__TableRow Polaris-IndexTable__TableRow--unclickable">
                                                            <td class="Polaris-IndexTable__TableCell">
                                                                <div class="table_block_img">
                                                                    <img src="images/amazon_market.png">
                                                                </div>
                                                            </td>
                                                            <td class="Polaris-IndexTable__TableCell">03/11/2023
                                                            </td>
                                                            <td class="Polaris-IndexTable__TableCell">03/11/2023
                                                            </td>
                                                            <td class="Polaris-IndexTable__TableCell">ash</td>

                                                            <td class="Polaris-IndexTable__TableCell">
                                                                <span
                                                                    class="Polaris-Text--root Polaris-Text--block Polaris-Text--end Polaris-Text--numeric">Ash</span>
                                                            </td>
                                                            <td class="Polaris-IndexTable__TableCell">
                                                                <span
                                                                    class="Polaris-Text--root Polaris-Text--block Polaris-Text--end Polaris-Text--numeric">
                                                                    <div class="d-flex fb-track-all-button-">
                                                                        <div class="fb-track-edit-button">
                                                                            <div>
                                                                                <img src="images/edit_model_btn.png">
                                                                            </div>
                                                                        </div>
                                                                        <div class="fb-track-deleted-button">
                                                                            <div class="class_deleted_btn">
                                                                                <img src="images/deleted_model_btn.png">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </span>
                                                            </td>
                                                        </tr>
                                                        <tr
                                                            class="Polaris-IndexTable__TableRow Polaris-IndexTable__TableRow--unclickable">
                                                            <td class="Polaris-IndexTable__TableCell">
                                                                <div class="table_block_img">
                                                                    <img src="images/amazon_market.png">
                                                                </div>
                                                            </td>
                                                            <td class="Polaris-IndexTable__TableCell">03/11/2023
                                                            </td>
                                                            <td class="Polaris-IndexTable__TableCell">03/11/2023
                                                            </td>
                                                            <td class="Polaris-IndexTable__TableCell">ash</td>

                                                            <td class="Polaris-IndexTable__TableCell">
                                                                <span
                                                                    class="Polaris-Text--root Polaris-Text--block Polaris-Text--end Polaris-Text--numeric">Ash</span>
                                                            </td>
                                                            <td class="Polaris-IndexTable__TableCell">
                                                                <span
                                                                    class="Polaris-Text--root Polaris-Text--block Polaris-Text--end Polaris-Text--numeric">
                                                                    <div class="d-flex fb-track-all-button-">
                                                                        <div class="fb-track-edit-button">
                                                                            <div>
                                                                                <img src="images/edit_model_btn.png">
                                                                            </div>
                                                                        </div>
                                                                        <div class="fb-track-deleted-button">
                                                                            <div class="class_deleted_btn">
                                                                                <img src="images/deleted_model_btn.png">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </span>
                                                            </td>
                                                        </tr>
                                                        <tr
                                                            class="Polaris-IndexTable__TableRow Polaris-IndexTable__TableRow--unclickable">
                                                            <td class="Polaris-IndexTable__TableCell">
                                                                <div class="table_block_img">
                                                                    <img src="images/amazon_market.png">
                                                                </div>
                                                            </td>
                                                            <td class="Polaris-IndexTable__TableCell">03/11/2023
                                                            </td>
                                                            <td class="Polaris-IndexTable__TableCell">03/11/2023
                                                            </td>
                                                            <td class="Polaris-IndexTable__TableCell">ash</td>

                                                            <td class="Polaris-IndexTable__TableCell">
                                                                <span
                                                                    class="Polaris-Text--root Polaris-Text--block Polaris-Text--end Polaris-Text--numeric">Ash</span>
                                                            </td>
                                                            <td class="Polaris-IndexTable__TableCell">
                                                                <span
                                                                    class="Polaris-Text--root Polaris-Text--block Polaris-Text--end Polaris-Text--numeric">
                                                                    <div class="d-flex fb-track-all-button-">
                                                                        <div class="fb-track-edit-button">
                                                                            <div>
                                                                                <img src="images/edit_model_btn.png">
                                                                            </div>
                                                                        </div>
                                                                        <div class="fb-track-deleted-button">
                                                                            <div class="class_deleted_btn">
                                                                                <img src="images/deleted_model_btn.png">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </span>
                                                            </td>
                                                        </tr>
                                                        <tr
                                                            class="Polaris-IndexTable__TableRow Polaris-IndexTable__TableRow--unclickable">
                                                            <td class="Polaris-IndexTable__TableCell">
                                                                <div class="table_block_img">
                                                                    <img src="images/amazon_market.png">
                                                                </div>
                                                            </td>
                                                            <td class="Polaris-IndexTable__TableCell">03/11/2023
                                                            </td>
                                                            <td class="Polaris-IndexTable__TableCell">03/11/2023
                                                            </td>
                                                            <td class="Polaris-IndexTable__TableCell">ash</td>

                                                            <td class="Polaris-IndexTable__TableCell">
                                                                <span
                                                                    class="Polaris-Text--root Polaris-Text--block Polaris-Text--end Polaris-Text--numeric">Ash</span>
                                                            </td>
                                                            <td class="Polaris-IndexTable__TableCell">
                                                                <span
                                                                    class="Polaris-Text--root Polaris-Text--block Polaris-Text--end Polaris-Text--numeric">
                                                                    <div class="d-flex fb-track-all-button-">
                                                                        <div class="fb-track-edit-button">
                                                                            <div>
                                                                                <img src="images/edit_model_btn.png">
                                                                            </div>
                                                                        </div>
                                                                        <div class="fb-track-deleted-button">
                                                                            <div class="class_deleted_btn">
                                                                                <img src="images/deleted_model_btn.png">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </span>
                                                            </td>
                                                        </tr>




                                                    </tbody>
                                                </table>

                                            </div>
                                            <div class="Polaris-DataTable__Footer" style="background-color: #fff;">
                                                <div class="pagination_section">
                                                    <nav aria-label="Pagination">
                                                        <div class="Polaris-ButtonGroup Polaris-ButtonGroup--segmented"
                                                            data-buttongroup-segmented="true">
                                                            <div class="Polaris-ButtonGroup__Item">
                                                                <button id="previousURL"
                                                                    class="Polaris-Button Polaris-Button--outline Polaris-Button--iconOnly"
                                                                    aria-label="Previous" type="button">
                                                                    <span class="Polaris-Button__Content">
                                                                        <span class="Polaris-Button__Icon">
                                                                            <span class="Polaris-Icon">
                                                                                <span
                                                                                    class="Polaris-Text--root Polaris-Text--visuallyHidden">
                                                                                </span>
                                                                                <svg viewBox="0 0 20 20"
                                                                                    class="Polaris-Icon__Svg"
                                                                                    focusable="false"
                                                                                    aria-hidden="true">
                                                                                    <path
                                                                                        d="M12 16a.997.997 0 0 1-.707-.293l-5-5a.999.999 0 0 1 0-1.414l5-5a.999.999 0 1 1 1.414 1.414l-4.293 4.293 4.293 4.293a.999.999 0 0 1-.707 1.707z">
                                                                                    </path>
                                                                                </svg>
                                                                            </span>
                                                                        </span>
                                                                    </span>
                                                                </button>
                                                            </div>
                                                            <div class="Polaris-ButtonGroup__Item">
                                                                <button id="nextURL"
                                                                    class="Polaris-Button Polaris-Button--outline Polaris-Button--iconOnly"
                                                                    aria-label="Next" type="button">
                                                                    <span class="Polaris-Button__Content">
                                                                        <span class="Polaris-Button__Icon">
                                                                            <span class="Polaris-Icon">
                                                                                <span
                                                                                    class="Polaris-Text--root Polaris-Text--visuallyHidden">
                                                                                </span>
                                                                                <svg viewBox="0 0 20 20"
                                                                                    class="Polaris-Icon__Svg"
                                                                                    focusable="false"
                                                                                    aria-hidden="true">
                                                                                    <path
                                                                                        d="M8 16a.999.999 0 0 1-.707-1.707l4.293-4.293-4.293-4.293a.999.999 0 1 1 1.414-1.414l5 5a.999.999 0 0 1 0 1.414l-5 5a.997.997 0 0 1-.707.293z">
                                                                                    </path>
                                                                                </svg>
                                                                            </span>
                                                                        </span>
                                                                    </span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </nav>
                                                </div>
                                            </div>
                                            <div>
                                            </div>
                                        </div>
                                        <div class="Polaris-IndexTable__ScrollBarContainer Polaris-IndexTable--scrollBarContainerHidden"
                                            style="border-top:unset">
                                            <div class="Polaris-IndexTable__ScrollBar"
                                                style="--pc-index-table-scroll-bar-content-width:740px;">
                                                <div class="Polaris-IndexTable__ScrollBarContent">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div></div>


                                <!-- add-new---classs---model---start---- -->

                                <script>
                                $(document).ready(function() {
                                    $(".new_class_ad").click(function() {
                                        // alert("dfsjsdfjhfsd")
                                        $(".class_model").attr("style", "display:block")

                                    })
                                    $(".class_deleted_model").click(function() {
                                        $(".class_model").attr("style", "display:none")
                                    })


                                })
                                </script>



                                <script>
                                $(document).ready(function() {
                                    $(".add_new_channels").click(function() {
                                        // alert("dfsjsdfjhfsd")
                                        $(".channnel_model").attr("style", "display:block")

                                    })
                                    $(".channenls_model_hide").click(function() {
                                        $(".channnel_model").attr("style", "display:none")
                                    })


                                })
                                </script>




                                <!-- add-new---classs---model---end---- -->

                                <div>
                                    <div id="PolarisPortalsContainer"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <script>
        var selector = '.Polaris-Navigation__ListItem';

        $(selector).on('click', function() {
            $(this).addClass('active_navigation').siblings().removeClass('active_navigation');
        });
        $(document).ready(function() {
            var selector = '.tabing_ng';
            $(selector).on('click', function() {
                $(this).addClass('select_tab').siblings().removeClass('select_tab');
            });
        })
        document.getElementById("default_open").click();
        </script>
        <script>
        function openCity(evt, cityName) {
            var i, tabcontent1, tablinks;
            tabcontent1 = document.getElementsByClassName("tabcontent1");
            for (i = 0; i < tabcontent1.length; i++) {
                tabcontent1[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }
        </script>

        <!-- classs-addd-neww---modellll--start -->
        <div>
            <div class="class_model">
                <div id="PolarisPortalsContainer">
                    <div data-portal-id="modal-Polarisportal1">
                        <div>
                            <div class="Polaris-Modal-Dialog__Container" data-polaris-layer="true"
                                data-polaris-overlay="true">
                                <div>
                                    <div role="dialog" aria-modal="true" aria-labelledby="Polarismodal-header1"
                                        tabindex="-1" class="Polaris-Modal-Dialog">
                                        <div class="Polaris-Modal-Dialog__Modal custom_model">
                                            <div class="Polaris-Modal-Header" style="justify-content: end">
                                                <div id="Polarismodal-header1"
                                                    class="Polaris-Modal-Header__Title add_product_text "
                                                    style="text-align:left">
                                                    <h2>Add New Class</h2>
                                                </div>
                                                <button class="Polaris-Modal-CloseButton class_deleted_model"
                                                    aria-label="Close">
                                                    <span
                                                        class="Polaris-Icon Polaris-Icon--colorBase Polaris-Icon--applyColor">
                                                        <span
                                                            class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--regular Polaris-Text--visuallyHidden"></span>
                                                        <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg"
                                                            focusable="false" aria-hidden="true">
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
                                                    <div class="Polaris-Page view_page">
                                                        <div class="brands_heading">

                                                        </div>
                                                        <div class="">
                                                            <div class="">
                                                                <div class="">
                                                                    <div class="Polaris-Page__Content">
                                                                        <div class="Polaris-Layout">
                                                                            <div
                                                                                class="Polaris-Layout__Section Polaris-Layout__Section--oneThird">
                                                                                <div class="Polaris-LegacyCard">
                                                                                    <div class="Polaris-FormLayout">
                                                                                        <div
                                                                                            class="Polaris-FormLayout__Item">
                                                                                            <div class="">
                                                                                                <div
                                                                                                    class="Polaris-Labelled__LabelWrapper">
                                                                                                    <div
                                                                                                        class="Polaris-Label">
                                                                                                        <label
                                                                                                            id="PolarisTextField1Label"
                                                                                                            for="PolarisTextField1"
                                                                                                            class="Polaris-Label__Text">Class
                                                                                                            Name</label>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="Polaris-Connected">
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

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="Polaris-Layout__Section Polaris-Layout__Section--oneThird">
                                                                                <div class="Polaris-LegacyCard">
                                                                                    <div class="Polaris-FormLayout">
                                                                                        <div
                                                                                            class="Polaris-FormLayout__Item">
                                                                                            <div class="">
                                                                                                <div
                                                                                                    class="Polaris-Labelled__LabelWrapper">
                                                                                                    <div
                                                                                                        class="Polaris-Label">
                                                                                                        <label
                                                                                                            id="PolarisTextField1Label"
                                                                                                            for="PolarisTextField1"
                                                                                                            class="Polaris-Label__Text">Created
                                                                                                            Date</label>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="Polaris-Connected">
                                                                                                    <div
                                                                                                        class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                                                                        <div
                                                                                                            class="Polaris-TextField2">


                                                                                                            <form>
                                                                                                                <input
                                                                                                                    id="datepicker"
                                                                                                                    autocomplete="off"
                                                                                                                    class="Polaris-TextField__Input"
                                                                                                                    type="text"
                                                                                                                    aria-labelledby="PolarisTextField1Label"
                                                                                                                    aria-invalid="false"
                                                                                                                    value="">
                                                                                                            </form>
                                                                                                            <script>
                                                                                                            $(function() {
                                                                                                                $("#datepicker")
                                                                                                                    .datepicker();
                                                                                                            });
                                                                                                            </script>



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
                                                                            <div
                                                                                class="Polaris-Layout__Section Polaris-Layout__Section--oneThird">
                                                                                <div class="Polaris-LegacyCard">
                                                                                    <div class="Polaris-FormLayout">
                                                                                        <div
                                                                                            class="Polaris-FormLayout__Item">
                                                                                            <div class="">
                                                                                                <div
                                                                                                    class="Polaris-Labelled__LabelWrapper">
                                                                                                    <div
                                                                                                        class="Polaris-Label">
                                                                                                        <label
                                                                                                            id="PolarisTextField1Label"
                                                                                                            for="PolarisTextField1"
                                                                                                            class="Polaris-Label__Text">Created
                                                                                                            By</label>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="Polaris-Connected">
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

                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="Polaris-Card__Section" style="padding:0px">
                                                                 <div class="wrapper">
                                                                    <p>Logo</p>
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
                                            <div class="Polaris-Modal-Footer">
                                                <div class="Polaris-Modal-Footer__FooterContent">
                                                    <div class="Polaris-Stack Polaris-Stack--alignmentCenter">
                                                        <div class="Polaris-Stack__Item Polaris-Stack__Item--fill">
                                                        </div>
                                                        <div class="Polaris-Stack__Item">
                                                            <div class="Polaris-ButtonGroup"
                                                                style="justify-content: end;">
                                                                <div class="Polaris-ButtonGroup__Item"><button
                                                                        class="Polaris-Button class_deleted_model "
                                                                        type="button"><span
                                                                            class="Polaris-Button__Content"><span
                                                                                class="Polaris-Button__Text">Cancel</span></span></button>
                                                                </div>
                                                                <div class="Polaris-ButtonGroup__Item"> <button
                                                                        class="Polaris-Button Polaris-Button--primary"
                                                                        type="button">
                                                                        <span class="Polaris-Button__Content">
                                                                            <span
                                                                                class="Polaris-Button__Text">Add</span>
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

        <!-- classs-addd-neww---modellll--end -->


        <!-- channels-----model------start------ -->



        <div>
            <div class="channnel_model">
                <div id="PolarisPortalsContainer">
                    <div data-portal-id="modal-Polarisportal1">
                        <div>
                            <div class="Polaris-Modal-Dialog__Container" data-polaris-layer="true"
                                data-polaris-overlay="true">
                                <div>
                                    <div role="dialog" aria-modal="true" aria-labelledby="Polarismodal-header1"
                                        tabindex="-1" class="Polaris-Modal-Dialog">
                                        <div class="Polaris-Modal-Dialog__Modal custom_model">
                                            <div class="Polaris-Modal-Header" style="align-items: center;">
                                                <div id="Polarismodal-header1"
                                                    class="Polaris-Modal-Header__Title add_product_text "
                                                    style="text-align:left">
                                                    <h2 class="">Add New Channel</h2>
                                                </div>
                                                <button class="Polaris-Modal-CloseButton channenls_model_hide"
                                                    aria-label="Close">
                                                    <span
                                                        class="Polaris-Icon Polaris-Icon--colorBase Polaris-Icon--applyColor">
                                                        <span
                                                            class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--regular Polaris-Text--visuallyHidden"></span>
                                                        <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg"
                                                            focusable="false" aria-hidden="true">
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
                                                    <div class="Polaris-Page view_page">
                                                        <div class="brands_heading">
                                                            <h2></h2>
                                                        </div>
                                                        <div class="">
                                                            <div class="">
                                                                <div class="">
                                                                    <div class="Polaris-Page__Content">
                                                                        <div class="Polaris-Layout">
                                                                            <div
                                                                                class="Polaris-Layout__Section Polaris-Layout__Section--oneThird">
                                                                                <div class="Polaris-LegacyCard">
                                                                                    <div class="Polaris-FormLayout">
                                                                                        <div
                                                                                            class="Polaris-FormLayout__Item">
                                                                                            <div class="">
                                                                                                <div
                                                                                                    class="Polaris-Labelled__LabelWrapper">
                                                                                                    <div
                                                                                                        class="Polaris-Label">
                                                                                                        <label
                                                                                                            id="PolarisTextField1Label"
                                                                                                            for="PolarisTextField1"
                                                                                                            class="Polaris-Label__Text">Channel
                                                                                                            Name</label>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="Polaris-Connected">
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

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="Polaris-Layout__Section Polaris-Layout__Section--oneThird">
                                                                                <div class="Polaris-LegacyCard">
                                                                                    <div class="Polaris-FormLayout">
                                                                                        <div
                                                                                            class="Polaris-FormLayout__Item">
                                                                                            <div class="">
                                                                                                <div
                                                                                                    class="Polaris-Labelled__LabelWrapper">
                                                                                                    <div
                                                                                                        class="Polaris-Label">
                                                                                                        <label
                                                                                                            id="PolarisTextField1Label"
                                                                                                            for="PolarisTextField1"
                                                                                                            class="Polaris-Label__Text">Created
                                                                                                            Date</label>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="Polaris-Connected">
                                                                                                    <div
                                                                                                        class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                                                                        <div
                                                                                                            class="Polaris-TextField2">


                                                                                                            <form>
                                                                                                                <input
                                                                                                                    id="datepicker1"
                                                                                                                    autocomplete="off"
                                                                                                                    class="Polaris-TextField__Input"
                                                                                                                    type="text"
                                                                                                                    aria-labelledby="PolarisTextField1Label"
                                                                                                                    aria-invalid="false"
                                                                                                                    value="">
                                                                                                            </form>
                                                                                                            <script>
                                                                                                            $(function() {
                                                                                                                $("#datepicker1")
                                                                                                                    .datepicker();
                                                                                                            });
                                                                                                            </script>

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
                                                                            <div
                                                                                class="Polaris-Layout__Section Polaris-Layout__Section--oneThird">
                                                                                <div class="Polaris-LegacyCard">
                                                                                    <div class="Polaris-FormLayout">
                                                                                        <div
                                                                                            class="Polaris-FormLayout__Item">
                                                                                            <div class="">
                                                                                                <div
                                                                                                    class="Polaris-Labelled__LabelWrapper">
                                                                                                    <div
                                                                                                        class="Polaris-Label">
                                                                                                        <label
                                                                                                            id="PolarisTextField1Label"
                                                                                                            for="PolarisTextField1"
                                                                                                            class="Polaris-Label__Text">Created
                                                                                                            By</label>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="Polaris-Connected">
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

                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="Polaris-Card__Section" style="padding:0px">
                                                                <p>Logo</p>
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
                                            <div class="Polaris-Modal-Footer">
                                                <div class="Polaris-Modal-Footer__FooterContent">
                                                    <div class="Polaris-Stack Polaris-Stack--alignmentCenter">
                                                        <div class="Polaris-Stack__Item Polaris-Stack__Item--fill">
                                                        </div>
                                                        <div class="Polaris-Stack__Item">
                                                            <div class="Polaris-ButtonGroup"
                                                                style="align-items: center;">
                                                                <div class="Polaris-ButtonGroup__Item"><button
                                                                        class="Polaris-Button channenls_model_hide "
                                                                        type="button"><span
                                                                            class="Polaris-Button__Content"><span
                                                                                class="Polaris-Button__Text">Cancel</span></span></button>
                                                                </div>
                                                                <div class="Polaris-ButtonGroup__Item"> <button
                                                                        class="Polaris-Button Polaris-Button--primary"
                                                                        type="button">
                                                                        <span class="Polaris-Button__Content">
                                                                            <span
                                                                                class="Polaris-Button__Text">Add</span>
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











        <!-- channels-----model------end------ -->









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

<div class="class_block_model" style="display:none">
    <div id=" PolarisPortalsContainer">
        <div data-portal-id="modal-Polarisportal1">
            <div>
                <div class="Polaris-Modal-Dialog__Container" data-polaris-layer="true" data-polaris-overlay="true">
                    <div>
                        <div role="dialog" aria-modal="true" aria-labelledby="Polarismodal-header1" tabindex="-1"
                            class="Polaris-Modal-Dialog">
                            <div class="Polaris-Modal-Dialog__Modal custom_model">
                                <div class="Polaris-Modal-Header">
                                    <div id="Polarismodal-header1" class="Polaris-Modal-Header__Title add_product_text "
                                        style="text-align:left">
                                        <h2 class="">Are You sure Do you want to delete class?</h2>
                                    </div>
                                    <button class="Polaris-Modal-CloseButton deleted_model_close" aria-label="Close">
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
                                                <h4>By Confirming,you will erase the bundle you created
                                                    on product,you may want to disable them insted.</h4>
                                                <hh4><b>This action is irreversible</b></hh4>
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
                                                    <div class="Polaris-ButtonGroup__Item"><button
                                                            class="Polaris-Button deleted_model_close "
                                                            type="button"><span class="Polaris-Button__Content"><span
                                                                    class="Polaris-Button__Text">Cancel</span></span></button>
                                                    </div>
                                                    <div class="Polaris-ButtonGroup__Item"> <button
                                                            class="Polaris-Button Polaris-Button--primary"
                                                            type="button">
                                                            <span class="Polaris-Button__Content">
                                                                <span class="Polaris-Button__Text">Delete</span>
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

<script>
$(document).ready(function() {
    $(".class_btn_click").click(function() {
        $(".class_block_model").attr("style", "display:block")

    })
    $(".deleted_model_close").click(function() {
        $(".class_block_model").attr("style", "display:none")
    })


})
</script>




<!-- class----model---start -->
<div class="channel_block" style="display:none">
    <div id=" PolarisPortalsContainer">
        <div data-portal-id="modal-Polarisportal1">
            <div>
                <div class="Polaris-Modal-Dialog__Container" data-polaris-layer="true" data-polaris-overlay="true">
                    <div>
                        <div role="dialog" aria-modal="true" aria-labelledby="Polarismodal-header1" tabindex="-1"
                            class="Polaris-Modal-Dialog">
                            <div class="Polaris-Modal-Dialog__Modal custom_model">
                                <div class="Polaris-Modal-Header">
                                    <div id="Polarismodal-header1" class="Polaris-Modal-Header__Title add_product_text "
                                        style="text-align:left">
                                        <h2 class="">Are You sure Do you want to delete Channel?</h2>
                                    </div>
                                    <button class="Polaris-Modal-CloseButton deleted_model_close" aria-label="Close">
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
                                                <h4>By Confirming,you will erase the bundle you created
                                                    on product,you may want to disable them insted.</h4>
                                                <hh4><b>This action is irreversible</b></hh4>
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
                                                    <div class="Polaris-ButtonGroup__Item"><button
                                                            class="Polaris-Button deleted_model_close "
                                                            type="button"><span class="Polaris-Button__Content"><span
                                                                    class="Polaris-Button__Text">Cancel</span></span></button>
                                                    </div>
                                                    <div class="Polaris-ButtonGroup__Item"> <button
                                                            class="Polaris-Button Polaris-Button--primary"
                                                            type="button">
                                                            <span class="Polaris-Button__Content">
                                                                <span class="Polaris-Button__Text">Delete</span>
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

<script>
$(document).ready(function() {
    $(".class_deleted_btn").click(function() {
        $(".channel_block").attr("style", "display:block")

    })
    $(".deleted_model_close").click(function() {
        $(".channel_block").attr("style", "display:none")
    })


})
</script>




<!-- class--modell-eeend -->