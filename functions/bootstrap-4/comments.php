<?php

// Do not delete this section
if (isset($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME'])){
  die ('Please do not load this page directly. Thanks!'); }
if ( post_password_required() ) { ?>
  <div class="alert alert-warning">
    <?php _e('This post is password protected. Enter the password to view comments.', 'progenitor'); ?>
  </div>
<?php
  return;
}
// End do not delete section

if (have_comments()) { ?>

  <h3><?php _e('Feedback', 'progenitor'); ?></h3>
  <p class="text-muted mb-5">
   <i class="fas fa-comment"></i>&nbsp; <?php _e('Comments', 'progenitor');  ?>: <?php comments_number(__('None', 'progenitor'), '1', '%'); ?>
  </p>

  <?php progenitor_framework_build_comment_list(); ?>

<?php } else {
  if (comments_open()) {
    echo '<p class="alert alert-info">' . __('Be the first to write a comment.', 'progenitor') . '</p>';
	} else {
		echo '<p class="alert alert-info">' . __('Comments are closed for this post.', 'progenitor') . "</p>";
  }
} ?>

<?php progenitor_framework_build_comment_form(); ?>
