<?php
class model_sanpham{
public $db;
public function __construct(){
	$this->db= new mysqli(HOST, USER_DB, PASS_DB, DB_NAME);	
	$this->db->set_charset("utf8");
	//echo "<br>Đây là hàm khởi tạo trong model<br>";
}//construct	
public function spmoi($sosp=10){
	$sql="SELECT idsp, tensp, mota, urlhinh, ngaycapnhat, gia FROM sanpham 
		  WHERE anhien=1 ORDER BY ngaycapnhat DESC LIMIT 0, $sosp";
	if(!$kq = $this->db->query($sql)) die( $this->db->error);
	foreach ($kq as $row) $data[] = $row;
	return $data;
}//spmoi

public function cacloai(){
	$sql="SELECT idloai, tenloai FROM loaisp WHERE anhien=1 ORDER BY thutu";
	if(!$kq = $this->db->query($sql)) die( $this->db->error);
	foreach ($kq as $row) $data[] = $row;
	return $data;
}//cacloai
public function detail($id){
    $sql="SELECT idsp, tensp, mota, urlhinh, ngaycapnhat, gia, soluongtonkho
    FROM sanpham WHERE idsp=$id";
    if (!$kq= $this->db->query($sql)) die($this->db->error);
    if (!$kq) return FALSE;
    return $kq->fetch_assoc();		
}
public function sptrongloai($idloai,$per_page=5, $startrow=0, &$totalrows){	
   $sql="SELECT idsp, tensp, mota, urlhinh, ngaycapnhat, gia FROM sanpham 
         WHERE idloai=$idloai AND anhien=1 
	   ORDER BY ngaycapnhat DESC LIMIT $startrow, $per_page";
   if(!$kq = $this->db->query($sql)) die( $this->db->error);
   foreach ($kq as $row) $data[] =	$row;
   $sql="SELECT count(*) FROM sanpham WHERE idloai=$idloai AND anhien=1";
   if(!$rs = $this->db->query($sql)) die( $this->db->error);
   $row = $rs->fetch_row();
   $totalrows=$row[0];
   return $data;
}//function

function pageslist($baseurl, $totalrows, $offset,$per_page, $currentpage){
   $totalpages = ceil($totalrows/$per_page);
   $from = $currentpage-$offset; $to = $currentpage +$offset;
   if ($from<=0) $from=1; 
   if ($to>$totalpages) $to=$totalpages;
   $links="";
   for ($j=$from; $j<=$to; $j++) {
  if ($j==$currentpage) $links = $links . "<span>$j</span>"; 
  else $links = $links . "<a href = '$baseurl/$j/'>$j</a>";   
   }
   return $links;
}//function

}//class
