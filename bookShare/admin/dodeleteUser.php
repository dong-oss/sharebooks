
<?php
include("conn/conn.php"); 

if($_GET['action']=="deleteU"){
	$sql="delete from tb_user01 where id='{$_GET['ID']}'";
	$result=mysqli_query($conn,$sql);
    if($result){
		echo "<script language='javascript'>alert('删除成功！');window.location.href='deletebook.php';</script>";
	}
}
?>