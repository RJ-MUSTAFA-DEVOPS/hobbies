<?php
/**
 * L'AURA CAFÉ Theme Functions and Definitions
 *
 * @package Laura_Cafe
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function laura_cafe_setup() {
    // Make theme available for translation.
    load_theme_textdomain('laura-cafe', get_template_directory() . '/languages');

    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    // Let WordPress manage the document title.
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails on posts and pages.
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(800, 500, true);

    // Register WordPress Navigation Menus
    register_nav_menus(array(
        'primary' => __('Primary Navigation Menu', 'laura-cafe'),
        'footer'  => __('Footer Navigation Menu', 'laura-cafe'),
    ));

    // Switch default core markup to valid HTML5.
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));

    // Add support for core custom logo.
    add_theme_support('custom-logo', array(
        'height'      => 90,
        'width'       => 280,
        'flex-width'  => true,
        'flex-height' => true,
    ));

    // Add theme support for selective refresh for widgets.
    add_theme_support('customize-selective-refresh-widgets');

    // Add support for full and wide align images.
    add_theme_support('align-wide');

    // Add support for responsive embeds.
    add_theme_support('responsive-embeds');

    // Gutenberg Editor Beige Color Palette
    add_theme_support('editor-color-palette', array(
        array(
            'name'  => __('Oat Milk Beige (Primary)', 'laura-cafe'),
            'slug'  => 'oat-milk',
            'color' => '#F7F3EE',
        ),
        array(
            'name'  => __('Soft Linen Sand (Secondary)', 'laura-cafe'),
            'slug'  => 'linen-sand',
            'color' => '#EFE9E0',
        ),
        array(
            'name'  => __('Milk Cream (Card)', 'laura-cafe'),
            'slug'  => 'milk-cream',
            'color' => '#FCFAF7',
        ),
        array(
            'name'  => __('Artisan Caramel (Accent)', 'laura-cafe'),
            'slug'  => 'artisan-caramel',
            'color' => '#B08558',
        ),
        array(
            'name'  => __('Espresso Charcoal (Text)', 'laura-cafe'),
            'slug'  => 'espresso-charcoal',
            'color' => '#2A2523',
        ),
    ));
}
add_action('after_setup_theme', 'laura_cafe_setup');

/**
 * Enqueue scripts and styles.
 */
function laura_cafe_scripts() {
    // Google Fonts (Cormorant Garamond & Plus Jakarta Sans)
    wp_enqueue_style(
        'laura-cafe-google-fonts',
        'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500&family=Plus+Jakarta+Sans:wght@300;400;500;600&display=swap',
        array(),
        null
    );

    // Main Theme Stylesheet
    wp_enqueue_style(
        'laura-cafe-style',
        get_stylesheet_uri(),
        array(),
        '1.0.1'
    );

    // Main Theme JavaScript (Root script.js or assets/js/main.js fallback)
    $js_rel = file_exists(get_template_directory() . '/script.js') ? '/script.js' : '/assets/js/main.js';
    wp_enqueue_script(
        'laura-cafe-main',
        get_template_directory_uri() . $js_rel,
        array(),
        '1.0.1',
        true
    );

    // Pass AJAX and localized variables to script
    wp_localize_script('laura-cafe-main', 'lauraCafeData', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce'    => wp_create_nonce('laura_cafe_reservation_nonce'),
    ));
}
add_action('wp_enqueue_scripts', 'laura_cafe_scripts');

/**
 * Register Custom Post Types for Menu Items and Reservations
 */
function laura_cafe_register_custom_post_types() {
    // 1. Menu Items Custom Post Type
    register_post_type('cafe_menu_item', array(
        'labels' => array(
            'name'               => __('Menu Items', 'laura-cafe'),
            'singular_name'      => __('Menu Item', 'laura-cafe'),
            'add_new'            => __('Add New Dish/Drink', 'laura-cafe'),
            'add_new_item'       => __('Add New Menu Item', 'laura-cafe'),
            'edit_item'          => __('Edit Menu Item', 'laura-cafe'),
            'new_item'           => __('New Menu Item', 'laura-cafe'),
            'view_item'          => __('View Menu Item', 'laura-cafe'),
            'search_items'       => __('Search Menu Items', 'laura-cafe'),
        ),
        'public'       => true,
        'has_archive'  => false,
        'menu_icon'    => 'dashicons-coffee',
        'supports'     => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'show_in_rest' => true,
    ));

    // Menu Item Categories Taxonomy
    register_taxonomy('menu_category', 'cafe_menu_item', array(
        'labels' => array(
            'name'          => __('Menu Categories', 'laura-cafe'),
            'singular_name' => __('Menu Category', 'laura-cafe'),
        ),
        'hierarchical'      => true,
        'show_ui'           => true,
        'show_admin_column' => true,
        'show_in_rest'      => true,
    ));

    // 2. Table Reservations Custom Post Type
    register_post_type('cafe_reservation', array(
        'labels' => array(
            'name'               => __('Reservations', 'laura-cafe'),
            'singular_name'      => __('Reservation', 'laura-cafe'),
            'add_new_item'       => __('Add New Reservation', 'laura-cafe'),
            'edit_item'          => __('View Reservation', 'laura-cafe'),
            'search_items'       => __('Search Reservations', 'laura-cafe'),
        ),
        'public'          => false,
        'show_ui'         => true,
        'menu_icon'       => 'dashicons-calendar-alt',
        'supports'        => array('title', 'custom-fields'),
        'capability_type' => 'post',
    ));
}
add_action('init', 'laura_cafe_register_custom_post_types');

