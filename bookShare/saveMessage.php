<?php
session_start(); 
header('content-type:text/html;charset=utf-8');
include("conn/conn.php");
$userName=$_SESSION['username'];
$messaTime=date("Y-m-d H:i:s");
$tile=$_POST['title'];
$con=$_POST['content'];

$sql="insert into tb_message01 values('','$userName','$tile','$con','$messaTime')";
$rs=mysqli_query($conn,$sql);
if($rs){
	//header("location:message.php");
	echo "<script language='javascript'>alert('恭喜您！留言成功！');history.back(-1);</script>";
}