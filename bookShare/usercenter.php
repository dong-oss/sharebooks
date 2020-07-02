<?php
   session_start();
   header("Content-Type:text/html;charset=utf-8");
   include("conn/conn.php"); 
   if(!isset($_SESSION['username']))
  {
 	 echo "<script>alert('您还没有登录,请先登录!');window.location.href='login.php';</script>";
  	 exit;
  }
  
    
  
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>个人中心</title>
<link rel="stylesheet" type="text/css" href="css1/style2.css" />  

</head>

<body background="images/10.jpg">
<?php include ("top.php");
$sqlstr="select *from tb_user01 where username='{$_SESSION['username']}'";
	$result=mysqli_query($conn,$sqlstr);
	$myrow=mysqli_fetch_array($result);
?>
		<div class="us_lianx">
			<div id="state"><h>个人中心</h></div>
			<hr>
			<a href="logout.php">退出登录</a>
			<p>用户昵称：<?php echo $_SESSION['username'];?></p> 
			<p>QQ邮箱：<?php echo $myrow['email'];?></p>
			<p>联系电话：<?php echo $myrow['phone'];?></p>
			<p>其他:无</p> 
<hr>
			<div>
				<h3>查看更多</h3>
				<a href="changeInfo.php"><i></i><span>修改个人信息.</span></a>
				<a href="changpwd.php"><i></i><span>修改登录密码.</span></a>
				<a href="upLoade.php"><i></i><span>分享电子书.</span></a>
				<a href="deletePdf.php"><i></i><span>上传记录.</span></a>
				<a href="lookMessage.php "><i></i><span>查看留言.</span></a>
				<a href="message.php "><i></i><span>发表留言.</span></a>
				
			</div>
		</div>

</body>
</html>
