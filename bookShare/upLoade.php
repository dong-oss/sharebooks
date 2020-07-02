<?php
header ( "Content-type: text/html; charset=utf-8" );//设置文件编码格式
include("conn/conn.php"); 
?>
<html>  
    <title>上传电子书</title>  
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
 <link rel="stylesheet" type="text/css" href="css1/style2.css" />
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
				 form.content1.select();
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
<body>

<?php include ("usercenter.php");?>
<form  id="rk" action="doUpload.php" method="post" name="form" enctype="multipart/form-data" onSubmit="return chkinput(this)" >

 <div id="container"  style="font-size:17px">
 <h2><font>上传电子书</font></h2>
<table width="400" align="center" cellspacing="1" border="0">
<tr>
	<td width="20%" height="20" align="right" ><font >书&nbsp;名：</font></td>
	<td width="80%" height="20"><input id="in1" type="text" name="bookname" placeholder="输入电子书主题"></td>
	
</tr>
<tr>
    <td width="20%" height="20" align="right"><font>书的类别：</font></td>
	<td width="80%" height="20">
							<select name="leb" id="in1">
                            <option selected value=1>请选择种类</option>
                            <option value="proLanguage">编程语言</option>
                            <option value="huNature">人文自然</option>
                            <option value="childBooks">儿童读物</option>
                            <option value="liteNovel">文学小说</option>
                            <option value="Speech">口才演讲</option>
                            <option value="Dothing">为人处事</option>
                          </select></td>
 </tr>
<tr>
<td height="20" align="right" ><font>该书作者&nbsp;：</font></td>
	<td height="20"> <input id="in1" type="text" name="author" placeholder="请输入作者"/></td>
</tr>
<tr>
    <td  align="right" ><font>书籍介绍：</font></td>
	<td width="80%" ><textarea  name="content1" rows="7" cols="35" placeholder="请输入您对该书的介绍"></textarea></td>
 </tr>
<tr>
	<td width="20%" height="20" align="right" ><font >选择电子书：</font></td>
    <td height="20"><input id="in1" type="file" name="myFile1" /></td>
 </tr>
 <tr>
	<td width="20%" height="20" align="right" ><font >选择封面：</font></td>
    <td height="20"><input id="in1" type="file" name="myPic1" /></td>
 </tr>
<tr>
    <td height="20"><input id="in" type="submit" value="上传" />
</tr>
</table>
</div>
</form>
    </body>
    </html>  
