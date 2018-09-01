<?php  session_start();
require_once "config.php";
function __autoload($class_name) {
    $filename = "class/".$class_name . '.php';	
    if (file_exists($filename)) require_once($filename); 	
}
$url = $_SERVER['REQUEST_URI']; 
$arr = explode("/", $url);
$cname = $arr[2]; $action = $arr[3]; 
$params=NULL; for($i=4; $i<count($arr); $i++) $params[] = $arr[$i];
if ($cname =="")  $cname= DEFAULT_CONTROLLER;	
if ($action =="") $action=DEFAULT_ACTION;	
$c = new $cname($action, $params);
if (method_exists($c,$action)) $c ->$action();
