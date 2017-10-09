<?php get_header(); ?>
  <div class="article-wrapper">
    <?php 
      if ( have_posts() ) :
        while ( have_posts() ) :
          the_post();
    ?>
      <div class="article-container">
        <div class="article-cover-wrapper">
          <img src="<?php the_post_thumbnail_url(); ?>" class="article-cover" alt="Article Cover">
        </div>
        <div class="article-content">
          <h2 class="article-title higia-font-helveticaneue-bold"><?php the_title(); ?></h2>
          <div class="article-info">
            <time class="article-date higia-font-helveticaneue-medium"><?php the_time('F d Y') ?></time>
            <span class="article-info-divider higia-font-helveticaneue-medium">|</span>
            <span class="article-cat higia-font-helveticaneue-medium"><?php the_category( ' ' ); ?></span>
          </div>
          <div class="article-content higia-font-helveticaneue-thin">
            <?php the_content(); ?>
          </div>
        </div>
      </div>
    <?php
        endwhile;
      else : 
    ?>
      <h2 class="not-found-articles">Entradas no disponoibles</h2>
    <?php
      endif;
    ?>

    <div class="last-four-art">
    <div class="last-four-separator"></div>
      <?php
        $args = array( 'numberposts' => '4' );
        $recent_posts = wp_get_recent_posts( $args );
        foreach( $recent_posts as $recent ){


      ?>
        <a href="<?php echo get_the_permalink( $recent["ID"] ); ?>" target="_blank">
          <div class="last-article-wrapper">
          <div class="last-article-img-container">
            <img src="<?php echo get_the_post_thumbnail_url( $recent["ID"], 'medium' ); ?>" class="last-article-img" alt="">
          </div>
          <div class="last-article-desc">
            <div class="last-article-title-wrapper">
              <h3 class="last-article-title higia-font-helveticaneue-bold"> <?php echo $recent["post_title"]; ?></h3>
            </div>
            <div class="last-article-info">
              <time class="last-article-date higia-font-helveticaneue-medium"><?php echo get_the_date('F d Y', $recent["ID"]); ?></time>
              <span class="article-info-divider higia-font-helveticaneue-medium">|</span>
              <span class="last-article-cat higia-font-helveticaneue-medium"><?php echo get_object_vars( array_values( get_the_category($recent["ID"]) )[0] )["name"]; ?></span>
            </div>
          </div>
        </div>
        </a>
      <?php
        }
        wp_reset_query();
      ?>
    </div>
  </div>
<?php get_footer(); ?>