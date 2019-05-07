<?php
/**
 * Created by PhpStorm.
 * User: yamna
 * Date: 02/03/2019
 * Time: 16:51
 */?>

<div class="col-sm-3 col-sm-offset-1 blog-sidebar">
    <?php if ( is_active_sidebar( 'sidebar-1' ) ) { dynamic_sidebar( 'sidebar-1' ); } ?>
    <?php if ( is_active_sidebar( 'sidebar-2' ) ) { dynamic_sidebar( 'sidebar-2' ); } ?>
</div><!-- /.blog-sidebar -->