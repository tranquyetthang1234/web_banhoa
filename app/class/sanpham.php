<?php
class sanpham {
public $sp;
public $params;
public $current_action;
public $cname="sanpham";
function __construct($action,$params){
	$this->sp = new model_sanpham;
	$this->current_action=$action;
	$this->params = $params;
}
function index(){
	require_once "view/layout.php";
}
function detail(){		
	$id= $this->params[0]; settype($id,"int"); if ($id<=0) return;
	$chitietsp = $this->sp->detail($id);
	require_once "view/layout.php";
}
function cat(){		
   $idloai= $this->params[0]; $currentpage= $this->params[1];
   settype($idloai,"int"); settype($currentpage,"int");
   if ($idloai<=0) return; if ($currentpage<=0) $currentpage=1;
   $per_page=5; $totalrows=0; 
   $start = ($currentpage-1)*$per_page;
   $listsp = $this->sp->sptrongloai($idloai,$per_page, $start,$totalrows);
   require_once "view/layout.php";
}
function login(){
	require_once "view/formlogin.php";	
}
function login_(){
if ($_POST ==NULL) header('location:'. BASE_URL);
	$kq = $this->sp->xulydangnhap($_POST['email'], $_POST['password']);
	if ($kq) {
		$back =$_SESSION['back'];
		if ($back=="") header('location:'. BASE_URL);
		else { unset($_SESSION['back']); header('location:'. $back);}
	} else {
		$_SESSION['login_error']="Đăng nhập không thành công";
		header('location:'. BASE_URL."sanpham/login");
	}
}//login
public function xulydangnhap($e, $p){
   $e = strip_tags($e);  $p = strip_tags($p);	
   $sql=sprintf("SELECT iduser, email, password,hoten FROM users 
	  WHERE email='%s' AND password=md5(concat('%s', salt))", $e, $p);
   if(!$kq = $this->db->query($sql)) die( $this->db->error);
   if ($kq->num_rows==0){  return false; }
   $row = $kq->fetch_assoc();
   $_SESSION['login_id']=$row['iduser'];
   $_SESSION['login_email']=$row['email'];
   $_SESSION['login_hoten']=$row['hoten'];
   return true;
}//xulydangnhap

}
