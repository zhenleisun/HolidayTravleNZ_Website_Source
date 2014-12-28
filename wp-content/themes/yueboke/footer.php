</section>
<footer class="footer">
    <div class="footer-inner">
    	<div class="footer-service">
			<ul class="nav">
				<?php echo str_replace("</ul></div>", "", ereg_replace("<div[^>]*><ul[^>]*>", "", wp_nav_menu(array('theme_location' => 'pagemenu', 'echo' => false, 'depth'=>0)) )); ?>
			</ul>
		</div>
		<div class="footer-nav">
			<ul class="nav">
				<?php echo str_replace("</ul></div>", "", ereg_replace("<div[^>]*><ul[^>]*>", "", wp_nav_menu(array('theme_location' => 'nav', 'echo' => false, 'depth'=>0)) )); ?>
			</ul>
		</div>
    	<div class="copyright">
            2001-2014 All right reserved &copy; <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
        </div>
        <div class="trackcode pull-right">
            <?php if( dopt('d_track_b') ) echo dopt('d_track'); ?>
        </div>
    </div>
</footer>
<?php 
wp_footer(); 
if( dopt('d_footcode_b') ) echo dopt('d_footcode'); 
?>
</body>
</html>