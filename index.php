<?php get_header(); ?>
  <div class="articles-separator"></div>
  <div class="articles-wrapper">
    <?php if ( have_posts() ) :
            while ( have_posts() ) :
              the_post();
    ?>
      <div class="article-thumbnail">
        <div class="article-thumbnail-image-wrapper">
          <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="article-thumbnail-image">
          <span class="article-thumbnail-category higia-font-helveticaneue-light"><?php the_category( ' ' ); ?></span>
        </div>
        <div class="article-thumbnail-info">
          <time class="article-thumbnail-date higia-font-helveticaneue-medium"><?php the_time('F d, Y') ?></time>
          <h2 class="article-thumbnail-title higia-font-helveticaneue-bold"><?php the_title(); ?></h2>
            <?php the_excerpt(); ?>
          <a href="<?php the_permalink(); ?>">
            <button class="article-thumbnail-button btn-pink higia-font-helveticaneue-normal">See more</button>          
          </a>
        </div>
      </div>
    <?php   endwhile;
          else : 
    ?>
      <h2 class="not-found-articles">Entradas no disponibles</h2>
    <?php
      endif;
    ?>
  </div>
<?php get_footer(); ?>
