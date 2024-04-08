<section class="services-area-six pb-100 rpb-70 rel z-1">
    <div class="container">
        <div class="row">
        <?php
            $args = array(
                'post_type'      => 'services',
                'posts_per_page' => -1,
                'orderby'        => 'date',
                'order'          => 'DESC',
            );

            $services_query = new WP_Query($args);

            if ($services_query->have_posts()) :
                while ($services_query->have_posts()) : $services_query->the_post();
            ?>
            <div class="col-lg-4 col-md-6">
                <div class="service-item-six wow fadeInUp delay-0-2s">
                    <div class="icon"><img class="icon-service" src="<?= the_field('icon_alt_services'); ?>" alt="Services"></div>
                    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                    <p><?= wp_trim_words(get_the_content(), 13, '...'); ?></p>
                </div>
            </div>
            <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>
    </div>
</section>