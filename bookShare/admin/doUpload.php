<?php
header('content-type:text/html;charset=utf-8');
require_once 'uploadclass.php'; 

$bookName=$_POST['bookname'];
$bookAuthor=$_POST['author'];
$bookSize=round($_FILES['myFile1']['size']/1024,2);//文件大小以kb为单位，保留2位小数
$upTime=date("Y-m-d H:i:s");
$load="books_pdf";
$cont=$_POST['content1'];
$bookKind=$_POST['leb'];
$upload=new upload('myFile1',$load);

$pic=new upload('myPic1',"book_pic");


if($upload->uploadfile() && $pic->uploadfile()){
	
	$bookPath=$upload->desFile();
	$picPath=$pic->desFile();
	$save=new Savebook($bookName,$bookAuthor,$bookSize,$bookPath,$upTime,$cont,$picPath);
	if($save->savebook1()&& $save->savebook2($bookKind)){
		echo "<script language='javascript'>alert('恭喜您！上传成功！');history.back(-1);</script>";
	}else{
		echo "<script language='javascript'>alert('上传成功，电子书信息存入失败！');window.location.href='addbook.php';</script>";
	}  
}else{
	echo '<a href="addbook.php">重新上传</a>'; 
	echo '<br>';
	echo "失败原因:";
	echo $upload->showError();
	
}
?>