<?php
/**
 * The template for displaying all pages
 *
 * @package Laura_Cafe
 */

get_header();
?>

<div class="page-header-simple">
  <div class="container">
    <h1 class="section-title"><?php the_title(); ?></h1>
  </div>
</div>

<main class="site-main-content">
  <div class="container page-container">
    <?php
    while (have_posts()) :
        the_post();
        ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <?php if (has_post_thumbnail()) : ?>
            <div class="single-featured-image" style="margin-bottom: 2.5rem;">
              <?php the_post_thumbnail('full'); ?>
            </div>
          <?php endif; ?>

          <div class="entry-content">
            <?php the_content(); ?>
          </div>
        </article>
        <?php
    endwhile;
    ?>
  </div>
</main>

<?php
get_footer();

