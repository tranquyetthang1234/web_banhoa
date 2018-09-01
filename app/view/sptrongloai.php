<div id="sptrongloai">
	<?php if(count($listsp)>0):?>
<?php foreach($listsp as $row ){ ?>
<div class="product_box">
<img src="<?=BASE_DIR?>images/hoa/<?=$row['urlhinh']?>" align="left">
<h3><?=$row['tensp']?></h3>
<p class="price">GIÁ : <?=$row['gia'];?> VNĐ</p>
<div class="buynow"> 
<a href="#" idsp="<?=$row['idsp'];?>" class="chonhang">Chọn hàng</a> 
</div>
<a href="<?=BASE_DIR?>/sanpham/detail/<?=$row['idsp'];?>">Chi tiết</a>
</div>
<?php } ?>
<?php endif?>
</div>

<div id="thanhphantrang">
<?=$this->sp->pageslist(BASE_DIR."sanpham/cat/$idloai", $totalrows, 3,5, $currentpage);?>
</div>

