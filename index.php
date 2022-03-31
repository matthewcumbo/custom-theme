<?php get_header(); ?>
    
<div class="container">
    <div class="row">
        <div class="col-8">
        <main role="main">
            <?php get_template_part('loop'); ?>
        </main>
        
        </div>
        <?php get_sidebar(); ?>
    </div>
</div>
    
<?php get_footer(); ?>