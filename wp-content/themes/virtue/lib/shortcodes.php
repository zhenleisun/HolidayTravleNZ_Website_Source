<?php
/*--------------------------------------*/
/*    Clean up Shortcodes
/*--------------------------------------*/
function kadence_wpex_clean_shortcodes($content){   
    $array = array (
        '<p>[' => '[', 
        ']</p>' => ']', 
        ']<br />' => ']'
    );
    $content = strtr($content, $array);
    return $content;
}
add_filter('the_content', 'kadence_wpex_clean_shortcodes');
add_filter('widget_text', 'do_shortcode', 50);
add_action( 'init', 'kadence_remove_bstw_do_shortcode' );
function kadence_remove_bstw_do_shortcode() {
    if ( function_exists( 'bstw' ) ) {
        remove_filter( 'widget_text', array( bstw()->text_filters(), 'do_shortcode' ), 10 );
    }
}