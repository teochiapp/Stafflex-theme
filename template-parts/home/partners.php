<section class="partners-area-two pt-80 pb-50 rel z-1" style="background-image: url('<?= get_field("background_image_partners_home") ?>');">
    <div class="container">
        <div class="section-title text-white text-center mb-30 wow fadeInUp delay-0-2s">
            <span class="sub-title mb-15"><?= esc_html(get_field('subtitle_partners_home')) ?></span>
            <h2><?= esc_html(get_field('title_partners_home')) ?></h2>
            <span class="bg-text"><?= esc_html(get_field('background_text_partners_home')) ?></span>
        </div>
        <div class="row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-2 justify-content-center">
            <?php
            $partners_repeater = get_field('partners_home_repeater');

            if ($partners_repeater) {
                foreach ($partners_repeater as $partner) {
            ?>
                    <div class="col">
                        <a href="<?= esc_url($partner['partner_link_repeater']); ?>" target="_blank" rel="noopener noreferrer" class="partner-item wow fadeInUp <?= 'delay-0-' . rand(3, 9) . 's'; ?>">
                            <img src="<?= $partner['partner_image_repeater']; ?>">                      
                        </a>
                    </div>
            <?php
                }
            }
            ?>
        </div>
    </div>
</section>
