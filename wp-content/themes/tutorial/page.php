<?php get_header();?>
<body>
<div id='wrapper'>
<h1>
<div id="header">
	<a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
</div>
</h1>
<?php bloginfo('description'); ?>
<div id="container">
	<?php if(have_posts()): ?><?php while(have_posts()):the_post(); ?>
	<div class="post" id="post<?php the_ID()?>">
		<h2><a href="<?php the_permalink(); ?>" title="<?php the_title();?>"> <?php the_title();?> </a></h2>
		<div class='entry'>
			<?php link_pages('<p><strong>Pages:</strong>', '</p>', 'number');?>
			<?php edit_post_link('Edit','<p>','</p>');?>
		</div>
	</div>
	<?php endwhile;?>
	<?php else:?>
		<div class="post">
			<h2><?php _e("Not Found");?></h2>
		</div>
	<?php endif;?>
</div>
<?php get_sidebar(); ?>
<?php get_footer();?>
</body>
</div>
</html>

