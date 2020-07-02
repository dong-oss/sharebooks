
<?php
header("Content-type:text/html;charset=UTF-8");
require './inc/class.php';
   
$newname=$_POST['newname'];
$newpas=$_POST['newpassword'];
$newph=$_POST['phone'];
$newem=$_POST['eml'];
$tsp=$_POST['ts1'];
$tsdd=$_POST['tsda'];
$ck=new Regst($newname,$newpas,$newph,$newem,$tsp,$tsdd);
if($ck->add()){
	echo "<script language='javascript'>alert('注册成功！请登录！！');window.location.href='login.php';</script>";
}
	?>