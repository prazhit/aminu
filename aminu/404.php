<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package aminu
 */

get_header();
?>

<main id="content" class="page-content page-404" role="main">
	<div class="container section-padding">
		<div class="al-text-center">
			<h4 class="page-header tw-mb-8">404 Page Not Found</h4>
			<p class="redirect-text">You may want to return to the <a href="<?php echo home_url() ?>">home page</a> or <a href="/">try a search</a>.</p>
		</div>
	</div>
</main>

<?php
get_footer();
