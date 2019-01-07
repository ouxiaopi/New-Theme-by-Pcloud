<div class="clearer"></div>
<footer id="footer">
<section class="links_adlink">
<?php wp_nav_menu(array('theme_location' => 'header_nav', 'echo' => true)); ?>
</section>
<div class="copyright"><a target="_blank" href="http://www.ouxiaopi.com">Theme by Ouxiaopi, </a><a target="_blank" href="http://www.wordpress.cn">Proudly published with Wordpress</a></div>
<div class="heart">小屁自留地，重拾写作乐趣！</div>
</footer>
<script type='text/javascript' src="//cdn.bootcss.com/jquery/3.0.0-beta1/jquery.min.js"></script>
<?php wp_footer();if(get_the_author_meta('my_code')) echo "<div style=\"display:none\">".get_the_author_meta('my_code')."</div>\n";
echo "<script style=\"display:none\">\nfunction index_overloaded(){\n".get_the_author_meta('ol_code')."\n}\n</script>\n"?>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/prettify.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/functions.js"></script>

//*测试返回顶部*//
<div id="full" style="
width:60px;
height:60px;
position:fixed;
left:50%; top:800px;
margin-left:600px;
z-index:100;
text-align:center;
cursor:pointer;">
<a
	<span><img src="https://blog.ouxiaopi.com/wp-content/uploads/2019/01/top02.png" border=0 alt="返回顶部"></span>
</a> </div>

//*JS调试*//
<script type="text/javascript">var isie6 = window.XMLHttpRequest ? false : true; function newtoponload() { var c = document.getElementById("full"); function b() { var a = document.documentElement.scrollTop || window.pageYOffset || document.body.scrollTop; if (a > 0) { if (isie6) { c.style.display = "none"; clearTimeout(window.show); window.show = setTimeout(function () { var d = document.documentElement.scrollTop || window.pageYOffset || document.body.scrollTop; if (d > 0) { c.style.display = "block"; c.style.top = (400 + d) + "px" } }, 300) } else { c.style.display = "block" } } else { c.style.display = "none" } } if (isie6) { c.style.position = "absolute" } window.onscroll = b; b() } if (window.attachEvent) { window.attachEvent("onload", newtoponload) } else { window.addEventListener("load", newtoponload, false) } document.getElementById("full").onclick = function () { window.scrollTo(0, 0) };</script>


</body>
