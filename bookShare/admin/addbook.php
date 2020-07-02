<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>添加图书</title>
<link rel="stylesheet" type="text/css" href="font.css" />
<style type="text/css">
<!--
.style1 {color: #FFFFFF}
-->
</style>
<script language="javascript">
    function chkinput(form)
			  {
			    if(form.bookname.value=="")
				{
				  alert("书名不能为空!");
				  form.bookname.select();
				  return(false);
				}
			    if(form.bookname.value.length>15)
				 {
				 alert("书名字数应小于15!");
				 form.bookname.select();
				 return(false);
				 }	
				if(form.leb.value==1)
				{
				  alert("请选择书的类别!");
				  form.leb.select();
				  return(false);
				}
				if(form.author.value=="")
				{
				  alert("电子书作者不能为空！");
				  form.author.select();
				  return(false);
				}
				if(form.content1.value=="")
				{
				  alert("介绍不能为空！");
				  form.content1.select();
				  return(false);
				}
				if(form.content1.value.length>50)
				 {
				 alert("书籍介绍字数应小于100!");
				 form.content1.select();
				 return(false);
				 }	
				if(form.myFile1.value=="")
				{
				  alert("请选择要上传的电子书！");
				  form.myFile1.select();
				  return(false);
				}
				return(true);
			  }
		   </script>

</head>
<?php include("conn/conn.php");?>
<body topmargin="0" leftmargin="0" bottommargin="0">
<table width="720" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="50" bgcolor="#CCCCFF"><div align="center" class="style1">添加图书</div></td>
  </tr>
  <tr>
    <td height="253" bgcolor="#666666"><table width="720" border="0" cellpadding="0" cellspacing="1">

     <form name="form1" enctype="multipart/form-data" method="post" action="doUpload.php" onSubmit="return chkinput(this)">
     <table>
	  <tr>
        <td width="129" height="50" bgcolor="#FFFFFF" align="center"><font color="#333333">图书名称：</font></td>
        <td width="618" bgcolor="#FFFFFF"><input type="text" name="bookname" id="in4"></td>
      </tr>
      <tr>
    <td width="129" height="40" align="center" bgcolor="#FFFFFF"><font color="#333333">添加位置：</font></td>
	<td width="618" bgcolor="#FFFFFF" >
							<select name="leb" id="in1">
                            <option selected value=1>请选择位置</option>
                            <option value="First">网站首页</option>
                            <option value="proLanguage">编程语言</option>
                            <option value="huNature">人文自然</option>
                            <option value="childBooks">儿童读物</option>
                            <option value="liteNovel">文学小说</option>
                            <option value="Speech">口才演讲</option>
                            <option value="Dothing">为人处事</option>
                          </select></td>
 	</tr>  
      <tr>
        <td width="129" height="50" bgcolor="#FFFFFF" align="center"><font color="#333333">作者姓名：</font></td>
        <td width="618" bgcolor="#FFFFFF"><input id="in4" type="text" name="author"></td>
      </tr>    
      <tr>
        <td width="129" height="50" bgcolor="#FFFFFF" align="center"><font color="#333333">图书介绍：</font></td>
        <td width="618" bgcolor="#FFFFFF"><textarea name="content1"  rows="7" cols="35"></textarea></td>
      </tr>   
      <tr>
        <td height="50" bgcolor="#FFFFFF" align="center"><font color="#333333">选择图书</font></td>
        <td height="50" bgcolor="#FFFFFF">
        <input type="file" name="myFile1" ></td>
      </tr>
      <tr>
        <td height="50" bgcolor="#FFFFFF" align="center"><font color="#333333">选择封面</font></td>
        <td height="50" bgcolor="#FFFFFF">
        <input type="file" name="myPic1" ></td>
      </tr>
      <tr>
        <td height="50" colspan="2" bgcolor="#FFFFFF"><div align="center"><input name="submit" type="submit" id="submit" value="添加">
        &nbsp;&nbsp;<input type="reset" value="重写" ></div></td>
      </tr>
      </table>
	  </form>
    </table></td>
  </tr>
</table>
</body>
</html>

