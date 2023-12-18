<div class="wrap_tintuc">
    <div class="container">
        <div class="banner-list">
            <div class="flex-center-between w-100">
                <?php if($tintuc) { ?>
                    <?php foreach($tintuc as $bv) { ?>
                    <div class="banner-list__item">
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
	<div class="fixwidth">
		<div class="wrap_title_gioithieu">
			<div class="md-12-50 md-9-50 md-7-100 pd-20 rs-pd">
                <div class="text">
                    <div class="gt_noidung"><?= htmlspecialchars_decode($gioithieu['mota' . $lang]) ?></div>
                    <div class="flex-left"><a class="xemgt" href="gioi-thieu"><span>Xem thêm</span><i class="fa fa-chevron-right" aria-hidden="true"></i></a></div>
                </div>
				
			</div>
			<div class="md-12-50 md-9-50 md-7-100 pd-20 rs-pd">
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
		</div>
	</div>
</div>
<div class="wrap_product">
    <div class="wrap_product_index">
        <div class="fixwidth">
            <div class="row">
                <div class="col-md-12">
                     
                </div>
            </div>
        </div>
    </div>
</div>
<div class="wrap_product">
    <div class="wrap_product_index" style="padding-top: 0;">
        <div class="fixwidth">
            <?php foreach ($danhmucnb_list2 as $key => $v) { ?>
                <div class="name_sp_1"><span><?= $v['ten' . $lang] ?></span></div>
                <div class="sp_cap1_all">
                    <div class="owl-carousel owl-theme auto_dcategory">
                        <?php $sanpham = $d->rawQuery("select ten$lang, tenkhongdauvi, mota$lang, ngaytao,photo, id,gia from #_product where id_list = ? and hienthi>0 and type='san-pham' order by stt,id desc", array($v['id'])); ?>
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
</div>


<div class="background-dv" id="background-tuvan">
    <div class="fixwidth">
        <div class="tit_dknt">
            <p>Đăng ký nhận tin</p>
            <span>Đăng ký thông tin để nhận được sự trợ giúp của chúng tôi</span>
        </div>
        <form class="form-contact validation-contact" novalidate method="post" action="validation.php" enctype="multipart/form-data" style="width: 100%;">
            <div class="row">
                <div class="input-contact col-sm-6">
                    <input type="text" class="form-control" id="ten" name="name-newsletter" placeholder="Họ tên" required />
                    <div class="invalid-feedback">Vui lòng nhập họ và tên</div>
                </div>
                <div class="input-contact col-sm-6">
                    <input type="number" class="form-control" id="dienthoai" name="phone-newsletter" placeholder="Số điện thoại" required />
                    <div class="invalid-feedback">Vui lòng nhập số điện thoại</div>
                </div>
            </div>
            <div class="row">
                <div class="input-contact col-sm-6">
                    <input type="text" class="form-control" id="diachi" name="diachi-newsletter" placeholder="Địa chỉ" required />
                    <div class="invalid-feedback">Vui lòng nhập địa chỉ</div>
                </div>
                <div class="input-contact col-sm-6">
                    <input type="email" class="form-control" id="email" name="email-newsletter" placeholder="Email" required />
                    <div class="invalid-feedback">Vui lòng nhập địa chỉ email</div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10">
                    <div class="input-contact">
                        <textarea class="form-control" id="noidung" name="noidung-newsletter" placeholder="Nội dung" required></textarea>
                        <div class="invalid-feedback">Vui lòng nhập nội dung</div>
                    </div>
                    <div class="g-recaptcha" data-sitekey="6Lf0zicpAAAAAGodEYJJy1k-U-10qLJw8qvnoeEq"></div>
                </div>
                
                <div class="col-md-2">
                    <input style="width: 100%; height: 90%;font-size: 20px;font-weight: 600;background: red;" type="submit" class="btn btn-primary" name="submit-newsletter" value="Gửi" disabled />
                </div>
            </div>
        </form>
    </div>
</div>
<div class="wrap_bottom" style="padding: 0;">
    <div>
        <div class="d-flex justify-content-between flex-wrap">
            <div class="left_bottom">
                <div class="from_left_bottom">
                    <div class="title_bottom">THÔNG TIN ĐỐI TÁC</div>
                    <div class="slider slider-nav">
                        <?php foreach ($kh as $k => $v) { ?>
                            <div>
                                <div class="item_kh_img">
                                    <img onerror="this.src='<?= THUMBS ?>/195x195x1/assets/images/noimage.png';" src="<?= THUMBS ?>/195x195x1/<?= UPLOAD_NEWS_L . $v['photo'] ?>" alt="<?= $v['ten' . $lang] ?>">
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="slider slider-for">
                        <?php foreach ($kh as $k => $v) { ?>
                            <div>
                                <div class="item_kh_info">
                                    <div class="mota_kh"><?= $v['mota' . $lang] ?></div>
                                    <i class="fas fa-quote-left"></i>
                                    <div class="name_kh"><?= $v['ten' . $lang] ?></div>
                                    <div class="diachi_kh"><?= $v['diachi'] ?></div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="right_bottom">
                <div class="from_left_bottom" style="width: 90%;">
                    <div class="title_bottom">VIDEO GIỚI THIỆU</div>
                    <div class="owl-carousel owl-theme auto_video">
                        <?php foreach ($video as $k => $v) { ?>
                            <a data-fancybox="video" class="tailvideo_item_owl" data-src="<?= $v['video'] ?>" data-name="<?= $v['ten' . $lang] ?>" title="<?= $v['ten' . $lang] ?>" style="background:url(https://img.youtube.com/vi/<?= $func->getYoutube($v['video']) ?>/hqdefault.jpg) no-repeat center; background-size:cover;">
                            </a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>