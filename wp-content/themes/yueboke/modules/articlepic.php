<?php if ( get_post_meta($post->ID, 'thumbnail', true) ) : ?>
<?php $image = get_post_meta($post->ID, 'thumbnail', true); ?>
<a href="<?php the_permalink() ?>" class="thumbnail"><img src="<?php echo $image; ?>" alt="<?php the_title(); ?>"/></a>
<?php else: ?>
<a href="<?php the_permalink() ?>" class="thumbnail">
<?php if (has_post_thumbnail()) { the_post_thumbnail('thumbnail'); }
else { ?>
<img src="<?php echo catch_first_image() ?>" width="220px" height="150px" alt="<?php the_title(); ?>"/>
<?php } ?>
</a>
<?php endif; ?>