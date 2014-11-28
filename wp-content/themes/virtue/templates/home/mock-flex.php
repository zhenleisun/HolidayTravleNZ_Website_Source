<div class="sliderclass">
  <div id="imageslider" class="container">
    <div class="flexslider loading" >
        <ul class="slides">
                      <li> 
                        <a href="#" target="_blank" >
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/kt_slide_01.jpg" width="1170px" height="450px" alt="Example Slider 01" />
                        </a>
                      </li>
                      <li> 
                        <a href="#" target="_blank" >
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/kt_slide_02.jpg" width="1170px" height="450px" alt="Example Slider 02"/>
                        </a>
                      </li>
        </ul>
      </div> <!--Flex Slides-->
  </div><!--Container-->
</div><!--sliderclass-->

      <script type="text/javascript">
            jQuery(window).load(function () {
                jQuery('.flexslider').flexslider({
                    animation: "fade",
                    animationSpeed: 300,
                    slideshow: true,
                    slideshowSpeed: 7000,

                    before: function(slider) {
                      slider.removeClass('loading');
                    }  
                  });
                });
      </script>