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

<!--the first cate -->
<div class="cate1-header" >
	<header  > 
			<h1 ><a href="<?php echo get_category_link( get_cat_ID( single_cat_title('',false) ) ); ?>"><!--<?php single_cat_title() ?>--></a></h1>
			<?php if ( category_description() ) echo '<div class="archive-header-info">'.category_description().'</div>'; ?>

		</header>
</div>

<div class="catemore" >
	<header  > 
		<h1 ><a href="<?php echo get_category_link( get_cat_ID( single_cat_title('',false) ) ); ?>">更多景点</a></h1>
	</header>
</div>

<div id="primary" class="content-area col-md-12" align="center">
		<!--<div id="home-title" align="left">
			<span><?php _e('Recent Posts','verge'); ?><span>
		</div>-->
		<main id="main" class="site-main" role="main">
		<?php $count = 0; ?>
		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php query_posts('cat=2'); while ( have_posts() ) : the_post(); ?>

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

<!--the second cate -->
<div class ="cate2-header">
  <h1><a href=""></a></h1>
</div>


 <!--the third cate -->    
	<div class="cate3-header" >
		<header  > 
			<h1 ><a href="<?php echo get_category_link( get_cat_ID( single_cat_title('',false) ) ); ?>"><!--<?php single_cat_title() ?>--></a></h1>
			<?php if ( category_description() ) echo '<div class="archive-header-info">'.category_description().'</div>'; ?>

		</header>
		<!--<?php include( 'modules/excerpt.php' ); ?>-->
	</div>

	<div class="catemore" >
	<header  > 
		<h1 ><a href="<?php echo get_category_link( get_cat_ID( single_cat_title('',false) ) ); ?>">更多景点</a></h1>
		<?php if ( category_description() ) echo '<div class="archive-header-info">'.category_description().'</div>'; ?>

	</header>
    </div>


	<div id="primary" class="content-area col-md-12" align="center">
		<!--<div id="home-title" align="left">
			<span><?php _e('Recent Posts','verge'); ?><span>
		</div>-->
		<main id="main" class="site-main" role="main">
		<?php $count = 0; ?>
		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php query_posts('cat=6'); while ( have_posts() ) : the_post(); ?>

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

<div class ="cate4-header">
    <!--<header  > 
		<h1 ><a href="<?php echo get_category_link( get_cat_ID( single_cat_title('',false) ) ); ?>"></a></h1>
		<?php if ( category_description() ) echo '<div class="archive-header-info">'.category_description().'</div>'; ?>

	</header>-->
</div>

<div class="catemore" >
	<header  > 
		<h1 ><a href="<?php echo get_category_link( get_cat_ID( single_cat_title('',false) ) ); ?>">更多景点</a></h1>
		<?php if ( category_description() ) echo '<div class="archive-header-info">'.category_description().'</div>'; ?>

	</header>
</div>

<div id="primary" class="content-area col-md-12" align="center">
		<!--<div id="home-title" align="left">
			<span><?php _e('Recent Posts','verge'); ?><span>
		</div>-->
		<main id="main" class="site-main" role="main">
		<?php $count = 0; ?>
		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php query_posts('cat=2'); while ( have_posts() ) : the_post(); ?>

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
	
	
	
	<div class ="cate4-header">
    <!--<header  > 
		<h1 ><a href="<?php echo get_category_link( get_cat_ID( single_cat_title('',false) ) ); ?>"></a></h1>
		<?php if ( category_description() ) echo '<div class="archive-header-info">'.category_description().'</div>'; ?>

	</header>-->
    </div>

    <div class="catemore" >
	<header  > 
		<h1 ><a href="<?php echo get_category_link( get_cat_ID( single_cat_title('',false) ) ); ?>">更多景点</a></h1>
		<?php if ( category_description() ) echo '<div class="archive-header-info">'.category_description().'</div>'; ?>

	</header>
    </div>
	<div class='catetainer'>
	<div class="index-category4-left" align="left">
	
			<?php $count = 0; ?>
			<?php if ( have_posts() ) : ?>
				<?php query_posts('cat=3' ); while ( have_posts() ) : the_post(); ?>
					<?php
						if($count==0){?>
							<div class="index-category4-image" align="left">
								<div class='index-category4-image'>
									<?php if (has_post_thumbnail()) : ?>	
										<a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><?php the_post_thumbnail(); ?></a>
									<?php else: ?>
										<a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><img src="<?php echo get_template_directory_uri()."/img/thumbnail.png"; ?>"></a>
									<?php endif; ?>
								</div>
							</div>
						<?php }
					    elseif($count<7){?>
					    <table class="content-title-time">
					    	<tr>
					    	<td class="text-icon"></td>
					    	<td align="left">
					    		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					    	</td>
					    	<td align="right">
					    		<?php 
					    		echo the_time('Y-m-i').'</br>'; ?>
					    	</td>
					    	</tr>
					    	<!-- 各个文章的分割线 -->
					    	<div style="BORDER-TOP: #00686b 1px dashed; overflow: hidden; height: 1px"></div>
					    </table>
					   <?php }?> 	
					    	
						<?php 
							$count++;
					
						endwhile; ?>
				
			<?php else : ?>
				<?php get_template_part( 'content', 'none' ); ?>
			<?php endif; ?>
	
	</div>
	
	<div class="index-category4-right" align="left">
	
			<?php $count = 0; ?>
			<?php if ( have_posts() ) : ?>
				<?php query_posts('cat=6'); while ( have_posts() ) : the_post(); ?>
					<?php
						if($count==0){?>
							<div class="index-category4-image" align="left">
								<div class='index-category4-image'>
									<?php if (has_post_thumbnail()) : ?>	
										<a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><?php the_post_thumbnail(); ?></a>
									<?php else: ?>
										<a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><img src="<?php echo get_template_directory_uri()."/img/thumbnail.png"; ?>"></a>
									<?php endif; ?>
								</div>
							</div>
						<?php }
					    elseif($count<7){?>
					    <table class="content-title-time">
					    	<tr>
					    	<td class="text-icon"></td>
					    	<td align="left">
					    		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					    	</td>
					    	<td align="right">
					    		<?php 
					    		echo the_time('Y-m-i').'</br>'; ?>
					    	</td>
					    	</tr>
					    	<!-- 各个文章的分割线 -->
					    	<div style="BORDER-TOP: #00686b 1px dashed; overflow: hidden; height: 1px"></div>
					    </table>
					   <?php }?> 	
					    	
						<?php 
							$count++;
					
						endwhile; ?>	
			<?php else : ?>
				<?php get_template_part( 'content', 'none' ); ?>
			<?php endif; ?>
	</div>
</div>
<?php get_footer(); ?>
