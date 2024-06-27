<?php
/*
Template Name: contact
*/
?>

<?php get_header(); ?>
<div id="container" class="three-columns-sided">
	<main id="main" class="main">
        <article  <?php post_class( 'hentry' ); cryout_schema_microdata( 'blogpost' ); ?>>
            <div class="article-inner">
                <header class="entry-header">
                    <h1 class="entry-title"><?php echo the_title(); ?></h1>
                </header>
                <div class="entry-content contact-style" <?php cryout_schema_microdata( 'entry-content' ); ?>>
                    <?php echo the_content() ?>
                </div>
            </div>
        </article>
    </main>
</div>
<?php get_footer(); ?>