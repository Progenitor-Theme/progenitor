<?php
/**!
 * Progenitor Functions Master File
 * ================================
 * All the functions are in the PHP files in the `functions/` folder.
 */

require get_template_directory() . '/functions/setup.php';
require get_template_directory() . '/functions/remove-unwanted.php';
require get_template_directory() . '/functions/enqueues.php';

require get_template_directory() . '/functions/navbar/menu-left-walker.php';
require get_template_directory() . '/functions/navbar/menu-right-walker.php';

require get_template_directory() . '/functions/widgets/register-widgets.php';
require get_template_directory() . '/functions/widgets/search-widget.php';

require get_template_directory() . '/functions/pagination/index-multipage.php';
require get_template_directory() . '/functions/pagination/split-post.php';

require get_template_directory() . '/functions/hooks/build-hooks-base.php';
require get_template_directory() . '/functions/hooks/build-hooks-header.php';
require get_template_directory() . '/functions/hooks/build-hooks-banner.php';
require get_template_directory() . '/functions/hooks/build-hooks-mainbody.php';
require get_template_directory() . '/functions/hooks/build-hooks-content.php';
require get_template_directory() . '/functions/hooks/build-hooks-sidebars.php';
require get_template_directory() . '/functions/hooks/build-hooks-footer.php';

require get_template_directory() . '/functions/hooks/css-hooks.php';

require get_template_directory() . '/functions/hooks/action-hooks.php';
