<article <?php post_class('pt-4 border'); ?>>
    <h2>
        <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
        </a>
    </h2>
    <div>
        <?php customtheme_post_meta(); ?>
    </div>
    <div>
        <?php the_excerpt(); ?>
    </div>
    <a href="<?php the_permalink(); ?>">
        Read More
    </a>
</article>