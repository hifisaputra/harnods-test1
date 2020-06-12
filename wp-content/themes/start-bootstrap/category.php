<?php get_header() ?>

<!-- Page Header -->
<header class="masthead" style="background-image: url('<?php bloginfo('template_url') ?>/assets/img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1><?php single_cat_title(); ?></h1>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <?php

            if ( have_posts() ) {

                $i = 0;

                while ( have_posts() ) {
                    $i++;
                    the_post(); ?>

                    <div class="post-preview">
                        <a href="<?php the_permalink(); ?>">
                            <h2 class="post-title">
                                <?php the_title(); ?>
                            </h2>
                            <h3 class="post-subtitle">
                                <?php echo get_the_excerpt(); ?>
                            </h3>
                        </a>
                        <p class="post-meta">Posted by
                            <a href="#"><?php the_author(); ?></a>
                            on <?php the_date(); ?>
                        </p>
                    </div>
                    <hr>

                    <?php
                }
            }
            ?>

        </div>
    </div>
</div>

<hr>

<?php get_footer(); ?>
