<?php get_header(); ?>
<div class="content-wrap">
	<div class="content">
		<header class="archive-header">  
			<h1><a href="<?php echo get_category_link( get_cat_ID( single_cat_title('' ,false) ) ); ?>"><?php single_cat_title() ?></a></h1>
			<?php if ( category_description() ) echo '<div class="archive-header-info">'.category_description().'</div>'; ?>
		</header>
		<!--<?php include( 'modules/excerpt.php' ); ?>-->
	</div>
</div>
<div class="second-category-content" align="left">
		<a href="<?php echo get_category_link( get_cat_ID( single_cat_title('' ,false) ) ); ?>"><?php single_cat_title() ?></a>
		</br>
		<?php $count = 0; ?>
		<?php if ( have_posts() ) : ?>
			<?php query_posts('cat='.get_cat_ID( single_cat_title('',false) ) ); while ( have_posts() ) : the_post(); ?>
				<?php
					if($count==0)
					{
						include "second-category-contend.php";
					}
				    elseif($count<8){?>
				    <table width='380'>
				    	<tr>
				    	<td align="left",width='200' >
				    		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				    	</td>
				    	<td align="right",width='150'>
				    		<?php 
				    		echo the_time('Y-m-i').'</br>'; ?>
				    	</td>
				    	</tr>
				    </table>
				    		<?php 
				    		echo '....................................................................................................'.'</br>';
				    }?>
				    	
				    	
					<?php 
						$count++;
				
					endwhile; ?>
			
		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

</div>

<?php get_footer(); ?>