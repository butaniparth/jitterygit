</main>
</div>
<div id="PolarisPortalsContainer">
    <div data-portal-id="popover-Polarisportal3"></div>
    <div data-portal-id="modal-Polarisportal1">
        <div></div>
    </div>
    <div data-portal-id="Polarisportal2">
        <div class="Polaris-Frame-ToastManager" aria-live="assertive"></div>
    </div>
</div>
</div>
</div>
<div></div>
<div class="Polaris-Frame-ToastManager" aria-live="assertive"></div>
</body>
<!-- polaris---shopify----navigation---js---start -->
<script>
$(document).ready(function() {
    $(".Polaris-TopBar__NavigationIcon").click(function() {
        $(".Polaris-Frame__Navigation").addClass(
            "Polaris-Frame__Navigation--visible Polaris-Frame__Navigation--enterActive");
    });
    $(".Polaris-Frame__NavigationDismiss").click(function() {
        $(".Polaris-Frame__Navigation").removeClass(
            "Polaris-Frame__Navigation--visible Polaris-Frame__Navigation--enterActive");
    });
});
</script>
<script>
var selector = '.Polaris-Navigation__ListItem';

$(selector).on('click', function() {
    $(this).addClass('active_navigation').siblings().removeClass('active_navigation');
});

document.getElementById("default_open").click();
</script>
<script>
var selector = '.brands_img_blocks ul li';

$(selector).on('click', function() {
    $(this).addClass('active_brands').siblings().removeClass('active_brands');
});

document.getElementById("default_open").click();
</script>

<!-- polaris---shopify----navigation---js---end -->

<!-- header--fix---js---start -->

<script type="text/javascript">
$(document).ready(function() {
    function resizeLinks() {
        var sticky_header = $('.fixed_header').height();
        sticky_header = sticky_header + 30;
        $('.Polaris-Frame__Content').css("margin-top", sticky_header);
    }

    $(window).on("resize", resizeLinks);

    resizeLinks();
});
</script>


<!-- header--fix---js---end -->

<!-- all---pages----images--upload-js---start -->
<script>
function initImageUpload(box) {
    let uploadField = box.querySelector('.image-upload');

    uploadField.addEventListener('change', getFile);

    function getFile(e) {
        let file = e.currentTarget.files[0];
        checkType(file);
    }

    function previewImage(file) {
        let thumb = box.querySelector('.js--image-preview'),
            reader = new FileReader();

        reader.onload = function() {
            thumb.style.backgroundImage = 'url(' + reader.result +
                ')';
        }
        reader.readAsDataURL(file);
        thumb.className += ' js--no-default';
    }

    function checkType(file) {
        let imageType = /image.*/;
        if (!file.type.match(imageType)) {
            throw 'Datei ist kein Bild';
        } else if (!file) {
            throw 'Kein Bild gewählt';
        } else {
            previewImage(file);
        }
    }

}
var boxes = document.querySelectorAll('.box');

for (let i = 0; i < boxes.length; i++) {
    let box = boxes[i];
    initDropEffect(box);
    initImageUpload(box);
}

function initDropEffect(box) {
    let area, drop, areaWidth, areaHeight, maxDistance, dropWidth,
        dropHeight, x, y;
    area = box.querySelector('.js--image-preview');
    area.addEventListener('click', fireRipple);

    function fireRipple(e) {
        area = e.currentTarget
        if (!drop) {
            drop = document.createElement('span');
            drop.className = 'drop';
            this.appendChild(drop);
        }
        drop.className = 'drop';
        areaWidth = getComputedStyle(this, null).getPropertyValue(
            "width");
        areaHeight = getComputedStyle(this, null).getPropertyValue(
            "height");
        maxDistance = Math.max(parseInt(areaWidth, 10), parseInt(
            areaHeight, 10));
        drop.style.width = maxDistance + 'px';
        drop.style.height = maxDistance + 'px';
        dropWidth = getComputedStyle(this, null).getPropertyValue(
            "width");
        dropHeight = getComputedStyle(this, null).getPropertyValue(
            "height");
        x = e.pageX - this.offsetLeft - (parseInt(dropWidth, 10) / 2);
        y = e.pageY - this.offsetTop - (parseInt(dropHeight, 10) / 2) -
            30;

        // position drop and animate
        drop.style.top = y + 'px';
        drop.style.left = x + 'px';
        drop.className += ' animate';
        e.stopPropagation();

    }
}
$(".close_img_btn").click(function() {
    $(this).parents(".box").find(".js--no-default").attr("style", "background:unset");
    $(this).hide();
    $(this).parents(".box").find(".thumbnails_img").attr("style", "display:block")
})
$(".upload-options").click(function() {
    $(this).parent(".box").find(".close_img_btn").attr("style", "display:block");
    $(this).parents(".box").find(".thumbnails_img").attr("style", "display:none")
    $(this).parents(".box").find(".js--no-default").attr("style", "display:block");
})
</script>

