<?php
header ( "Content-type: text/html; charset=utf-8" ); //�����ļ������ʽ
include("conn/conn.php");
$nc=$_GET['nc'];
if($nc==""){
	echo 0;
}else{  
	$sql=mysqli_query($conn,"select *from tb_user01 where username='{$nc}'");  
	$info=mysqli_fetch_array($sql);
	if($info==true){
		echo 1;
	}else{
		echo 2;
	} 
}
?>