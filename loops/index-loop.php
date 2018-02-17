<?php
/**!
 * The Default Loop
 * Used by index.php, category.php and author.php
 */
?>

<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

  <?php get_template_part( 'loops/content-index-post', get_post_format() ); ?>

<?php endwhile; ?>

<?php if ( function_exists('progenitor_pagination') ) : progenitor_pagination(); else : ?>
    <p>
      <?php previous_posts_link(__('<i class="fas fa-arrow-left"></i> ' . 'Newer posts', 'posts published later', 'progenitor')) ?> | <?php next_posts_link( __('Older posts', 'posts published earlier', 'progenitor') . ' <i class="fas fa-arrow-right"></i>') ?>
    </p>
<?php endif; ?>

<?php else :
  wp_redirect(esc_url( home_url() ) . '/404', 404);
  exit;
endif; ?>
