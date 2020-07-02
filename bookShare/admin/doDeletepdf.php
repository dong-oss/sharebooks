<?php
include("conn/conn.php"); 

if($_GET['action']=="delete"){
	$sql="delete from tb_book01 where loadtime='{$_GET['ID']}'";
	
	
	$sqlstr="select *from tb_adminbook01 where loadtime='{$_GET['ID']}'";
    $sqlstr1=mysqli_query($conn,$sqlstr);
    $info=mysqli_fetch_array($sqlstr1);
    if($info){
    	$sqls="delete from tb_adminbook01 where loadtime='{$_GET['ID']}'";
	
		$result=mysqli_query($conn,$sql);
    }
	$result1=mysqli_query($conn,$sqls);
    if($result){
		echo "<script language='javascript'>alert('删除成功！');window.location.href='deletebook.php';</script>";
	}
}
?>