<?php
/*
Template Name: info
*/
?>

<?php 
	// 会社概要ページの$post_id
	$post_id = 10;
    $acf_data = get_field_objects($post_id);
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
                    <?php if (!empty($acf_data)) : ?>
			        <ul class="cor-ul">
			            <?php foreach ($acf_data as $data) : ?>
				        <li class="display-flex">
					        <p class="cor-ttl"><?php echo $data["label"] ?></p>
					        <p class="cor-txt"><?php echo $data["value"] ?></p>
				        </li>
			            <?php endforeach; ?>
			        </ul>
		            <?php endif; ?>
                </div>
            </div>
        </article>
    </main>
</div>
<?php get_footer(); ?>