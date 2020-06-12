<header class="masthead" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="post-heading">
                    <h1><?php the_title(); ?></h1>
                    <span class="meta">Posted by
                <a href="#"><?php the_author(); ?></a>
                on <?php the_date(); ?></span>
                </div>
            </div>
        </div>
    </div>
</header>