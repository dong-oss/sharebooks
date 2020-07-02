
<?php
header("Content-type:text/html;charset=UTF-8");
//require './class.php';
require './inc/class.php';
//$ms=new MySql("localhost","root","root","db_user01","gbk");  
//$conn=$ms->connect();
        
           
$username=$_POST['name'];
$password=$_POST['password'];
$aulogin=isset($_POST['autologin'])?1:0;     
//$newname=$_POST['newname'];
//$newpass=$_POST['newpassword'];
 
$ck=new Login("localhost","root","root","db_user01","utf8",$username,$password,$aulogin);
if($ck->log()){
	 echo "<script language='javascript'>alert('恭喜您！登录成功！');window.location.href='index.php';</script>";  
}

?>