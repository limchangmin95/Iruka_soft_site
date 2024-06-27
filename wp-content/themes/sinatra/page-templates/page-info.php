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

<div class="si-container">
    <div id="primary" class="content-area">
        <?php if (!empty($acf_data)) : ?>
        <ul class="cor-ul">
            <?php foreach ($acf_data as $data) : ?>
            <?php if ($data["name"] != "cor_access") : ?>
            <li class="display-flex">
                <p class="cor-ttl"><?php echo $data["label"] ?></p>
                <p class="cor-txt"><?php echo $data["value"] ?></p>
            </li>
            <?php endif; ?>
            <?php endforeach; ?>
        </ul>
        <?php endif; ?>
        <div class="display-container display-align-no mt-2">
            <div class="display-item-100 mb-1">
                <p class="sub-ttl">アクセス</p>
            </div>
            <?php if (have_rows("cor_access")) : ?>
            <?php while( have_rows('cor_access') ): the_row(); ?>
            <div class="display-item-50">
                <div class="mb-1">
                    <?php the_sub_field("cor_map") ?>
                </div>
            </div>
            <div class="display-item-50">
                <div>
                    <div class="info-access mb-1">
                        <p class="font-bold"><?php the_sub_field("cor_access_station1") ?></p>
                        <p><?php the_sub_field("cor_access_content1") ?></p>
                    </div>
                    <div class="info-access">
                        <p class="font-bold"><?php the_sub_field("cor_access_station2") ?></p>
                        <p><?php the_sub_field("cor_access_content2") ?></p>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>