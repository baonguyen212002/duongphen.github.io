<!-- Js Config -->
<script type="text/javascript">
    var NN_FRAMEWORK = NN_FRAMEWORK || {};
    var CONFIG_BASE = '<?= $config_base ?>';
    var WEBSITE_NAME = '<?= (isset($setting['ten' . $lang]) && $setting['ten' . $lang] != '') ? $setting['ten' . $lang] : '' ?>';
    var TIMENOW = '<?= date("d/m/Y", time()) ?>';
    var SHIP_CART = <?= (isset($config['order']['ship']) && $config['order']['ship'] == true) ? 'true' : 'false' ?>;
    var GOTOP = 'assets/images/top.png';
    var LANG = {
        'no_keywords': "<?= chuanhaptukhoatimkiem ?>",
        'delete_product_from_cart': "<?= banmuonxoasanphamnay ?>",
        'no_products_in_cart': "<?= khongtontaisanphamtronggiohang ?>",
        'wards': "<?= phuongxa ?>",
        'back_to_home': "<?= vetrangchu ?>",
    };
</script>

<!-- Js Files -->
<?php
$js->setCache("cached");
$js->setJs("./assets/js/jquery.min.js");
$js->setJs("./assets/bootstrap/bootstrap.js");
$js->setJs("./assets/js/wow.min.js");
$js->setJs("./assets/owlcarousel2/owl.carousel.js");
$js->setJs("./assets/magiczoomplus/magiczoomplus.js");
$js->setJs("./assets/simplyscroll/jquery.simplyscroll.js");
$js->setJs("./assets/slick/slick.js");
$js->setJs("./assets/fancybox3/jquery.fancybox.js");
$js->setJs("./assets/toc/toc.js");
$js->setJs("./assets/js/lazyload.min.js");
$js->setJs("./assets/js/functions.js");
$js->setJs("./assets/js/apps.js");
echo $js->getJs();
?>
<script src="./assets/js/lazyload.min.js"></script>

<script>
    var myLazyLoad = new LazyLoad({
        elements_selector: ".lazy"
    });
</script>
<?php if ($template == 'index/index') { ?>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.slider-for').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                fade: true,
                asNavFor: '.slider-nav'
            });
            $('.slider-nav').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true,
                autoplay: true,
                autoplaySpeed: 3000,
                centerPadding: '0px',
                asNavFor: '.slider-for',
                dots: false,
                centerMode: true,
                focusOnSelect: true
            });
        });
    </script>

<?php } ?>
<?php if ($template == 'duan/news_detail') { ?>
    <script type='text/javascript' src='./assets/unitegallery/js/unitegallery.min.js'></script>
    <script type='text/javascript' src='./assets/unitegallery/themes/tiles/ug-theme-tiles.js'></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            jQuery("#gallery").unitegallery({
                tiles_type: "justified"
            });
        });
    </script>
<?php } ?>


