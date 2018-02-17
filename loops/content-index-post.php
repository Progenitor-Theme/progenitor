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

  <div <?php progenitor_article_main_class(); ?>>
    <?php
      //the_post_thumbnail('medium');

      if ( has_excerpt( $post->ID ) ) {
    		the_excerpt();
        progenitor_more();
      } else {
    		the_content( progenitor_more() );
    	}
    ?>
  </div>
</article>
