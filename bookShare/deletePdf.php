<html>
<head>
<?php 
session_start();   
header("Content-Type:text/html;charset=utf-8");
include_once("conn/conn.php");
?>
<title>上传记录</title>
<style type="text/css">
.hi{
  position:absolute;
  top:350px;
  left:30px;
  }
.side{
width:1000px;

background:white;
margin:330px 50px 50px 80px;
box-shadow: 0 0 20px #222;
border-radius:40px;
padding:5px;
float：left;
}
</style>

 </head>
 
 <body bgcolor="#CCCCFF">
<?php 
include ("top.php");
?>
<?php 
	$sqlstr="select *from tb_book01 where username='{$_SESSION['username']}'";
    $sql=mysqli_query($conn,$sqlstr);
    $info=mysqli_fetch_array($sql);
if ($info) {
	//echo "您上传了以下以下电子书：";
?>
<table class="side"  border="0">
<tr>
 <td colspan="8" height="30"><?php echo "您上传了以下电子书";?></td>
</tr>
<tr>
<td width="15%%" height="30" align="center">电子书名</td>
<td width="7%" align="center">类别</td>
<td width="10%" align="center">作者</td>
<td width="5%" align="center">大小（KB）</td>
<td width="5%" align="center">上传时间</td>
<td width="5%" align="center">审核情况</td>
<td width="5%" align="center">审核时间</td>
<td width="5%" align="center">是否删除</td>

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

 	<tr>
 		<td  height="80" align="center"><?php echo $myrow[2]?></td>
		<td  align="center"><?php echo $myrow[3]?></td>
		<td  align="center"><?php echo $myrow[4]?></td>
		<td align="center"><?php echo $myrow[5]?></td>
		<td  align="center"><?php echo $myrow[7]?></td>
		<td  align="center"><?php  if($myrow[8]=="0"){ 
			                                      echo "未通过";
		                                     }else {
			                                      echo "已通过";}?></td>
		<td  align="center"><?php echo $myrow[9]?></td>
 		<td  align="center"><?php echo '<a href="doDeletepdf.php?action=delete&time='.$myrow[0].'">删除</a>';?>
 	</tr>
 	<tr>
 		<td height="20" colspan="8"><hr size="3" color="99CCFF"></td>
	</tr>
 	
<?php 

		}
?>
	<tr>
	<td height="30" colspan="8">&nbsp;&nbsp;
<?php 
	echo "共".$totalNum."个上传记录&nbsp;&nbsp;";
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
	<td align="center" height="20"><a href="usercenter.php">返回个人中心</a></td>
	</tr>
	</table>
	<?php 
}else {
	//echo "您未上传任何任何电子书！";
	echo "<script language='javascript'>alert('您还未上传资源！');window.location.href='usercenter.php';</script>";
}
?>
	
 </body>
 </html>
 