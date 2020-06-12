<?php
get_header();
?>

<main id="site-content" role="main">

    <?php

    if ( have_posts() ) {

        while ( have_posts() ) {
            the_post();

            get_template_part( 'template-parts/page-header' );
            get_template_part( 'template-parts/content' );
        }
    }

    ?>

</main><!-- #site-content -->
<hr>

<?php get_footer(); ?>
