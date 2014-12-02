<div class="second-category-content-first" align="left">
	<div class='content-image'>
		<?php if (has_post_thumbnail()) : ?>	
			<a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><?php the_post_thumbnail(); ?></a>
		<?php else: ?>
			<a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><img src="<?php echo get_template_directory_uri()."/img/thumbnail.png"; ?>"></a>
		<?php endif; ?>
	</div>
	<div class="content-excerpt">
		<?php echo substr(get_the_excerpt(),0,200).(get_the_excerpt() ? "..." : "." ); ?>
	</div>
</div>
			
