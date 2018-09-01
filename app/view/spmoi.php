<?php $spmoi = $this->sp->spmoi(12);?>
<div id="spmoi">
<?php foreach($spmoi as $row){?>
<div class="product_box">
   <h3><?=$row['tensp']?></h3>	
   <img src="images/hoa/<?=$row['urlhinh'];?>"/>
   <p class="price">GIÁ : <?=$row['gia'];?> VNĐ</p>
   <div class="buynow"> 
    <a href="#" idsp="<?=$row['idsp'];?>" class="chonhang"> Chọn hàng</a>
   </div>
   <a href="#">Chi tiết</a>
</div>
<?php } ?>
</div>
