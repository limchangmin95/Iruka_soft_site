<?php
/**
 * This file handles landing page elements
 *
 * @package Fluida
 */

$business_post_id = 8;
$business_imgs = get_field_object("cor_business_imgs", $business_post_id);
$business_src_list = $business_imgs["value"];

fluida_lpslider();
fluida_lptext('one');
// fluida_lpboxes(1);
?>

<section id="lp-boxes-1" class="lp-boxes lp-boxes-1 lp-boxes-static lp-boxes-rows-3">
	<div class="lp-boxes-inside	lp-boxes-margins">
        <div class="lp-box-content">
            <div class="display-container">
                <?php foreach ($business_src_list as $img) : ?>
			    <div class="display-item-33">
				    <img class="img-border" src="<?php echo $img ?>" alt="aaa" />
			    </div>
		        <?php endforeach; ?>
            </div>
            <div class="display-container">
			    <div class="display-item-33"><p class="text-center font-15 font-bold">SYSTEM</p></div>
			    <div class="display-item-33"><p class="text-center font-15 font-bold">MOBILE</p></div>
			    <div class="display-item-33"><p class="text-center font-15 font-bold">SI事業</p></div>
                <div class="display-item-100 mt-1 text-center">
                    <a class="link" href="<?php echo esc_url( get_permalink($business_post_id) ) ?>">more</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php fluida_lpblocks(); ?>
<!-- // fluida_lptext('two');
// fluida_lpboxes(2);
// fluida_lptext('three');
// fluida_lpindex();
// fluida_lptext('four'); 
// FIN
-->
		
