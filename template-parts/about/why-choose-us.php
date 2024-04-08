<section class="why-choose-us-area py-130 rpy-100 rel z-1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8">
                <div class="section-title text-center mb-45 wow fadeInUp delay-0-2s">
                    <span class="sub-title mb-15"><?php the_field('subtitle_tabs_about') ?></span>
                    <h2><?php the_field('title_tabs_about') ?></h2>
                </div>
            </div>
        </div>

        <?php
        $repeater_data = get_field('tabs_about_repeater');

        if ($repeater_data) {
            echo '<div class="why-choose-tab">';            
            echo '<div class="tab-content">';

            foreach ($repeater_data as $index => $item) {
                $tab_id = 'wc-tap' . ($index + 1);

                echo '<div class="tab-pane fade' . ($index === 0 ? ' show active' : '') . '" id="' . $tab_id . '">';
                echo '<div class="row gap-90 align-items-center">';

        ?>
                <div class="col-lg-6">
                    <div class="why-choose-image rmb-55">
                        <img src="<?php echo esc_url($item['tab_about_image_repeater']); ?>" alt="Why Choose">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="why-choose-content">
                        <h3><?php echo esc_html($item['tab_about_subtitle_repeater']); ?></h3>
                        <p><?php echo esc_html($item['tab_about_content_repeater']); ?></p>
                        <ul class="list-style-one">
                            <?php
                            $lista_repeater = $item['tab_about_list_repeater'];
                            if ($lista_repeater) {
                                foreach ($lista_repeater as $lista_elemento) {
                                    echo '<li>' . esc_html($lista_elemento['tab_list_element_repeater']) . '</li>';
                                }
                            }
                            ?>
                        </ul>
                        <?php
                        $link = $item['tab_about_button_repeater'];

                        if ($link) {
                            $link_url = $link['url'];
                            $link_target = isset($link['target']) ? $link['target'] : '_self';
                        } else {
                            $link_url = '';
                            $link_target = '_self';
                        }
                        ?>

                        <a href="<?php echo esc_url($link_url); ?>" class="theme-btn mt-30" target="<?php echo esc_attr($link_target); ?>">
                            View More
                        </a>
                    </div>
                </div>

        <?php

                echo '</div>';
                echo '</div>';
            }

            echo '</div>';
            echo '</div>';
        }
        ?>
    </div>
</section>