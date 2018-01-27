
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
            <?php the_excerpt(); ?>
          </p>
          <a href="<?php the_permalink(); ?>"><i class="fa fa-angle-down" aria-hidden="true"></i> View post</a>
        </div>
      </div>
