<?php
/**!
 * Build Hooks: Content Components
 * ===============================
 */

if ( !function_exists('progenitor_build_index_post_front_matter') ) {
  function progenitor_build_index_post_front_matter() {

    if ( function_exists('progenitor_framework_build_index_post_front_matter') ) {
      progenitor_framework_build_index_post_front_matter();
    } else { ?>
      <h2>
        <a href="<?php the_permalink(); ?>">
          <?php the_title()?>
        </a>
      </h2>
      <p>
        <?php progenitor_post_date(); ?>&nbsp;|
        <?php _e('By ', 'progenitor'); the_author_posts_link(); ?>&nbsp;|
        <?php _e('Comments: ', 'progenitor');?> <a href="<?php comments_link(); ?>"><?php comments_number('None', '1', '%'); ?></a>
      </p>

    <?php }
  }
};

if ( !function_exists('progenitor_build_single_post_front_matter') ) {
  function progenitor_build_single_post_front_matter() {

    if ( function_exists('progenitor_framework_build_single_post_front_matter') ) {
      progenitor_framework_build_single_post_front_matter();
    } else { ?>
      <h1>
        <?php the_title()?>
      </h1>
      <div class="entry-meta">
        <p>
          <?php _e('By ', 'progenitor'); the_author_posts_link(); ?>
        </p>
        <p>
          <?php progenitor_post_date(); ?>&nbsp;|
          <?php _e('Comments: ', 'progenitor');?> <a href="<?php comments_link(); ?>"><?php comments_number('None', '1', '%'); ?></a><br />
          <?php _e('Category: ', 'progenitor'); the_category(', ') ?>&nbsp;
          <?php if ( has_tag() ) { ?>
            | <?php the_tags('Tags: ', ', '); ?>
          <?php } ?>
        </p>
      </div>

    <?php }
  }
};

if ( !function_exists('progenitor_build_author_bio') ) {
  function progenitor_build_author_bio() {

    if ( function_exists('progenitor_framework_build_author_bio') ) {
      progenitor_framework_build_author_bio();
    } else { ?>

      <div class="author-bio">
        <?php progenitor_author_avatar(); ?>
        <div>
          <p class="author-name">
            <?php
              if (!is_author()) { _e('Author: ', 'progenitor'); };
              the_author_posts_link();
            ?>
          </p>
          <p class="author-description"><?php progenitor_author_description(); ?></p>
          <?php if (!is_author()) { ?>
            <p class="author-other-posts">
              <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php _e('Other posts by ', 'progenitor'); the_author(); ?></a>
            </p>
          <?php } ?>
        </div>
      </div><!-- /.author-bio -->

    <?php }
  }
};

if ( !function_exists('progenitor_build_single_comments') ) {
  function progenitor_build_single_comments() {

    if ( comments_open() || get_comments_number() ) {

      progenitor_action_comments_before();

      if ( function_exists('progenitor_comments') ) {
        comments_template('/functions/framework/bootstrap-4/comments.php');
      } else {
        comments_template();
      }

      progenitor_action_comments_after();
		};

  }
};

if ( !function_exists('progenitor_build_single_prev_next') ) {
  function progenitor_build_single_prev_next() {

    if ( function_exists('progenitor_framework_build_single_prev_next') ) {
      progenitor_framework_build_single_prev_next();
    } else { ?>
      <div>
        <div class="alignleft">
          <?php previous_post_link('%link', '<i class="fas fa-fw fa-arrow-left"></i> Previous post: '.'%title'); ?>
        </div>
        <div class="alignright">
          <?php next_post_link('%link', 'Next post: '.'%title' . ' <i class="fas fa-fw fa-arrow-right"></i>'); ?>
        </div>
      </div>

    <?php }
  }
};
