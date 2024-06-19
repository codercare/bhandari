<?php
/**
 *  query for testimonials 1 custom post type
 *
 */
 ?> 
<div class="testimonials1 slider">
  <?php
    $args = array( 'post_type' => 'rtvaxi-test1', 'posts_per_page' => $limit, 'order' => $order );
    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post();
  ?>
	<div class="testimonials">
    <div class="item">
      <?php the_content(); ?>
      <a href="<?php if ( class_exists('ACF') ){
      $url = get_field('testimonials-url');}
      echo esc_html($url) ;?>"><cite><?php the_title(); ?></cite></a> 
			
			<?php if ( class_exists('ACF') ){
      $text3 = get_field('testimonials-text3');}
      echo '<h6> ' . $text3 . '</h6>' ;?>	
			
    </div> 
  </div> 
  <?php endwhile; wp_reset_postdata(); ?>
</div>