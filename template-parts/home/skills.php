<section class="skills-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-9">
                <div class="skills-content mt-60 mb-70 rmt-0 rel z-1 wow fadeInLeft delay-0-2s">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="section-title mb-55">
                                <span class="sub-title mb-15"><?php the_field('subtitle_skills_home') ?></span>
                                <h2><?php the_field('title_skills_home') ?></h2>
                                <span class="bg-text"><?php the_field('background_text_skills_home') ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <?php
                        if (have_rows('skills_home_repeater')):
                            $counter = 1;

                            while (have_rows('skills_home_repeater')) : the_row();
                                $title = get_sub_field('skill_title_repeater');
                                $description = get_sub_field('skill_description_repeater');
                                $percentage = get_sub_field('percentage_description_repeater');
                                $class = ($counter % 3 == 1) ? 'one' : (($counter % 3 == 2) ? 'two' : 'three');
                                $color = ($counter % 3 == 1) ? 'bgc-secondary' : (($counter % 3 == 2) ? 'bgc-primary' : 'bg-white');
                                $text_color = ($counter % 3 == 1) ? 'text-white' : (($counter % 3 == 2) ? 'text-white' : 'text-black');
                        ?>
                                <div class="col-lg-4 col-md-6">
                                    <div class="circle-progress-item <?php echo esc_attr($color); ?> <?php echo esc_attr($text_color); ?>">
                                        <div class="progress-content <?php echo esc_attr($class); ?>">
                                            <span class="h2">0</span>
                                        </div>
                                        <h4><?php echo esc_html($title); ?></h4>
                                        <p><?php echo esc_html($description); ?></p>
                                    </div>
                                </div>
                        <?php
                                $counter++;
                            endwhile;
                        else :
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="skills-bg" style="background-image: url(<?php the_field("Image_skills_home") ?>);"></div>
</section>