<script type="text/javascript">
    $(document).ready((function() {
            if ($(".filter-box__content").length) {
                let t = $(".filter-box__content .from").data("min"),
                    e = $(".filter-box__content .to").data("max");
                $("#slider-range").slider({
                    range: !0,
                    min: 1e4,
                    max: 1e7,
                    step: 1e4,
                    values: [t, e],
                    slide: function(t, e) {
                        $(".filter-box__content .from").data("value", e.values[0]).text(format_price(e.values[0], 0, ",")),
                            $(".filter-box__content .to").data("value", e.values[1]).text(format_price(e.values[1], 0, ","))
                    }
                })
            }
            $("body").on("click", ".filter-box__title", (function(t) {
                    $(this).toggleClass("active"),
                        $(this).parent().find(".filter-box__list").slideToggle()
                })),
                $("body").on("click", ".filter-box__content .filter", (function(t) {
                    $(this).toggleClass("active"),
                        loadUrl("price", `${$(".filter-box__content .from").data("value")}_${$(".filter-box__content .to").data("value")}`)
                })),
                $("body").on("click", ".filter-box__list .icon-down", (function(t) {
                    $(this).parent().toggleClass("toggle"),
                        $(this).parent().find(" > ul").slideToggle()
                })),
                $("body").on("click", ".sort-title", (function(t) {
                    $(this).parent().toggleClass("active")
                })),
                $("body").on("click", ".sort-list__item", (function(t) {
                    if ($(this).hasClass("active")) {
                        let t = $(this).text();
                        $(this).closest(".sort").find(".sort-title__value").text(t)
                    } else {
                        let t = $(this).parent().find(" > li:first-child").text();
                        $(this).closest(".sort").find(".sort-title__value").text(t)
                    }
                })),
                $("body").on("click", ".datas-top__wrap .icon", (function(t) {
                    $(".datas-top__wrap .icon").removeClass("active"),
                        $(this).addClass("active"),
                        $(this).hasClass("grid") ? $(this).closest(".datas").find(".product").addClass("flex-center-left column-4").removeClass("list") : $(this).closest(".datas").find(".product").removeClass("flex-center-left column-4").addClass("list")
                }))
        })),

        $(document).ready(function() {
            jQuery(document).ready(function() {
                jQuery('.catagory-title').on("click", function() {
                    if ($('.catagory-list__fix').css('display') == 'none') {
                        $('.catagory-list__fix').animate({
                            height: 'show'
                        }, 400);
                    } else {
                        $('.catagory-list__fix').animate({
                            height: 'hide'
                        }, 200);
                    }
                });
                jQuery('.catagory-list__fix li span').on("click", function() {
                    let id = $(this).attr('data-id');
                    if ($('#cat2__fix_' + id).css('display') == 'none') {
                        $('#cat2__fix_' + id).animate({
                            height: 'show'
                        }, 400);
                    } else {
                        $('#cat2__fix_' + id).animate({
                            height: 'hide'
                        }, 200);
                    }
                });
                jQuery('.catagory-list li span').on("click", function() {
                    let id = $(this).attr('data-id');
                    if ($('#cat2_' + id).css('display') == 'none') {
                        $('#cat2_' + id).animate({
                            height: 'show'
                        }, 400);
                    } else {
                        $('#cat2_' + id).animate({
                            height: 'hide'
                        }, 200);
                    }
                });
            });
        });

    $(document).ready(function() {
        // process bar
        window.addEventListener('load', function() {
            setTimeout(function() {

                $(".spinner").fadeOut();
                $("#preloader").delay(350).fadeOut("slow");
                // $("body").delay(350).css({
                //     overflow: "visible",

                // });
            }, 600);
        });

    });
    $(document).ready(function() {

        $('.support-content').hide();

        $('a.btn-support').click(function(e) {
            e.stopPropagation();
            $('.support-content').slideToggle();
        });
        $('.support-content').click(function(e) {
            e.stopPropagation();
        });
        $(document).click(function() {
            $('.support-content').slideUp();
        });
        $(".code_qr").click(function() {
            $(".show_code_qr").slideToggle();
        });
        $('.show_code_qr').hide();
        $('.tailvideo_item_owl').click(function() {
            let id = $(this).attr('data-src');
            let img = $(this).attr('data-image');
            let name = $(this).attr('data-name');
            $('.pic-video').attr('data-src', id);
            $('.pic-video img').attr('src', img);
            $('.name-video').html(name);
        });

        window.addEventListener('resize', function() {
            var screenWidth = window.innerWidth;
            var slideshow = document.querySelector('.slideshow');
            var wraptintuc = document.querySelector('.wrap-tintuc');
            var products = document.querySelectorAll('.product');
            var footerwidget = document.querySelector('.footer-widget');

            if (screenWidth < 1024) {
                slideshow.classList.remove('flex-center-right');
                wraptintuc.classList.add('flex-column');
                wraptintuc.classList.remove('flex-center-between');
                products.forEach(function(product) {
                    product.classList.add('column-2');
                    product.classList.remove('column-5');
                });
            } else {
                slideshow.classList.add('flex-center-right');
                wraptintuc.classList.remove('flex-column');
                wraptintuc.classList.add('flex-center-between');
                products.forEach(function(product) {
                    product.classList.add('column-5');
                    product.classList.remove('column-2');
                });
            }

            if (screenWidth < 1000) {
                footerwidget.classList.remove('flex-left');
            } else {
                footerwidget.classList.add('flex-left');
            }
        });

        // Gửi sự kiện resize ngay sau khi trang được tải để áp dụng trạng thái ban đầu
        window.dispatchEvent(new Event('resize'));

    });

    $(document).on('click', '.menu_mobi .menulicha', function(event) {
        $('.close_menu').trigger('click');
        return false;
    });
    var logo_mobi = $('.header_logo').html();
    var menu_mobi = $('.menu_cap_cha').html();
    var phone_mobile = $('.phone-mobile').html();
    var email_mobile = $('.email-mobile').html();
    $('.menu_mobi-add').append('<div class="navigation-top flex-center-between"><div class="align-self-center">' + logo_mobi + '</div><span class="close_menu">X</span></div><ul class="navigation-nav__content">' + menu_mobi + '</ul><p class="navigation-title flex-center-left">Hotline</p><p class="navigation-text">' + phone_mobile + '</p><p class="navigation-title flex-center-left">Email</p><p class="navigation-text">'+ email_mobile+'</p>' );
    $('.menu_mobi-add .menulicha a').find('span').remove();
    $('.menu_mobi-add ul li ul').removeClass('menu_cap_con'); $('.menu_mobi-add ul li ul').css({
                'display': 'none'
            }); $('.menu_mobi-add ul li ul li ul').removeClass('menu_cap_2'); $('.menu_mobi-add ul li ul li ul').css({
                'display': 'none'
            }); $('.menu_mobi-add ul li ul li ul li ul').removeClass('menu_cap_3'); $('.menu_mobi-add ul li ul li ul li ul').css({
                'display': 'none'
            });

            $(".menu_mobi_add ul li").each(function(index, element) {
                if ($(this).children('ul').children('li').length > 0) {
                    $(this).children('a').append('<i class="fas fa-chevron-right"></i>');
                }
            }); $(".menu_mobi_add ul li a i").click(function() {
                if ($(this).parent('a').hasClass('active2')) {
                    $(this).parent('a').removeClass('active2');
                    if ($(this).parent('a').parent('li').children('ul').children('li').length > 0) {
                        $(this).parent('a').parent('li').children('ul').css({
                            display: 'none',
                        });
                        //$(this).parent('a').parent('li').children('ul').hide(300);
                        return false;
                    }
                } else {
                    $(this).parent('a').addClass('active2');
                    if ($(this).parents('li').children('ul').children('li').length > 0) {
                        //$(".menu_m ul li ul").hide(0);
                        //$(this).parents('li').children('ul').show(300);
                        $(".menu_m ul li ul").css({
                            display: 'none',
                        });
                        $(this).parents('li').children('ul').css({
                            display: 'block',
                        });
                        return false;
                    }
                }
            });

            $('.icon_menu_mobi,.close_menu,.menu_baophu').click(function() {
                if ($('.menu_mobi_add').hasClass('menu_mobi_active')) {
                    $('.menu_mobi_add').removeClass('menu_mobi_active');
                    $('.menu_baophu').fadeOut(300);
                } else {
                    $('.menu_mobi_add').addClass('menu_mobi_active');
                    $('.menu_baophu').fadeIn(300);
                }
                return false;
            });
