<?php 

function customtheme_sidebar_widgets(){
    register_sidebar(array(
        'id' => 'primary-sidebar',
        'name' => 'Primary Sidebar',
        'description' => 'Sidebar for blog posts page',
        'before_widget' => '<section id="%1$s" class="sidebar-widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h5>',
        'after_title' => '</h5>'
    ));
}

function customtheme_footer_sidebar_widgets()
{
    $footer_layout = '3,3,3,3';
    $footer_layout = explode(',', $footer_layout); // will be [3,3,3,3]
    $footer_bg = 'dark';
    $widget_style = '';

    if ($footer_bg == 'light'){
        $widget_style = 'footer-widget-light';
    }
    else {
        $widget_style = 'footer-widget-dark';
    }

    foreach($footer_layout as $i => $col){
        register_sidebar(array(
            'id' => 'footer-sidebar-' . ($i+1),
            'name' => 'Footer Widgets Column ' . ($i+1),
            'description' => 'Footer Widgets Column',
            'before_widget' => '<section id="%1$s" class="footer-widget '. $widget_style .' %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h5>',
            'after_title' => '</h5>'
        ));
    }
}

add_action('widgets_init', 'customtheme_sidebar_widgets');
add_action('widgets_init', 'customtheme_footer_sidebar_widgets');

?>