
      <div id="post__container">
        <div class="post">
          <div class="post-header__container">
            <div class="post-header__left">
              <h3><?php the_title(); ?></h3>
              <h4><?php the_date(); ?></h4>
            </div>
            <div class="post-header__right">

            </div>
          </div>
          <p>
            <?php the_content(); ?>
            <a class="single-back-link" href="<?php echo get_bloginfo( 'wpurl' );?>">
              <i class="fa fa-angle-left" aria-hidden="true"></i> Go back
            </a>
          </p>
        </div>
      </div>
