<?php
/**
 * @package Verge
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('col-md-3 col-sm-3 grid4'); ?>>

		<div class="featured-thumb col-md-12" align="center">
			<?php if (has_post_thumbnail()) : ?>	
				<a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><?php the_post_thumbnail('grid4'); ?></a>
			<?php else: ?>
				<a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><img src="<?php echo get_template_directory_uri()."/assets/images/placeholder2.jpg"; ?>"></a>
			<?php endif; ?>
		</div><!--.featured-thumb-->
			
		<div class="out-thumb col-md-12" >
			<header class="entry-header">
				<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
				<!--<div class="meta">
					<span class="meta-date"><i class="fa fa-calendar"></i><?php echo the_time('M j, Y'); ?></span>
					<span class="entry-meta"><i class="fa fa-folder-open"></i>
					<?php
						$categories = get_the_category();
						$separator = ' • ';
						$output = '';
						if($categories){
							foreach($categories as $category) {
								$output .= '<a href="'.get_category_link( $category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s",'verge' ), $category->name ) ) . '">'.$category->cat_name.'</a>'.$separator;
							}
						echo trim($output, $separator);
						}
					?>
					</span>
				</div>-->
				
				<!--<span class="entry-excerpt"><?php echo substr(get_the_excerpt(),0,200).(get_the_excerpt() ? "..." : "" ); ?></span>-->
			</header><!-- .entry-header -->
			
		</div><!--.out-thumb-->
			
		
		
</article><!-- #post-## -->