<!-- 
<div class="header-cachtop">

    <div class="header-top">
        <div class="fixwidth d-flex justify-content-between align-self-center flex-wrap">
            <div class="menu_mobi align-self-center">
                <p class="icon_menu_mobi"><i class="fas fa-bars"></i></p>
               
                <a href="" class="home_mobi">
                    <i class="fa fa-home" aria-hidden="true"></i>
                </a>
            </div>

            <div class="menu_mobi_add">
                <div class="frm_timkiem">
                    <input type="text" class="input" id="keyword2" placeholder="Tìm kiếm" onkeypress="doEnter(event,'keyword2');">
                    <button type="submit" value="" class="nut_tim" onclick="onSearch('keyword2');"><i class="far fa-search"></i></button>
                </div>
            </div>

             <div class="diachi-top">
                Địa chỉ: <?= $optsetting['diachi'] ?>
            </div>
            <div>
                <?php foreach ($social1 as $v) { ?>
                <a href="<?= $v['link'] ?>" class="ftmxh" target="_blank" title="<?= $v['ten' . $lang] ?>"><img onerror="this.src='<?= THUMBS ?>/30x30x2/assets/images/noimage.png';" src="<?= THUMBS ?>/0x30x2/<?= UPLOAD_PHOTO_L . $v['photo'] ?>" alt="<?= $v['ten' . $lang] ?>" title="<?= $v['ten' . $lang] ?>"/></a>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="header" id="background-header">
        <div class="fixwidth d-flex justify-content-between flex-wrap">
            <div class="header_left align-self-center">
                <a class="header_logo" href=""><img onerror="this.src='<?= THUMBS ?>/0x100x2/assets/images/noimage.png';" src="<?= THUMBS ?>/0x100x2/<?= UPLOAD_PHOTO_L . $logo['photo'] ?>" /></a>

            </div>
            <div class="boxmenu_middle align-self-center ">
                <img class="banner" onerror="this.src='<?= THUMBS ?>/0x70x2/assets/images/noimage.png';" src="<?= THUMBS ?>/0x70x2/<?= UPLOAD_PHOTO_L . $baner['photo'] ?>" />
            </div>
            <div class="boxmenu_right d-flex align-self-center justify-content-between">

                <div class="icon-head d-flex align-self-center">
                    <div class="icon-img align-self-center"><img src="assets/images/img-data/hotline1.png" /></div>
                    <div class="icon-info align-self-center">
                        <div>Hotline</div>
                        <div><strong><?= $optsetting['hotline'] ?></strong></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<div class="header-cachtop">
    <div class="header-top">
        <div class="header-thongtin">
            <div class="fixwidth">
                <div class="header-top__inner flex-center-between">
                    <div class="diachi-top"><?= $optsetting['diachi'] ?></div>
                    <div class="lienhe-top d-flex">
                        <span>Hotline:</span>
                        <a><?= $optsetting['dienthoai'] ?></a>

                        <span>hoặc</span>
                        <a><?= $optsetting['email'] ?></a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-middle">
        <div class="fixwidth d-flex">
            <div class="header-middle__wrap flex-center-between w-100">
                <div class="left flex-inline-center-left">
                    <div class="menu_mobi align-self-center">
                        <p class="icon_menu_mobi"><i class="fas fa-bars"></i></p>
                        <a href="" class="home_mobi">
                            <i class="fa fa-home" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="align-self-center">
                        <a class="header_logo" href=""><img onerror="this.src='<?= THUMBS ?>/0x100x2/assets/images/noimage.png';" src="<?= THUMBS ?>/160x80x2/<?= UPLOAD_PHOTO_L . $logo['photo'] ?>" alt=""></a>
                    </div>
                </div>

                <div class="menu_mobi_add">
                    <div class="menu_mobi-add"></div>
                </div>
                <div class="header_left_mobile align-self-center">
                    <a class="header_logo" href=""><img onerror="this.src='thumbs/0x200x1/assets/images/noimage.png';" src="thumbs/0x200x1/upload/photo/logo-milany-2712.png" alt=""></a>
                </div>
                <div class="search-from">
                    <div class="frm_timkiem">
                        <input type="text" class="input" id="keyword" placeholder="Tìm kiếm" onkeypress="doEnter(event,'keyword');">
                        <button type="submit" class="nut_tim" onclick="onSearch('keyword');"><i class="far fa-search"></i></button>
                    </div>
                </div>
                <div class="right flex-inline-center-right">
                    <div></div>
                    <div class="wishlist-button">
                        <a href="#">
                            <div class="quick-icon">
                                <img src="/images/heart.png" width="24" height="24" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="cart-button">
                        <a href="#">
                            <div class="quick-icon">
                                <img src="/images/cart.png" width="24" height="24" alt="">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- <div>
                            </div> -->
        </div>
    </div>
    <div class="header-height" <?php if ($com !== 'index') echo 'style="display: none;"'; ?>>
        <div id="menu_top">
            <div class="fixwidth clearfix d-flex">
                <div class="category">
                    <p class="category-title flex-inline-center-left">
                        Sản phẩm
                    </p>
                    <div class="category-list">
                        <ul class="category-list__items">
                            <?php foreach($splistmenu_cat_nb as $cat_nb => $cnb) { ?>
                            <li class="item"><a title="<?= $cnb['ten'.$lang] ?>" href="<?= $cnb[$sluglang] ?>"><?= $cnb['ten'.$lang] ?></a></li>
                            <?php } ?>
                        </ul>

                    </div>
                </div>
                <div class="menu">
                    <ul class="menu_cap_cha d-flex">
                        <li class="menulicha"><a href="" title="TRANG CHỦ">trang chủ</a></li>
                        <?php if ($splistmenu_nb) { ?>
                            <?php foreach ($splistmenu_nb as $c_nb => $list_nb) ?>
                            <li class="menulicha"><a href="<?= $list_nb[$sluglang] ?>"><?= $list_nb['ten' . $lang] ?></a></li>
                        <?php } ?>
                        <!-- <li class="menulicha "><a href="san-pham" title="SẢN PHẨM">SẢN PHẨM</a>
                            <?php if ($splistmenu) { ?>
                                <ul class="menu_cap_con">
                                    <?php foreach ($splistmenu as $c => $cat) { ?>
                                        <li><a title="<?= $cat['ten' . $lang] ?>" href="<?= $cat[$sluglang] ?>"><?= $cat['ten' . $lang] ?></a>
                                            <?php
                                            $spcatmenu = $d->rawQuery("select ten$lang, tenkhongdauvi, id,photo from #_product_cat where type = ? and id_list = ? and hienthi > 0 order by stt,id desc", array('san-pham', $cat['id']));
                                            if (count($spcatmenu) > 0) { ?>
                                                <ul class="menu_cap_2">
                                                    <?php foreach ($spcatmenu as $c1 => $cat1) {
                                                        $spitemmenu = $d->rawQuery("select ten$lang, tenkhongdauvi, id,photo from #_product_item where type = ? and id_cat = ? and hienthi > 0 order by stt,id desc", array('san-pham', $cat1['id']));
                                                    ?>
                                                        <li><a title="<?= $cat1['ten' . $lang] ?>" href="<?= $cat1[$sluglang] ?>"><?= $cat1['ten' . $lang] ?></a>
                                                            <?php if (count($spitemmenu) > 0) { ?>
                                                            <ul class="menu_cap_3">
                                                                <?php foreach ($spitemmenu as $c1 => $cat2) { ?>
                                                                    <li><a title="<?= $cat2['ten' . $lang] ?>" href="<?= $cat2[$sluglang] ?>"><?= $cat2['ten' . $lang] ?></a></li>
                                                                <?php } ?>
                                                            </ul>
                                                            <?php } ?>

                                                        </li>
                                                    <?php } ?>
                                                </ul>
                                            <?php } ?>
                                        </li>
                                    <?php } ?>
                                </ul>
                            <?php } ?>
                        </li> -->
                        <li class="menulicha"><a href="tin-tuc" title="TIN TỨC">tin thị trường</a></li>
                        <li class="menulicha"><a href="gioi-thieu" title="GIỚI THIỆU">giới thiệu</a></li>
                        <li class="menulicha"><a href="lien-he" title="LIÊN HỆ">liên hệ</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>