<?php get_header();

get_template_part("template-parts/header/breadcrumb"); ?>

<section class="project-grid-area rel z-2 py-130 rpy-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-10">
                <div class="section-title text-center mb-50 wow fadeInUp delay-0-2s">
                    <h2><?= the_field('title_services_page') ?></h2>
                    <p><?= the_field('description_services_page') ?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            $args = array(
                'post_type'      => 'services',
                'posts_per_page' => -1,             
                'order'          => 'DESC',
            );

            $services_query = new WP_Query($args);

            if ($services_query->have_posts()) :
                while ($services_query->have_posts()) : $services_query->the_post();
            ?>
                    <div class="col-xl-4 col-md-6">
                        <div class="project-grid-item wow fadeInUp delay-0-2s">
                        <a href="<?= get_permalink(); ?>">
                           <div class="image">
                                    <img src="<?= get_the_post_thumbnail_url(); ?>" alt="Project Grid">
                            </div>
                        </a>
                            <div class="content">
                                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                <a href="<?php the_permalink(); ?>" class="detail-btn"><i class="far fa-arrow-right"></i></a>
                            </div>
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

<?php get_footer(); ?>