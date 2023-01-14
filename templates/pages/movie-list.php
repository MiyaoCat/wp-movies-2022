<section class="page-section">
	<inner-column>

		<h1 class="loud-voice">Movie List</h1>

		<?php  
		
			$parameters = [
	        'post_type' => 'movie',
	   	];

		   $loop = new WP_Query( $parameters ); 
		        
		   while ( $loop->have_posts() ) : $loop->the_post(); 
		   	include( getFile("templates/components/movie-card.php") );
		   endwhile;
		   
		   wp_reset_postdata(); 
			

			if ( is_singular("movie") ) {
				echo "<h1>Movie Detail</h1>"; 
				echo "<h1 class='loud-voice'>" . the_title() . "</h1>";
			}

		?>

	</inner-column>
</section>