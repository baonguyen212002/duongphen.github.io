<!-- <div class="title"><?= (@$title_cat != '') ? $title_cat : @$title_crumb ?></div> -->
<div class="content-main w-clear">
    <div class="product-categories__data w-100 flex-left">
        <div class="widget">
            <nav class="filter-box">
                <div class="filter-box__title toggle">
                    <p>Ngành hàng</p>
                </div>
                <ul class="filter-box__list">
                    <?php foreach ($splistmenu as $p => $v) { ?>
                        <li class="item flex-center-between menu_parent"><a href="<?= $v['tenkhongdau' . $lang] ?>"><?= $v['tenvi'] ?></a></li>
                    <?php } ?>
                </ul>
            </nav>
        </div>
        
        <?php if (isset($product) && count($product) > 0) { ?>
            <div class="short-product__content w-100">
                <div class="datas-top">
                    <div class="datas-top__wrap flex-center-between">
                        <p class="result">
                            Hiển thị <span>&nbsp;<?= count($product) ?> / <?= $total ?> Sản phẩm</span>
                        </p>
                    </div>
                </div>
                <div class="product flex-left column-4">
                    <?php foreach ($product as $k => $v) { ?>
                        <div class="product-item custom-hover">
                            <div class="product-item__wrap">
                                <div class="image">
                                    <a class="image-link" href="<?= $v['tenkhongdauvi'] ?>">
                                        <img onerror="this.src='<?= THUMBS ?>/190x200x1/assets/images/noimage.png';" src="<?= THUMBS ?>/184x184x1/<?= UPLOAD_PRODUCT_L . $v['photo'] ?>" alt="<?= $v['ten' . $lang] ?>" />
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="content-top">
                                        <h3 class="content-top__title">
                                            <a href="<?= $v['tenkhongdauvi'] ?>" title="<?= $v['ten' . $lang] ?>"><?= $v['ten' . $lang] ?></a>
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
                                        <div class="content-top__price flex-center-left"><span><?= $func->format_money($v['gia']) ?></span>
                                        </div>
                                    </div>
                                    <div class="content-bottom">
                                        <div class="content-bottom__wrap">
                                            <ul class="description">
                                                <?= (isset($v['mota' . $lang]) && $v['mota' . $lang] != '') ? htmlspecialchars_decode($v['mota' . $lang]) : '' ?>
                                            </ul>
                                            <a data-toggle="modal" class="addcart" data-action="addnow" data-id="<?= $v['id'] ?>" data-name="<?= $v['tenvi'] ?>" data-gia="<?= $func->format_money($v['gia']) ?>" href="#popup-detail"><i class="fal fa-cart-plus"></i> Thêm vào giỏ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content-fade"></div>
                        </div>
                    <?php } ?>

                </div>
                <div class="clear"></div>
                <div class="pagination-home"><?= (isset($paging) && $paging != '') ? $paging : '' ?></div>
            </div>
        <?php } else { ?>
            <div class="alert alert-warning" role="alert">
                <strong><?= khongtimthayketqua ?></strong>
            </div>
        <?php } ?>

    </div>
</div>
<?php if ($noidung_page != '') { ?>
    <div class="noidung_page_product">
        <div class="meta-toc">
            <div class="box-readmore">
                <ul class="toc-list" data-toc="article" data-toc-headings="h1, h2, h3"></ul>
            </div>
        </div>
        <div id="toc-content"><?= htmlspecialchars_decode($noidung_page) ?></div>
    </div>
<?php } ?>