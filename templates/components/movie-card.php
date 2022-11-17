<movie-card>
	<h2 class=" loud-voice name"><?php echo get_the_title(); ?></h2>

	<movie-wrap>
		<movie-details>
			<h3 class="alert-voice year">Release Year: <?php the_field("release_year"); ?></h3>
			
			<h3 class="alert-voice director">Director</h3> 
			<p class="normal-voice"><?php the_field("director"); ?></p>

			<h3 class="alert-voice">Starring</h3>
			<p class="normal-voice"><?php the_field("main_actors"); ?></p>
		</movie-details>
		
		<picture>
			<image>
				<img src="<?php the_field("movie_poster"); ?>" alt="">
			</image>
		</picture>
	</movie-wrap>

	<a href="<?php the_permalink(); ?>">Learn More</a>
</movie-card>