<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>主界面</title>
<link href="style/index.css" type="text/css" media="all" rel="stylesheet" />
</head>
<body>
<?php
include 'infdeal/conn.php';
require 'infdeal/comm.php'; 
session_start();
$username=isset($_SESSION['username'])?$_SESSION['username']:1;//将session里的username的值赋给$username

if ($username==1) {
	page_jump("请先登录","index.php");
}
?>
<div id="all">
  <div id="banner">
    <div class="banner_top">
      <div class="banner_bannerimg"><img src="images/banner_banner.gif" class="banners"/></div>
      <div class="banner_fontimg"><img src="images/bannerfont.gif"/></div>
    </div>
    <div class="banner_bottom"></div>
  </div>
  <div id="main">
    <div class="main_hr"></div>
    <div class="floor1">
      <div class="floor1_draw_money "> <a href="drawmoney.php"> <img src="images/qukuang.gif"  class="pic1"/>
        <div class="draw_money_font">取款</div>
        </a> </div>
      <div class="floor1_deposit_money "> <a href="cunkuan.php"> <img src="images/cunkuan.gif"   class="pic1 cunkuanimg" />
        <div class="deposit_money_font">存款</div>
        </a> </div>
      <div class="floor1_search "> <a href="search_money.php"> <img src="images/search.gif"   class="pic1"/>
        <div class="search_font">余额查询</div>
        </a> </div>
    </div>
    <div class="floor2">
      <div class="floor2_changecode "> <a href="changecode.php"> <img src="images/changecode.gif"  class="pic1"/>
        <div class="changecode_font">修改密码</div>
        </a> </div>
      <div class="floor2_user_imformation "> <a href="usermessage.php"> <img src="images/usermassage.gif"  class="pic1"/>
        <div class="user_imformation_font">用户信息</div>
        </a> </div>
      <div class="floor2_zhuanzhan "> <a href="transferaccount.php"> <img src="images/zhuanzhang.gif"  class="pic1"/>
        <div class="zhuanzhan_font">转账汇款</div>
        </a> </div>
    </div>
  </div>
  <div class="footer">Disigned by the first group
    <div class="back_card"><a href="tuikaing.php">
    <img src="images/back.gif"  class="btt"/></a></div>
  </div>
</div>
</body>
</html>