/**
 * Custom Admin Columns for Reservations
 */
function laura_cafe_reservation_columns($columns) {
    $columns = array(
        'cb'         => '<input type="checkbox" />',
        'title'      => __('Guest Name', 'laura-cafe'),
        'res_date'   => __('Reservation Date', 'laura-cafe'),
        'res_time'   => __('Time', 'laura-cafe'),
        'res_guests' => __('Guests', 'laura-cafe'),
        'res_seating'=> __('Seating Area', 'laura-cafe'),
        'res_email'  => __('Contact Email', 'laura-cafe'),
        'date'       => __('Date Received', 'laura-cafe'),
    );
    return $columns;
}
add_filter('manage_cafe_reservation_posts_columns', 'laura_cafe_reservation_columns');

function laura_cafe_reservation_custom_column_data($column, $post_id) {
    switch ($column) {
        case 'res_date':
            echo esc_html(get_post_meta($post_id, '_res_date', true));
            break;
        case 'res_time':
            echo esc_html(get_post_meta($post_id, '_res_time', true));
            break;
        case 'res_guests':
            echo esc_html(get_post_meta($post_id, '_res_guests', true));
            break;
        case 'res_seating':
            echo esc_html(get_post_meta($post_id, '_res_seating', true));
            break;
        case 'res_email':
            echo esc_html(get_post_meta($post_id, '_res_email', true));
            break;
    }
}
add_action('manage_cafe_reservation_posts_custom_column', 'laura_cafe_reservation_custom_column_data', 10, 2);

/**
 * AJAX Handler for Online Table Reservations
 */
function laura_cafe_handle_reservation_submission() {
    check_ajax_referer('laura_cafe_reservation_nonce', 'security');

    $name    = isset($_POST['name']) ? sanitize_text_field($_POST['name']) : '';
    $email   = isset($_POST['email']) ? sanitize_email($_POST['email']) : '';
    $date    = isset($_POST['date']) ? sanitize_text_field($_POST['date']) : '';
    $time    = isset($_POST['time']) ? sanitize_text_field($_POST['time']) : '';
    $guests  = isset($_POST['guests']) ? sanitize_text_field($_POST['guests']) : '2';
    $seating = isset($_POST['seating']) ? sanitize_text_field($_POST['seating']) : 'Any';
    $notes   = isset($_POST['notes']) ? sanitize_textarea_field($_POST['notes']) : '';

    if (empty($name) || empty($email) || empty($date) || empty($time)) {
        wp_send_json_error(array('message' => __('Please complete all required fields.', 'laura-cafe')));
    }

    // Save as cafe_reservation post
    $post_id = wp_insert_post(array(
        'post_title'   => $name . ' — ' . $date . ' (' . $time . ')',
        'post_content' => $notes,
        'post_status'  => 'publish',
        'post_type'    => 'cafe_reservation',
    ));

    if ($post_id) {
        update_post_meta($post_id, '_res_name', $name);
        update_post_meta($post_id, '_res_email', $email);
        update_post_meta($post_id, '_res_date', $date);
        update_post_meta($post_id, '_res_time', $time);
        update_post_meta($post_id, '_res_guests', $guests);
        update_post_meta($post_id, '_res_seating', $seating);

        // Optional notification email to admin
        $admin_email = get_option('admin_email');
        $subject = sprintf(__('New Table Reservation: %s on %s', 'laura-cafe'), $name, $date);
        $message = "Guest: {$name}\nEmail: {$email}\nDate: {$date}\nTime: {$time}\nGuests: {$guests}\nSeating: {$seating}\nNotes: {$notes}";
        @wp_mail($admin_email, $subject, $message);

        wp_send_json_success(array('message' => __('Your reservation is saved.', 'laura-cafe')));
    } else {
        wp_send_json_error(array('message' => __('Unable to save booking. Please try again.', 'laura-cafe')));
    }
}
add_action('wp_ajax_laura_cafe_submit_reservation', 'laura_cafe_handle_reservation_submission');
add_action('wp_ajax_nopriv_laura_cafe_submit_reservation', 'laura_cafe_handle_reservation_submission');

