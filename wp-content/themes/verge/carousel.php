<?php global $option_setting;
$count = 1;
if (isset($option_setting['carousel-enable-on-home'])) :
	if( $option_setting['carousel-enable-on-home'] && (is_front_page() || is_home() )) : 	?>
	    <div id="carousel-wrapper" class="container">
	    <ul class="bxcarousel">
	    	<?php
	    		$args = array( 'posts_per_page' => $option_setting['carousel-count'], 'category' => implode(",",$option_setting['carousel-cats']) );
				$lastposts = get_posts( $args );
				foreach ( $lastposts as $post ) :
				  setup_postdata( $post ); ?>
				  	<li><a title="<?php the_title(); ?>" href='<?php the_permalink(); ?>'>
				  	<?php if (has_post_thumbnail()) : 
							$thumb_id = get_post_thumbnail_id();
							$thumb_url = wp_get_attachment_image_src($thumb_id,'carousel', true);
							echo "<img class='carousel-image' src='".$thumb_url[0]."' title='".get_the_title()."'>";	
						else :
							echo "<img class='carousel-image' src='".get_template_directory_uri()."/assets/images/placeholder2.jpg' title='".get_the_title()."'>";	
						endif; ?></a></li>
				<?php endforeach; 
				wp_reset_postdata(); 
			?>	           
	     </ul>   
		</div>
	    
	<?php endif;
endif;?>