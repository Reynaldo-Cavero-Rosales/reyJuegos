<?php
header("Cache-Control: no-store, no-cache, must-revalidate");
session_start();
define('DS',DIRECTORY_SEPARATOR);
define('ROOT',dirname(__FILE__).DS);
define('PATH',ROOT.'applications'.DS);
define('app_name','Working : intranet');
define('app_body_id','3');
define('base_url',"http://".$_SERVER["SERVER_NAME"]."/new/");
define('key_segur','@pp.n3t4xx3s.c0m');

require_once PATH.'Request.php';
require_once PATH.'Bootstrap.php';
require_once PATH.'Controller.php';
require_once PATH.'View.php';
require_once PATH.'Database.php';
require_once PATH.'Model.php';
require_once PATH.'Session.php';
require_once PATH.'Luu.php';

Luu::init($_POST,key_segur);
Bootstrap::run(new Request);


