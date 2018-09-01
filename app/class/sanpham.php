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
}
