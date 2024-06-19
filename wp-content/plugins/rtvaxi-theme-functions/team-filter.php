<?php
/**
 *  query for gallery Isotope filterable custom post type
 *
 */
 ?>	
<div class="isotopewrapper">  
 
<div id="filters" class="button-group"> 
  <button class="team-button" data-filter="*"><i class="fas fa-users"></i></button>
  <?php 
	  $terms = get_terms("rtvaxi-cat"); 
	  $count = count($terms); 
	  if ( $count > 0 ){ 
	    foreach ( $terms as $term ) { 
	    $termname = strtolower($term->name);
      $termname = str_replace(' ','-', $termname);
	    echo "<button class=\"team-button\" data-filter='.".$termname."'>" . $term->name . "</button>\n";
	    } 
    }    
  ?>
</div>

<div class="grid gap">
<?php
$args = array( 'post_type' => 'rtvaxi-team', 'posts_per_page' => $limit, 
'order' => $order );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();

$post = NULL;
$terms = get_the_terms( $post, 'rtvaxi-cat' );						
  if ( $terms && ! is_wp_error( $terms ) ) : 
    $items = array();
      foreach ( $terms as $term ) {
        $items[] = $term->name;
      }
      $taxonomy_items = join( " ", str_replace(' ', '-', $items));          
      $taxonomy_items = strtolower($taxonomy_items);
      else :	
	    $taxonomy_items = NULL;					
      endif; 
?>
<div class="element-item element-item3
<?php 
echo esc_attr( strtolower($taxonomy_items) );?>">
<div class="teambox">
<div class="teambox-imagewrapper">
<a href="<?php the_permalink(); ?>">
<?php 
echo the_post_thumbnail();
?>
 </a>
</div>
<div class="teambox-title">
  <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
</div>
<div class="text-wrapper">
  <h4>
	<?php  
		if (function_exists( 'acf_add_local_field_group' )){
      echo get_field('field_text1');
    } 
  ?>
	</h4>
  <p>
	<?php  
		if (function_exists( 'acf_add_local_field_group' )){
      echo get_field('field_text2');
    }
  ?>
	</p>
  <?php  
		if (function_exists( 'acf_add_local_field_group' )){
      echo get_field('field_1b');
    }
  ?>
</div> 
</div> 
</div> 
<?php endwhile; wp_reset_postdata(); ?>
</div>
</div>