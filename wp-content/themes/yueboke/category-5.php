<?php get_header(); ?>
<div class='category-content-leftpic'>
	<div class="second-category-content-1" align="left">
	
			<?php $count = 0; ?>
			<?php if ( have_posts() ) : ?>
				<?php query_posts('cat='.get_cat_ID( single_cat_title('',false) ) ); while ( have_posts() ) : the_post(); ?>
					<?php
						if($count==0){?>
							<div class="second-category-content-first" align="left">
								<div class='content-image'>
									<?php if (has_post_thumbnail()) : ?>	
										<a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><?php the_post_thumbnail(); ?></a>
									<?php else: ?>
										<a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><img src="<?php echo get_template_directory_uri()."/img/thumbnail.png"; ?>"></a>
									<?php endif; ?>
								</div>
							</div>
						<?php }
					    elseif($count<8){?>
					    <table class="content-title-time", font-size='35px', height='40px'>
					    	<tr>
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
	
	<div class='pic-insert'>
	
	</div>
</div>
<?php get_footer(); ?>