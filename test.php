<?php
//header("Content-Type: text/html; charset=utf-8");
require_once('php_python.php');
$res= ppython("test::go");
echo $res['name'];

?>