<?php

    function customtheme_theme_support(){
        add_theme_support('title-tag');

        add_theme_support('html5',array(
            'search-form',
            'comment-list',
            'comment-form',
            'gallery',
            'caption'
        ));

    }


    add_action('after_setup_theme','customtheme_theme_support');



?>