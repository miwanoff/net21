<?php
/**
 * emmet functions and definitions
 *
 * @package WordPress
 * @subpackage emmet
 * @since emmet 1.0
 */
require get_template_directory() . '/inc/theme/init.php';

/**
 * Note: Do not add any custom code here. Please use a child theme so that your customizations aren't lost during updates.
 * http://codex.wordpress.org/Child_Themes
 */

/**
 * Bypass Force Login to allow for exceptions.
 *
 * @param bool $bypass Whether to disable Force Login. Default false.
 * @return bool
 */
function my_forcelogin_bypass($bypass)
{
    if (is_page('register')) {
        $bypass = true;
    }
    return $bypass;

}
add_filter('v_forcelogin_bypass', 'my_forcelogin_bypass');