<?php get_header(); ?>
<main>
<?php comments_template(); }
		else { if (have_posts()):while (have_posts()): the_post() ?>
            <article class="post post-list" itemscope="" itemtype="http://schema.org/BlogPosting">
                <h2 itemprop="name headline" class="title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>                
                <p><?php echo mb_strimwidth(strip_shortcodes(strip_tags(apply_filters('the_content', $post->post_content))), 0, 430,"...");?></p>
				<div class="p_time"><i class="fa fa-sun-o"></i>&nbsp;&nbsp;<?php the_time('Y-m-d') ?><i class="fa fa-empire"></i>&nbsp;&nbsp;<?php the_category(); ?></div>
            </article>
            <div class="clearer"></div>
		<?php endwhile;endif; };?>
	</section>
	<div class="clearer"></div>
	<nav class="navigator">
        <?php previous_posts_link('<i class="fa fa-angle-left"></i>') ?><?php next_posts_link('<i class="fa fa-angle-right	"></i>') ?>
	
	</nav>
</div>
</div>
</main>
<?php get_footer(); ?>
