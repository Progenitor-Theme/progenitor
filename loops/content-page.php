<?php
/*
The Page Post Loop
==================
*/
?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>

  <article <?php progenitor_article_post_class(); ?> role="article" id="post_<?php the_ID()?>">
    <header <?php progenitor_article_header_class(); ?>>
      <h1><?php the_title()?></h1>
    </header>

    <main <?php progenitor_article_main_class(); ?>>
      <?php //the_post_thumbnail('medium'); ?>
      <?php the_content()?>
      <?php wp_link_pages(); ?>
    </main>
  </article>

<?php endwhile;
  else: wp_redirect(esc_url( home_url() ) . '/404', 404);
  exit;
endif; ?>
