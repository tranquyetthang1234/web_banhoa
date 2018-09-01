<?php $cacloai = $this->sp ->cacloai(); ?>


<ul>
<?php foreach($cacloai as $row){?>
<li> <a href="<?=BASE_URL?>/sanpham/cat/<?=$row['idloai']?>"><?=$row['tenloai']?></a> </li>
<?php } ?>
</ul>

