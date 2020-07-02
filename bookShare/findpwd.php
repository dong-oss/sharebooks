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
     if(form.name.value=="")
	 {
	  alert('请输入用户名!');
	  form.da.select();
	  return(false);
	 }
	  return(true);
   }
 </script>
</head>
<body background="images/5.jpg">
<form action="writetsda.php" method="post" name="form" onSubmit="return chkinput(this)">

 <div id="container"  style="font-size:17px">
 <div id="right">
 <h2><font color="#00FFFF">找回密码</font></h2>
<table width="600" border="0" align="center" cellspacing="1" >
<tr>
    <td height="30" align="right" ><font color="#00FFFF">用户名：</font></td>
	<td height="20"> <input id="in1" type="text" name="name" placeholder="输入要找回的账号"/>
   <input type="submit" name="Submit2"  value="确定"/></td>
</tr>
<tr>
<td width="20%" height="40" align="left"><a href="index.php"><font color="#00FFFF">返回首页</font></a></td>
</tr>

</table>
</div>
</div>
</form>
</body>
</html>