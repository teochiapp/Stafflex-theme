<section class="testimonials-area-two pb-115 rpb-85 rel z-1">
    <div class="container">
        <div class="row justify-content-center text-align-center mb-30 row-testimonials-about">
            <div class="col-lg-8">
                <div class="section-title mb-25 wow fadeInRight delay-0-2s">
                    <span class="sub-title mb-15"><?php the_field('subtitle_testimonials_about') ?></span>
                    <h2><?php the_field('title_testimonials_about') ?></h2>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="slider-arrow mb-25 text-center">
                    <button class="testi-prev"><i class="far fa-angle-left"></i></button>
                    <button class="testi-next"><i class="far fa-angle-right"></i></button>
                </div>
            </div>
        </div>
        <div class="testimonial-slider">
            <?php
            // Obtener el repetidor 'testimonial_home_repeater'
            $testimonial_repeater = get_field('testimonial_about_repeater');

            if ($testimonial_repeater) {
                foreach ($testimonial_repeater as $item) {
            ?>
                    <div class="testimonial-item wow fadeInUp delay-0-2s">
                        <div class="image">
                            <img src="<?= $item['testimonial_image_repeater']; ?>" alt="Author">
                        </div>
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
</section>