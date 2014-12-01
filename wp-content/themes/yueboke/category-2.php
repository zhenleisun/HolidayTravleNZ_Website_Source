<?php get_header(); ?>
<div class="content-wrap">
         <?php $home_url = home_url() ;
		      $backrul =  $home_url.'/wp-content/uploads/2014/12/cate-background-1.png';
			  $style = " no-repeat fixed center";
		 ?>
	<div class="cate-header" >
	    
		<header  > 
			<h1 ><a href="<?php echo get_category_link( get_cat_ID( single_cat_title('',false) ) ); ?>"><?php single_cat_title() ?></a></h1>
			<?php if ( category_description() ) echo '<div class="archive-header-info">'.category_description().'</div>'; ?>

		</header>
		<!--<?php include( 'modules/excerpt.php' ); ?>-->
	</div>
</div>

<div id="primary" class="content-area col-md-12" align="center">
		<!--<div id="home-title" align="left">
			<span><?php _e('Recent Posts','verge'); ?><span>
		</div>-->
		<main id="main" class="site-main" role="main">
		<?php $count = 0; ?>
		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php query_posts('cat='.get_cat_ID( single_cat_title('',false) ) ); while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					if($count == 0)
						echo "<div class='row catetainer'><td>" ;
					elseif($count%9 == 0)
						echo "</div><!--.row--><div class='row'>";

					if($count==0)
					{
					get_template_part( 'content', 'firstpost' );
					}
				    elseif($count<9)
					get_template_part( 'content', 'grid4' );

					$count++;
				?>
			<?php endwhile; ?>
			<?php echo "</div><!--.row-->"; ?>
			
			<?php verge_pagination(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
