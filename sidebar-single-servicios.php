<div class="widget widget-category wow fadeInUp delay-0-2s">
    <h4 class="widget-title">Other Services</h4>
    <ul>
    <?php
        $current_post_id = get_the_ID();
        $args = array(
            'post_type'        => 'services',
            'order'            => 'DESC',
            'posts_per_page'   => -1,
            'post__not_in'     => array($current_post_id),
        );
        $linea = new WP_Query($args);
        while ($linea->have_posts()) {
            $linea->the_post();
        ?>
            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>        
        <?php }
        wp_reset_postdata() ?>
    </ul>
</div>
<div class="widget widget-cta" style="background-image: url(<?= get_template_directory_uri(); ?>/assets/images/widgets/cta-bg-lines.webp);">
    <span class="h5"><?php the_field('subtitle_cta_service') ?></span>
    <h2><?php the_field('title_cta_service') ?></h2>
    <a href="callto:+000(123)45688" class="theme-btn style-four"><?php the_field('button_text_cta_service') ?></a><br>
    <a class="number"><img src="<?= get_template_directory_uri(); ?>/assets/images/icons/call-icon.png);" alt="call"></i><?php the_field('phone_cta_service') ?></a>
    <img class="bg-shape" src="<?= get_template_directory_uri() ?>/assets/images/widgets/cta-bg-lines.png" alt="Shape">
</div>