

<?php
include("conn/conn.php");

if($_GET['action']=="lookM"){
	$sql="select *from tb_message01 where id='{$_GET['ID']}'";
	$result=mysqli_query($conn,$sql); 
	$info=mysqli_fetch_array($result);
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>审核书籍</title>
<link rel="stylesheet" type="text/css" href="font.css">
<style type="text/css">
<!--
.style1 {color: #FFFFFF}
-->
</style>
</head>
<body topmargin="0" leftmargin="0" bottommargin="0">   
<table width="750" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    	<td height="50" bgcolor="#CCCCFF"><div align="center" class="style1"><h3>留言内容</h3></div></td>
  </tr>
  <tr>
        <td  height="300" bgcolor="#FFFFFF"><div align="center"><font color="#333333"><?php echo $info[3]?></font></div></td>
   </tr>
   <tr>     
		<td width="50" bgcolor="#ffffff"><div align="center"><a href="message.php"><font color="#333333">返回留言管理</font></a></div></td>     
 </tr>
 </table>
 </body>
 </html>