/**
 * Register Theme Customizer Options (Café Settings)
 */
function laura_cafe_customize_register($wp_customize) {
    // Café Details Section
    $wp_customize->add_section('laura_cafe_settings', array(
        'title'       => __('Café Details & Contact', 'laura-cafe'),
        'description' => __('Customize contact info, hours, and announcements for L\'AURA Café.', 'laura-cafe'),
        'priority'    => 30,
    ));

    // 1. Announcement Text
    $wp_customize->add_setting('laura_announcement_text', array(
        'default'           => 'Now Pouring: Ethiopian Guji Natural · Handcrafted Autumn Bakes Daily',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('laura_announcement_text', array(
        'label'    => __('Top Bar Announcement', 'laura-cafe'),
        'section'  => 'laura_cafe_settings',
        'type'     => 'text',
    ));

    // 2. Phone Number
    $wp_customize->add_setting('laura_phone', array(
        'default'           => '+1 (555) 234-8901',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('laura_phone', array(
        'label'    => __('Phone Number', 'laura-cafe'),
        'section'  => 'laura_cafe_settings',
        'type'     => 'text',
    ));

    // 3. Email
    $wp_customize->add_setting('laura_email', array(
        'default'           => 'bonjour@lauracafe.com',
        'sanitize_callback' => 'sanitize_email',
    ));
    $wp_customize->add_control('laura_email', array(
        'label'    => __('Contact Email', 'laura-cafe'),
        'section'  => 'laura_cafe_settings',
        'type'     => 'email',
    ));

    // 4. Atelier Address
    $wp_customize->add_setting('laura_address', array(
        'default'           => '148 Linen Way, Atelier Quarter, Downtown',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('laura_address', array(
        'label'    => __('Physical Address', 'laura-cafe'),
        'section'  => 'laura_cafe_settings',
        'type'     => 'text',
    ));

    // 5. Weekday Hours
    $wp_customize->add_setting('laura_hours_weekday', array(
        'default'           => '7:30 AM — 6:30 PM',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('laura_hours_weekday', array(
        'label'    => __('Monday - Friday Hours', 'laura-cafe'),
        'section'  => 'laura_cafe_settings',
        'type'     => 'text',
    ));

    // 6. Weekend Hours
    $wp_customize->add_setting('laura_hours_weekend', array(
        'default'           => '8:00 AM — 7:00 PM',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('laura_hours_weekend', array(
        'label'    => __('Saturday - Sunday Hours', 'laura-cafe'),
        'section'  => 'laura_cafe_settings',
        'type'     => 'text',
    ));
}
add_action('customize_register', 'laura_cafe_customize_register');

/**
 * Fallback Header Navigation if no WP menu assigned
 */
function laura_cafe_primary_nav_fallback() {
    echo '<ul class="desktop-nav-list">';
    echo '<li><a href="' . esc_url(home_url('/#home')) . '" class="nav-link active">' . __('Home', 'laura-cafe') . '</a></li>';
    echo '<li><a href="' . esc_url(home_url('/#story')) . '" class="nav-link">' . __('Our Story', 'laura-cafe') . '</a></li>';
    echo '<li><a href="' . esc_url(home_url('/#origins')) . '" class="nav-link">' . __('Roast Profiles', 'laura-cafe') . '</a></li>';
    echo '<li><a href="' . esc_url(home_url('/#menu')) . '" class="nav-link">' . __('Menu', 'laura-cafe') . '</a></li>';
    echo '<li><a href="' . esc_url(home_url('/#ambiance')) . '" class="nav-link">' . __('Atmosphere', 'laura-cafe') . '</a></li>';
    echo '<li><a href="' . esc_url(home_url('/#hours')) . '" class="nav-link">' . __('Visit & Hours', 'laura-cafe') . '</a></li>';
    echo '</ul>';
}

/**
 * Fallback Footer Navigation
 */
function laura_cafe_footer_nav_fallback() {
    echo '<ul class="footer-links">';
    echo '<li><a href="' . esc_url(home_url('/#home')) . '">' . __('Home', 'laura-cafe') . '</a></li>';
    echo '<li><a href="' . esc_url(home_url('/#story')) . '">' . __('Our Story & Craft', 'laura-cafe') . '</a></li>';
    echo '<li><a href="' . esc_url(home_url('/#origins')) . '">' . __('Single Origins', 'laura-cafe') . '</a></li>';
    echo '<li><a href="' . esc_url(home_url('/#menu')) . '">' . __('Daily Menu', 'laura-cafe') . '</a></li>';
    echo '<li><a href="' . esc_url(home_url('/#ambiance')) . '">' . __('Visual Gallery', 'laura-cafe') . '</a></li>';
    echo '<li><a href="' . esc_url(home_url('/#hours')) . '">' . __('Hours & Location', 'laura-cafe') . '</a></li>';
    echo '</ul>';
}
