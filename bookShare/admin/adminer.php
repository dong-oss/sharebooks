
<html>
<?php
header("Content-Type:text/html;charset=utf-8"); 
?>
<head>
<link rel="stylesheet" type="text/css" href="css1/style.css" />
<title>
电子书共享网站后台管理登录
</title>
</head>
<body background="images/5.jpg">
<form action="chkadmin.php" method="post" name="myform" >

 <div id="container"  style="font-size:17px">
 <div id="right">
 <h2><font color="#00FFFF">管理员登录</font></h2>
<table width="400" border="0" align="center" cellspacing="1" >
<tr>
	<td width="20%" height="20" align="right" ><font color="#00FFFF">管理员：</font></td>
	<td width="80%" height="20"><input id="in1" type="text" name="name" placeholder="输入用户名"></td>
	
</tr>

<tr>
<td height="20" align="right" ><font color="#00FFFF">密&nbsp;码：</font></td>
	<td height="20"> <input id="in1" type="password" name="password" placeholder="输入密码"/></td>
</tr>

<tr>
	<td  height="40" align="right">&nbsp;&nbsp;&nbsp;</td>
	<td height="40"> <input id="in" type="submit" name="Submit"  value="登录"/>
	<input id="in" type="reset" name="Submit2" value="重置"/></td>
</tr>
<tr>
<td width="20%" height="20" align="right"><a href="../index.php" target="_blank"><font color="#00FFFF">查看首页</font></a></td>
<td width="20%" height="20" align="center"><a href="../logAndreg.php" ><font color="#00FFFF">返回</font></a></td>
</tr>

</table>
</div>
</div>
</form>
</body>
</html>