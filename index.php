<?php get_header(); ?>


<?php 
	if ( is_page("home") ) {
		echo "<h1>Home</h1>";
	}

	if ( is_page("movie-list") ) {
		$args = array(  
        'post_type' => 'movie',
   	);

	   $loop = new WP_Query( $args ); 
	        
	   while ( $loop->have_posts() ) : $loop->the_post(); 
	   	include("templates/components/movie-card.php");
	   endwhile;

	   wp_reset_postdata(); 
	}

	if ( is_singular("movie") ) {
		echo "<h1>Movie Detail</h1>"; 
		echo "<h1>" . the_field("movie_name") . "</h1>";
	}
?>

<?php get_footer(); ?>