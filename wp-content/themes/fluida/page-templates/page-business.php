<?php
/*
Template Name: business
*/
?>

<?php
	// ビジネスページの$post_id
	$post_id = 8;

	$business_ttl1 = get_field_object("business_title1", $post_id);
	$business_contnet1 = get_field_object("business_content1", $post_id);
	$business_imgs = get_field_object("cor_business_imgs", $post_id);

	$business_alt_list = $business_imgs["label"];
	$business_src_list = $business_imgs["value"];

	$business_ttl2 = get_field_object("business_title2", $post_id);
	$business_contnet2 = get_field_object("business_content2", $post_id);
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
                    <div class="mb-2">
		                <div class="mb-1">
			                <p class="sub-ttl"><?php echo $business_ttl1["value"] ?></p>
			                <p class="font-1"><?php echo $business_contnet1["value"] ?></p>
		                </div>
		                <div>
		                    <p class="font-1">当社のサービス</p>
		                </div>
		                <div class="display-container">
			                <?php foreach ($business_src_list as $img) : ?>
				            <div class="display-item-33">
					            <img class="img-border" src="<?php echo $img ?>" alt="aaa" />
				            </div>
			                <?php endforeach; ?>
		                </div>
	                </div>
	                <div>
		                <p class="sub-ttl"><?php echo $business_ttl2["value"] ?></p>
		                <p class="font-1"><?php echo $business_contnet2["value"] ?></p>
	                </div>
                </div>
            </div>
        </article>
    </main>
</div>
<?php get_footer(); ?>