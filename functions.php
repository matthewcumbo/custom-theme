<?php

require_once('lib/helpers.php');
require_once('lib/enqueue-assets.php');
require_once('lib/sidebars.php');
require_once('lib/theme-support.php');
require_once('lib/navigation.php');



function customtheme_aftergetposts($query)
{
    if($query->is_main_query()) {
        $query->set('posts_per_page',2);
    }
}

add_action('pre_get_posts', 'customtheme_aftergetposts');

function customtheme_filtertitle($title) {
    return 'Filtered :: ' . $title;
}

add_filter('the_title', 'customtheme_filtertitle');





function customtheme_excerptlength($words)
{
    return 15;
}

add_filter('excerpt_length', 'customtheme_excerptlength');


function customtheme_maintenancemode(){
    if (!current_user_can('edit_posts')) {
        wp_die('<h1>Maintenance!</h1><p>Please note that the site is currently down for maintenance.</p>');
    }
}

add_action('get_header','customtheme_maintenancemode');


?>