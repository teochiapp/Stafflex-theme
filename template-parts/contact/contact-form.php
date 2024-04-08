<section class="contact-page-form pb-130 rpb-100">
    <div class="container">
        <div class="contact-form-wrap form-style-two bgc-lighter wow fadeInUp delay-0-2s">
            <div class="row text-center mb-35 justify-content-center">
                <div class="col-xl-9 col-lg-11">
                    <div class="section-title mb-25 wow fadeInUp delay-0-2s">
                        <span class="sub-title mb-15"><?php the_field('subtitle_form_contact') ?></span>
                        <h2><?php the_field('title_form_contact') ?></h2>
                    </div>
                    <p><?php the_field('description_form_contact') ?></p>
                </div>
            </div>
            <?= do_shortcode("[wpforms id='556']"); ?>            
        </div>
    </div>
</section>