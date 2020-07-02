<?php
header ( "Content-type: text/html; charset=utf-8" ); //设置文件编码格式
session_start(); 
require './inc/class.php';
$p1=$_POST['p1'];
$p2=$_POST['p2'];

$name=$_SESSION['username'];

 $obj=new chkchange($name,$p1,$p2); 
 $obj->changepwd();
?>