<!-- <div class="boxfooter_container " id="background-footer">
    <div class="fixwidth row">
        <div class="col-md-5">
            <div class="name_top_footer">
                <?= htmlspecialchars_decode($footer['noidung' . $lang]) ?>
            </div>
            <div class="diachi_footer">
                <img style="width: 5%;" src="/assets/images/chiduong.png" alt="">
                <span><?= $optsetting['diachi'] ?></span>
            </div>
            <div class="diachi_footer">
                <img style="width: 5%;" src="/assets/images/goidien.png" alt="">
                <span><?= $optsetting['hotline'] ?></span>
            </div>
            <div class="diachi_footer">
                <i class="fa-solid fa-envelope" style="font-family: 'Font Awesome 5 Pro';margin-right: 10px;"></i>
                <span><?= $optsetting['email'] ?></span>
            </div>
            <div class="diachi_footer">
                Website:
                <span><?= $optsetting['website'] ?></span>
            </div>
        </div>
        <div class="col-md-4">
            <div class="logo_footer" style="text-align: center;">
                <a class="header_logo" href=""><img onerror="this.src='<?= THUMBS ?>/0x100x2/assets/images/noimage.png';"
                        src="<?= THUMBS ?>/0x100x2/<?= UPLOAD_PHOTO_L . $logo['photo'] ?>" /></a>
            </div>
            <div class="boxmenu_middle align-self-center " style="width: 100%;margin-top: 17%;">
                <img class="banner" onerror="this.src='<?= THUMBS ?>/0x70x2/assets/images/noimage.png';" src="<?= THUMBS ?>/0x70x2/<?= UPLOAD_PHOTO_L . $baner['photo'] ?>"/>
            </div>
        </div>
        <div class="col-md-3">
            <iframe
                src="https://www.facebook.com/plugins/page.php?href=<?= $optsetting['fanpage'] ?>&tabs=timeline&width=340&height=300&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
                width="340" height="250" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                allowfullscreen="true"
                allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
        </div>
    </div>
</div>
<div class="boxfooter_bottom ">
    <div class="fixwidth d-flex justify-content-between flex-wrap">
        <?= $optsetting['copyright'] ?>
        <div>Online: <?= $online ?> | Hôm nay: <?= $counter['today'] ?> | Tổng: <?= $counter['total'] ?></div>
    </div>
</div> -->


<div class="boxfooter_container " id="background-khachhang">
    <div class="fixwidth">
        <div class="footer-top__wrap w-100">
            <div class="footer-widget flex-left w-100">
                <div class="item footer-widget__item1">
                    <aside class="widget widget-text">
                        <div class="widget-content">
                            <div class="tubo-media-item">
                                <img onerror="this.src='<?= THUMBS ?>/170x185x2/assets/images/noimage.png';" src="<?= THUMBS ?>/170x185x2/<?= UPLOAD_PHOTO_L . $logo['photo'] ?>" />
                            </div>
                        </div>
                    </aside>
                </div>
                <div class="item footer-widget__item2">
                    <aside class="widget widget-menu">
                        <p class="widget-title">thông tin công ty cung cấp đường phèn sạch</p>
                    </aside>
                </div>
                <div class="item footer-widget__item3">
                    <aside class="widget widget-menu">
                        <p class="widget-title">Chính sách hỗ trợ</p>
                        <div class="widget-content">
                            <ul class="widget-menu__list">
                                <?php foreach ($cs as $e => $value) { ?>
                                    <li class="menu-item">
                                        <p class="menu-item__title">
                                            <a href="<?= $value['tenkhongdau' . $lang] ?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i><?= $value['ten' . $lang] ?></a>
                                        </p>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>

                    </aside>

                </div>
                <div class="item footer-widget__item4">
                    <aside class="widget widget-text">
                        <p class="widget-title">Tư vấn khách hàng</p>
                        <div class="widget-content">
                            <form class="form-contact validation-contact" novalidate method="post" action="validation.php" enctype="multipart/form-data" style="width: 100%;">
                                <div class="input-contact">
                                    <input type="text" class="form-control" id="ten" name="name-newsletter" placeholder="Họ tên" required />
                                    <div class="invalid-feedback">Vui lòng nhập họ và tên</div>
                                </div>
                                <div class="input-contact">
                                    <input type="number" class="form-control" id="dienthoai" name="phone-newsletter" placeholder="Số điện thoại" required />
                                    <div class="invalid-feedback">Vui lòng nhập số điện thoại</div>
                                </div>

                                <!-- <div class="col-md-10">
                                        <div class="input-contact">
                                            <textarea class="form-control" id="noidung" name="noidung-newsletter" placeholder="Nội dung" required></textarea>
                                            <div class="invalid-feedback">Vui lòng nhập nội dung</div>
                                        </div>
                                        <div class="g-recaptcha" data-sitekey="6Lf0zicpAAAAAGodEYJJy1k-U-10qLJw8qvnoeEq"></div>
                                    </div> -->
                                <input style="width: 100%; height: 90%;font-size: 20px;font-weight: 600;" type="submit" class="btn btn-primary" name="submit-newsletter" value="Gửi" disabled />

                        </div>
                        </form>
                </div>
                </aside>
            </div>
        </div>
        <div class="footer-widget flex-left w-100">
            <div class="item footer-widget__item1">
                <aside class="widget widget-text">
                    <div class="footer_name"><?= $footer['ten' . $lang] ?></div>
                    <div class="widget-content">
                        <?= htmlspecialchars_decode($footer['noidung' . $lang]) ?>
                    </div>
                </aside>
            </div>
            <div class="item footer-widget__item2">
                <aside class="widget widget-text">
                    <p class="widget-title">Hỗ trợ</p>
                    <div class="widget-content">
                        <?= $optsetting['copyright'] ?>
                        <div>Online: <?= $online ?> | Hôm nay: <?= $counter['today'] ?> | Tổng: <?= $counter['total'] ?></div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">

            <div class="des_footer">

            </div>
        </div>

    </div>
</div>
<!-- <div class="boxfooter_bottom"><a class="copyright" href="https://sotagroup.vn/" target="_blank"><?= $optsetting['copyright'] ?></a> </div> -->
<div class="fixwidth d-flex justify-content-between flex-wrap">

</div>
</div>
<script>
    window.addEventListener('resize', function() {
        var footerwidget = document.querySelector('.footer-widget');
        if (screenWidth < 1000) {
            footerwidget.classList.remove('flex-left');
        } else {
            footerwidget.classList.add('flex-left');
        }

    });
    window.dispatchEvent(new Event('resize'));
</script>