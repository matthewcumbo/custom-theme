<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <header>
                <?php the_archive_title('<h1>', '</h1>'); ?>
                <?php the_archive_description('<p>','</p>'); ?>
            </header>
        </div>
    </div>
    <div class="row">
        <div class="col-8">
            <main>
                <?php get_template_part('loop'); ?>
            </main>
        </div>
        <?php get_sidebar(); ?>
    </div>
</div>




<?php get_footer(); ?> 