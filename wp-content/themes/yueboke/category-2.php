<?php get_header(); ?>
<div class='category-content'>
	<!-- 刚开始三个不同子分类的显示，第一个子分类 -->
	<div class="second-category-content-1" align="left">
			<table width='390px', class='second-category-content-info'>
				<tr width='390px'>
					<td width='20px'><hr style="height:20px; width:8px" color=pink /> </td>
					<!-- 分类标题 -->
					<td class='second-category-title', font-size='39', width='250px'><a href="<?php query_posts('cat=10' ) ;echo get_category_link( get_cat_ID( single_cat_title('' ,false) ) ); ?>"><?php single_cat_title() ?></a>
					</td>
					<!-- 更多 -->
					<td class='second-category-more', width='100px', align='right'><a href="<?php echo get_category_link( get_cat_ID( single_cat_title('' ,false) ) ); ?>">更多</a></td>
				</tr>
			</table>
			<hr style="filter:alpha(opacity=5,finishopacity=100,style=1);height:3px" color=pink>		
			
			<?php $count = 0; ?>
			<?php if ( have_posts() ) : ?>
				<?php query_posts('cat=10' ); while ( have_posts() ) : the_post(); ?>
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
	<!-- 刚开始三个不同子分类的显示，第二个子分类开始 -->
		<div class="second-category-content-2" align="left", border-color='green';>
			<table width='390px', class='second-category-content-info'>
				<tr width='390px'>
					<td width='20px'><hr style="height:20px; width:8px" color=green /> </td>
					<!-- 分类标题 -->
					<td class='second-category-title', font-size='39', width='250px'><a href="<?php query_posts('cat=11' ) ;echo get_category_link( get_cat_ID( single_cat_title('' ,false) ) ); ?>"><?php single_cat_title() ?></a>
					</td>
					<!-- 更多 -->
					<td class='second-category-more', width='100px', align='right'><a href="<?php echo get_category_link( get_cat_ID( single_cat_title('' ,false) ) ); ?>">更多</a></td>
				</tr>
			</table>
			<hr style="filter:alpha(opacity=5,finishopacity=100,style=1);height:3px" color=green>		
			
			<?php $count = 0; ?>
			<?php if ( have_posts() ) : ?>
				<?php query_posts('cat=11'); while ( have_posts() ) : the_post(); ?>
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
	<!-- 刚开始三个不同子分类的显示，第三个子分类 -->
		<div class="second-category-content-3" align="left">
	
			<table width='390px', class='second-category-content-info'>
				<tr width='390px'>
					<td width='20px'><hr style="height:20px; width:8px" color=red /> </td>
					<!-- 分类标题 -->
					<td class='second-category-title', font-size='39', width='250px'><a href="<?php query_posts('cat=13' );echo get_category_link( get_cat_ID( single_cat_title('' ,false) ) ); ?>"><?php single_cat_title() ?></a>
					</td>
					<!-- 更多 -->
					<td class='second-category-more', width='100px', align='right'><a href="<?php echo get_category_link( get_cat_ID( single_cat_title('' ,false) ) ); ?>">更多</a></td>
				</tr>
			</table>
			<hr style="filter:alpha(opacity=5,finishopacity=100,style=1);height:3px" color=red>		
			
			<?php $count = 0; ?>
			<?php if ( have_posts() ) : ?>
				<?php query_posts('cat=13'); while ( have_posts() ) : the_post(); ?>
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
	
	</div><!-- 结束--刚开始三个不同子分类的显示 -->
	
	<!-- 插入的图片 -->
	<div class='pic-insert'>
	
	</div>
	
	<!-- 心情随笔 -->
	<div class="category-content-two-post" align="left">
			<table width='390px', class='second-category-content-info'>
				<tr width='390px'>
					<td width='20px'><hr style="height:20px; width:8px" color=pink /> </td>
					<!-- 分类标题 -->
					<td class='second-category-title', font-size='39', width='250px'><a href="<?php query_posts('cat=14' ) ;echo get_category_link( get_cat_ID( single_cat_title('' ,false) ) ); ?>"><?php single_cat_title() ?></a>
					</td>
					<!-- 更多 -->
					<td class='second-category-more', align='right'><a href="<?php echo get_category_link( get_cat_ID( single_cat_title('' ,false) ) ); ?>">更多</a></td>
				</tr>
			</table>
			<hr style="filter:alpha(opacity=5,finishopacity=100,style=1);height:3px" color=pink>		
			
			<?php $count = 0; ?>
			<?php if ( have_posts() ) : ?>
				<?php query_posts('cat=14' ); while ( have_posts() ) : the_post(); ?>
					<?php
						if($count<2){?>
							<div class='content-image'>
								<?php if (has_post_thumbnail()) : ?>	
									<a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><?php the_post_thumbnail(); ?></a>
								<?php else: ?>
									<a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><img src="<?php echo get_template_directory_uri()."/img/thumbnail.png"; ?>"></a>
								<?php endif; ?>
							</div>
							<div class="content-excerpt">
								<a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><?php the_title()?></a>
								<?php echo "</br>";?>
								<?php echo substr(get_the_excerpt(),0,200).(get_the_excerpt() ? "..." : "." ); ?>
							</div>
						<?php }
					    else{?>
							<?php break;?>
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