<?php

define("BASE_DIR", "/webbanhoa");
  $config = "http".((isset($_SERVER['HTTPS'])
   && !empty($_SERVER['HTTPS'])) ? "s" : "")."://".$_SERVER['HTTP_HOST'].BASE_DIR;
define("BASE_URL",$config);
define("HOST", "localhost");
define('DB_NAME',  "web_banhoa");
define('USER_DB', "root");
define('PASS_DB', "");
define('DEFAULT_CONTROLLER','sanpham');
define('DEFAULT_ACTION','index');
define('EMAIL_BUYER','teonv@localhost.com');
define('URL_SUCCESS','http://localhost/banhoa/sanpham/thanhcong');
define('URL_CANCEL','http://localhost/banhoa/sanpham/cancel');
