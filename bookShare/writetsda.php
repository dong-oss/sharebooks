
<html>
<?php
header("Content-Type:text/html;charset=utf-8"); 
?>
<head>
<link rel="stylesheet" type="text/css" href="css1/style.css" />
<title>找回密码
</title>
<script language="javascript">
   function chkinput(form)
   {
     if(form.da.value=="")
	 {
	  alert('请输入密码提示答案!');
	  form.da.select();
	  return(false);
	 }
	  return(true);
   }
 </script>
</head>
<?php
 include("conn/conn.php");
?>
<body background="images/5.jpg">
<?php
	  $nc=$_POST['name'];
	  $sql=mysqli_query($conn,"select * from tb_user01 where username='{$nc}'");
	  $info=mysqli_fetch_array($sql);
	  if($info==false)
	   {
	     echo "<script>alert('无此用户!');history.back();</script>";;
		 exit;
	   } else{ 
	?>
<form action="showpwd.php" method="post" name="form" onSubmit="return chkinput(this)">

 <div id="container"  style="font-size:17px">
 <div id="right">
 <h2><font color="#00FFFF">找回密码</font></h2>
<table width="600" border="0" align="center" cellspacing="1" >
<tr>
    <td height="30" align="right" ><font color="#00FFFF">用户名：</font></td>
    <td ><input id="in1" type="text" name="na" value="<?php echo $nc;?>"/></td></td>
    </tr>
<tr>
	<td width="20%" height="20" align="right" ><font color="#00FFFF">提示问题:</font></td>
	<td width="80%" height="20"><?php echo $info['ts'];  ?></td>
</tr>
<tr>
    <td height="20" align="right" ><font color="#00FFFF">问题答案：</font></td>
	<td height="20"> <input id="in1" type="text" name="da" placeholder="输入问题答案"/></td>
</tr>
<tr>
	
	<td height="40"> <input id="in" type="submit" name="Submit"  value="提交"/></td>
</tr>
<tr>
<td width="20%" height="20" align="right"><a href="index.php"><font color="#00FFFF">返回首页</font></a></td>
</tr>
</table>
</div>
</div>
</form>
<?php  
	   }
?>
</body>
</html>