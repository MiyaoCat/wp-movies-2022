<movie-card>
	<h2 class="name"><?php echo get_the_title(); ?></h2>
	<h3 class="year">Release Year: <?php the_field("release_year"); ?></h3>

	<a href="<?php the_permalink(); ?>">Learn More</a>
</movie-card>