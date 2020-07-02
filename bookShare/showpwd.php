
<html>
<?php
header("Content-Type:text/html;charset=utf-8"); 
?>
<head>
<link rel="stylesheet" type="text/css" href="css1/style.css" />
<title>找回密码
</title>
</head>
<?php
 include("conn/conn.php");
 $na=$_POST['na'];
 $da=$_POST['da'];
 $sql=mysqli_query($conn,"select * from tb_user01 where username='{$na}'");
 $info=mysqli_fetch_array($sql);
 if($info['tsda']!=$da)
 {
   echo "<script>alert('提示答案输入错误!');history.back();</script>";
  exit;
 }
 else
 {
?>
<body background="images/5.jpg">
 <div id="container"  style="font-size:17px">
 <div id="right">
 <h2><font color="#00FFFF">找回密码</font></h2>
<table width="600" border="0" align="center" cellspacing="1" >
<tr>
    <td height="30" align="right" ><font color="#00FFFF">用户名：</font></td>
    <td ><font color="00FFFF"><?php echo $na;?></font></td>
    </tr>
<tr>
	<td width="20%" height="20" align="right" ><font color="#00FFFF">登录密码</font></td>
	<td width="80%" height="20"><?php echo $info['password'];  ?></td>
</tr>
<tr>
	<td width="20%" height="20" align="right"><a href="index.php"><font color="#00FFFF">返回首页</font></a></td>
	<td width="80%" height="20" align="center"><a href="login.php"><font color="#00FFFF">前往登录</font></a></td>
</tr>
</tr>

</table>
<?php 
 }
 ?>
</div>
</div>
</body>
</html>