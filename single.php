<?php get_header(); ?>
<main>
<section id="slide">
<?php if ((is_single()||is_page())&&has_post_thumbnail()) { ?>
<?php }  ?>
</section>	
	<section class="blockGroup container">
		<?php if (is_single()||is_page()) { ?>
			<?php if (is_single()) { ?>
				<h2 itemprop="name headline" class="title"><?php the_title();?></h2>
				<div class="p_time"><i class="fa fa-sun-o"></i>&nbsp;&nbsp;<?php the_time('Y-m-d') ?><i class="fa fa-empire"></i>&nbsp;&nbsp;<?php the_category(); ?></div>				
			<?php }; ?>
			<?php setPostViews(get_the_ID()); ?>
			<article class="post single" itemscope itemtype="http://schema.org/BlogPosting">
				<?php if (have_posts()) { while (have_posts()) {
					the_post();
					the_content();
				} }; ?>
				<div class="meta">
					<p>— 于 <?php the_time('Y年m月d') ?> ，共写了 <?php echo count_words(get_the_content())?> 字；</p>
					<p>— 本文共有 <?php echo count(get_the_tags(),0);?> 个标签：<?php the_tags(); ?></p>
				</div>

				<section class="navigator">
                
                <?php
                $next_post = get_next_post();
                if (!empty( $next_post )): ?>
                <a href="<?php echo get_permalink( $next_post->ID ); ?>" class="pre"><</a>
                <?php endif; ?>
					<?php
                $prev_post = get_previous_post();
                if (!empty( $prev_post )): ?>
                <a href="<?php echo get_permalink( $prev_post->ID ); ?>" class="next">></a>
                <?php endif; ?>
					
            </section>
              </main>
<?php get_footer(); ?>
