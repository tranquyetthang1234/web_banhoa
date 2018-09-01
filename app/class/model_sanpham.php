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

}//class
