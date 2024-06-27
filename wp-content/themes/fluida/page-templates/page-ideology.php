<?php
/*
Template Name: ideology
*/
?>
<?php 
	// 経営理念ページの$post_id
	$post_id = 12;

	$thumnail = get_field_object("ideo_represent_img", $post_id);
	$content = get_field_object("ideo_content", $post_id);
?>

<?php get_header(); ?>
<div id="container" class="three-columns-sided">
	<main id="main" class="main">
        <article  <?php post_class( 'hentry' ); cryout_schema_microdata( 'blogpost' ); ?>>
            <div class="article-inner">
                <header class="entry-header">
                    <h1 class="entry-title"><?php echo the_title(); ?></h1>
                </header>
                <div class="entry-content" <?php cryout_schema_microdata( 'entry-content' ); ?>>
                    <div class="ideo-img-contain mb-1">
			            <img class="img-border" src="<?php echo $thumnail["value"] ?>" alt="" /> 
		            </div>
		            <p class="font-1">
			            <?php echo $content["value"] ?>
		            </p>
                </div>
            </div>
        </article>
    </main>
</div>
<?php get_footer(); ?>