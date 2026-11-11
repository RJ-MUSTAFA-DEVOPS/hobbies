<?php
/**
 * The template for displaying all single posts
 *
 * @package Laura_Cafe
 */

get_header();
?>

<main class="site-main-content">
  <div class="container single-post-container">
    <?php
    while (have_posts()) :
        the_post();
        ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <header class="single-post-header">
            <div class="post-meta" style="margin-bottom: 1rem;">
              <span><?php echo get_the_date(); ?></span>
              <span>·</span>
              <span><?php the_category(', '); ?></span>
              <span>·</span>
              <span><?php the_author(); ?></span>
            </div>
            <h1 class="single-post-title"><?php the_title(); ?></h1>
          </header>

          <?php if (has_post_thumbnail()) : ?>
            <div class="single-featured-image">
              <?php the_post_thumbnail('full'); ?>
            </div>
          <?php endif; ?>

          <div class="entry-content">
            <?php the_content(); ?>
          </div>

          <footer class="single-post-footer" style="margin-top: 3.5rem; padding-top: 2rem; border-top: 1px solid var(--border-light);">
            <div class="post-tags" style="margin-bottom: 2rem;">
              <?php the_tags('<span class="tag-label" style="font-size: 0.85rem; color: var(--text-muted);">' . __('Tags: ', 'laura-cafe') . '</span> ', ' '); ?>
            </div>

            <div class="post-navigation-links" style="display: flex; justify-content: space-between; gap: 1rem;">
              <div><?php previous_post_link('&larr; %link'); ?></div>
              <div><?php next_post_link('%link &rarr;'); ?></div>
            </div>
          </footer>

          <?php
          if (comments_open() || get_comments_number()) :
              comments_template();
          endif;
          ?>
        </article>
        <?php
    endwhile;
    ?>
  </div>
</main>

<?php
get_footer();

