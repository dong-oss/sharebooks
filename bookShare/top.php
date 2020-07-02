
<?php
   //session_start();
   header("Content-Type:text/html;charset=utf-8");
   include("conn/conn.php"); 
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>电子书共享网站</title>
<link rel="stylesheet" type="text/css" href="css1/style.css">

</head>

<body>
<div id="top">
<div id="top1"><div class="pull-right">
    <?php
     if(empty($_COOKIE['username'])&&empty($_COOKIE['password'])){
                 if(isset($_SESSION['username'])) {
	                  echo '<a href="usercenter.php"><font color="#00FFFF">当前用户:'.$_SESSION['username'].'&nbsp;点击进入</font></a>';
	              }else{
	  	              echo '<a href="logAndreg.php"><font color="#00FFFF">登录/注册</font></a>';
	              }
    }
	?>&nbsp;&nbsp;</div></div>
	<div id="banner">
		<div id="txt1">
		电子书共享网站
		</div>
	</div>
<div id="top2">
<div id="monavber" class="header-nav right"  >
    <div class="container2">
<ul id="nav" class="navbar">
<li><a href="index.php"><span><i class="fa fa-th-list"></i> 网站首页</span></a></li>
<li><a href="proLanguage.php"><span><i class="fa fa-th-list"></i> 编程语言</span></a></li>
<li><a href="huNature.php"><span><i class="fa fa-th-list"></i> 人文自然</span></a></li>
<li><a href="childBooks.php"><span><i class="fa fa-th-list"></i> 儿童读物</span></a></li>
<li><a href="liteNovel.php"><span><i class="fa fa-th-list"></i> 文学小说</span></a></li>
<li><a href="Speech.php"><span><i class="fa fa-th-list"></i> 口才演讲</span></a></li>
<li><a href="Dothing.php"><span><i class="fa fa-th-list"></i> 为人处事</span></a></li>
</ul>
 
      <div class="pull-right">
        <form name="formsearch" method="post" action="search.php" id="searchform">
          <input  type="hidden" name="kwtype" value="0">
          <input name="q" type="text" class="search-keyword" id="search-keyword" class="search-input" placeholder="搜索书名..."/>
          <button><i class="fa fa-search"></i></button>
        </form>
      </div>
    </div>
 </div>

</div>
</div>
</body>
</html>
 