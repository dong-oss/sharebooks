
<?php
include("conn/conn.php");

if($_GET['action']=="deleteM"){
	$sql="delete from tb_message01 where id='{$_GET['ID']}'";
	$result=mysqli_query($conn,$sql);
    if($result){
		echo "<script language='javascript'>alert('删除成功 ！');window.location.href='message.php';</script>";
	}
}
?>