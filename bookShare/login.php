<html>
<?php
header("Content-Type:text/html;charset=utf-8"); 
?>
<head>
<link rel="stylesheet" type="text/css" href="css1/style.css" />

</head>
<body background="images/5.jpg">
<form action="chkuser.php" method="post" name="myform" >

 <div id="container"  style="font-size:17px">
 <div id="right">
 <h2><font color="#00FFFF">用户登录</font></h2>
<table width="600" border="0" align="center" cellspacing="1" >
<tr>
	<td width="20%" height="20" align="right" ><font color="#00FFFF">用户名：</font></td>
	<td width="80%" height="20"><input id="in1" type="text" name="name" placeholder="输入用户名"></td>
	
</tr>

<tr>
<td height="20" align="right" ><font color="#00FFFF">密&nbsp;码：</font></td>
	<td height="20"> <input id="in1" type="password" name="password" placeholder="输入密码"/></td>
</tr>
<tr>
	<td  align="center" colspan="2"><label><input type="checkbox" name="autologin[]"  ><font color="#00FFFF">下次自动登录</font></label></td>
</tr>
<tr>
	<td  height="40" align="right"><a href="regst.php"><font color="#00FFFF">注&nbsp;册&nbsp;&nbsp;&nbsp;</font></a></td>
	<td height="40"> <input id="in" type="submit" name="Submit"  value="登录"/>
	<input id="in" type="reset" name="Submit2" value="重置"/><a href="findpwd.php">&nbsp;忘记密码</a></td>
</tr>
<tr>
<td width="20%" height="20" align="right"><a href="index.php"><font color="#00FFFF">返回首页</font></a></td>
</tr>

</table>
</div>
</div>
</form>
</body>
</html>