<section class="blog-area-four pt-130 rpt-100 pb-100 rpb-70 rel z-1">
    <div class="container">
        <div class="row justify-content-between align-items-end mb-30">
            <div class="col-xl-6 col-lg-8">
                <div class="section-title mb-25 wow fadeInLeft delay-0-2s">
                    <span class="sub-title mb-10"><?= the_field('subtitle_blog_home') ?></span>
                    <h2><?= the_field('title_blog_home') ?></h2>
                    <span class="bg-text"><?= the_field('background_text_blog_home') ?></span>
                </div>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="<?= get_permalink(get_option('page_for_posts')); ?>" class="theme-btn style-four mb-30 wow fadeInRight delay-0-2s"><?= the_field('button_text_blog_home') ?></a>
            </div>
        </div>

        <?php  
        $args = array(
            'post_type'      => 'post',
            'posts_per_page' => 3,
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
        ?>
                <div class="blog-item style-four wow fadeInUp delay-0-2s">
                    <div class="image">
                        <?php the_post_thumbnail('large', array('class' => 'img-fluid', 'alt' => 'Blog Image')); ?>
                    </div>
                    <div class="content">
                        <ul class="blog-meta">
                            <li><i class="far fa-calendar-alt"></i> <a href="<?php the_permalink(); ?>"><?php the_date('F j, Y'); ?></a></li>
                        </ul>
                        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                        <div class="author-more">
                            <a href="<?php the_permalink(); ?>" class="read-more">Read More <i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
        <?php
            endwhile;
            wp_reset_postdata();
        endif;
        ?>
    </div>
</section>
