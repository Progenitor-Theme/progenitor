<?php
/**!
 * Progenitor Functions Master File
 * ================================
 * All the functions are in the PHP files in the `functions/` folder.
 */

require get_template_directory() . '/functions/setup.php';
require get_template_directory() . '/functions/remove-unwanted.php';

require get_template_directory() . '/functions/icons.php';
require get_template_directory() . '/functions/framework.php';

require get_template_directory() . '/functions/enqueues-supporting.php';
require get_template_directory() . '/functions/enqueues.php';

require get_template_directory() . '/functions/register-nav-menus.php';
require get_template_directory() . '/functions/register-widgets.php';

require get_template_directory() . '/functions/hooks/build-hooks-base.php';
require get_template_directory() . '/functions/hooks/build-hooks-header.php';
require get_template_directory() . '/functions/hooks/build-hooks-banner.php';
require get_template_directory() . '/functions/hooks/build-hooks-main.php';
require get_template_directory() . '/functions/hooks/build-hooks-content.php';
require get_template_directory() . '/functions/hooks/build-hooks-content-components.php';
require get_template_directory() . '/functions/hooks/build-hooks-sidebars.php';
require get_template_directory() . '/functions/hooks/build-hooks-footer.php';

require get_template_directory() . '/functions/hooks/css-hooks.php';

require get_template_directory() . '/functions/hooks/action-hooks.php';
