<?php
/**!
 * Progenitor Action Hooks
 * =======================
 * Designed to be used by a child theme.
 */

// HTML Head

function progenitor_action_head_top() {
  do_action('progenitor_action_head_top');
}
function progenitor_action_head_bottom() {
  do_action('progenitor_action_head_bottom');
}

// HTML Body

function progenitor_action_body_top() {
  do_action('progenitor_action_body_top');
}
function progenitor_action_body_bottom() {
  do_action('progenitor_action_body_bottom');
}

// header.php

function progenitor_action_header_before() {
  do_action('progenitor_action_header_before');
}
function progenitor_action_header_top() {
  do_action('progenitor_action_header_top');
}
function progenitor_action_header_bottom() {
  do_action('progenitor_action_header_bottom');
}
function progenitor_action_header_after() {
  do_action('progenitor_action_header_after');
}

// inclues/navbar.php (Header Navbar)

function progenitor_action_navbar_before() {
  do_action('progenitor_action_navbar_before');
}
function progenitor_action_navbar_top() {
  do_action('progenitor_action_navbar_top');
}
function progenitor_action_navbar_bottom() {
  do_action('progenitor_action_navbar_bottom');
}
function progenitor_action_navbar_after() {
  do_action('progenitor_action_navbar_after');
}

// sidebar-1.php

function progenitor_action_sidebar_1_top() {
  do_action('progenitor_action_sidebar_1_top');
}
function progenitor_action_sidebar_1_bottom() {
  do_action('progenitor_action_sidebar_1_bottom');
}

// sidebar-2.php

function progenitor_action_sidebar_2_top() {
  do_action('progenitor_action_sidebar_2_top');
}
function progenitor_action_sidebar_2_bottom() {
  do_action('progenitor_action_sidebar_2_bottom');
}

// #site-main

function progenitor_action_main_top() {
  do_action('progenitor_action_main_top');
}
function progenitor_action_mainb_bottom() {
  do_action('progenitor_action_main_bottom');
}

// #content (where the loop is)

function progenitor_action_content_top() {
  do_action('progenitor_action_content_top');
}
function progenitor_action_content_bottom() {
  do_action('progenitor_action_content_bottom');
}

// includes/comments.php

function progenitor_action_comments_before() {
  do_action('progenitor_action_comments_before');
}
function progenitor_action_comments_after() {
  do_action('progenitor_action_comments_after');
}

// footer.php

function progenitor_action_footer_before() {
  do_action('progenitor_action_footer_before');
}
function progenitor_action_footer_top() {
  do_action('progenitor_action_footer_top');
}
function progenitor_action_footer_bottom() {
  do_action('progenitor_action_footer_bottom');
}
function progenitor_action_footer_after() {
  do_action('progenitor_action_footer_after');
}

// Footer bottom (inside the site <footer>)

function progenitor_action_footer_bottom_before() {
  do_action('progenitor_action_footer_bottom_before');
}
function progenitor_action_footer_bottom_after() {
  do_action('progenitor_action_footer_bottom_after');
}
