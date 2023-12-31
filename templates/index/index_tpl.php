<div class="wrap_tintuc">
    <div class="container">
        <div class="banner-list">
            <div class="flex-center-between d-flex align-items-center w-100 wrap-tintuc">
                <?php if ($tintuc) { ?>
                    <?php foreach ($tintuc as $bv) { ?>
                        <div class="banner-list__item ">
                            <div class="wrap">
                                <a href="<?= $bv['tenkhongdauvi'] ?>">
                                    <div class="thumnail">
                                        <img src="<?= THUMBS ?>/910x980x1/<?= UPLOAD_NEWS_L . $bv['photo'] ?>" alt="<?= $bv['ten' . $lang] ?>" width="400px" height="235px">
                                    </div>
                                    <div class="content">
                                        <div class="content-wrap">
                                            <div class="content-wrap__title"><?= $bv['ten' . $lang] ?></div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<div class="wrap_gioithieu background-gt">
    <div class="container">
        <div class="section-intro__box flex-center-between content-left ">
            <div class="thumbnail">
                <div class="pdt-20 anh-gioithieu">
                    <div id="img-intro">
                        <?php foreach ($hinhanhgioithieu as $intro => $imgintro) { ?>
                            <div class="pd-5">
                                <div class="img-gt">
                                    <img onerror="this.src='<?= THUMBS ?>/150x150x1/assets/images/noimage.png';" src="<?= THUMBS ?>/605x365x1/upload/photo/<?= $imgintro['photo'] ?>" alt="hinh-intro">
                                </div>
                            </div>
                        <?php } ?>


                    </div>
                </div>
            </div>
            <div class="text">
                <div class="text-content ck ck-reset ck-editor ck-rounded-corners w-100">
                    <div class="ck-content w-100">
                        <h1><strong>Giới thiệu về Doanh Nghiệp Cung Cấp Đường Phèn Việt Nam</strong>​</h1>
                        <?= htmlspecialchars_decode($gioithieu['mota' . $lang]) ?>
                    </div>
                </div>
                <div class="flex-left"><a class="xemgt" href="gioi-thieu"><span>Xem thêm</span><i class="fa fa-chevron-right" aria-hidden="true"></i></a></div>
            </div>

        </div>
    </div>
</div>
<div class="wrap_product">
    <div class="wrap_product_index">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php foreach ($danhmucnb_list as $key => $v) { ?>
                        <div class="ck-editor w-100">
                            <div class="ck-content w-100">
                                <h2><strong>Sản phẩm <?= $v['ten' . $lang] ?></strong></h2>
                            </div>
                        </div>
                        <div class="sp_cap1_all">
                            <div class="short-product__content w-100">
                                <div class="product flex-left column-5">
                                    <?php $sanpham = $d->rawQuery("select ten$lang, tenkhongdauvi, mota$lang, ngaytao,photo, id,gia from #_product where id_list = ? and noibat > 0 and hienthi > 0 and type='san-pham' order by stt,id desc", array($v['id'])); ?>
                                    <?php foreach ($sanpham as $key => $value) { ?>
                                        <div class="product-item custom-hover">
                                            <div class="product-item__wrap">
                                                <div class="image">
                                                    <a class="image-link" href="<?= $value['tenkhongdauvi'] ?>">
                                                        <span>
                                                            <img onerror="this.src='<?= THUMBS ?>/190x200x1/assets/images/noimage.png';" src="<?= THUMBS ?>/184x184x1/<?= UPLOAD_PRODUCT_L . $value['photo'] ?>" alt="<?= $value['ten' . $lang] ?>" />
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <div class="content-top">
                                                        <h3 class="content-top__title">
                                                            <a href="<?= $value['tenkhongdauvi'] ?>" title="<?= $value['ten' . $lang] ?>"><?= $value['ten' . $lang] ?></a>
                                                        </h3>
                                                        <div class="content-top__vote flex-center-left">

                                                            <li style="list-style: none;">
                                                                <i class="fas fa-star" style="color:rgb(225, 225, 225);"></i>
                                                                <i class="fas fa-star" style="color:rgb(225, 225, 225);"></i>
                                                                <i class="fas fa-star" style="color:rgb(225, 225, 225);"></i>
                                                                <i class="fas fa-star" style="color:rgb(225, 225, 225);"></i>
                                                                <i class="fas fa-star" style="color:rgb(225, 225, 225);"></i>
                                                            </li>
                                                        </div>
                                                        <div class="content-top__price flex-center-left"><span><?= $func->format_money($value['gia']) ?></span>
                                                        </div>
                                                    </div>
                                                    <div class="content-bottom">
                                                        <div class="content-bottom__wrap">
                                                            <ul class="description">
                                                                <?= (isset($value['mota' . $lang]) && $value['mota' . $lang] != '') ? htmlspecialchars_decode($value['mota' . $lang]) : '' ?>
                                                            </ul>
                                                            <a data-toggle="modal" class="addcart" data-action="addnow" data-id="<?= $value['id'] ?>" data-name="<?= $value['tenvi'] ?>" data-gia="<?= $func->format_money($value['gia']) ?>" href="#popup-detail"><i class="fal fa-cart-plus"></i> Thêm vào giỏ</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content-fade"></div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <div class="wrap_product">
    <div class="wrap_product_index" style="padding-top: 0;">
        <div class="fixwidth">
            <?php foreach ($danhmucnb_list2 as $key => $v) { ?>
                <div class="name_sp_1"><span><?= $v['ten' . $lang] ?></span></div>
                <div class="sp_cap1_all">
                    <div class="owl-carousel owl-theme auto_dcategory">
                        <?php $sanpham = $d->rawQuery("select ten$lang, tenkhongdauvi, mota$lang, ngaytao,photo, id,gia from #_product where id_list = ? and hienthi > 0 and type='san-pham' order by stt,id desc", array($v['id'])); ?>
                        <?php foreach ($sanpham as $key => $value) { ?>
                            <div class="boxproduct_item sp_cap1">
                                <a class="boxproduct_img" href="<?= $value['tenkhongdauvi'] ?>">
                                    <span>
                                        <img onerror="this.src='/assets/images/noimage.png';" src="<?= UPLOAD_PRODUCT_L . $value['photo'] ?>" alt="<?= $value['ten' . $lang] ?>" />
                                    </span>
                                </a>
                                <div class="boxproduct_info">
                                    <div class="boxproduct_name">
                                        <a href="<?= $value['tenkhongdauvi'] ?>" title="<?= $v['ten' . $lang] ?>"><?= $v['ten' . $lang] ?> </a>
                                        <div class="boxproduct_price">Giá:
                                            <span><?= $func->format_money($value['gia']) ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div> -->

<div class="wrap_bottom" style="padding: 0;">
    
</div>