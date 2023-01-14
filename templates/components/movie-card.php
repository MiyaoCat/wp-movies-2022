
	<movie-card>
		<h2 class=" loud-voice name"><?php echo get_the_title(); ?></h2>
	
		<movie-wrap>
			<movie-details>
				<release-year>
					<h3 class="alert-voice year">Release Year:</h3> 

					<p class="normal-voice"><?php the_field("release_year"); ?></p>
				</release-year>
				
				<h3 class="alert-voice director">Director</h3> 
				<p class="normal-voice"><?php the_field("director"); ?></p>
	
				<h3 class="alert-voice">Starring</h3>
				<p class="normal-voice">
					<ul>
						<?php 
							if( have_rows('main_actors') ) {
								$count = 0;
						   	while( have_rows('main_actors') ) {
						        the_row();
						        
						        $count++;
						        if ($count > 3) {
						       	break;
						        }
	
						        $actor = get_sub_field('actor_name');
						        
									echo "<li class='normal-voice'> $actor </li>";
						     
						   	}
							}
						?>
					</ul>
				</p>

				<h3 class="alert-voice">Awards</h3>
				<p class="normal-voice">
					<ul>
						<?php 
							if( have_rows('awards') ):
							   while ( have_rows('awards') ) : the_row();
							      $sub_value = get_sub_field('award_name');
							      $sub_value2 = get_sub_field('award_type');
							      // Do something...
							      echo "<li class='normal-voice'>$sub_value2: $sub_value </li>";
							   endwhile;
							else :
							    // no rows found
							endif;
						?>
					</ul>
				</p>
			</movie-details>
			
			<picture>
				<image>
					<img src="<?php the_field("movie_poster"); ?>" alt="">
				</image>
			</picture>
		</movie-wrap>
	
		<a href="<?php the_permalink(); ?>">Learn More</a>
	</movie-card>
