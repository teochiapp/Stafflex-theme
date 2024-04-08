<section class="slider-area-two rel z-1">
    <div class="slider-two-active">
        <?php
        $args = array(
            'post_type' => 'slides',
            'posts_per_page' => 2,
        );

        $query = new WP_Query($args);
        if ($query->have_posts()) :
            while ($query->have_posts()) :
                $query->the_post();
                $video_url = get_field("video_url_slider");
                $video_id = get_youtube_video_id($video_url);
        ?>
                <div class="slider-item-two bgc-slider-custom">
                    <div class="container">
                        <div class="slide-content">
                            <span class="sub-title"><?php the_field('subtitle'); ?></span>
                            <h1><?php the_title(); ?></h1>
                            <?php
                            $link = get_field('slider_button');
                            if ($link) :
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                                <a href="<?php echo esc_url($link_url); ?>" class="theme-btn mt-15" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php if (get_field('video_url_slider')) {
                        $sliderCheck =  true;
                    ?>
                        <div class="slider-video">
                            <?php the_field('video_url_slider') ?>
                        </div>
                    <?php

                    } else {
                        $sliderCheck = false;
                    ?>
                        <div class="slider-image" style="background-image: url(<?php the_post_thumbnail_url() ?>)"></div>
                    <?php } ?>
                </div>
        <?php
            endwhile;
            wp_reset_postdata();
        endif;
        ?>
    </div>
    <div class="slider-arrows">
        <div class="container rel">
            <button class="prev-slider"><i class="fal fa-angle-left"></i></button>
            <button class="next-slider"><i class="fal fa-angle-right"></i></button>
        </div>
    </div>
    <div class="slider-bg-text"><?php the_field("floating_text_slide") ?></div>
</section>
