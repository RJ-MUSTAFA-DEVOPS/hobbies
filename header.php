<?php
/**
 * The header for L'AURA CAFÉ theme
 *
 * @package Laura_Cafe
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

  <!-- Top Announcement Bar -->
  <div class="announcement-bar">
    <div class="announcement-content">
      <span><?php echo esc_html(get_theme_mod('laura_announcement_text', 'Now Pouring: Ethiopian Guji Natural · Handcrafted Autumn Bakes Daily')); ?></span>
      <div class="announcement-extras">
        <button class="ambient-audio-btn" id="ambientSoundBtn" aria-label="<?php esc_attr_e('Play peaceful cafe atmosphere', 'laura-cafe'); ?>">
          <span class="audio-dot"></span>
          <span id="audioLabel"><?php _e('♫ Play Cafe Ambience', 'laura-cafe'); ?></span>
        </button>
        <a href="<?php echo esc_url(home_url('/#hours')); ?>" class="announcement-link"><?php _e('Find Our Corner &rarr;', 'laura-cafe'); ?></a>
      </div>
    </div>
  </div>

  <!-- Navigation Bar -->
  <header class="site-header" id="navbar">
    <div class="nav-container">
      <div class="brand-logo-wrap">
        <?php if (has_custom_logo()) : ?>
          <?php the_custom_logo(); ?>
        <?php else : ?>
          <a href="<?php echo esc_url(home_url('/')); ?>" class="brand-logo">
            <span class="logo-serif"><?php bloginfo('name') ? bloginfo('name') : 'L\'AURA'; ?></span>
            <span class="logo-sub"><?php bloginfo('description') ? bloginfo('description') : 'CAFÉ & ATELIER'; ?></span>
          </a>
        <?php endif; ?>
      </div>

      <nav class="desktop-nav" id="desktopNav" aria-label="<?php esc_attr_e('Primary Navigation', 'laura-cafe'); ?>">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'primary',
            'menu_class'     => 'desktop-nav-list',
            'container'      => false,
            'fallback_cb'    => 'laura_cafe_primary_nav_fallback',
        ));
        ?>
      </nav>

      <div class="nav-actions">
        <!-- Mood Toggle (Daylight / Candlelight) -->
        <button class="theme-toggle" id="themeToggle" aria-label="<?php esc_attr_e('Toggle Candlelight Theme', 'laura-cafe'); ?>" title="<?php esc_attr_e('Switch ambient light', 'laura-cafe'); ?>">
          <span class="theme-symbol" id="themeSymbol">☾</span>
          <span class="theme-text" id="themeText"><?php _e('Candlelight', 'laura-cafe'); ?></span>
        </button>

        <!-- Order Bag Icon -->
        <button class="bag-btn" id="openBagBtn" aria-label="<?php esc_attr_e('Open your order bag', 'laura-cafe'); ?>">
          <svg class="bag-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
            <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
            <line x1="3" y1="6" x2="21" y2="6"></line>
            <path d="M16 10a4 4 0 0 1-8 0"></path>
          </svg>
          <span class="bag-count" id="bagCount">0</span>
        </button>

        <!-- Table Reservation Trigger -->
        <button class="btn btn-outline" id="openReserveBtn" aria-label="<?php esc_attr_e('Book a table', 'laura-cafe'); ?>">
          <svg class="btn-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
            <line x1="16" y1="2" x2="16" y2="6"></line>
            <line x1="8" y1="2" x2="8" y2="6"></line>
            <line x1="3" y1="10" x2="21" y2="10"></line>
          </svg>
          <span><?php _e('Reserve Table', 'laura-cafe'); ?></span>
        </button>

        <!-- Mobile Toggle Button -->
        <button class="mobile-toggle" id="mobileToggle" aria-label="<?php esc_attr_e('Toggle navigation menu', 'laura-cafe'); ?>">
          <span></span>
          <span></span>
          <span></span>
        </button>
      </div>
    </div>

    <!-- Mobile Drawer Navigation -->
    <div class="mobile-drawer" id="mobileDrawer">
      <div class="mobile-drawer-inner">
        <nav class="mobile-nav-links">
          <?php
          wp_nav_menu(array(
              'theme_location' => 'primary',
              'menu_class'     => 'mobile-nav-list',
              'container'      => false,
              'fallback_cb'    => 'laura_cafe_primary_nav_fallback',
          ));
          ?>
        </nav>
        <div class="mobile-drawer-footer">
          <p class="drawer-hours"><?php _e('Open Daily: 7:30 AM — 6:30 PM', 'laura-cafe'); ?></p>
          <button class="btn btn-primary btn-block" id="mobileReserveBtn"><?php _e('Book a Table', 'laura-cafe'); ?></button>
        </div>
      </div>
    </div>
  </header>

