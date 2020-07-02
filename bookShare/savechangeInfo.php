<?php
include("conn/conn.php"); 
header("Content-Type:text/html;charset=utf-8");
$na="ds";
$email=$_POST['email'];

$tel=$_POST['tel'];

$que=$_POST['ts'];
$ans=$_POST['tsd'];

$rs=mysqli_query($conn,"update tb_user01 set email='$email',phone='$tel',ts='$que',tsda='$ans' where username='$na'");
if($rs) {
	echo "<script language='javascript'>alert('恭喜您！修改成功！');window.location.href='usercenter.php';</script>";
}

?>