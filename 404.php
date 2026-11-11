<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package Laura_Cafe
 */

get_header();
?>

<main class="site-main-content">
  <div class="container">
    <div class="error-404-box">
      <div class="error-code">404</div>
      <span class="section-tag"><?php _e('Spilled Coffee', 'laura-cafe'); ?></span>
      <h1 class="section-title"><?php _e('A quiet pause. Page not found.', 'laura-cafe'); ?></h1>
      <p class="section-subtitle" style="margin: 0 auto 2.5rem;">
        <?php _e('The corner you are looking for has been moved, brewed, or does not exist. Let us guide you back to our warm counter.', 'laura-cafe'); ?>
      </p>
      <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary">
        <span><?php _e('Return to Home', 'laura-cafe'); ?></span>
      </a>
    </div>
  </div>
</main>

<?php
get_footer();

