<?php
/*
Template Name: index
*/
?>

<?php 
    // ビジネスページの$post_id
    $business_post_id = 8;
    
	$system_img = get_field_object("cor_business_img1", $business_post_id);
	$mobile_img = get_field_object("cor_business_img2", $business_post_id);
	$si_img = get_field_object("cor_business_img3", $business_post_id);

    $home_post_id = 6;
    $challenge_img = get_field_object("home_challenge_img", $home_post_id);
    $communication_img = get_field_object("home_communication_img", $home_post_id);
?>

<?php get_header(); ?>
<div class="slider-home">
    <div class="slide">
        <div class="display-cell">
            <p class="text-center home-main-ttl">
                日本に、<br class="is-sp"/>新しいプレーンを。
            </p>
        </div>
    </div>
    <div class="slide">
        <div class="display-cell">
            <p class="text-center home-main-ttl">
                誰よりも、未来へ
            </p>
        </div>
    </div>
    <div class="slide">
        <div class="display-cell">
            <p class="text-center home-main-ttl">
                価値創出を追求する<br class="is-sp"/>SI企業
            </p>
        </div>
    </div>
</div>
<!-- <div id="home-index"> <div class="main_visual"> <div class="display-cell">
<p class="text-center home-main-ttl"> 日本に、<br class="is-sp"/>新しいプレーンを。 </p>
</div> </div> </div> -->

<div class="si-container">
    <div id="primary" class="content-area">
        <div class="text-center mb-1">
            <p class="home-sub-ttl">ビジョン</p>
        </div>
        <div class="display-container">
            <div class="display-item-100 mb-1">
                <div class="display-container">
                    <div class="display-item-50">
                        <div>
                            <p class="font-15 font-bold">挑戦</p>
                            <p>失敗を恐れず、信念と意志を持って積極的に業務を行う。</p>
                        </div>
                    </div>
                    <div class="display-item-50 home-right-img">
                        <img
                            src="<?php echo $challenge_img["value"] ?>"
                            alt="<?php echo $challenge_img["label"] ?>"/>
                    </div>
                </div>
            </div>
            <div class="display-item-100 mb-1">
                <div class="display-container">
                    <div class="display-item-50 home-left-img">
                        <img
                            src="<?php echo $communication_img["value"] ?>"
                            alt="<?php echo $communication_img["label"] ?>"/>
                    </div>
                    <div class="display-item-50">
                        <div>
                            <p class="font-15 font-bold">コミュニケーション</p>
                            <p>失敗を恐れず、信念と意志を持って積極的に業務を行う。</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="display-item-100">
                <div class="display-container">
                    <div class="display-item-50">
                        <div>
                            <p class="font-15 font-bold">責任</p>
                            <p>失敗を恐れず、信念と意志を持って積極的に業務を行う。</p>
                        </div>
                    </div>
                    <div class="display-item-50 home-right-img">
                        <img
                            src="<?php echo $communication_img["value"] ?>"
                            alt="<?php echo $communication_img["label"] ?>"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="si-container">
    <div id="primary" class="content-area">
        <div class="text-center mb-1">
            <p class="home-sub-ttl">ビジネス</p>
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
        <div class="display-container">
            <div class="display-item-100 text-center">
                <a
                    class="link"
                    href="<?php echo esc_url( get_permalink($business_post_id) ) ?>">more</a>
            </div>
        </div>

    </div>
</div>
<div class="si-container">
    <div id="primary" class="content-area mt-0">
        <div class="display-container">
            <?php 
                $contact_post_id = 16;
                $recruit_post_id = 14;

                $recruit = get_field_object("home_recruit_img");
                $contact = get_field_object("home_contact_img");
            ?>
            <div class="display-item-50">
                <a
                    class="img-link"
                    href="<?php echo esc_url( get_permalink($recruit_post_id) ) ?>">
                    <div class="img-design">
                        <div>
                            <img
                                class="img-border content-img-fill"
                                src="<?php echo esc_url($recruit["value"]) ?>"
                                alt="<?php echo $recruit["label"] ?>">
                        </div>
                        <div class="img-text">
                            <p class="home-sub-img">採用情報</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="display-item-50">
                <a
                    class="img-link"
                    href="<?php echo esc_url( get_permalink($contact_post_id) ) ?>">
                    <div class="img-design">
                        <div>
                            <img
                                class="img-border content-img-fill"
                                src="<?php echo esc_url($contact["value"]) ?>"
                                alt="<?php echo $contact["label"] ?>">
                        </div>
                        <div class="img-text">
                            <p class="home-sub-img text-center">お問い合わせ</p>
                        </div>

                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>