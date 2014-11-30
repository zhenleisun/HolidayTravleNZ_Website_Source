<?php get_header(); ?>
<?php if( dopt('d_adindex_01_b') ) printf('<div class="banner banner-navbar">'.dopt('d_adindex_01').'</div>'); ?>
<div class="hotel-search">
<a href=".get_bloginfo('url')."> <?php echo get_bloginfo('name') ?></a>
</div>
<div class="content-wrap">
	<div class="content">
	<?php 
		if( dopt('d_adindex_03_b') ) printf('<div class="banner banner-contenttop">'.dopt('d_adindex_03').'</div>');
		/*不需要最新发布提示
		if( $paged && $paged > 1 ){
			printf('<header class="archive-header"><h1>最新发布 第'.$paged.'页</h1><div class="archive-header-info"></div></header>');
		}else{
			if( dopt('d_sticky_b') ) include 'modules/sticky.php';
			printf('<h2 class="title">最新发布</h2>');
		}
		*/
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$args = array(
		    'caller_get_posts' => 1,
		    'paged' => $paged
		);
		query_posts($args);
		/*include 'modules/excerpt.php';
		*/
		
	?>
	</div>
</div>


<div id="primary" class="content-area col-md-12"  align="center">
		<!--<div id="home-title">
			<span><?php _e('Recent Posts','verge'); ?><span>
		</div>-->
		<main id="main" class="site-main" role="main">
		<?php $count = 0; ?>
		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					if($count == 0)	
						echo "<div class='row'>" ;
					elseif($count%4 == 0)
						echo "</div><!--.row--><div class='row'>";
 
                    include 'content-grid4.php';
					/*get_template_part( 'content', 'grid4' );*/	
					$count++;		
					
				?>
			<?php endwhile; ?>
			<?php echo "</div><!--.row-->"; ?>
			
			<?php verge_pagination(); ?>

		<?php else : ?>

			<!--<?php get_template_part( 'content', 'none' ); ?>-->
			<?php echo 'test'; ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
