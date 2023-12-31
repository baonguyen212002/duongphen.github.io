<div class="title"><h1><?=(@$title_cat!='')?$title_cat:@$title_crumb?></h1></div>

<div class="content-main w-clear">
    <?php if(count($news)>0) {?>
        <div class="content-main w-clear">
        <?php foreach($news as $k=>$v) { ?>
            <div class="news flex">
                
                <div class="info-news">
                    <div class="time-news flex mb-20"><a class="text-up fs-14 date_item mr-20 fw-600" href="tin-tuc"><?=tinthitruong?></a> <span class="date text-up fs-14 color_desc mr-20"><?=date("d/m/Y",$v['ngaytao'])?></span></div>
                    <h3 class="name-news"><a class="text-decoration-none" href="<?=$v[$sluglang]?>" title="<?=$v['ten'.$lang]?>"><?=$v['ten'.$lang]?></a></h3>
                    <div class="desc-news text-split"><?=$v['mota'.$lang]?></div>
                </div>
                <div class="pic-news scale-img">
                    <a class="text-decoration-none" href="<?=$v[$sluglang]?>" title="<?=$v['ten'.$lang]?>"><img onerror="this.src='<?=THUMBS?>/320x184x1/assets/images/noimage.png';" src="<?=THUMBS?>/350x184x1/<?=UPLOAD_NEWS_L.$v['photo']?>" alt="<?=$v['ten'.$lang]?>">
                    </a>
                </div>
            </div>
        <?php }?>
        </div>
        <div class="clear"></div>
     <div class="pagination-home"><?=(isset($paging) && $paging != '') ? $paging : ''?></div>
    <?php } else { ?>
        <div class="alert alert-warning" role="alert">
            <strong><?=khongtimthayketqua?></strong>
        </div>
    <?php } ?>
    
</div>
<?php if($noidung_page!=''){?>
<div class="noidung_page">
    <div class="meta-toc">
        <div class="box-readmore">
            <ul class="toc-list" data-toc="article" data-toc-headings="h1, h2, h3"></ul>
        </div>
    </div>
    <div id="toc-content"><?=htmlspecialchars_decode($noidung_page)?></div>
</div>
<?php }?>