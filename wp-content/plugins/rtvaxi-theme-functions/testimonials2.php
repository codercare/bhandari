<?php
/**
 *  query for testimonials 2 custom post type
 *
 */
 ?> 
<div class="testimonialsb slider">
  <?php
    $args = array( 'post_type' => 'rtvaxi-test2', 'posts_per_page' => $limit, 'order' => $order );
    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post();
  ?>
	<div class="testimonials testimonials2">
    <div class="item">
      <h5><?php the_content(); ?></h5>

        <?php 
        if (has_post_thumbnail())
        {the_post_thumbnail();}
				else{ }
				?>
      <a href="<?php if ( class_exists('ACF') ){
      $url = get_field('testimonials-url');}
      echo esc_html($url) ;?>"><cite><?php the_title(); ?></cite></a> 

    </div> 
  </div> 
  <?php endwhile; wp_reset_postdata(); ?>
</div>