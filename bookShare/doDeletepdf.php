<?php
session_start();
include("conn/conn.php");
$username=$_SESSION['username'];
if($_GET['action']=="delete"){
	$sql="delete from tb_book01 where id='{$_GET['time']}'";
	$result=mysqli_query($conn,$sql);
    if($result){
		echo "<script language='javascript'>alert('删除成功！');window.location.href='deletePdf.php';</script>";
	}
}
?>