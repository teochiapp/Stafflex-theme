<section class="about-area-five py-130 rpt-100 rpb-65 rel z-1">
    <div class="container">
        <div class="row align-items-center gap-100">
            <div class="col-lg-6">
                <div class="about-five-images mt-55 rel z-1 wow fadeInRight delay-0-2s">
                    <img src="<?= get_field("image1_about_about"); ?>" alt="About">
                    <img src="<?= get_field("image2_about_about"); ?>" alt="About">
                    <div class="experience-years">
                        <span class="years"><?= the_field('years_about_about'); ?></span>
                        <h4><?= the_field('years_description_about_about'); ?></h4>
                    </div>
                    <img class="abut-bg-shape" src="<?= get_field("background_shape_about_about")?>" alt="Shape">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content mt-55 rel z-1 wow fadeInLeft delay-0-2s">
                    <div class="section-title mb-60 rmb-40">
                        <span class="sub-title mb-15"><?= the_field('subtitle_about_about') ?></span>
                        <h2><?= the_field('title_about_about') ?></h2>
                    </div>
                    <div class="row gap-40">
                        <?php
                        // Obtener el campo de repetidor
                        $repeater_field = get_field('features_about_repeater');

                        if ($repeater_field) {
                            foreach ($repeater_field as $item) {

                                $title = $item['title_features_repeater'];
                                $description = $item['description_features_repeater'];
                                $icon = $item['logo_features_repeater'];
                                $link = $item['button_features_repeater'];
                                $link_url = '';
                                $link_target = '_self';
                                
                                if ($item['button_features_repeater']) {
                                    $link_url = $link['url'];
                                    $link_target = isset($link['target']) ? $link['target'] : '_self';
                                }
                        ?>
                                <div class="col-md-6">
                                    <div class="service-item style-three">
                                        <div class="icon icon-feature">
                                            <img src="<?php echo $icon; ?>" alt="">
                                        </div>
                                        <h4><a href="<?php echo esc_url($link_url); ?>"><?php echo esc_html($title); ?></a></h4>
                                        <p><?php echo esc_html($description); ?></p>
                                        <?php if ($item['button_features_repeater']) { ?> <a href="<?= $link_url; ?>" target="<?php echo esc_attr($link_target); ?>" class="read-more">View More <i class="fal fa-angle-right"></i></a> <?php } ?>
                                    </div>
                                </div>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>