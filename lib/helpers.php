<?php
function customtheme_post_meta()
{
    echo 'Posted on <a href="' . esc_url(get_the_permalink()) . '"> '
                . esc_html(get_the_date()) .
            ' </a>
            by <a href="' . get_author_posts_url(get_the_author_meta('ID')) . '">' .
               get_the_author() . 
            '</a>';
} ?>