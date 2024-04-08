<section class="team-top-area pt-75 rpt-45 rel z-2 py-130">
    <div class="container">
        <div class="row gap-80 align-items-center">
            <div class="col-xl-7 col-lg-6">
                <div class="team-top-video mt-55 wow fadeInRight delay-0-2s">
                    <img src="<?= the_field("youtube_image_about_team"); ?>" alt="Team Page">
                    <a href="<?php the_field("youtube_link_about_team"); ?>" class="mfp-iframe video-play"><i class="fas fa-play"></i></a>
                </div>
            </div>
            <div class="col-xl-5 col-lg-6">
                <div class="team-top-content mt-55 wow fadeInLeft delay-0-2s">
                    <div class="section-title mb-30">
                        <span class="sub-title mb-15"><?= the_field('subtitle_about_team'); ?></span>
                        <h2><?= the_field('title_about_team'); ?></h2>
                    </div>
                    <p><?= the_field('description_about_team') ?></p>
                    <div class="team-circle-progress mt-35">
                        <div class="circle-progress-counter">
                            <span class="h2"><?= the_field('percentage_about_team'); ?></span>
                        </div>
                        <div class="content">
                            <h4><?= the_field('percentage_title_about_team'); ?></h4>
                            <p><?= the_field('percentage_description_about_team'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
