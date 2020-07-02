
<?php
   header("Content-Type:text/html;charset=utf-8");
   include("conn/conn.php");  
?>  
<html>
<head>    
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>个人中心-修改个人信息</title>
<link rel="stylesheet" type="text/css" href="css1/style2.css" />  
<script language="javascript">
		     function chkinput1(form)
			  {
			    if(form.email.value=="")
				{
				  alert("电子邮箱不能为空!");
				  form.email.select();
				  return(false);
				}
				if(form.email.value.indexOf('@')<0)
				{
				  alert("电子邮箱输入错误!");
				  form.email.select();
				  return(false);
				}
				if(form.tel.value=="")
				{
				  alert("联系电话不能为空!");
				  form.tel.select();
				  return(false);
				} 
				if(form.ts.value=="")
				{
				  alert("提示问题不能为空!");
				  form.ts.select();
				  return(false);
				}         
				if(form.tsd.value=="")
				{
				  alert("问题答案不能为空!");
				  form.tsd.select();
				  return(false);
				}     
				return(true);
			  }
		   </script>

</head>

<body>
<?php include ("usercenter.php");?>
		
<table  id="ri" width="400" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="40"><div align="center" style="color: #660206"><?php echo $_SESSION['username'];?>的所有信息</div></td>
        </tr>
        <tr>
          <td height="270" ><table width="400" height="200" border="0" align="center" cellpadding="0" cellspacing="1">
       
              <form name="form1" method="post" action="savechangeInfo.php" onsubmit="return chkinput1(this)">
		  <table>
                <tr>
                  <td width="100" height="30"><div align="center">昵称：</div></td>
                  <td width="300"><div align="left"><?php echo $_SESSION['username'];?></div></td>
                </tr>
         
                <tr>
                  <td height="30"><div align="center">E-mail：</div></td>
                  <td height="30"><div align="left">
                      <input type="text" name="email" size="25"  value="<?php echo $myrow['email'];?>">
                  </div></td>
                </tr>
                <tr>
                  <td height="30" ><div align="center">联系电话：</div></td>
                  <td height="30" ><div align="left">
                      <input type="text" name="tel" size="25"  value="<?php echo $myrow['phone'];?>">
                  </div></td>
                </tr>
                <tr>
                  <td height="30" ><div align="center">密码提示：</div></td>
                  <td height="30" ><div align="left">
                      <input type="text" name="ts" size="25" value="<?php echo $myrow['ts'];?>">
                  </div></td>
                </tr>
                <tr>
                  <td height="30" ><div align="center">问题答案：</div></td>
                  <td height="30"><div align="left">
                      <input type="text" name="tsd" size="25"  value="<?php echo $myrow['tsda'];?>">
                  </div></td>
                </tr>
                <tr>
                  <td height="30" colspan="2" ><div align="center">
                      <input name="submit2" type="submit" value="更改">&nbsp;&nbsp;
                      <input name="reset" type="reset" value="取消更改">
                  </div></td>
                </tr></table>
              </form>
              </table>
          </td>
        </tr>
      </table>
 
</body>
</html>
