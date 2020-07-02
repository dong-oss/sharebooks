
<?php
include("conn/conn.php"); 
$passtime=date("Y-m-d H:i:s");
if($_GET['action']=="check"){
	$sql="update tb_book01 set shenhe='1',passtime='{$passtime}' where id='{$_GET['ID']}'";
	$result=mysqli_query($conn,$sql);
    if($result){
		echo "<script language='javascript'>alert('审核成功！');window.location.href='shenhebook.php';</script>";
	}
}
?>