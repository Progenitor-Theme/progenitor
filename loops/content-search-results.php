<?php
/**!
 * The Search Results Loop
 */
?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>

  <article <?php progenitor_article_post_class(); ?> role="article" id="post_<?php the_ID()?>">
    <header <?php progenitor_article_header_class(); ?>>
      <h4><a href="<?php the_permalink(); ?>"><?php the_title()?></a></h4>
    </header>
    
    <main <?php progenitor_article_main_class(); ?>>
      <?php the_excerpt(); ?>
    </main>
  </article>

<?php endwhile; else: ?>

  <div class="alert alert-warning">
    <i class="fas fa-exclamation-triangle"></i> <?php _e('Sorry, your search yielded no results.', 'progenitor'); ?>
  </div>

<?php endif; ?>
