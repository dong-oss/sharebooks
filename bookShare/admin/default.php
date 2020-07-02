<html>
<head>
<?php
	header("Content-Type:text/html;charset=utf-8");
   //include("conn/conn.php"); 
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>电子书共享网站后台</title>
<link rel="stylesheet" type="text/css" href="font.css">
<style type="text/css">
<!--
.top1{
    position:absolute;
    width:1003px;
    height:30px;
	background-color:#993366;
	}
#pull-right {
	position: relative;
	float: right;
	margin-top: 5px;
}
-->
</style>
</head>

<body topmargin="0" leftmargin="0" bottommargin="0" class="scrollbar" background="images/10.jpg">
<table width="1003" align="center" cellpadding="1" cellspacing="0" bordercolor="#CCCCCC" bgcolor="#999999">
<tr>
	<td width="1003" height="30"><div class="top1"><div id="pull-right">   
	 <font color="#00FFFF">管理员:root&nbsp;</font></div></div>
	</td>
</tr>
  <tr>
    <td><table width="1003" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
                <td height="90" bgcolor="#FFFFFF"><div align="center">
                     <IFRAME frameBorder=0 id=top name=top scrolling=no src="top.php" 
                          style="HEIGHT: 150px; VISIBILITY: inherit; WIDTH: 1003px; Z-INDEX: 3"> </IFRAME></div>
                </td>
          </tr>
        </table>
        <table width="1003" height="620" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
             <td width="212" height="220" valign="top" bgcolor="#CCCCFF" id="lt" style="display:"><div align="center">
                    <IFRAME frameBorder=0 id=left name=left src="left.php" 
                           style="HEIGHT: 700px; VISIBILITY: inherit; WIDTH: 212px; Z-INDEX: 2"> </IFRAME></div>
             </td>
             <td width="778" height="100%" bgcolor="#FFFFFF" id="mn"><div align="center" >
                     <IFRAME frameBorder=0 id=main name=main scrolling=yes 
                         style="HEIGHT: 700px; VISIBILITY: inherit; WIDTH: 778px; Z-INDEX: 1"> </IFRAME></div>
             </td>
        </tr>
      </table>
   </td>
 </tr>
</table>
</body>
</html>
