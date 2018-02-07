<?php
/*
The Single Posts Loop
=====================
*/
?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>

  <article role="article" id="post_<?php the_ID()?>" <?php progenitor_article_post_class()?>>
    <header <?php progenitor_article_header_class(); ?>>
      <?php progenitor_build_single_post_front_matter(); ?>
    </header>

    <main <?php progenitor_article_main_class(); ?>>
      <?php the_content()?>
      <?php wp_link_pages(); ?>
    </main>

    <?php progenitor_build_author_bio(); ?>
  </article>

  <?php progenitor_build_single_comments(); ?>

<?php endwhile; else:
  wp_redirect(esc_url( home_url() ) . '/404', 404);
  exit;
endif; ?>

<?php progenitor_build_single_prev_next(); ?>
