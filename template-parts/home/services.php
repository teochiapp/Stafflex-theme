<section class="services-area-five pt-65 rpt-35 pb-130 rpb-100 rel z-2">
    <div class="container-fluid">
        <div class="section-title text-center mb-55 wow fadeInUp delay-0-2s">
            <span class="sub-title mb-10"><?= the_field('subtitle_services_home') ?></span>
            <h2><?= the_field('title_services_home') ?></h2>
            <p><?= the_field('description_services_home') ?></p>
            <span class="bg-text"><?= the_field('background_text_services_home') ?></span>
        </div>
        <div class="services-five-active">
            <?php
            $args = array(
                'post_type'      => 'services',
                'posts_per_page' => -1,
                'orderby'        => 'date',
                'order'          => 'ASC',
            );

            $services_query = new WP_Query($args);

            if ($services_query->have_posts()) :
                while ($services_query->have_posts()) : $services_query->the_post();
            ?>
                    <div class="service-item-five wow fadeInUp delay-0-2s">
                        <img src="<?= get_the_post_thumbnail_url(); ?>" alt="Services">
                        <div class="content">
                            <div class="icon-title">
                                <div class="icon"><img class="icon-service" src="<?= the_field('icon_services'); ?>" alt="Services"></div>
                                <h4><a href="<?= get_permalink(); ?>"><?php the_title(); ?></a></h4>
                            </div>
                            <div class="bottom-part">
                                <p><?= wp_trim_words(get_the_content(), 10, '...'); ?></p>
                                <a href="<?= get_permalink(); ?>" class="read-more"><?= the_field('button_text_services') ?> <i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <span class="bg-text"><?= the_field('background_text_services'); ?></span>
                    </div>
            <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>
    </div>
</section>