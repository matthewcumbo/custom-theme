<div class="col-4">
    <aside role="complimentary">
        <?php if(is_active_sidebar('primary-sidebar')) { ?>
            <?php dynamic_sidebar('primary-sidebar'); ?>
        <?php } else { ?>
            <p>No sidebar widgets.</p>
        <?php } ?>
    </aside>
</div>