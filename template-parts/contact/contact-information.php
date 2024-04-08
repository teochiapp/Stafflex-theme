<section class="contact-page-info pt-130 rpt-100 pb-100 rpb-70 rel z-1">
    <div class="container">
        <div class="row text-center mb-35 justify-content-center wow fadeInUp delay-0-2s">
            <div class="col-xl-8 col-lg-10">
                <div class="section-title mb-25">
                    <span class="sub-title mb-15"><?php the_field('subtitle_information_contact') ?></span>
                    <h2><?php the_field('title_information_contact') ?></h2>
                </div>
                <p><?php the_field('description_information_contact') ?></p>
            </div>
        </div>
        <div class="row justify-content-center">
            <?php
            if (have_rows('box_information_contact_repeater')) {
                while (have_rows('box_information_contact_repeater')) {
                    the_row();

                    $title = get_sub_field('box_title_repeater');
                    $description = get_sub_field('box_description_repeater');
                    $icon = get_sub_field('box_icon_repeater');
            ?>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="contact-info-box wow fadeInUp delay-0-2s">
                            <div class="icon" class="icon-service">
                                <img src="<?php echo esc_url($icon); ?>" alt="<?php echo esc_attr($title); ?>">
                            </div>
                            <h4><?php echo esc_html($title); ?></h4>
                            <span><?php echo $description; ?></span>
                        </div>
                    </div>
            <?php
                }
            }
            ?>
        </div>
    </div>
</section>
