<?php
/**
 * The main template file
 *
 * @package Laura_Cafe
 */

get_header();
?>

<div class="page-header-simple">
  <div class="container">
    <span class="section-tag"><?php _e('The Roastery Journal', 'laura-cafe'); ?></span>
    <h1 class="section-title"><?php single_post_title(); ?></h1>
    <p class="section-subtitle"><?php _e('Reflections on coffee farming, harvest seasons, and the quiet ritual of slow brewing.', 'laura-cafe'); ?></p>
  </div>
</div>

<main class="site-main-content">
  <div class="container">
    <?php if (have_posts()) : ?>
      <div class="blog-grid">
        <?php
        while (have_posts()) :
            the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('post-card'); ?>>
              <?php if (has_post_thumbnail()) : ?>
                <div class="post-card-thumb">
                  <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('medium_large'); ?>
                  </a>
                </div>
              <?php endif; ?>

              <div class="post-card-body">
                <div class="post-meta">
                  <span><?php echo get_the_date(); ?></span>
                  <span>·</span>
                  <span><?php the_category(', '); ?></span>
                </div>
                <h2 class="post-card-title">
                  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h2>
                <div class="post-excerpt">
                  <?php the_excerpt(); ?>
                </div>
                <a href="<?php the_permalink(); ?>" class="post-read-more"><?php _e('Read Story &rarr;', 'laura-cafe'); ?></a>
              </div>
            </article>
            <?php
        endwhile;
        ?>
      </div>

      <div class="pagination-wrap" style="text-align: center; margin-top: 3.5rem;">
        <?php
        the_posts_pagination(array(
            'mid_size'  => 2,
            'prev_text' => __('&larr; Previous', 'laura-cafe'),
            'next_text' => __('Next &rarr;', 'laura-cafe'),
        ));
        ?>
      </div>

    <?php else : ?>
      <div class="no-posts-found" style="text-align: center; padding: 4rem 1rem;">
        <h2 style="font-family: var(--font-serif); font-size: 2rem;"><?php _e('No Stories Found', 'laura-cafe'); ?></h2>
        <p style="color: var(--text-muted); margin-top: 0.5rem;"><?php _e('We have not written any journal entries yet. Check back soon for harvest essays.', 'laura-cafe'); ?></p>
      </div>
    <?php endif; ?>
  </div>
</main>

<?php
get_footer();

