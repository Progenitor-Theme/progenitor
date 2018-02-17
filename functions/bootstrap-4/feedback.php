<?php
/**!
 * Custom feedback comments -- modified from:
 * https://codex.wordpress.org/Function_Reference/wp_list_comments#Comments_Only_With_A_Custom_Comment_Display
*/

function progenitor_comments($comment, $args, $depth) {
  if ( 'div' === $args['style'] ) {
    $tag       = 'div';
    $add_below = 'comment';
  } else {
    $tag       = 'li';
    $add_below = 'div-comment';
  }?>
  <<?php echo $tag; comment_class( empty( $args['has_children'] ) ? '' : 'parent' ); ?> id="comment-<?php comment_ID() ?>"><?php
  if ( 'div' != $args['style'] ) { ?>
    <div id="div-comment-<?php comment_ID() ?>" class="comment-body mb-3"><?php
  } ?>

    <div class="comment-author vcard media">
      <?php echo get_avatar( $comment->comment_author_email, $size = '48'); ?>
      <div class="media-body ml-2">
        <p class="mb-0"><?php comment_author(); ?></p>
        <p class="comment-meta commentmetadata mb-0">
          <a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>"><?php
            /* translators: 1: date, 2: time */
            printf(
              __('%1$s at %2$s'),
              get_comment_date(),
              get_comment_time()
            ); ?>
          </a>
          <?php edit_comment_link( __( '(Edit)' ), '', '' ); ?>
        </p>
      </div>
    </div>

    <?php if ($comment->comment_approved == '0') : ?>
      <p class="comment-awaiting-moderation text-muted"><?php _e('Your comment is awaiting moderation.', 'progenitor') ?></p>
    <?php endif; ?>

    <div class="comment-text mt-3">
      <?php comment_text(); ?>
    </div>

    <div class="comment-footer text-right">
      <?php edit_comment_link('<span class="btn btn-info">' . __('Edit', 'progenitor') . '</span>','','' );	?>
      <span class="reply">
        <?php
          comment_reply_link(
            array_merge(
              $args,
              array(
                'add_below' => $add_below,
                'depth'     => $depth,
                'max_depth' => $args['max_depth']
              )
            )
          );
        ?>
      </span>
    </div>

  <?php if ( 'div' != $args['style'] ) : ?>
    </div>
  <?php endif;
}
