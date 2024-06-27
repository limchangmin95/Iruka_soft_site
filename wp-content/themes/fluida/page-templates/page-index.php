<?php
/*
Template Name: index
*/
?>
<?php $fluida_landingpage = cryout_get_option( 'fluida_landingpage' ); ?>

<?php
if ( is_page() && ! $fluida_landingpage ) {
	load_template( get_page_template() );
	return true;
}

if ( 'posts' == get_option( 'show_on_front' ) ) {
	include( get_home_template() );
} else {
	get_header();
	?>

	<div id="container" class="fluida-landing-page one-column">
		<main id="main" class="main">
            <?php fluida_lpslider(); ?>
            <?php fluida_lpblocks(); ?>
            <?php fluida_lptext('one'); ?>
		</main><!-- #main -->
		<?php if ( ! $fluida_landingpage ) { fluida_get_sidebar(); } ?>
	</div><!-- #container -->

	<?php get_footer();

} 