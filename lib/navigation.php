<?php

    function customtheme_register_menus(){
        register_nav_menus(array(
            'main-menu' => 'Main Menu',
            'footer-menu' => 'Footer Menu'
        ));
    }

    add_action('init','customtheme_register_menus');



?>