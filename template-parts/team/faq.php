<section class="faq-area pb-130 rpb-100 rel z-1">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-xl-5 col-lg-6">
                <div class="faq-content rmb-65 wow fadeInLeft delay-0-2s">
                    <div class="section-title mb-30">
                        <span class="sub-title mb-15"><?= the_field('subtitle_faq_team') ?></span>
                        <h2><?= the_field('title_faq_team') ?></h2>
                    </div>
                    <?php
                    $faq_items = get_field('repeater_faq_team');

                    if ($faq_items) :
                    ?>
                        <div class="faq-accordion style-two pt-20" id="faq-accordion">
                            <?php foreach ($faq_items as $index => $item) : ?>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse<?= $index ?>">
                                            <?= esc_html($item['question_faq_repeater']); ?>
                                        </button>
                                    </h5>
                                    <div id="collapse<?= $index ?>" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
                                            <p><?= esc_html($item['answer_faq_repeater']); ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>

                </div>
            </div>
            <div class="col-lg-6">
                <div class="faq-images wow fadeInRight delay-0-2s">
                    <div class="logo"><a href="<?php echo site_url('/') ?>"><img src="<?php the_field("logo_faq_team"); ?>" alt="Logo" title="Logo"></a></div>
                    <img src="<?php the_field("image_faq_team"); ?>" alt="FAQs">
                </div>
            </div>
        </div>
    </div>
</section>