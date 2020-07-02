
<?php 
header('content-type:text/html;charset=utf-8');
//print_r($_FILES);
//1.通过$_FILES文件上传变量接收上传文件信息
$fileInfo=$_FILES['myFile1'];
$filename=$fileInfo['name'];
$type=$fileInfo['type'];
$tmp_name=$fileInfo['tmp_name'];
$size=$fileInfo['size'];
$error=$fileInfo['error'];
echo $type;
?>