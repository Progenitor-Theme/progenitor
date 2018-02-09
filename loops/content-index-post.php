<?php
/*
The Index Post (or excerpt)
===========================
Used by index.php, category.php and author.php
*/
?>

<article <?php progenitor_article_post_class(); ?> role="article" id="post_<?php the_ID()?>">
  <header <?php progenitor_article_header_class(); ?>>
    <?php progenitor_build_index_post_front_matter(); ?>
  </header>

  <main <?php progenitor_article_main_class(); ?>>
    <?php the_post_thumbnail('medium'); ?>

    <?php if ( has_excerpt( $post->ID ) ) {
  		the_excerpt();
    ?>
      <p><a class="btn btn-primary" href="<?php the_permalink(); ?>">
        <?php _e( __('Continue reading', 'progenitor' ) . ' <i class="fas fa-arrow-right"></i>', 'progenitor' ) ?>
      </a></p>
  	<?php } else {
  		the_content( progenitor_more() );
		} ?>
  </main>
</article>
