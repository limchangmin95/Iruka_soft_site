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

	$system_img = get_field_object("cor_business_img1", $post_id);
	$mobile_img = get_field_object("cor_business_img2", $post_id);
	$si_img = get_field_object("cor_business_img3", $post_id);


	$business_ttl2 = get_field_object("business_title2", $post_id);
	$business_contnet2 = get_field_object("business_content2", $post_id);
?>

<?php get_header(); ?>

<div class="si-container">
    <div id="primary" class="content-area">
        <div class="mb-2">
            <div class="mb-1">
                <p class="sub-ttl mb-1"><?php echo $business_ttl1["value"] ?></p>
                <p class="font-1"><?php echo $business_contnet1["value"] ?></p>
            </div>
            <div>
                <p class="font-1">当社のサービス</p>
            </div>
            <div class="display-container">
                <div class="display-item-33">
                    <img
                        class="img-border"
                        src="<?php echo $system_img["value"] ?>"
                        alt="<?php echo $system_img["label"] ?>"/>
                    <p class="text-center font-15 font-bold"><?php echo $system_img["label"] ?></p>
                </div>
                <div class="display-item-33">
                    <img
                        class="img-border"
                        src="<?php echo $mobile_img["value"] ?>"
                        alt="<?php echo $mobile_img["label"] ?>"/>
                    <p class="text-center font-15 font-bold"><?php echo $mobile_img["label"]  ?></p>
                </div>
                <div class="display-item-33">
                    <img
                        class="img-border"
                        src="<?php echo $si_img["value"] ?>"
                        alt="<?php echo $si_img["label"] ?>"/>
                    <p class="text-center font-15 font-bold"><?php echo $si_img["label"] ?></p>
                </div>
            </div>
        </div>
        <div>
            <p class="sub-ttl"><?php echo $business_ttl2["value"] ?></p>
            <p class="font-1"><?php echo $business_contnet2["value"] ?></p>
        </div>
    </div>
</div>

<?php get_footer(); ?>