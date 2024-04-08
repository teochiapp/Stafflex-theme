<section class="service-details-area pt-130 rpt-100 pb-115 rpb-85">
    <div class="container">
        <div class="row gap-100">
            <div class="col-lg-8">
                <div class="service-details-content">
                    <div class="section-title mb-30">
                        <h2><?php the_title(); ?></h2>

                    </div>
                    <p><?php the_content(); ?></p>

                    <div class="image my-40 wow fadeInUp delay-0-2s">
                        <img src="<?= get_the_post_thumbnail_url(); ?>" class="img-single-services">

                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-30 wow fadeInRight delay-0-2s">
                            <h3><?php the_field('title_alt_services') ?></h3>
                        </div>
                        <div class="col-md-6 mb-30 wow fadeInLeft delay-0-2s">
                            <ul class="list-style-one">
                                <?php
                               $lista_repeater = get_field('services_list_repeater');
                                if ($lista_repeater) {
                                    foreach ($lista_repeater as $lista_elemento) {
                                        echo '<li>' . esc_html($lista_elemento['list_element_repeater']) . '</li>';
                                    }
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                    <div class="row pb-30">
                        <div class="col-md-6 mb-30 wow fadeInLeft delay-0-2s">
                            <p><?php the_field('description_alt_services') ?></p>
                        </div>
                        <div class="col-md-6 mb-30 wow fadeInRight delay-0-2s">
                            <div class="image">
                                <img src="<?= the_field("img_alt_services") ?>" alt="Service">
                            </div>
                        </div>
                    </div>
                    <h3><?php the_field('title_faq_services') ?></h3>
                    <p><?php the_field('description_faq_services') ?></p>
                    <?php
                    $faq_items = get_field('repeater_faq_services');

                    if ($faq_items) :
                    ?>
                        <div class="faq-accordion pt-20 wow fadeInUp delay-0-2s" id="faq-accordion">
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
            <div class="col-lg-4">
                <div class="service-sidebar">
                    <?php get_sidebar("single-servicios") ?>
                </div>
            </div>
        </div>
    </div>
</section>