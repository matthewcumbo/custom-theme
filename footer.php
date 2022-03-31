</div>
<?php 
$footer_layout = '3,3,3,3';
$footer_layout = explode(',' , $footer_layout); // will be [3,3,3,3]
$footer_bg = 'light';
$widget_style = '';
$widgets_active = false;
foreach ($footer_layout as $i => $col) {
    if(is_active_sidebar('footer-sidebar-' . ($i+1))){
        $widgets_active = true;
    }
}
?>

<?php if($widgets_active) { ?>
    <div class="container-fluid p-4 mt-3 footer-<?php echo $footer_bg; ?>">
    <div class="row">
    <?php foreach($footer_layout as $i => $col) { ?>
        <div class="col-<?php echo $col; ?>">
        <?php if(is_active_sidebar('footer-sidebar-' . ($i+1))) { ?>
            <?php dynamic_sidebar('footer-sidebar-' . ($i+1)); ?>
            <?php } ?>
            
            </div>
            
            <?php } ?>
            </div>
            </div>
            
            <?php } ?>
            
            
            <?php wp_footer(); ?>
            
            </body>
            </html>
            
            