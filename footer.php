<?php $args = array(
    'post_type'      => 'header-footer',
    'posts_per_page' => 1,
    'order' => "DESC",
);

$query = new WP_Query($args);

if ($query->have_posts()) :
    while ($query->have_posts()) : $query->the_post();
?>
        <footer class="main-footer bgc-gray footer-white rel z-1 mt-80" style="background-image: url('<?php the_field("background_image_footer"); ?>');">
            <div class="footer-cta-wrap">
                <div class="container">
                    <div class="footer-cta-inner bgs-cover" style="background-image: url('<?php the_field("newsletter_section_background_image"); ?>');">
                        <div class="section-title wow fadeInLeft delay-0-2s">
                            <span class="sub-title"><?= the_field('newsletter_section_subtitle') ?></span>
                            <h2><?= the_field('newsletter_section_title') ?></h2>
                        </div>
                        <a href="<?= the_field("newsletter_section_button_link"); ?>" class="theme-btn style-three wow fadeInRight delay-0-2s"><?= the_field('newsletter_section_button_text') ?></a>
                        <div class="hotline wow fadeInRight delay-0-2s">
                            <img class="icon-newslewtter-footer" src="<?php the_field("newsletter_section_icon") ?>">
                            <div class="content">
                                <span><?= the_field('newsletter_section_number_header') ?></span><br>
                                <a href="tel:<?= the_field('newsletter_section_number') ?>">
                                    <?= the_field('newsletter_section_number_text'); ?>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row medium-gap">
                    <div class="col-xl-4 col-sm-6">
                        <div class="footer-widget widget_about wow fadeInUp delay-0-2s">
                            <div class="footer-logo mb-30">
                                <a href="<?= home_url(); ?>"><img src="<?= wp_get_attachment_image_src(get_theme_mod('custom_logo'), 'full')[0] ?>" alt="logo"></a>
                            </div>
                            <p><?= the_field('logo_section_message'); ?></p>
                            <a href="<?= the_field("logo_section_button_link") ?>" class="read-more"><?= the_field('logo_section_button_text'); ?></a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-6 order-xl-2">
                        <div class="footer-widget widget_newsletter wow fadeInUp delay-0-6s">
                            <h4 class="footer-title"><?= the_field('newsletter_left_section_title') ?></h4>
                            <p><?= the_field('newsletter_left_section_message') ?></p>
                            <div class="form-newsletter-container">
                                <label for="email"><i class="far fa-envelope"></i></label>
                                <?php echo do_shortcode('[wpforms id="577"]');?>
                            </div>
                            <h5>Follow Us</h5>
                            <div class="social-style-one">
                                <a href="<?= the_field("facebook_social_link") ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                <a href="<?= the_field("twitter_social_link") ?>" target="_blank"><i class="fab fa-twitter"></i></a>
                                <a href="<?= the_field("instagram_social_link") ?>" target="_blank"><i class="fab fa-instagram"></i></a>
                                <a href="<?= the_field("linkedin_social_link") ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="row">
                            <div class="col-md-6 col-6 col-small">
                                <div class="footer-widget widget_nav_menu wow fadeInUp delay-0-3s">
                                    <h4 class="footer-title">Menú</h4>
                                    <ul class="list-style-two">
                                        <?php
                                        $args = array(
                                            'theme_location' => 'menu-principal',
                                            'container' => 'ul',
                                            'container_class' => 'menu-principal',
                                            'depth' => '1'
                                        );
                                        wp_nav_menu($args);
                                        ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6 col-6 col-small">
                                <div class="footer-widget widget_nav_menu wow fadeInUp delay-0-4s">
                                    <h4 class="footer-title">Services</h4>
                                    <ul class="list-style-two">
                                        <?php $args = array(
                                            'post_type'      => 'services',
                                            'posts_per_page' => -1,
                                            'orderby'        => 'date',
                                            'order'          => 'DESC',
                                        );

                                        $services_query = new WP_Query($args);

                                        if ($services_query->have_posts()) :
                                            while ($services_query->have_posts()) : $services_query->the_post();
                                        ?>
                                                <li><a href="<?= get_permalink(); ?>"><?php the_title(); ?></a></li>
                                        <?php
                                            endwhile;
                                            wp_reset_postdata();
                                        endif;
                                        ?>
                                    </ul>
                                </div>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom bgc-black mt-20 pt-20">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <div class="footer-bottom-menu mb-10 wow fadeInRight delay-0-2s">
                                <p>Developed by <a href="https://www.estudiorochayasoc.com/" target="_blank"> Estudio Rocha & Asoc.</a></p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="copyright-text text-lg-end wow fadeInLeft delay-0-2s">
                                <p><?php echo date('Y'); ?> - © All rights reserved. </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="footer-shapes">
            </div>
        </footer>
<?php endwhile;
    wp_reset_postdata();
endif; ?>
<button class="scroll-top scroll-to-target" data-target="html"><span class="fas fa-angle-double-up"></span></button>

</div>

<?php wp_footer(); ?>

</body>

</html>