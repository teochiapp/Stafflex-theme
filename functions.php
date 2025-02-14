<?php

function stafflex_solutions_setup()
{
    add_theme_support('post-thumbnails');

    $logo_defaults = [
        'header-text' => ['site-title', 'site-description'],
    ];
    add_theme_support('custom-logo', $logo_defaults);

    //TITULOS
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'stafflex_solutions_setup');

add_action('after_setup_theme', 'blankslate_setup');
function blankslate_setup()
{
    load_theme_textdomain('blankslate', get_template_directory() . '/languages');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('responsive-embeds');
    add_theme_support('automatic-feed-links');
    add_theme_support('html5', array('search-form', 'navigation-widgets'));
    add_theme_support('woocommerce');
    require_once get_template_directory() . '/includes/class-wp-bootstrap-navwalker.php';
    global $content_width;
    if (!isset($content_width)) {
        $content_width = 1920;
    }
    register_nav_menus(array('menu-principal' => esc_html__('Menú Principal', 'blankslate')));
}
add_action('admin_notices', 'blankslate_notice');

function blankslate_notice()
{
    $user_id = get_current_user_id();
    $admin_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $param = (count($_GET)) ? '&' : '?';
    if (!get_user_meta($user_id, 'blankslate_notice_dismissed_8') && current_user_can('manage_options'))
        echo '<div class="notice notice-info"><p><a href="' . esc_url($admin_url), esc_html($param) . 'dismiss" class="alignright" style="text-decoration:none"><big>' . esc_html__('Ⓧ', 'blankslate') . '</big></a>' . wp_kses_post(__('<big><strong>📝 Thank you for using BlankSlate!</strong></big>', 'blankslate')) . '<br /><br /><a href="https://wordpress.org/support/theme/blankslate/reviews/#new-post" class="button-primary" target="_blank">' . esc_html__('Review', 'blankslate') . '</a> <a href="https://github.com/tidythemes/blankslate/issues" class="button-primary" target="_blank">' . esc_html__('Feature Requests & Support', 'blankslate') . '</a> <a href="https://calmestghost.com/donate" class="button-primary" target="_blank">' . esc_html__('Donate', 'blankslate') . '</a></p></div>';
}
add_action('admin_init', 'blankslate_notice_dismissed');
function blankslate_notice_dismissed()
{
    $user_id = get_current_user_id();
    if (isset($_GET['dismiss']))
        add_user_meta($user_id, 'blankslate_notice_dismissed_8', 'true', true);
}
add_action('wp_enqueue_scripts', 'blankslate_enqueue');

function blankslate_enqueue()
{
    wp_enqueue_style('blankslate-style', get_stylesheet_uri());
    wp_enqueue_script('jquery');
}
add_action('wp_footer', 'blankslate_footer');

function blankslate_footer()
{
?>
    <script>
        jQuery(document).ready(function($) {
            var deviceAgent = navigator.userAgent.toLowerCase();
            if (deviceAgent.match(/(iphone|ipod|ipad)/)) {
                $("html").addClass("ios");
                $("html").addClass("mobile");
            }
            if (deviceAgent.match(/(Android)/)) {
                $("html").addClass("android");
                $("html").addClass("mobile");
            }
            if (navigator.userAgent.search("MSIE") >= 0) {
                $("html").addClass("ie");
            } else if (navigator.userAgent.search("Chrome") >= 0) {
                $("html").addClass("chrome");
            } else if (navigator.userAgent.search("Firefox") >= 0) {
                $("html").addClass("firefox");
            } else if (navigator.userAgent.search("Safari") >= 0 && navigator.userAgent.search("Chrome") < 0) {
                $("html").addClass("safari");
            } else if (navigator.userAgent.search("Opera") >= 0) {
                $("html").addClass("opera");
            }
        });
    </script>
<?php
}

add_filter('document_title_separator', 'blankslate_document_title_separator');
function blankslate_document_title_separator($sep)
{
    $sep = esc_html('|');
    return $sep;
}
add_filter('the_title', 'blankslate_title');
function blankslate_title($title)
{
    if ($title == '') {
        return esc_html('...');
    } else {
        return wp_kses_post($title);
    }
}

function blankslate_schema_type()
{
    $schema = 'https://schema.org/';
    if (is_single()) {
        $type = "Article";
    } elseif (is_author()) {
        $type = 'ProfilePage';
    } elseif (is_search()) {
        $type = 'SearchResultsPage';
    } else {
        $type = 'WebPage';
    }
    echo 'itemscope itemtype="' . esc_url($schema) . esc_attr($type) . '"';
}

add_filter('nav_menu_link_attributes', 'blankslate_schema_url', 10);
function blankslate_schema_url($atts)
{
    $atts['itemprop'] = 'url';
    return $atts;
}
if (!function_exists('blankslate_wp_body_open')) {
    function blankslate_wp_body_open()
    {
        do_action('wp_body_open');
    }
}

add_action('wp_body_open', 'blankslate_skip_link', 5);
function blankslate_skip_link()
{
    echo '<a href="#content" class="skip-link screen-reader-text">' . esc_html__('Skip to the content', 'blankslate') . '</a>';
}

