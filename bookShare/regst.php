
<html>
<?php
header("Content-Type:text/html;charset=utf-8");
?>
<head>

<link rel="stylesheet" type="text/css" href="css1/style.css" />
<script language="javascript">
function chknc(nc){
	var xmlhttp;
	if(window.ActiveXObject){
		xmlhttp=new ActiveXObject('Microsoft.XMLHTTP');
	}else{
		xmlhttp=new XMLHttpRequest();
	}
	xmlhttp.open("GET","chkusername.php?nc="+nc,true);
	xmlhttp.onreadystatechange=function(){
		if(xmlhttp.readystate==4 && xmlhttp.status==200){
			var msg=xmlhttp.responseText;
			if(msg==0){
				alert("请输入昵称！");
			}else if(msg==1){
				alert("该昵称已被使用！");
			}else{
				alert("该昵称可以使用！");
			}
		}
	}
	xmlhttp.send(null);
}
</script>
<script language="javascript">
  function chkinput(form)
  {
    if(form.newname.value=="")
	{
	 alert("请输入昵称!");
	 form.newname.select();
	 return(false);
	} }	
	if(form.newname.value.length>10)
	 {
	 alert("用户名长度应小于10!");
	 form.newname.select();
	 return(false);
	 }	
	if(form.newpassword.value=="")
	{
	 alert("请输入注册密码!");
	 form.newpassword.select();
	 return(false);
	}
    if(form.newpassword1.value=="")
	{
	 alert("请输入确认密码!");
	 form.newpassword1.select();
	 return(false);
	 }	
	if(form.newpassword.value.length<6)
	 {
	 alert("注册密码长度应大于6!");
	 form.newpassword.select();
	 return(false);
	 }	
	if(form.newpassword.value!=form.newpassword1.value)
	 {
	 alert("密码与重复密码不同!");
	 form.p1.select();
	 return(false);
	 }
	if(form.phone.value=="")
	{
	 alert("请输入联系电话!");
	 form.phone.select();
	 return(false);
	 }
	if(form.phone.value.length<11)
	 {
	 alert("位数长度应大于11!");
	 form.phone.select();
	 return(false);
	 }	
   if(form.email.value=="")
	{
	 alert("请输入电子邮箱地址!");
	 form.email.select();
	 return(false);
	 }
	if(form.eml.value.indexOf('@')<0)
	{
	 alert("请输入正确的电子邮箱地址!");
	 form.email.select();
	 return(false);
	 }
   if(form.tsda.value=="")
	{
	 alert("请输密码提示答案!");
	 form.tsda.select();
	 return(false);
	 }
   if(form.ts1.value==1)	
     {
	 alert("请选择或输入密码提示答案!");
	 form.ts1.select();
	 return(false);
	 }
   return(true);
  }
</script>
</head>
<body background="images/5.jpg">
<form action="regstuser.php" method="post" name="form1" onSubmit="return chkinput(this)" >

 <div id="container"  style="font-size:17px">
 <div id="right">
 <h2><font color="#00FFFF">用户注册</font></h2>
<table width="600" border="0" align="center" cellspacing="1" >
<tr>
	<td width="20%" height="20" align="right" ><font color="#00FFFF">用户名：</font></td>
	<td width="80%" height="20" ><input id="in1" type="text" name="newname" placeholder="用户名由汉字或数字组成">
	<span  style="color: #FF0000">&nbsp;*</span>&nbsp;
   </td>
	
</tr>

<tr>
<td height="20" align="right" ><font color="#00FFFF">登录密码：</font></td>
	<td height="20" > <input id="in1" type="password" name="newpassword" placeholder="输入密码"/><span  style="color: #FF0000">&nbsp;*</span></td>
</tr>
<tr>
<td height="20" align="right" ><font color="#00FFFF">确认密码：</font></td>
	<td height="20"> <input id="in1" type="password" name="newpassword1" placeholder="再次输入密码"/><span  style="color: #FF0000">&nbsp;*</span></td>
</tr>
<tr>
	<td width="20%" height="20" align="right" ><font color="#00FFFF">手机号：</font></td>
	<td width="80%" height="20"><input id="in1" type="text" name="phone" placeholder="请输入常用手机号"><span  style="color: #FF0000">&nbsp;*</span></td>	
</tr>
<tr>
<td height="20" align="right" ><font color="#00FFFF">电子邮箱：</font></td>
	<td height="20"> <input id="in1" type="text" name="eml" placeholder="输入邮箱"/><span  style="color: #FF0000">&nbsp;*</span></td>
</tr>
<tr>
  <td height="20" align="right"><font color="#00FFFF">密码提示：</font></td>
    <td height="20">
                          <select name="ts1" id="in1">
                            <option selected value=1>请选择问题</option>
                            <option value="您的生日">您的生日</option>
                            <option value="你的爱好">你的爱好</option>
                            <option value="您母亲的名字">您母亲的名字</option>
                            <option value="您父亲的名字">您父亲的名字</option>
                            <option value="您最喜欢的花">您最喜欢的花</option>
                          </select><span  style="color: #FF0000">&nbsp;*</span>

                    </tr>
                    <tr>
                      <td height="20" align="right"><font color="#00FFFF">提示答案：</font></td>
                      <td height="20">
                          <input type="text" name="tsda" size="25" id="in1" onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
                          <span style="color: #FF0000">*</span></td>
                    </tr>
                    <tr>
<tr>
	<td  height="40" align="center"><a href="login.php"><font color="#00FFFF">&nbsp;登录</font></a></td>
	<td height="40"> <input class="in" type="submit" name="Submit"  value="确认注册"/>
	<input  class="in"  type="reset" name="Submit2" value="重置"/></td>
</tr>
<tr><td height="20" align="center"><a href="index.php"><font color="#00FFFF">返回首页</font></a></td>
</tr>
</table>
</div>
</div>
</form>
</body>
</html>