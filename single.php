<?php
get_header();

get_template_part("template-parts/header/breadcrumb");

$content_type = get_post_type();

switch ($content_type) {
    case "services":
        get_template_part("template-parts/single/services");
        break;
    case "post":
        get_template_part("template-parts/single/post");
        break;
    default:
        break;
}

get_footer();
?>
