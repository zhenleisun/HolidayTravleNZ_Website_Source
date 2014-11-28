<div class='sidebar' >
	<ul>
		<li id='search'>
			<?php include(TEMPLATEPATH.'/searchform.php');?>
		</li>
		<li id='Calendar'><h2><?php _e('Calendar');?></h2>
			<?php get_calendar();?>
		</li>
		<?php wp_list_pages('title_li=<h2>Pages</h2>');?>
		<li><h2><?php _e("Categories")?></h2>
			<ul>
				<?php wp_list_cats('sort_column=name&optioncount=1&hierachical=0');?>	
			</ul>
		</li>
		<li>
			<h2><?php _e('Archives')?></h2>
			<ul>
				<?php wp_get_archives('type=monthly');?>
			</ul>
		</li>
		<?php get_links_list();?>
		<li id='meta'><h2><?php _e("Meta");?></h2>
			<ul>
				<?php wp_register();?>
				<li>
					<?php wp_loginout();?>
				</li>
				<?php wp_meta();?>
			</ul>
		</li>
	</ul>
</div>
