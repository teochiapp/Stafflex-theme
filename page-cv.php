<?php get_header(); 
get_template_part("template-parts/header/breadcrumb"); 
?>

<section class="contact-page-form pt-130 rpt-100 pb-100 rpb-70 rel z-1">
    <div class="container">
        <div class="contact-form-wrap form-style-two bgc-lighter wow fadeInUp delay-0-2s">
            <div class="row text-center mb-35 justify-content-center">
                <div class="col-xl-9 col-lg-11">
                    <div class="section-title mb-25 wow fadeInUp delay-0-2s">
                        <span class="sub-title mb-15"><?php the_field('subtitle_information_cv') ?></span>
                        <h2><?php the_field('title_information_cv') ?></h2>
                    </div>
                    <p><?php the_field('description_information_cv') ?></p>
                </div>
            </div>
            <?php echo do_shortcode('[wpforms id="642" title="false"]'); ?>          
        </div>
    </div>
</section>

<?php get_footer(); ?>