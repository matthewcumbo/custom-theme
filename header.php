<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-2" id="siteLogo">
                    <a href="<?php echo home_url('/'); ?>">
                        <?php bloginfo('name'); ?>
                    </a>
                </div>
                <div class="col-10">
                    <?php get_search_form(true); ?>
                </div>
            </div>
        </div>



        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <nav>
                        <?php wp_nav_menu(array(
                            "theme_location" => "main-menu"
                        )); ?>
                    </nav>
                </div>
            </div>
        </div>

    </header>



    <div id="content">

    