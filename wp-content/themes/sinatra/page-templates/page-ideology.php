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

<div class="si-container">
    <div id="primary" class="content-area">
        <div class="ideo-img-contain mb-1">
			<img class="img-border" src="<?php echo $thumnail["value"] ?>" alt="" /> 
		</div>
		<p class="font-1">
			<?php echo $content["value"] ?>
		</p>
    </div>    
</div>    

<?php get_footer(); ?>