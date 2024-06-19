<?php
/**
 *  query for blog news custom post type
 *
 */
 ?> 
<div class="row">
  <?php
    $args = array( 'post_type' => 'post', 'posts_per_page' => 3, 'ignore_sticky_posts' => 1, 'order' => 'DESC' );
    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post();
  ?>
  <div class="col-lg-4 col-md-6">
    <article class="blog-1">
      <div <?php post_class(); ?>>
        <a class="blog-1-image-wrapper" href="<?php the_permalink(); ?>">
				<?php 
        if (has_post_thumbnail())
        {the_post_thumbnail('rtvaxi_blog1column');}
				else{ }
				?>
				</a>
        <div class="blog-meta">
          <div class="blog-meta-date">  
						<?php echo get_the_date(get_option('date_format'))?>  
					</div>                  
					<div class="blog-meta-inner"> 
            <ul class="blog-meta-author">
              <li> <i class="fa fa-user"></i>   <?php the_author_posts_link(); ?>  </li>  
              <li> <i class="fa fa-comment"></i>   
							  <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a>  
							</li>    
						</ul>
					</div>
				</div>
				<h2>
        <a href="<?php the_permalink(); ?>">
          <?php the_title(); ?>
        </a>
        </h2>
				<div>
        <p>
				  <?php 
          $content = get_the_excerpt();
          $trimmed_content = wp_trim_words( $content, 16 );
          echo $trimmed_content;
          ?>
				</p>  
      </div>
    </div>
    </article> 
  </div>
  <?php endwhile; wp_reset_postdata(); ?>
</div>