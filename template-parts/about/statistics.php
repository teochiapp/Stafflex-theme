<section class="statistics-area-two rel z-2">
    <div class="container">
        <div class="statistics-inner style-two bgs-cover text-white p-80 pb-20" style="background-image: url(<?php echo get_field("background_image_statistics_about")?>);">
            <div class="row align-items-xl-start align-items-center">
                <div class="col-xl-5 col-lg-6">
                    <div class="statistics-content mb-55 wow fadeInUp delay-0-2s">
                        <div class="section-title mb-30">
                            <span class="sub-title mb-15"><?php the_field('subtitle_statistics_about') ?></span>
                            <h2><?php the_field('title_statistics_about') ?></h2>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6">
                    <div class="row">
                        <?php
                        $statistics_items = get_field('features_statistics_repeater');

                        if ($statistics_items) :
                            foreach ($statistics_items as $item) :
                                
                        ?>
                                <div class="col-xl-3 col-small col-6">
                                    <div class="counter-item counter-text-wrap wow fadeInDown delay-0-3s">
                                        <img class="icon-statistics" src="<?php echo esc_url($item['logo_statistics_repeater']); ?>" alt="Icono">
                                        <span class="count-text <?php echo esc_html($item['sign_statistics_repeater']); ?>" data-speed="3000" data-stop="<?php echo esc_html($item['title_statistics_repeater']); ?>">0</span>
                                        <span class="counter-title"><?php echo esc_html($item['subtitle_statistics_repeater']); ?></span>
                                    </div>
                                </div>
                        <?php
                            endforeach;
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
