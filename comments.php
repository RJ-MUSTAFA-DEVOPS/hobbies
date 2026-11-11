<?php
/**
 * The template for displaying comments
 *
 * @package Laura_Cafe
 */

if (post_password_required()) {
    return;
}
?>

<div id="comments" class="comments-area" style="margin-top: 3.5rem; padding-top: 2rem; border-top: 1px solid var(--border-light);">
  <?php if (have_comments()) : ?>
    <h3 class="comments-title" style="font-family: var(--font-serif); font-size: 1.8rem; margin-bottom: 2rem;">
      <?php
      $comment_count = get_comments_number();
      if ('1' === $comment_count) {
          printf(_x('One reflection on &ldquo;%s&rdquo;', 'comments title', 'laura-cafe'), get_the_title());
      } else {
          printf(
              _nx(
                  '%1$s reflection on &ldquo;%2$s&rdquo;',
                  '%1$s reflections on &ldquo;%2$s&rdquo;',
                  $comment_count,
                  'comments title',
                  'laura-cafe'
              ),
              number_format_i18n($comment_count),
              get_the_title()
          );
      }
      ?>
    </h3>

    <ol class="comment-list" style="list-style: none; display: flex; flex-direction: column; gap: 1.5rem; margin-bottom: 3rem;">
      <?php
      wp_list_comments(array(
          'style'      => 'ol',
          'short_ping' => true,
      ));
      ?>
    </ol>
  <?php endif; ?>

  <?php comment_form(array(
      'class_submit'  => 'btn btn-primary',
      'title_reply'   => __('Leave a Reflection', 'laura-cafe'),
  )); ?>
</div>

