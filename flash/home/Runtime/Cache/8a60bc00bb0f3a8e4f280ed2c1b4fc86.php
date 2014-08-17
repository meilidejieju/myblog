<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
    <title>Loopman</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="The free Fotograph Iphone web template, Andriod web template, Smartphone web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="<?php echo ($base_url); ?>/flash/home/css/style.css" media="all" rel="stylesheet" >
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <script src="<?php echo ($base_url); ?>/flash/home/js/jquery.min.js"></script>
</head>


<body>
<div class="h-bg">
    <div class="header">
        <div class="logo">
            <a href="<?php echo ($base_url); ?>"><img src="<?php echo ($base_url); ?>/flash/home/images/logo.png" title="logo" alt=""> </a>
        </div>
        <div class="navigation">
            <?php if(session('username')){ echo '<a class="toggleMenu" href="#">&equiv;</a>';}else{ echo '<a class="btn" href="'.BASE_URL.'/index.php/Index/login" style="float: right;display: inline-block;margin-top: 35px; ">登陆/注册</a>'; } ?>



            <ul class="nav">
                <li  class="test"><a href="<?php echo ($base_url); ?>">首页</a></li>
                <li><a href="<?php echo ($base_url); ?>/index.php/Index/index/type/1">站长推荐</a></li>
                <li><a href="<?php echo ($base_url); ?>/index.php/Index/index/type/2">我的收藏（暂未开通）</a></li>
                <li><a href="<?php echo ($base_url); ?>/index.php/Index/liuyan">留言</a></li>
            </ul>
            <script type="text/javascript" src="<?php echo ($base_url); ?>/flash/home/js/script.js"></script>
        </div>
        <div class="clear"></div>
    </div>
</div>
<div class="clear"></div>
<div class="main-bg">
<div class="main-wrp">
<div class="main-list">
	<a class="btn" href="<?php echo ($base_url); ?>/flash/files/flash_plug.apk" style="margin-bottom: 10px;display: none">下载flash插件(android)</a>

     <?php if(is_array($list)): foreach($list as $key=>$vo): ?><div class="span4">
             <div class="css3gallery">
                 <a href="<?php echo ($base_url); ?>/index.php/Index/viewdetail/id/<?php echo ($vo["id"]); ?>">
                     <img width="95%" src="<?php echo ($base_url); echo ($vo["picurl"]); ?>" alt="fotograph" title="" />
                 </a>
             </div>
             <div class="clear"></div>
         </div><?php endforeach; endif; ?>



	<div class="clear"></div>
	<?php echo ($pagebar); ?>
</div>
<div class="clear"></div>
</div>
</div>
<div class="clear"></div>
<div class="footer">
    <div class="footer-grid">
        <h3>查找更好玩的！</h3>

        <form action="search.php" method="get" accept-charset="utf-8" class="nav-form">
            <input type="text" name="s" onblur="if(this.value=='') this.value=''" onfocus="if(this.value =='' ) this.value=''" value=" ">
            <a href="#" onclick="document.getElementById('search-form').submit()" class="btn-small" style="background: #999">暂不支持摸索</a>
        </form>
        <div class="clear"></div>
    </div>
    <div class="footer-nav1">

        <div class="clear"></div>
    </div>
    <div class="clear"></div>
</div>
<div class="footer1">
    <div class="container">
        <p class="w3-link"><span>.网站内容非商用，仅供娱乐.loopman.</span></p>
    </div>
</div>
</body>
</html>