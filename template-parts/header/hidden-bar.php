<div class="inner-box text-center">
    <div class="cross-icon"><span class="fa fa-times"></span></div>
    <div class="title">
        <h4><?= the_field('appointment_message') ?></h4>
    </div>

    <div class="appointment-form">
        <?= do_shortcode("[wpforms id='573']") ?>
    </div>

    <div class="social-style-one">
        <a href="<?= the_field("facebook_social_link") ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
        <a href="<?= the_field("twitter_social_link") ?>" target="_blank"><i class="fab fa-twitter"></i></a>
        <a href="<?= the_field("instagram_social_link") ?>" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="<?= the_field("linkedin_social_link") ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a>
    </div>
</div>