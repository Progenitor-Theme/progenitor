<?php
/**!
 * Build Hooks: Content
 * ====================
 */

/*----------------------------------------------------------------------------*\
  CONTENT
  -------
  `#content` templates (where the loop is) are chosen by the conditional tags
  in `progenitor_build_main()`.
\*----------------------------------------------------------------------------*/

// Content: 404

if ( !function_exists('progenitor_build_404_message') ) {
  function progenitor_build_404_message() { ?>

    <div <?php progenitor_404_message_class(); ?>>
      <h1>
        <i class="fas fa-exclamation-triangle"></i> <?php _e('Error', 'progenitor'); ?> 404
      </h1>

      <p>
        <?php _e('Sorry, the page you were looking for does not exist.', 'progenitor'); ?>
      </p>
    </div><!-- /.alert -->

  <?php }
};

if ( !function_exists('progenitor_build_content_404') ) {
  function progenitor_build_content_404() { ?>

    <div <?php progenitor_content_class(); ?> id="content" role="main">
    <?php
      progenitor_action_content_top();
      progenitor_build_404_message();
      progenitor_action_content_bottom();
    ?>
    </div><!-- /#content -->

  <?php }
};

// Content: Blog Index

if ( !function_exists('progenitor_build_content_blog_index') ) {
  function progenitor_build_content_blog_index() { ?>

    <div <?php progenitor_content_class(); ?> id="content" role="main">
    <?php
      progenitor_action_content_top();
      get_template_part('loops/index-loop');
      progenitor_action_content_bottom();
    ?>
    </div><!-- /#content -->

  <?php }
};

// Content: Author

if ( !function_exists('progenitor_build_content_author') ) {
  function progenitor_build_content_author() { ?>

    <div <?php progenitor_content_class(); ?> id="content" role="main">
      <?php progenitor_action_content_top(); ?>

      <?php
        $userInfo = get_userdata( get_query_var('author'));
        $isAuthor = true;
        if (
          ! in_array('contributor', $userInfo -> roles) &&
          ! in_array('administrator', $userInfo -> roles) &&
          ! in_array('author', $userInfo -> roles) &&
          ! in_array('editor', $userInfo -> roles)
        ) {
          $isAuthor = false;
          wp_redirect(esc_url( home_url() ) . '/404', 404);
        }
      ?>

      <header <?php progenitor_article_header_class(); ?>>
        <h1>
          <?php echo sprintf(__('Author: %s', 'progenitor'), get_the_author_meta('display_name', $userInfo -> data -> ID)); ?>
        </h1>
      </header>
      <?php
        progenitor_build_author_bio();
        get_template_part('loops/index-loop');
        progenitor_action_content_bottom();
      ?>
    </div><!-- /#content -->

  <?php }
};

// Content: Category

if ( !function_exists('progenitor_build_content_category') ) {
  function progenitor_build_content_category() { ?>

    <div <?php progenitor_content_class(); ?> id="content" role="main">
      <?php progenitor_action_content_top(); ?>
      <header <?php progenitor_article_header_class(); ?>>
        <h1>
          Category: <?php echo single_cat_title(); ?>
        </h1>
      </header>
      <?php
        get_template_part('loops/index-loop');
        progenitor_action_content_bottom();
      ?>
    </div><!-- /#content -->

  <?php }
};

// Content: Frontpage

if ( !function_exists('progenitor_build_content_frontpage') ) {
  function progenitor_build_content_frontpage() { ?>

    <div <?php progenitor_content_class(); ?> id="content" role="main">
      <?php
        progenitor_action_content_top();
        get_template_part('loops/content-page');
        progenitor_action_content_bottom();
      ?>
    </div><!-- /#content -->

  <?php }
};

// Content: Monthly Archive

if ( !function_exists('progenitor_build_content_month') ) {
  function progenitor_build_content_month() { ?>

    <div <?php progenitor_content_class(); ?> id="content" role="main">
      <?php progenitor_action_content_top(); ?>
      <header <?php progenitor_article_header_class(); ?>>
        <h1>
          Archive: <?php echo single_month_title(); ?>
        </h1>
      </header>
      <?php
        get_template_part('loops/index-loop');
        progenitor_action_content_bottom();
      ?>
    </div><!-- /#content -->

  <?php }
};

// Content: Page

if ( !function_exists('progenitor_build_content_page') ) {
  function progenitor_build_content_page() { ?>

    <div <?php progenitor_content_class(); ?> id="content" role="main">
      <?php
        progenitor_action_content_top();
        get_template_part('loops/content-page');
        progenitor_action_content_bottom();
      ?>
    </div><!-- /#content -->

  <?php }
};

// Content: Tag

if ( !function_exists('progenitor_build_content_tag') ) {
  function progenitor_build_content_tag() { ?>

    <div <?php progenitor_content_class(); ?> id="content" role="main">
      <?php progenitor_action_content_top(); ?>
      <header <?php progenitor_article_header_class(); ?>>
        <h1>
          Tag: <?php echo single_tag_title(); ?>
        </h1>
      </header>
      <?php
        get_template_part('loops/index-loop');
        progenitor_action_content_bottom();
      ?>
    </div><!-- /#content -->

  <?php }
};

// Content: Search

if ( !function_exists('progenitor_build_content_search') ) {
  function progenitor_build_content_search() { ?>

    <div <?php progenitor_content_class(); ?> id="content" role="main">
      <?php progenitor_action_content_top(); ?>
      <header <?php progenitor_article_header_class(); ?>>
        <h1>
          <?php _e('Search Results for', 'progenitor'); ?> &ldquo;<?php the_search_query(); ?>&rdquo;
        </h1>
      </header>
      <?php get_template_part('loops/content-search-results'); ?>

      <?php progenitor_action_content_bottom(); ?>
    </div><!-- /#content -->

  <?php }
};

// Content: Single

if ( !function_exists('progenitor_build_content_single') ) {
  function progenitor_build_content_single() { ?>

    <div <?php progenitor_content_class(); ?> id="content" role="main">
      <?php
        progenitor_action_content_top();
        get_template_part('loops/content-single-post', get_post_format());
        progenitor_action_content_bottom();
      ?>
    </div><!-- /#content -->

  <?php }
};
