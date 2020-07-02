<?php
header ( "Content-type: text/html; charset=utf-8" );//设置文件编码格式
include("conn/conn.php"); 
?>
<html>  
    <title>发表留言</title>  
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
 <link rel="stylesheet" type="text/css" href="css1/style2.css" />
	<script language="javascript">
		     function chkinput(form)
			  {
			    if(form.title.value=="")
				{
				  alert("主题不能为空!");
				  form.title.select();
				  return(false);
				}
			    if(form.title.value.length>15)
				 {
				 alert("主题字数应小于15!");
				 form.title.select();
				 return(false);
				 }	
				if(form.content.value=="")
				{
				  alert("留言内容不能为空！");
				  form.content.select();
				  return(false);
				}
				if(form.content.value.lenth>100){
					alert("留言内容字数应小于100");
					form.content.select();
					return(false);
				}
				return(true);
			  }
		   </script>
</head>
<body>

<?php include ("usercenter.php");?>
<form  id="rj" action="saveMessage.php" method="post" name="form1" onSubmit="return chkinput(this)" >
 <table width="450" height="300"  border="0">
 <tr>
 <td height="30" colspan="2"><h2><font color="#9999FF">请发表你的留言</font></h2></td>
 </tr>
<tr>
	<td width="130" height="30" align="center" ><font color="#9999FF">留言主题：</font></td>
	<td width="300" height="30"><input class="a" type="text" name="title" placeholder="输入您的留言主题"></td>
	
</tr>
<tr>
    <td  align="center" ><font color="#9999FF">留言内容：</font></td>
	<td  ><textarea  name="content" rows="15" cols="44" placeholder="输入您的留言内容"></textarea></td>
 </tr>
<tr>
    <td height="20"><input  type="submit" name="submit1" value="发表" >&nbsp;
    	<input type="reset"  name="reset" value="重写"></td>
</tr>
</table>
</form>
    </body>
   </html>  
