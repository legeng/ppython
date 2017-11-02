<?php
//header("Content-Type: text/html; charset=utf-8");
require_once('php_python.php');
$res= ppython("test::go",['name'=>'ligen&yuandan','age'=>26]);
echo $res['name'];

?>