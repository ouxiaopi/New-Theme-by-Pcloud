<?php if($_GET["link"]) header("location:".base64_decode($_GET["link"]));?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<?php wp_head();?>
<link type="image/vnd.microsoft.icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" rel="shortcut icon">
<meta name="keywords" content="siinger">
<meta name="description" content="<?php bloginfo('description'); ?>">
<link href="<?php bloginfo('template_url'); ?>/style.css" type="text/css" rel="stylesheet"/>
<!--[if lt IE 9]>
<script src="//cdn.bootcss.com/html5shiv/r29/html5.min.js"></script>
<script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?1ebe8260eeabd8b66a27a409d3156375";
  var s = document.getElementsByTagName("script")[0];
  s.parentNode.insertBefore(hm, s);
})();
</script>
<link href="//cdn.bootcss.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
  <?php include_once("baidu_js_push.php") ?>
<div id="main" class="animated fadeIn">
<div class="pjax">
<header id="header">
<div class="logo">
	<a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
	<p class="description"><?php bloginfo('description'); ?></p>
</div>
//*test超链接*//
<div class="social-links">
	<ul>
		<?php if(get_the_author_meta('github',1)){ ?>
			<li><a href="<?php the_author_meta('github',1);?>" target="_blank"><i class="fa fa-github"></i></a></li>
		<?php };?>
		<?php if(get_the_author_meta('weibo',1)){ ?>
			<li><a href="<?php the_author_meta('weibo',1);?>" target="_blank"><i class="fa fa-weibo"></i></a></li>
		<?php };?>
		<?php if(get_the_author_meta('twitter',1)){ ?>
			<li><a href="<?php the_author_meta('twitter',1);?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
		<?php };?>
		

		
</ul>
</div>
//*可以删除*/
</header>
