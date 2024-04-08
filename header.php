<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>

<head>
    <?php wp_head(); ?>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="page-wrapper">
    <div class="preloader"><div class="custom-loader"></div></div>
        <?php $args = array(
            'post_type'      => 'header-footer',
            'posts_per_page' => 1,
            'order' => "DESC",
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();

                if (is_front_page()) {
                    get_template_part("template-parts/header/main-header");
                } 
                else {
                    get_template_part("template-parts/header/secondary-header");
                } 
                ?>
                <div class="form-back-drop"></div>

                <section class="hidden-bar">
                    <?php get_template_part("template-parts/header/hidden-bar"); ?>
                </section>
        <?php endwhile;
            wp_reset_postdata();
        endif; ?>