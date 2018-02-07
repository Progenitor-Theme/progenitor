<?php
/**!
 * The Default Loop
 * Used by index.php, category.php and author.php
 */
?>

<?php if(have_posts()): while(have_posts()): the_post();?>

  <?php get_template_part('loops/content-index-post', get_post_format()); ?>

<?php endwhile; ?>

<?php if ( function_exists('progenitor_pagination') ) { progenitor_pagination(); } else if ( is_paged() ) { ?>
  <ul class="pagination">
    <li class="page-item older">
      <?php next_posts_link('<i class="fas fa-arrow-left"></i> ' . __('Previous', 'progenitor')) ?></li>
    <li class="page-item newer">
      <?php previous_posts_link(__('Next', 'progenitor') . ' <i class="fas fa-arrow-right"></i>') ?></li>
  </ul>
<?php } ?>

<?php else:
  wp_redirect(esc_url( home_url() ) . '/404', 404);
  exit;
endif; ?>
