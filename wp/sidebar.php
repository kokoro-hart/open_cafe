<aside class="p-sidebar l-archive__sidebar">
  <article class="p-sidebar-block">
    <h2 class="p-sidebar-block__title">最近の記事</h2>
    <div class="p-sidebar-block__items">
      <?php
        $args = array(
          'post_type' => 'post',
          'posts_per_page' => 5,
          'orderby' => 'date',
          'order' => 'DESC',
        );
        $aside_posts = get_posts($args);
        foreach($aside_posts as $post) : setup_postdata($post);
        $category = get_the_category();
      ?>
      <a href="<?php the_permalink(); ?>" class="p-sidebar-block__item p-card-sidebar">
        <div class="p-card-sidebar__img-wrapper">
          <?php
            if(has_post_thumbnail()) {
              the_post_thumbnail('full', array(
                'class' => 'p-card-sidebar__img lazyload'
              ));
            } else {
              echo 
              '<svg class="c-svg p-card-sidebar__img" width="100" height="100">
                <use xlink:href="'. esc_url(get_template_directory_uri()) .'/img/svg/sprite.min.svg#logo" />
              </svg>';
            }
          ?>
        </div>
        <div class="p-card-sidebar__body">
          <h3 class="p-card-sidebar__title"><?php the_title(); ?>
          </h3>
          <time datetime="<?php the_time('c'); ?>" class="p-card-sidebar__date"><?php the_time('Y..n.j'); ?></time>
        </div>
      </a>
      <?php endforeach; wp_reset_postdata(); ?>
    </div>
  </article>
  <article class="p-sidebar-block">
    <h2 class="p-sidebar-block__title">カテゴリ</h2>
    <div class="p-sidebar-block__cat">
      <ul class="p-sidebar-cat">
        <?php
          $args = array(
            'parent' => 0,
            'orderby' => 'term_order',
            'order' => 'ASC'
          );
          $categories = get_categories( $args );
          foreach( $categories as $category ) : 
        ?>
        <li class="p-sidebar-cat__item">
          <a href="<?php echo get_category_link( $category->term_id ); ?>" class="p-sidebar-cat__link">
            <?php echo $category->name; ?>
          </a>
        </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </article>
</aside>