<!-- all---pages----images--upload-js---end -->

<!-- alll--pages-color--picker-js---start -->
<script>
$('.colorpickerbox').each(function() {

        let colorpicker = $(this).attr('id');
        let colorpicker1 = document.getElementById(colorpicker);

        setInterval(() => {
                let color = colorpicker1.value;
                $("#" + colorpicker + "_hex").val(color);
            }

            , 200);
    }

);
</script>
<!-- alll--pages-color--picker-js---start -->

<!-- allljs---start---of---1page- start-->
<script>
$('#checkbox_').click(function() {
    $('.hide_enable').toggleClass('text_show');
    $('.hide_disable').toggleClass('text_show1');
});
$('#market_font_name').change(function() {
    var radiusunit = $(this).val();
    $('.market_font_name').html(radiusunit);
});
$('#market_font_sizie').change(function() {
    var radiusunit = $(this).val();
    $('.market_font_sizie').html(radiusunit);
});
$('#market_text_direction').change(function() {
    var radiusunit = $(this).val();
    $('.market_text_direction').html(radiusunit);
});
$('#redirect_link').change(function() {
    var radiusunit = $(this).val();
    $('.redirect_link').html(radiusunit);
});
</script>
<!-- allljs---start---of---1page- end-->


<!-- allljs---start---of---2page- start-->

<script>
$('#market_font_name').change(function() {
    var radiusunit = $(this).val();
    $('.market_font_name').html(radiusunit);
});
$('#market_font_sizie').change(function() {
    var radiusunit = $(this).val();
    $('.market_font_sizie').html(radiusunit);
});
$('#market_text_direction').change(function() {
    var radiusunit = $(this).val();
    $('.market_text_direction').html(radiusunit);
});
$('#redirect_link').change(function() {
    var radiusunit = $(this).val();
    $('.redirect_link').html(radiusunit);
});

</script>

<!-- allljs---start---of---2page- end-->

<!-- allljs---start---of---3page- start-->
<script>
$(document).ready(function() {
    $(".add_product_btn").click(function() {
        $(".product_model").attr("style", "display:block");
    });
    $(".product_model_hide").click(function() {
        $(".product_model").attr("style", "display:none");
    });
})
$('#font_size').change(function() {
    var radiusunit = $(this).val();
    $('.font_size').html(radiusunit);
});
$('#Text_location').change(function() {
    var radiusunit = $(this).val();
    $('.Text_location').html(radiusunit);
});
$('#redirect_link_funnel_setting').change(function() {
    var radiusunit = $(this).val();
    $('.redirect_link_funnel_setting').html(radiusunit);
});
</script>

<!-- allljs---start---of---3page- end-->

<!-- allljs---start---of---4page- start-->
<script>
$(document).ready(function() {
    $(".append_data").click(function() {
        $(".form_column_append").append('<div class="form_fill_data"> <div class=""> <div class="Polaris-Connected"> <div class ="Polaris-Connected__Item Polaris-Connected__Item--primary" > <div class ="Polaris-TextField Polaris-TextField--hasValue" > <input id = "PolarisTextField1"autocomplete = "off"class = "Polaris-TextField__Input"type = "text"aria - labelledby = "PolarisTextField1Label"aria - invalid = "false"value = "Phone" ><div class = "Polaris-TextField__Backdrop" > </div> </div ></div > </div > </div > </div >');
        $(".toggle_btn").append('<div class="toggle_with_text"><label class="switch"for="checkbox_25"><input type="checkbox" id="checkbox_25"><div class="slider round"></div></label><h4 id="edit3">Phone</h4><div class="editable_block"><p type="submit" id="edit-button3" style="margin-left:10px"><i class=" fa fa-pencil" aria-hidden="true"style="color:#008060"></i></p><p type="submit" id="end-editing3" style="margin-left:10px">Save</button></div></div>')
    });
});
$(document).ready(function(){
    $(".append_btn_class").click(function(){
        $(".custome_btn_data").append('<div class="add_new_btn_manage"><button class="Polaris-Button Polaris-Button--primary Polaris-Button--fullWidth"type="button"><span class="Polaris-Button__Content"><spanclass="Polaris-Button__Text">GET MY FREEVOUCHERS</span></span></button></div>');
    });
});
$('#checkbox_5').click(function() {
    $('.text_hide').toggleClass('block_heading');
    $('.text_block').toggleClass('hide_heading');
}
);
$('#Button_font_name').change(function() {
    var radiusunit = $(this).val();
    $('.Button_font_name').html(radiusunit);
});
$('#button_font_size').change(function() {
    var radiusunit = $(this).val();
    $('.button_font_size').html(radiusunit);
});
$('#redirect_link_funnel_form').change(function() {
    var radiusunit = $(this).val();
    $('.redirect_link_funnel_form').html(radiusunit);
});
</script>
<!-- allljs---start---of---4page- end-->

