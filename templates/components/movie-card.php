<movie-card>
	<h2 class=" loud-voice name"><?php echo get_the_title(); ?></h2>
	<h3 class="alert-voice year">Release Year: <?php the_field("release_year"); ?></h3>

	<h3 class="alert-voice director">Director</h3> <p class="normal-voice"><?php the_field("director"); ?></p>
	<a href="<?php the_permalink(); ?>">Learn More</a>
</movie-card>