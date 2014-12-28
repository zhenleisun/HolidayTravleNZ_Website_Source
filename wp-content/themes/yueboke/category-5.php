<?php get_header(); ?>
<div class='category-content'>
	<div class="second-category-content-1" align="left">
	
			<table width='390px', class='second-category-content-info'>
				<tr width='390px'>
					<td width='20px'><hr style="height:20px; width:15px" color=pink /> </td>
					<!-- 分类标题 -->
					<td class='second-category-title', font-size='39', width='250px'><a href="<?php query_posts('cat=2' ) ;echo get_category_link( get_cat_ID( single_cat_title('' ,false) ) ); ?>"><?php single_cat_title() ?></a>
					</td>
					<!-- 更多 -->
					<td class='second-category-more', width='100px', align='right'><a href="<?php echo get_category_link( get_cat_ID( single_cat_title('' ,false) ) ); ?>">更多</a></td>
				</tr>
			</table>
			<hr style="filter:alpha(opacity=5,finishopacity=100,style=1);height:3px" color=pink>		
			
			<?php $count = 0; ?>
			<?php if ( have_posts() ) : ?>
				<?php query_posts('cat=2' ); while ( have_posts() ) : the_post(); ?>
					<?php
						if($count==0)
						{
							include "second-category-contend.php";
						}
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
					    	<DIV style="BORDER-TOP: #00686b 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></DIV>
					    </table>
					   <?php }?> 	
					    	
						<?php 
							$count++;
					
						endwhile; ?>
				
			<?php else : ?>
				<?php get_template_part( 'content', 'none' ); ?>
			<?php endif; ?>
	
	</div>
	
		<div class="second-category-content-2" align="left", border-color='green';>
			<table width='390px', class='second-category-content-info'>
				<tr width='390px'>
					<td width='20px'><hr style="height:20px; width:15px" color=green /> </td>
					<!-- 分类标题 -->
					<td class='second-category-title', font-size='39', width='250px'><a href="<?php query_posts('cat=12' ) ;echo get_category_link( get_cat_ID( single_cat_title('' ,false) ) ); ?>"><?php single_cat_title() ?></a>
					</td>
					<!-- 更多 -->
					<td class='second-category-more', width='100px', align='right'><a href="<?php echo get_category_link( get_cat_ID( single_cat_title('' ,false) ) ); ?>">更多</a></td>
				</tr>
			</table>
			<hr style="filter:alpha(opacity=5,finishopacity=100,style=1);height:3px" color=green>		
			
			<?php $count = 0; ?>
			<?php if ( have_posts() ) : ?>
				<?php query_posts('cat=12'); while ( have_posts() ) : the_post(); ?>
					<?php
						if($count==0)
						{
							include "second-category-contend.php";
						}
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
					    	<DIV style="BORDER-TOP: #00686b 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></DIV>
					    </table>
					   <?php }?> 	
					    	
						<?php 
							$count++;
					
						endwhile; ?>
				
			<?php else : ?>
				<?php get_template_part( 'content', 'none' ); ?>
			<?php endif; ?>
	
	</div>
	
		<div class="second-category-content-3" align="left">
	
			<table width='390px', class='second-category-content-info'>
				<tr width='390px'>
					<td width='20px'><hr style="height:20px; width:15px" color=red /> </td>
					<!-- 分类标题 -->
					<td class='second-category-title', font-size='39', width='250px'><a href="<?php query_posts('cat=4' );echo get_category_link( get_cat_ID( single_cat_title('' ,false) ) ); ?>"><?php single_cat_title() ?></a>
					</td>
					<!-- 更多 -->
					<td class='second-category-more', width='100px', align='right'><a href="<?php echo get_category_link( get_cat_ID( single_cat_title('' ,false) ) ); ?>">更多</a></td>
				</tr>
			</table>
			<hr style="filter:alpha(opacity=5,finishopacity=100,style=1);height:3px" color=red>		
			
			<?php $count = 0; ?>
			<?php if ( have_posts() ) : ?>
				<?php query_posts('cat=4'); while ( have_posts() ) : the_post(); ?>
					<?php
						if($count==0)
						{
							include "second-category-contend.php";
						}
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
					    	<DIV style="BORDER-TOP: #00686b 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></DIV>
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