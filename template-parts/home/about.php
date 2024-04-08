<section class="about-area-four pt-25 rpt-0 rel z-2">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6">
                <div class="about-four-image rel z-1 mb-65 wow fadeInRight delay-0-2s">
                    <div class="about-circle">
                        <img src="<?= get_field("image_1_about_home") ?>" alt="Circle">
                        <img class="text" src="<?= get_field("moving_image_about_home") ?>" alt="Circle Text">
                    </div>
                    <div class="image">
                        <img src="<?= get_field("image_2_about_home") ?>" alt="About">
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-10">
                <div class="about-four-content mb-65 rel z-1 wow fadeInLeft delay-0-2s">
                    <div class="section-title mb-50">
                        <span class="sub-title mb-15"><?php the_field("subtitle_about_home") ?></span>
                        <h2><?php the_field("title_about_home"); ?></h2>
                        <span class="bg-text"><?php the_field("floating_text_about_home"); ?></span>
                    </div>
                    <?php
                    $repeater_data = get_field('tabs_about_home_repeater');

                    if ($repeater_data) {
                        echo '<ul class="nav nav-pills nav-fill mb-35">';

                        foreach ($repeater_data as $index => $item) {
                            $tab_id = 'about-tap' . ($index + 1);

                            echo '<li class="nav-item">';
                            echo '<a class="nav-link' . ($index === 0 ? ' active' : '') . '" data-bs-toggle="tab" href="#' . $tab_id . '">' . esc_html($item['tab_title_repeater']) . '</a>';
                            echo '</li>';
                        }

                        echo '</ul>';
                        echo '<div class="tab-content">';

                        foreach ($repeater_data as $index => $item) {
                            $tab_id = 'about-tap' . ($index + 1);
                            $link = $item['tab_button_repeater'];
                            $link_url = '';
                            $link_target = '_self';
                            
                            if ($link && isset($link['url'])) {
                                $link_url = $link['url'];
                                $link_target = isset($link['target']) ? $link['target'] : '_self';
                            }
                            echo '<div class="tab-pane fade' . ($index === 0 ? ' show active' : '') . '" id="' . $tab_id . '">';                           

                            echo '<p>' . esc_html($item['tab_content_repeater']) . '</p>';
                            
                             $tab_list_repeater = $item['tab_list_repeater'];
                             if ($tab_list_repeater) {
                                 echo '<ul class="list-style-one my-30">';
                                 foreach ($tab_list_repeater as $tab_list_element) {
                                     echo '<li>' . esc_html($tab_list_element['tab_list_element_repeater']) . '</li>';
                                 }
                                 echo '</ul>';
                             }
                            echo "<a href='" . esc_url($link_url) . "' class='theme-btn mt-10' target='" . esc_attr($link_target) . "'>Learn About Us</a>";
                            echo '</div>';
                        }

                        echo '</div>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>