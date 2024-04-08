<div class="pb-170 rpb-140 rel z-1" name="divider"></div>

<section class="testimonials-area-four rel z-1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-5 col-lg-6 ms-lg-auto">
                <div class="testimonials-four-content py-65 rpt-0 rpb-35">
                    <div class="section-title mb-35 wow fadeInUp delay-0-2s">
                        <span class="sub-title mb-15"><?= the_field('subtitle_testimonials_home') ?></span>
                        <h2><?= the_field('title_testimonials_home') ?></h2>
                        <span class="bg-text"><?= the_field('background_text_testimonials_home') ?></span>
                    </div>

                    <?php
                    // Obtener el repetidor 'testimonial_home_repeater'
                    $testimonial_repeater = get_field('testimonial_home_repeater');

                    if ($testimonial_repeater) {
                        foreach ($testimonial_repeater as $item) {
                    ?>
                            <div class="testimonial-item style-two wow fadeInUp delay-0-2s">
                                <?php if (get_sub_field('testimonial_image_repeater')) { ?>
                                    <div class="image">
                                        <img src="<?= $item['testimonial_image_repeater']; ?>" alt="Author">
                                    </div>
                                <?php } ?>
                                <div class="content">
                                    <div class="testi-header">
                                        <h4><?= esc_html($item['testimonial_title_repeater']); ?></h4>
                                    </div>
                                    <div class="testi-text">
                                        <?= esc_html($item['testimonial_content_repeater']); ?>
                                    </div>
                                        <div class="testi-footer">
                                            <div class="icon"><i class="flaticon-quotation"></i></div>
                                            <div class="title">
                                                <h4><?= esc_html($item['testimonial_name_repeater']); ?></h4>
                                                <span class="designation"><?= esc_html($item['testimonial_job_repeater']); ?></span>
                                            </div>
                                        </div>
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
    <div class="testimonial-four-image">
        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?= get_field("id_video_testimonials_home") ?>?autoplay=1&controls=0&showinfo=0&rel=0&loop=1&modestbranding=1&mute=1&playlist=<?= get_field("id_video_testimonials_home"); ?>" allowfullscreen>
        </iframe>
    </div>
</section>