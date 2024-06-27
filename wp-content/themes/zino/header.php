<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php wp_head(); ?>
    </head>
    <body>
        <?php wp_body_open(); ?>
        <div class="wp-site-blocks">
            <header class="wp-block-template-part">
                <div
                    class="wp-block-group home-banner has-secondary-color has-text-color has-link-color wp-elements-1cefd6633a2bf9b68f82bbc3bb49004e is-layout-flow wp-container-4 wp-block-group-is-layout-flow">
                    <div
                        class="wp-block-cover is-light"
                        style="padding-top:3rem;padding-right:var(--wp--preset--spacing--50);padding-bottom:3rem;padding-left:var(--wp--preset--spacing--50);min-height:80vh">
                        <span
                            aria-hidden="true"
                            class="wp-block-cover__background has-black-background-color has-background-dim"></span>
                        <img
                            class="wp-block-cover__image-background wp-image-231"
                            alt="<?php echo esc_attr_e( 'main-banner', 'zino' ); ?>"
                            src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/technology.jpg"
                            data-object-fit="cover"/>
                        <div class="wp-block-cover__inner-container">
                            <div class="aligncenter is-style-rounded wp-block-site-logo">
                                <a
                                    href="http://localhost/wordpress/"
                                    class="custom-logo-link"
                                    rel="home"
                                    aria-current="page">
                                    <img
                                        width="150"
                                        height="148"
                                        src="http://localhost/wordpress/wp-content/uploads/2023/10/wordpress-logo-1.jpg"
                                        class="custom-logo"
                                        alt="イルカSoft"
                                        decoding="async"></a>
                            </div>
                            <h1
                                class="has-text-align-center has-text-color has-white-color wp-block-site-title">
                                <a
                                    href="http://localhost/wordpress"
                                    target="_self"
                                    rel="home"
                                    aria-current="page">イルカSoft</a>
                            </h1>

                            <nav
                                class="has-text-color has-white-color is-responsive items-justified-center wp-block-navigation is-content-justification-center is-layout-flex wp-container-2 wp-block-navigation-is-layout-flex"
                                aria-label="ナビゲーション 2">
                                <button
                                    aria-haspopup="true"
                                    aria-label="メニューを開く"
                                    class="wp-block-navigation__responsive-container-open "
                                    data-micromodal-trigger="modal-1">
                                    <svg
                                        width="24"
                                        height="24"
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewbox="0 0 24 24">
                                        <path d="M5 5v1.5h14V5H5zm0 7.8h14v-1.5H5v1.5zM5 19h14v-1.5H5V19z"></path>
                                    </svg>
                                </button>
                                <div
                                    class="wp-block-navigation__responsive-container  has-text-color has-white-color has-background has-black-background-color"
                                    style=""
                                    id="modal-1">
                                    <div
                                        class="wp-block-navigation__responsive-close"
                                        tabindex="-1"
                                        data-micromodal-close="">
                                        <div class="wp-block-navigation__responsive-dialog" aria-label="メニュー">
                                            <button
                                                aria-label="メニューを閉じる"
                                                data-micromodal-close=""
                                                class="wp-block-navigation__responsive-container-close">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    viewbox="0 0 24 24"
                                                    width="24"
                                                    height="24"
                                                    aria-hidden="true"
                                                    focusable="false">
                                                    <path
                                                        d="M13 11.8l6.1-6.3-1-1-6.1 6.2-6.1-6.2-1 1 6.1 6.3-6.5 6.7 1 1 6.5-6.6 6.5 6.6 1-1z"></path>
                                                </svg>
                                            </button>
                                            <div
                                                class="wp-block-navigation__responsive-container-content"
                                                id="modal-1-content">
                                                <ul
                                                    class="wp-block-navigation__container has-text-color has-white-color is-responsive items-justified-center wp-block-navigation">
                                                    <li class=" wp-block-navigation-item wp-block-navigation-link">
                                                        <a
                                                            class="wp-block-navigation-item__content"
                                                            href="http://localhost/wordpress/info/">
                                                            <span class="wp-block-navigation-item__label">会社概要</span></a>
                                                    </li>
                                                    <li class=" wp-block-navigation-item wp-block-navigation-link">
                                                        <a
                                                            class="wp-block-navigation-item__content"
                                                            href="http://localhost/wordpress/ideology/">
                                                            <span class="wp-block-navigation-item__label">経営理念</span></a>
                                                    </li>
                                                    <li class=" wp-block-navigation-item wp-block-navigation-link">
                                                        <a
                                                            class="wp-block-navigation-item__content"
                                                            href="http://localhost/wordpress/business/">
                                                            <span class="wp-block-navigation-item__label">ビジネス</span></a>
                                                    </li>
                                                    <li class=" wp-block-navigation-item wp-block-navigation-link">
                                                        <a
                                                            class="wp-block-navigation-item__content"
                                                            href="http://localhost/wordpress/recruit/">
                                                            <span class="wp-block-navigation-item__label">採用情報</span></a>
                                                    </li>
                                                    <li class=" wp-block-navigation-item wp-block-navigation-link">
                                                        <a
                                                            class="wp-block-navigation-item__content"
                                                            href="http://localhost/wordpress/contact/">
                                                            <span class="wp-block-navigation-item__label">お問い合わせ</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </header>