<!-- allljs---start---of---5page- start-->
<script>
    $('#third_option_first').change(function() {
    var radiusunit = $(this).val();
    $('.third_option_first').html(radiusunit);
});
    document.getElementById('copyToClipboard-a').addEventListener('click',
function() {
    var text = document.getElementById('textA');
    text.select();
    document.execCommand('copy');
})
    $( document ).ready(function() {
    new ClipboardJS('.copy');
}); 
    $('#third_option').change(function() {
    var radiusunit = $(this).val();
    $('.third_option').html(radiusunit);
});
$('#redirection_option_3rd').change(function() {
    var radiusunit = $(this).val();
    $('.redirection_option_3rd').html(radiusunit);
});
$('#Orientation_heading').change(function() {
    var radiusunit = $(this).val();
    $('.Orientation_heading').html(radiusunit);
});
$('#market_place').change(function() {
    var radiusunit = $(this).val();
    $('.market_place').html(radiusunit);
});
$(document).on('keyup', '.Form_content_description',function(){
    var  me =$(this).val();
    $(".description_form_inner").text(me)
})
$(document).on('keyup', '.Form_content_exp',function(){
    var  me =$(this).val();
    $(".expericance_text").text(me)
})
$(document).on('keyup', '.Form_subtitle',function(){
    var  me =$(this).val();
    $(".form_subtitle_change").text(me)
})

$(document).on('keyup', '.clipboard_text_label',function(){
    var  me =$(this).val();
    $(".clipboard_text").text(me)
})
$('#redirect_url_page5').change(function() {
    var radiusunit = $(this).val();
    $('.redirect_url_page5').html(radiusunit);
});
$(document).on('keyup', '.option_two_title_text',function(){
    var  me =$(this).val();
    $(".option_two_title_change").text(me)
})

$(document).on('keyup', '.option_two_subtitle_text',function(){
    var  me =$(this).val();
    $(".option_two_subtitle").text(me)
})
$('#redirect_url_page4').change(function() {
    var radiusunit = $(this).val();
    $('.redirect_url_page4').html(radiusunit);
});
$('#redirect_url_page3').change(function() {
    var radiusunit = $(this).val();
    $('.redirect_url_page3').html(radiusunit);
});
$('#redirect_url_page2').change(function() {
    var radiusunit = $(this).val();
    $('.redirect_url_page2').html(radiusunit);
});
$('#redirect_url_page').change(function() {
    var radiusunit = $(this).val();
    $('.redirect_url_page').html(radiusunit);
});
$(document).on('keyup', '.character_count',function(){
    var  me =$(this).val();
    $(".character_lenth").text(me)
})
$(document).on('keyup', '.describe_text',function(){
    var  me =$(this).val();
    $(".description_form").text(me)
})
$(document).on('keyup', '.satisfeid_on_key',function(){
    var  me =$(this).val();
    $(".satisfied_text").text(me)
})
$(document).on('keyup', '.Form_title_b',function(){
    var  me =$(this).val();
    $(".form_title_change").text(me)
})
$(document).on('keyup', '.form_b_subtitle',function(){
    var  me =$(this).val();
    $(".form_subtitle_change_b").text(me)
})

$(document).on('keyup', '.form_title',function(){
    var  me =$(this).val();
    $(".form_b_title").text(me)
})
$(document).on('keyup', '.form_b_title_label',function(){
    var  me =$(this).val();
    $(".title_form_b_label").text(me)
})

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

