<header class="main-header header-two">
    <div class="header-top-wrap bgc-secondary">
        <div class="container">
            <div class="header-top">
                <div class="text"><span class="hello"><?= the_field('top_header_icon_text') ?></span><?= the_field('top_header_message') ?> <a href="<?= the_field("top_header_button_link"); ?>"><?= the_field('top_header_button_text') ?></a></div>
            </div>
        </div>
    </div>

    <div class="header-upper bg-white">
        <div class="container-fluid clearfix">

            <div class="header-inner rel d-flex align-items-center">
                <div class="logo-outer">
                    <div class="logo"><a href="<?php echo site_url('/') ?>"><img src="<?= wp_get_attachment_image_src(get_theme_mod('custom_logo'), 'full')[0] ?>" alt="logo"></a></div>
                </div>

                <div class="nav-outer mx-auto clearfix">
                    <nav class="main-menu navbar-expand-lg">
                        <div class="navbar-header py-10">
                            <div class="mobile-logo">
                                <a href="<?php echo site_url('/') ?>"><img src="<?= wp_get_attachment_image_src(get_theme_mod('custom_logo'), 'full')[0] ?>" alt="logo"></a>
                            </div>

                            <button type="button" class="navbar-toggle" data-bs-toggle="collapse" data-bs-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix">
                                <?php
                                $args = array(
                                    'menu' => 'Menu Principal',
                                    'menu_class'      => 'navigation',
                                    'sub-menu'        => 'dropdown',
                                    'depth'           => 2,
                                    'link_class'   => 'dropdown a',
                                    'container'       => 'ul',
                                    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                                    'walker'          => new WP_Bootstrap_Navwalker(),
                                );
                                wp_nav_menu($args); ?>
                        </div>

                    </nav>
                </div>

                <div class="menu-btns">
                    <a href="<?php the_field("top_header_sec_button_link")?>" class="theme-btn"><?php the_field('top_header_sec_button_text') ?> <i class="fas fa-long-arrow-right"></i></a>
                </div>

                <div class="social-style-two">
                    <a href="<?= the_field("facebook_social_link") ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="<?= the_field("twitter_social_link") ?>" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a href="<?= the_field("instagram_social_link") ?>" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="<?= the_field("linkedin_social_link") ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
</header>