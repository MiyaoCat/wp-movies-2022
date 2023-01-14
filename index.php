<?php get_header(); ?>

<?php 
	if ( is_page("home") ) {
		include("templates/pages/home.php");
	}

	if ( is_page("movie-list") ) {
		include("templates/pages/movie-list.php");
	}

	if ( is_singular("movie") ) {
		include("templates/pages/movie-detail.php");
	}	

	if ( is_404() ) {
		include("templates/pages/404.php");
	}
?>

<?php get_footer(); ?>