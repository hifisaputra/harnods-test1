
</body>

<!-- Footer -->
<footer>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <ul class="list-inline text-center">

          <?php if(get_theme_mod('social_media_twitter_url')): ?>
          <li class="list-inline-item">
            <a href="<?php echo get_theme_mod('social_media_twitter_url') ?>" target="_blank">
              <span class="fa-stack fa-lg">
                <i class="fas fa-circle fa-stack-2x"></i>
                <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
              </span>
            </a>
          </li>
          <?php endif; ?>

          <?php if(get_theme_mod('social_media_facebook_url')): ?>
          <li class="list-inline-item">
            <a href="<?php echo get_theme_mod('social_media_facebook_url') ?>">
              <span class="fa-stack fa-lg">
                <i class="fas fa-circle fa-stack-2x"></i>
                <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
              </span>
            </a>
          </li>
          <?php endif; ?>

          <?php if(get_theme_mod('social_media_github_url')): ?>
          <li class="list-inline-item">
            <a href="<?php echo get_theme_mod('social_media_github_url') ?>">
              <span class="fa-stack fa-lg">
                <i class="fas fa-circle fa-stack-2x"></i>
                <i class="fab fa-github fa-stack-1x fa-inverse"></i>
              </span>
            </a>
          </li>
          <?php endif; ?>

        </ul>
        <p class="copyright text-muted">Copyright &copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?></p>
      </div>
    </div>
  </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="<?php bloginfo('template_url'); ?>/assets/vendor/jquery/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Custom scripts for this template -->
<script src="<?php bloginfo('template_url'); ?>/assets/js/clean-blog.min.js"></script>

<?php wp_footer(); ?>

</html>

