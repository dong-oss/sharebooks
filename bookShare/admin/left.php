<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>电子书查阅网后台管理</title>
<link rel="stylesheet" type="text/css" href="font.css">
</head>
<script language="javascript">
  function openspgl(){
    if(document.all.spgl.style.display=="none"){
	   document.all.spgl.style.display="";
	   document.all.d1.src="tupian/point3.gif";
	 }
	 else{
	  document.all.spgl.style.display="none";
	  document.all.d1.src="tupian/point1.gif";
	 }  
  }
  function openyhgl(){
    if(document.all.yhgl.style.display=="none"){
	   document.all.yhgl.style.display="";
	   document.all.d2.src="tupian/point3.gif";
	 }
	 else{
	  document.all.yhgl.style.display="none";
	  document.all.d2.src="tupian/point1.gif";
	 }  
  }
  function openddgl(){
    if(document.all.ddgl.style.display=="none"){
	   document.all.ddgl.style.display="";
	   document.all.d3.src="tupian/point3.gif";
	 }
	 else{
	  document.all.ddgl.style.display="none";
	  document.all.d3.src="tupian/point1.gif";
	 }  
  }
  function opengggl(){
    if(document.all.gggl.style.display=="none"){
	   document.all.gggl.style.display="";
	   document.all.d4.src="tupian/point3.gif";
	 }
	 else{
	  document.all.gggl.style.display="none";
	  document.all.d4.src="tupian/point1.gif";
	 }  
  }
</script>
<body topmargin="0" leftmargin="0" bottommargin="0">
<table width="212" border="1" cellpadding="0" cellspacing="0" background="left_bg.gif">
  <tr>
    <td height="425" valign="top" background="tupian/left_bg.gif"><div align="center">
      <table width="212" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td><table width="212" height="20" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td width="212" height="32" bgcolor="#CCCCFF" onClick="javascript:openspgl()"><div align="center"><a href="#">
              	<img id="d1" border="0"src="tupian/point1.gif" width="10" height="10">&nbsp;&nbsp;图书管理</a></div></td>
            </tr>
          </table>
            <table width="212" border="0" cellpadding="0" cellspacing="0" id="spgl" style="display:">
              <tr>
                <td height="20" background="tupian/default_10.gif"> <a href="addbook.php" target="main">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;添加书籍</a></td>
              </tr>
              <tr>
                <td height="22" background="tupian/default_10.gif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="deletebook.php" target="main">删除书籍</a></td>
              </tr>
            
            </table>
            <table width="212" height="20" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td height="32" bgcolor="#CCCCFF" onClick="javascript:openyhgl()"><div align="center">
                	<a href="#"><img id="d2" border="0"src="tupian/point1.gif" width="10" height="10">&nbsp;&nbsp;用户管理</a></div></td>
              </tr>
            </table>
            <table width="212" border="0" cellpadding="0" cellspacing="0" id="yhgl" style="display:">
              <tr>
                <td height="22" background="tupian/default_10.gif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="shenhebook.php" target="main">用户书籍审核</a></td>
              </tr>
              
              <tr>
                <td height="22" background="tupian/default_10.gif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="message.php"  target="main">用户留言管理</a></td>
              </tr>
              <tr>
              <td height="22" background="tupian/default_10.gif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="deleteUser.php" target="main">用户注销</a></td>
              </tr>
            </table>
          
            
            <table width="212" border="0" cellpadding="0" cellspacing="0" id="gggl" style="display:">
              
			<tr><td height="10" bgcolor="#CCCCFF">&nbsp;</td>
			</tr>
			
            </table>
			</td>
        </tr>
      </table>
      </div></td>
  </tr>
</table>
</body>
</html>
