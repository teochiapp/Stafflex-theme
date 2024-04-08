<?php get_header(); ?>

<section class="error-page-area py-80">
    <div class="container">
        <div class="error-page-content text-center">
            <div class="logo w-75 mb-75 rmb-35 mx-auto wow fadeInUp delay-0-2s"><a href="<?php echo home_url(); ?>"><img src="<?= wp_get_attachment_image_src(get_theme_mod('custom_logo'), 'full')[0] ?>" alt="logo"></a></div>
            <div class="image mb-80 rmb-55 wow fadeInUp delay-0-4s">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/background/404.png" alt="Error">
            </div>
            <div class="row justify-content-center wow fadeInUp delay-0-2s">
                <div class="col-xl-8 col-lg-10">
                    <div class="section-title mb-20">
                        <h2>OPPS! This Page Can’t Be Found </h2>
                    </div>
                    <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment so blinded</p>
                </div>
            </div>
            <div class="btn-social pt-15 wow fadeInUp delay-0-4s">
                <a href="<?php echo home_url(); ?>" class="theme-btn mb-30 mx-2">Go to Home <i class="fas fa-long-arrow-right"></i></a>
                <div class="social-style-two mb-30 mx-2">
                    <?php $args = array(
                        'post_type'      => 'header-footer',
                        'posts_per_page' => 1,
                        'order' => "DESC",
                    );

                    $query = new WP_Query($args);

                    if ($query->have_posts()) :
                        while ($query->have_posts()) : $query->the_post();
                    ?>
                            <a href="<?= the_field("facebook_social_link") ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a href="<?= the_field("twitter_social_link") ?>" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a href="<?= the_field("instagram_social_link") ?>" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a href="<?= the_field("linkedin_social_link") ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    <?php endwhile;
                        wp_reset_postdata();
                    endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>