add_filter('the_content_more_link', 'blankslate_read_more_link');
function blankslate_read_more_link()
{
    if (!is_admin()) {
        return ' <a href="' . esc_url(get_permalink()) . '" class="more-link">' . sprintf(__('...%s', 'blankslate'), '<span class="screen-reader-text">  ' . esc_html(get_the_title()) . '</span>') . '</a>';
    }
}

add_filter('excerpt_more', 'blankslate_excerpt_read_more_link');
function blankslate_excerpt_read_more_link($more)
{
    if (!is_admin()) {
        global $post;
        return ' <a href="' . esc_url(get_permalink($post->ID)) . '" class="more-link">' . sprintf(__('...%s', 'blankslate'), '<span class="screen-reader-text">  ' . esc_html(get_the_title()) . '</span>') . '</a>';
    }
}

add_filter('big_image_size_threshold', '__return_false');
add_filter('intermediate_image_sizes_advanced', 'blankslate_image_insert_override');
function blankslate_image_insert_override($sizes)
{
    unset($sizes['medium_large']);
    unset($sizes['1536x1536']);
    unset($sizes['2048x2048']);
    return $sizes;
}

add_action('widgets_init', 'blankslate_widgets_init');
function blankslate_widgets_init()
{
    register_sidebar(array(
        'name' => esc_html__('Sidebar Widget Area', 'blankslate'),
        'id' => 'primary-widget-area',
        'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}

add_action('wp_head', 'blankslate_pingback_header');
function blankslate_pingback_header()
{
    if (is_singular() && pings_open()) {
        printf('<link rel="pingback" href="%s" />' . "\n", esc_url(get_bloginfo('pingback_url')));
    }
}
add_action('comment_form_before', 'blankslate_enqueue_comment_reply_script');
function blankslate_enqueue_comment_reply_script()
{
    if (get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
function blankslate_custom_pings($comment)
{
?>
    <li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo esc_url(comment_author_link()); ?></li>
    <?php
}


function stafflex_solution_scripts_styles()
{
    // ARCHIVOS CSS
    wp_enqueue_style('style', get_template_directory_uri() . "/assets/css/style.css");
    wp_enqueue_style('bootstrap', get_template_directory_uri() . "/assets/css/bootstrap.min.css");
    wp_enqueue_style('flaticon', get_template_directory_uri() .  "/assets/css/flaticon.min.css");
    wp_enqueue_style('magnific-popup', get_template_directory_uri() .  "/assets/css/magnific-popup.min.css");
    wp_enqueue_style('nice-select', get_template_directory_uri() .  "/assets/css/nice-select.min.css");
    wp_enqueue_style('slick', get_template_directory_uri() .  "/assets/css/slick.min.css");
    wp_enqueue_style('font-awesome', get_template_directory_uri() .  "/assets/css/fontawesome-5.14.0.min.css");
    wp_enqueue_style('animate', get_template_directory_uri() .  "/assets/css/animate.min.css");

    //ARCHIVOS JS
    wp_enqueue_script('bootstrap', get_template_directory_uri() . "/assets/js/bootstrap.min.js", ["jquery"], "", true);
    wp_enqueue_script('script', get_template_directory_uri() . "/assets/js/script.js", [], "", true);
    wp_enqueue_script('appear', get_template_directory_uri() . "/assets/js/appear.min.js", [], "", true);
    wp_enqueue_script('circle-progress', get_template_directory_uri() . "/assets/js/circle-progress.min.js", [], "", true);
    wp_enqueue_script('form-validator', get_template_directory_uri() . "/assets/js/form-validator.min.js", [], "", true);
    wp_enqueue_script('imagesloaded-pkgd', get_template_directory_uri() . "/assets/js/imagesloaded.pkgd.min.js", [], "", true);
    wp_enqueue_script('isotope', get_template_directory_uri() . "/assets/js/isotope.pkgd.min.js", [], "", true);
    wp_enqueue_script('jquery', get_template_directory_uri() . "/assets/js/jquery-3.6.0.min.js", [], "", true);
    wp_enqueue_script('jquery-ajaxchimp', get_template_directory_uri() . "/assets/js/jquery.ajaxchimp.min.js", [], "", true);
    wp_enqueue_script('jquery-magnific-popup', get_template_directory_uri() . "/assets/js/jquery.magnific-popup.min.js", [], "", true);
    wp_enqueue_script('nice-select', get_template_directory_uri() . "/assets/js/jquery.nice-select.min.js", [], "", true);
    wp_enqueue_script('slick', get_template_directory_uri() . "/assets/js/slick.min.js", [], "", true);
    wp_enqueue_script('wow', get_template_directory_uri() . "/assets/js/wow.min.js", [], "", true);
}
add_action('wp_enqueue_scripts', 'stafflex_solution_scripts_styles');

function we_make_menu_clickable()
{
    if (!wp_is_mobile()) { ?>
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                if ($(window).width() >= 767) {
                    $('li.menu-item a').click(function() {
                        window.location = $(this).attr('href');
                    });
                }
            });
        </script>
        <style type="text/css">
            @media all and (min-width: 767px) {
                .menu-item-has-children:hover>ul {
                    display: block;
                }
            }
        </style>
<?php }
}
add_action('wp_footer', 'we_make_menu_clickable', 1);

function get_youtube_video_id($url)
{
    parse_str(parse_url($url, PHP_URL_QUERY), $params);
    return isset($params['v']) ? $params['v'] : false;
}