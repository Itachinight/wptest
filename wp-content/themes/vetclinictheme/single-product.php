<?php
get_header(); 
?>


<?php while ( have_posts() ) : the_post(); ?>

<?php wc_get_template_part( 'content', 'single-product' ); ?>

<?php endwhile; // end of the loop. ?>

<?php get_footer();

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
