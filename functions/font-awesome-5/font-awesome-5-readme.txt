Font Awesome 5 Icons
====================

You will find Font Awesome 5 icons in these places in Progenitor:

* functions/setup.php
  –– progenitor_more()

* functions/build-hooks-content.php
  –– progenitor_404_message_class()

* functions/build-hooks-content-components.php
  –– progenitor_framework_build_index_post_front_matter()
  –– progenitor_framework_build_single_post_front_matter()
  –– progenitor_framework_build_comment_form()
  –– progenitor_framework_build_single_prev_next()

* loops/index-loop.php

* functions/bootstrap-4/comments.php

* functions/bootstrap-4/navbar.php
  –– progenitor_build_header_nav_search()

* functions/bootstrap-4/pagination-split-post.php

* functions/bootstrap-4/search-widget.php

In your child theme, you can totally disengage Font Awesome from Progenitor comply by overwriting one pluggable function: the `progenitor_icons()` located in `functions/icons.php`. So if you add this empty function in your child theme, you've disengaged Font Awesome:

  progenitor_icons() {
    // Empty
  }

We welcome the contribution of child themes to the Progenitor project with alternative CSS/JS front-end frameworks.
