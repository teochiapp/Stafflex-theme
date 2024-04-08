<section class="work-process-area-two pt-110 pb-100 rpt-100 rpb-70 rel z-1">
    <div class="section-title text-center mb-70 wow fadeInUp delay-0-2s">
        <span class="sub-title mb-15"><?= the_field('subtitle_timeline_home') ?></span>
        <h2><?= the_field('title_timeline_home') ?></h2>
        <span class="bg-text"><?= the_field('background_text_timeline_home') ?></span>
    </div>
    <div class="work-process-line-two text-center">
        <img src="<?= get_template_directory_uri(); ?>/assets/images/shapes/work-process-line.png" alt="line">
    </div>
    <div class="container">
        <div class="row gap-50 justify-content-center">
            <?php
            $timeline_repeater = get_field('timeline_home_repeater');

            if ($timeline_repeater) {
                foreach ($timeline_repeater as $index => $item) {
            ?>
                    <div class="col-xl-3 col-lg-4 col-sm-6 <?= $index % 2 === 0 ? 'mt-20' : ''; ?>">
                        <div class="work-process-item-two mt-40 wow fadeInUp delay-0-2s">
                            <div class="image">
                                <img src="<?= $item['timeline_image_repeater']; ?>" alt="Work Process">
                                <div class="number">0<?= $index + 1; ?></div>
                            </div>
                            <div class="content">
                                <h5><?= esc_html($item['timeline_title_repeater']); ?></h5>
                                <p><?= esc_html($item['timeline_content_repeater']); ?></p>
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