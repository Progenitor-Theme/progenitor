<?php
/**!
 * Framework Build Hooks: Bootstrap 4 Content Components
 */

if ( !function_exists('progenitor_framework_build_index_post_front_matter') ) {
  function progenitor_framework_build_index_post_front_matter() { ?>

    <h2>
      <a href="<?php the_permalink(); ?>">
        <?php the_title()?>
      </a>
    </h2>
    <p class="small text-muted">
      <i class="far fa-calendar-alt"></i>&nbsp;<?php progenitor_post_date(); ?>&nbsp;|
      <i class="fas fa-user"></i>&nbsp; <?php _e('By ', 'progenitor'); the_author_posts_link(); ?>&nbsp;|
      <i class="fas fa-comment"></i>&nbsp;<?php _e('Comments: ', 'progenitor');?> <a href="<?php comments_link(); ?>"><?php comments_number('None', '1', '%'); ?></a>
    </p>

  <?php }
};

if ( !function_exists('progenitor_framework_build_single_post_front_matter') ) {
  function progenitor_framework_build_single_post_front_matter() { ?>

    <h1>
      <?php the_title()?>
    </h1>
    <div class="entry-meta">
      <p class="h4 text-muted">
        <?php _e('By ', 'progenitor'); the_author_posts_link(); ?>
      </p>
      <p class="small text-muted">
        <i class="far fa-calendar-alt"></i>&nbsp;<?php progenitor_post_date(); ?>&nbsp;|
        <i class="fas fa-comment"></i>&nbsp;<?php _e('Comments: ', 'progenitor');?> <a href="<?php comments_link(); ?>"><?php comments_number('None', '1', '%'); ?></a><br />
        <i class="fas fa-folder-open"></i>&nbsp;
        <?php _e('Category: ', 'progenitor'); the_category(', ') ?>
        <?php if ( has_tag() ) { ?>
          | <i class="fas fa-tags"></i>&nbsp;<?php the_tags('Tags: ', ', '); ?>
        <?php } ?>
      </p>
    </div>

  <?php }
};

if ( !function_exists('progenitor_framework_build_author_bio') ) {
  function progenitor_framework_build_author_bio() { ?>

    <div class="author-bio media my-5 border-top border-bottom pt-3 pb-2">
      <?php progenitor_author_avatar(); ?>
      <div class="media-body ml-3">
        <p class="h4 author-name">
          <?php
            if (!is_author()) { _e('Author: ', 'progenitor'); };
            the_author_posts_link();
          ?>
        </p>
        <p class="author-description"><?php progenitor_author_description(); ?></p>
        <?php if (!is_author()) { ?>
          <p class="author-other-posts small">
            <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php _e('Other posts by ', 'progenitor'); the_author(); ?></a>
          </p>
        <?php } ?>
      </div>
    </div><!-- /.author-bio -->

  <?php }
};

if ( !function_exists('progenitor_framework_build_comment_list') ) {
  function progenitor_framework_build_comment_list() { ?>

    <div class="commentlist">
      <?php wp_list_comments('type=comment&callback=progenitor_comments');?>
    </div>

    <p class="text-muted">
      <?php paginate_comments_links(); ?>
    </p>
  <?php }
};

if ( !function_exists('progenitor_framework_build_comment_form') ) {
  function progenitor_framework_build_comment_form() { ?>

    <?php if (comments_open()) { ?>
      <section id="respond">
        <h3><?php comment_form_title(__('Your feedback', 'progenitor'), __('Responses to %s', 'progenitor')); ?></h3>
        <p><?php cancel_comment_reply_link(); ?></p>
        <?php if (get_option('comment_registration') && !is_user_logged_in()) { ?>
          <p><?php printf(__('You must be <a href="%s">logged in</a> to post a comment.', 'progenitor'), wp_login_url(get_permalink())); ?></p>
        <?php } else { ?>
          <form action="<?php echo site_url('/wp-comments-post.php') ?>" method="post" id="commentform">
            <?php if (is_user_logged_in()) { ?>
              <p>
                <?php printf(__('Logged in as', 'progenitor') . ' <a href="%s/wp-admin/profile.php">%s</a>.', get_option('url'), $user_identity); ?>
                <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="<?php __('Log out of this account', 'progenitor'); ?>"><?php echo __('Log out?', 'progenitor') . ' <i class="fas fa-arrow-right"></i>'; ?></a>
              </p>
            <?php } else { ?>
              <div class="form-group">
                <label for="author">
                  <?php
                    _e('Your name:', 'progenitor');
                    if ($req) {
                      echo ' <span class="text-muted">' . __('(required)', 'progenitor') . '</span>';
                    }
                  ?>
                </label>
                <input type="text" class="form-control" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" <?php if ($req) echo 'aria-required="true"'; ?>>
              </div>
              <div class="form-group">
                <label for="email">
                  <?php
                    _e('Your email address ', 'progenitor');
                    if ($req) {
                      echo '<span class="text-muted">' . _e('(required, but will not be published)', 'progenitor') . '</span>:';
                    }
                  ?>
                </label>
                <input type="email" class="form-control" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" <?php if ($req) echo 'aria-required="true"'; ?>>
              </div>
              <div class="form-group">
                <label for="url">
                  <?php
                    echo __('Your website', 'progenitor') . ' <span class="text-muted">' . __('if you have one (not required)', 'progenitor') . '</span>';
                  ?>
                </label>
                <input type="url" class="form-control" name="url" id="url" value="<?php echo esc_attr($comment_author_url); ?>">
              </div>
            <?php } ?>
            <div class="form-group">
              <label for="comment">
                <?php
                  _e('Your comment', 'progenitor');
                ?>
              </label>
              <textarea name="comment" class="form-control" id="comment" rows="6" aria-required="true"></textarea>
            </div>
            <p>
              <input name="submit" class="btn btn-primary" type="submit" id="submit" value="<?php _e('Submit comment', 'progenitor'); ?>">
            </p>
            <?php comment_id_fields(); ?>
            <?php do_action('comment_form', $post->ID); ?>
          </form>
        <?php } ?>
      </section>
    <?php } ?>

  <?php }
};


if ( !function_exists('progenitor_framework_build_single_prev_next') ) {
  function progenitor_framework_build_single_prev_next() { ?>

    <div class="row mt-5">
      <div class="col">
        <?php previous_post_link('%link', '<i class="fas fa-fw fa-arrow-left"></i> Previous post: '.'%title'); ?>
      </div>
      <div class="col text-right">
        <?php next_post_link('%link', 'Next post: '.'%title' . ' <i class="fas fa-fw fa-arrow-right"></i>'); ?>
      </div>
    </div>

  <?php }
};
