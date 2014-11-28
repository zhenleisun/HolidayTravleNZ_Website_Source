 <?php global $post; $headcontent = get_post_meta( $post->ID, '_kad_blog_head', true );
   $height = get_post_meta( $post->ID, '_kad_posthead_height', true ); if (!empty($height)) $slideheight = $height; else $slideheight = 400; 
    $swidth = get_post_meta( $post->ID, '_kad_posthead_width', true ); if (!empty($swidth)) $slidewidth = $swidth; else $slidewidth = 1140; 
     ?>
          <article <?php post_class(); ?>>
           <?php if ($headcontent == 'flex') { ?>
               <section class="postfeat">
                <div class="flexslider" style="max-width:<?php echo $slidewidth;?>px;">
                <ul class="slides">
                 <?php global $post;
                      $image_gallery = get_post_meta( $post->ID, '_kad_image_gallery', true );
                          if(!empty($image_gallery)) {
                            $attachments = array_filter( explode( ',', $image_gallery ) );
                              if ($attachments) {
                              foreach ($attachments as $attachment) {
                                $attachment_url = wp_get_attachment_url($attachment , 'full');
                                $image = aq_resize($attachment_url, $slidewidth, $slideheight, true);
                                  if(empty($image)) {$image = $attachment_url;}
                                echo '<li><img src="'.esc_attr($image).'"/></li>';
                              }
                            }
                          } else {
                            $attach_args = array('order'=> 'ASC','post_type'=> 'attachment','post_parent'=> $post->ID,'post_mime_type' => 'image','post_status'=> null,'orderby'=> 'menu_order','numberposts'=> -1);
                            $attachments = get_posts($attach_args);
                              if ($attachments) {
                                foreach ($attachments as $attachment) {
                                  $attachment_url = wp_get_attachment_url($attachment->ID , 'full');
                                  $image = aq_resize($attachment_url, $slidewidth, $slideheight, true);
                                    if(empty($image)) {$image = $attachment_url;}
                                  echo '<li><img src="'.esc_attr($image).'"/></li>';
                                }
                              } 
                          } ?>               
            </ul>
          </div> <!--Flex Slides-->
          <script type="text/javascript">
            jQuery(window).load(function () {
                jQuery('.flexslider').flexslider({
                    animation: "fade",
                    animationSpeed: 400,
                    slideshow: true,
                    slideshowSpeed: 7000,

                    before: function(slider) {
                      slider.removeClass('loading');
                    }  
                  });
                });
      </script>
        </section>
        <?php } else if ($headcontent == 'video') { ?>
        <section class="postfeat">
          <div class="videofit">
              <?php global $post; echo get_post_meta( $post->ID, '_kad_post_video', true ); ?>
          </div>
        </section>
        <?php } else if ($headcontent == 'image') {           
                    $thumb = get_post_thumbnail_id();
                    $img_url = wp_get_attachment_url( $thumb,'full' ); //get full URL to image (use "large" or "medium" if the images too big)
                    $image = aq_resize( $img_url, $slidewidth, $slideheight, true ); //resize & crop the image
                     if(empty($image)) { $image = $img_url; } 
                    ?>
                    <?php if($image) : ?>
                      <div class="imghoverclass"><a href="<?php echo esc_attr($img_url); ?>" rel="lightbox[pp_gal]" class="lightboxhover"><img src="<?php echo esc_attr($image); ?>" alt="<?php the_title(); ?>" /></a></div>
                    <?php endif; ?>
        <?php } ?>
    <?php get_template_part('templates/post', 'date'); ?> 
    <header>
      <a href="<?php the_permalink() ?>"><h1 class="entry-title"><?php the_title(); ?></h1></a>
      <?php get_template_part('templates/entry', 'meta-subhead'); ?>
    </header>
    <div class="entry-content">
    <?php global $more; $more = 0; ?>
    <?php $readmore = __('Continued', 'virtue');
      the_content($readmore); ?>
    </div>
    <footer class="single-footer">
      <?php $tags = get_the_tags(); if ($tags) { ?> <span class="posttags"><i class="icon-tag"></i> <?php the_tags('', ', ', ''); ?> </span><?php } ?>
      
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'virtue'), 'after' => '</p></nav>')); ?>
    </footer>
  </article>

