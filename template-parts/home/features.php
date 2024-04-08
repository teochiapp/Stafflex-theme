<section class="feature-area-two rel z-1">
    <div class="container">
        <div class="row justify-content-center">
            <?php
            if (have_rows('services_repeater')) :
                $counter = 0;

                while (have_rows('services_repeater')) : the_row();

                    $title = get_sub_field('feature_title');
                    $subtitle = get_sub_field('feature_content');
                    $background_image = get_sub_field('feature_background_image');
                    $icon = get_sub_field('feature_icon');
                    $link = get_sub_field('feature_link');

                    if ($link) {
                        $link_url = $link['url'];
                        $link_target = isset($link['target']) ? $link['target'] : '_self';
                    }

                    $mt_class = ($counter % 2 != 0) ? '' : 'mt-25';
            ?>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="feature-item style-three <?php echo esc_attr($mt_class); ?> wow fadeInUp delay-0-2s">
                            <div class="icon icon-feature"><img src="<?= $icon; ?>"></div>
                            <h4><?= $title ?></h4>
                            <p><?= $subtitle ?></p>
                            <div class="bg-image" style="background-image: url(<?php echo $background_image; ?>);"></div>
                        </div>
                    </div>
            <?php
                    $counter++;
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>