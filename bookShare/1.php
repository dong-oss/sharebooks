 <input name="button2" type="button" class="in" onclick="chknc(form1.newname.value)" value="查看昵称是否已用"><html>
<head>
<?php
header("Content-Type:text/html;charset=utf-8");
?>
</head>
<body>
<form action="2.php" method="post" name="form" enctype="multipart/form-data">
<table>
<tr>
	<td width="20%" height="20" align="right" ><font >选择电子书：</font></td>
    <td height="20"><input id="in1" type="file" name="myFile1" /></td>
 </tr>
<tr>
    <td height="20"><input id="in" type="submit" value="上传" />
</tr>
</table>
</form>
</body>
</html>