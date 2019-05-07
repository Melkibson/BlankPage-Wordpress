<?php
/**
 * Created by PhpStorm.
 * User: yamna
 * Date: 02/03/2019
 * Time: 16:51
 */?>



<footer class="footer-section">
    <div class="container text-center">
    <?php if ( is_active_sidebar( 'footer-copyright-text' ) ) { dynamic_sidebar( 'footer-copyright-text' ); } ?>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>