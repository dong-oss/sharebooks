<?php 
session_start();  
header('content-type:text/html;charset=utf-8');
require_once 'inc/uploadclass.php';

$name=$_SESSION['username'];
$bookName=$_POST['bookname'];
$bookKind=$_POST['leb'];
$bookAuthor=$_POST['author'];
$bookSize=round($_FILES['myFile1']['size']/1024,2);
$upTime=date("Y-m-d H:i:s");
$load="books_pdf/".$bookKind;
$cont=$_POST['content1'];

$upload=new upload('myFile1',$load);
//$upload->uploadFile();
//$bookPath=$upload->desFile();
$pic=new upload('myPic1',"book_pic");

//$save=new Savebook($name,$bookName,$bookKind,$bookAuthor,$bookSize,$loadPath);

if($upload->uploadfile() && $pic->uploadfile()){
	
	$bookPath=$upload->desFile();
	$picPath=$pic->desFile();
	$save=new Savebook($name,$bookName,$bookKind,$bookAuthor,$bookSize,$bookPath,$upTime,$cont,$picPath);
	if($save->savebook()){
		echo "<script language='javascript'>alert('恭喜您！上传成功！');history.back(-1);</script>";
	}else{
		echo "<script language='javascript'>alert('上传成功，电子书信息存入失败！');window.location.href='usercenter.php';</script>";
	}  
}else{
	echo '<a href="upLoade.php">重新上传</a>'; 
	echo '<br>';
	echo "失败原因:";
	echo $upload->showError();
	
}
?>