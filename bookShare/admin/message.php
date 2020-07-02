
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
    	<td colspan="5" height="50" bgcolor="#CCCCFF"><div align="center" class="style1"><h3>留言管理</h3></div></td>
  </tr>
  <tr>
        <td width="221" height="30" bgcolor="#FFFFFF"><div align="center"><font color="#333333">留言主题</font></div></td>
        <td width="159" bgcolor="#FFFFFF"><div align="center"><font color="#333333">留言用户</font></div></td>
        <td width="100" bgcolor="#FFFFFF"><div align="center"><font color="#333333">留言内容</font></div></td>
        <td width="70" bgcolor="#FFFFFF"><div align="center"><font color="#333333">留言时间</font></div></td>
		<td width="70" bgcolor="#ffffff"><div align="center"><font color="#333333">是否删除</font></div></td>     
 </tr>
<?php 
	include("conn/conn.php"); 
	$sqlstr="select *from tb_message01";
    $sql=mysqli_query($conn,$sqlstr);
    $info=mysqli_fetch_array($sql);
if ($info) {
	
?>	  
<?php 
	
	$pagesize=10;
	$total=mysqli_query($conn,$sqlstr);
	$totalNum=mysqli_num_rows($total);
	$pagecount=ceil($totalNum/$pagesize);
	(!isset($_GET['page']))?($page=1):$page=$_GET['page'];
	($page<=$pagecount)?$page:($page=$pagecount);
	$f_pageNum=$pagesize*($page-1);
	
	$sqlstr1="$sqlstr limit $f_pageNum , $pagesize";
	$result=mysqli_query($conn,$sqlstr1);
	while($myrow=mysqli_fetch_array($result)) {
		
?>

 	<tr>
 		<td  height="30" align="center"><font color="#cc6600"><?php echo $myrow[2]?></font></td>
		<td  align="center"><font color="#cc6600"><?php echo $myrow[1]?></font></td>
		<td  align="center"><font color="#cc6600"><?php echo '<a href="lookmessageContent.php?action=lookM&ID='.$myrow[0].'">查看内容</a>';?></font></td>
		<td  align="center"><font color="#cc6600"><?php echo $myrow[4]?></font></td>
 		<td  align="center"><font color="#cc6600"><?php echo '<a href="deleteMessage.php?action=deleteM&ID='.$myrow[0].'">删除</a>';?></font></td>
 	</tr>
 	
<?php 

		}
?>
 <tr>
	<td height="30" colspan="5">&nbsp;&nbsp;<font color="#333333">
<?php 
	echo "共".$totalNum."个用户留言&nbsp;&nbsp;";
	echo "第".$page."页/共".$pagecount."页&nbsp;&nbsp;";
	if($page!=1) {
		echo "<a href='?page=".($page-1)."'>上一页</a>&nbsp;&nbsp;";
	}else {
		echo "首页&nbsp;上一页&nbsp;&nbsp;";
		
	}
	if($page!=$pagecount) {
		echo "<a href='?page=".($page+1)."'>下一页</a>&nbsp;";
	}else {
		echo "下一页&nbsp;尾页&nbsp;&nbsp;";
	}
	?>
	</font></td>
 </tr>
	</table>
	<?php 
}else{
	exit;
}

?>

</body>
</html>