</script>
<?php if (isset($config['googleAPI']['recaptcha']['active']) && $config['googleAPI']['recaptcha']['active'] == true) { ?>
    <!-- Js Google Recaptcha V3 -->
    <?php if ($source == 'contact' || $source == 'dangkydaily') { ?>
        <script src="https://www.google.com/recaptcha/api.js?render=<?= $config['googleAPI']['recaptcha']['sitekey'] ?>"></script>
        <script type="text/javascript">
            grecaptcha.ready(function() {


                grecaptcha.execute('<?= $config['googleAPI']['recaptcha']['sitekey'] ?>', {
                    action: 'contact'
                }).then(function(token) {
                    var recaptchaResponseContact = document.getElementById('recaptchaResponseContact');
                    recaptchaResponseContact.value = token;
                });
                grecaptcha.execute('<?= $config['googleAPI']['recaptcha']['sitekey'] ?>', {
                    action: 'Newsletter'
                }).then(function(token) {
                    var recaptchaResponseNewsletter = document.getElementById('recaptchaResponseNewsletter');
                    recaptchaResponseNewsletter.value = token;
                });

            });
        </script>
    <?php } ?>
<?php } ?>

<?php if (isset($config['oneSignal']['active']) && $config['oneSignal']['active'] == true) { ?>
    <!-- Js OneSignal -->
    <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
    <script type="text/javascript">
        var OneSignal = window.OneSignal || [];
        OneSignal.push(function() {
            OneSignal.init({
                appId: "<?= $config['oneSignal']['id'] ?>"
            });
        });
    </script>
<?php } ?>

<!-- Js Structdata -->
<?php include TEMPLATE . LAYOUT . "strucdata.php"; ?>

<!-- Js Addons -->
<?= $addons->setAddons('script-main', 'script-main', 0.5); ?>
<?= $addons->getAddons(); ?>

<!-- Js Body -->
<?= htmlspecialchars_decode($setting['bodyjs']) ?>