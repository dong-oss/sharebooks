 <?php 
 header("Content-Type:text/html;charset=utf-8");
   include("conn/conn.php");
?>
<html>
<head>
<title>个人中心-修改登录密码</title>
<script language="javascript">
		  function chkinput1(form)
			  {
			    if(form.p1.value=="")
				{
				  alert("请输入原密码!");
				  form.p1.select();
				  return(false);
				}
				if(form.p2.value=="")
				{
				  alert("请输新密码!");
				  form.p2.select();
				  return(false);
				}      
			   if(form.p3.value=="")
				{
				  alert("请输确认密码!");
				  form.p3.select();
				  return(false);
				} 
				if(form.p2.value!=form.p3.value)
				{
				  alert("密码与确认密码不同!");
				  form.p2.select();
				  return(false);
				}
				if(form.p2.value.length<6)
				{
				  alert("新密码长度应大于6!");
				  form.p2.select();
				  return(false);
				}
				return(true);
			  }
		  </script>
</head>
<body>

<?php
include ("usercenter.php");
?>
<table id="ri" width="300" height="200" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="25"><div align="center" style="color: #760602">修改密码</div></td>
        </tr>
        <tr>
          <td height="120"><table width="250" height="110" align="center" cellpadding="0" cellspacing="1">
             
              <form name="form1" method="post" action="savechangepwd.php" onSubmit="return chkinput1(this)">
                <table>
                <tr>
                  <td width="100" height="30" ><div align="center">原密码：</div></td>
                  <td width="150"><div align="left">
                      <input type="password" name="p1" size="20">
                  </div></td>
                </tr>
                <tr>
                  <td height="30" ><div align="center">新密码：</div></td>
                  <td height="30" ><div align="left">
                      <input type="password" name="p2" size="20" >
                  </div></td>
                </tr>
                <tr>
                  <td height="30" ><div align="center">确认新密码：</div></td>
                  <td height="30" ><div align="left">
                      <input type="password" name="p3" size="20" >
                  </div></td>
                </tr>
                <tr>
                  <td height="25" colspan="2" ><div align="center">
                      <input name="submit2" type="submit" class="buttoncss" value="确认更改">
                  </div></td>
                </tr>
                </table>
              </form>
          </table></td>
        </tr>
      </table>