$('#select_step').change(function() {
    var radiusunit = $(this).val();
    $('.select_step').html(radiusunit);
    if (radiusunit == 'Option 2') {
        $('.secound_option_main_design').css('display', 'block');
        $('.secound_option_avoid_section').css('display', 'block');
        $('.first_option_design ').css('display', 'none');
        $('.three_screen_design_block ').css('display', 'none');
        $('.congratulation_preview_section ').css('display', 'none');
        $('.first_option_preview ').css('display', 'none');
        $('.secound_option_section').css('display', 'block');
        $('.form_design_start_another ').css('display', 'none');
        $('.first_option_avoid_section ').css('display', 'none');
        $('.rating_star_css_section_first ').css('display', 'none');
        $('.rating_star_css_section_secound ').css('display', 'block');
      

        $('.funnel_option_preview ').attr('style', 'padding-bottom:50px');
    } else if (radiusunit == 'Option 1') {
        
        $('.first_option_design ').css('display', 'block');
        $('.form_design_start_another ').css('display', 'block');

        $('.three_screen_design_block ').css('display', 'none');
        // $('.secound_option_avoid_section').css('display', 'none');
        $('.congratulation_preview_section ').css('display', 'none');
        $('.first_option_preview ').css('display', 'block ');
        $('.secound_option_section').css('display', 'none');
        $('.funnel_option_preview ').attr('style', 'padding-bottom:50px');
        $('.first_option_avoid_section ').css('display', 'block');
        $('.secound_option_avoid_section').css('display', 'none');
        $('.secound_option_main_design ').css('display', 'none');
        $('.rating_star_css_section_first ').css('display', 'block');
        $('.rating_star_css_section_secound ').css('display', 'none');
    } else {
        
        $('.secound_option_main_design').css('display', 'none');
        $('.secound_option_avoid_section').css('display', 'none');
        $('.form_design_start_another ').css('display', 'none')
        $('.secound_option_section').css('display', 'none');
        $('.form_design_start ').css('display', 'none');
        $('.first_option_design ').css('display', 'none');
        $('.first_option_preview ').css('display', 'none');
        $('.three_screen_design_block ').css('display', 'block');
        $('.first_option_avoid_section ').css('display', 'none');
        $('.rating_star_css_section_first ').css('display', 'none');
        $('.rating_star_css_section_secound ').css('display', 'none');
        $('.congratulation_preview_section ').css('display', 'block');
        $('.funnel_option_preview ').attr('style', 'padding-bottom:0px');
        $('.sticky_section ').addclass('is-sticky');


    }
});
</script>

<!-- alll--js---end---of---5page- end-->

<!-- alll---js---end---of---6page---start-->
<script>
    $('#promo_font_size').change(function() {
        var radiusunit = $(this).val();
        $('.promo_font_size').html(radiusunit);
    });
    $('#setting_promo_text_').change(function() {
        var radiusunit = $(this).val();
        $('.setting_promo_text_').html(radiusunit);
    });
    $('#promobox_outsite').change(function() {
        var radiusunit = $(this).val();
        $('.promobox_outsite').html(radiusunit);
    });
    $('#promo_font_size_code').change(function() {
        var radiusunit = $(this).val();
        $('.promo_font_size_code').html(radiusunit);
    });
    $('#promo_text_change').change(function() {
        var radiusunit = $(this).val();
        $('.promo_text_change').html(radiusunit);
    });
    $('#open_code_font_name').change(function() {
        var radiusunit = $(this).val();
        $('.open_code_font_name').html(radiusunit);
    });
    $('#promo_font_size_box').change(function() {
        var radiusunit = $(this).val();
        $('.promo_font_size_box').html(radiusunit);
    });
    $('#promo_text_change_1').change(function() {
        var radiusunit = $(this).val();
        $('.promo_text_change_1').html(radiusunit);
    });
    $('#saving_font_name').change(function() {
        var radiusunit = $(this).val();
        $('.saving_font_name').html(radiusunit);
    });
    $('#saving_font_size').change(function() {
        var radiusunit = $(this).val();
        $('.saving_font_size').html(radiusunit);
    });
    $('#copy_font_name').change(function() {
        var radiusunit = $(this).val();
        $('.copy_font_name').html(radiusunit);
    });
    $('#copy_font_size_name').change(function() {
        var radiusunit = $(this).val();
        $('.copy_font_size_name').html(radiusunit);
    });
    $('#product_font_name').change(function() {
        var radiusunit = $(this).val();
        $('.product_font_name').html(radiusunit);
    });
    $('#free_product_section').change(function() {
        var radiusunit = $(this).val();
        $('.free_product_section').html(radiusunit);
    });
    $('#product_direction').change(function() {
        var radiusunit = $(this).val();
        $('.product_direction').html(radiusunit);
    });
    $('#promo_dropdown').change(function() {
        var radiusunit = $(this).val();
        $('.promo_dropdown').html(radiusunit);
    });

</script>
<!-- allljs---end---of---6page---end-->

</html>