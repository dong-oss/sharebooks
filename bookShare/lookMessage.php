<?php
   session_start(); 
   header("Content-Type:text/html;charset=utf-8");
   include("conn/conn.php");
?>
<html>
<head>
<title>查看留言</title>

</head>
<body bgcolor="#CCCCFF">
<?php include("top.php");?>
 
<?php 
	$sqlstr="select *from tb_message01";
    $sql=mysqli_query($conn,$sqlstr);
    $info=mysqli_fetch_array($sql);
if ($info) {
?>
<table id="lside"  border="0" >
<tr >
 <td height="30" id="state"><h>留言社区</h></td>
</tr>
<tr>
 <td height="20"><hr size="3" color="99CCFF"></td>
</tr>
<?php 
	
	$pagesize=3;
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

 <tr bordercolor="FF0000">
 	<td height="300"><table  width="100%" height="100%" border="0">
			<tr>
				<td  width="35%" rowspan="5" ><img src="images/5.jpg" width="280" height="250" name="pic" /></td>			
				<td  height="50" colspan="2"><font class="til"><?php echo $myrow[2];?></font></td>
			</tr>
			<tr>
				<td colspan="2" height="20" align="left">留言内容：</td>
			</tr>
			<tr>
				<td  height="100"colspan="2"><p class="con"><?php echo $myrow[3];?></p></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td  align="right">留言用户:<?php echo $myrow[1]?></td>
				<td align="right">留言时间：<?php echo $myrow[4]?></td>
			</tr>
			<tr>
			<td colspan="3" height="40"><hr size="3" color="99CCFF"></td>
			</tr>
		</table>
	</tr>
<?php 

		}
?>
<tr>
	<td height="30">&nbsp;&nbsp;
<?php 
	echo "共".$totalNum."个留言&nbsp;&nbsp;";
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
	</td>
</tr>
<tr>
	<td><a href="usercenter.php">返回个人中心</a></td>
</tr>
</table>
	<?php 
	
}
?>
</body>
</html>            
                  