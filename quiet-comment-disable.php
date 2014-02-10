<?php
/*
Plugin Name: Quiet Comment Disable
Description: Quietly disable comments to avoid unwanted spam. Great for WordPress theme demo websites.
Version: 1.0.0
Author: Theme Blvd
Author URI: http://themeblvd.com
License: GPL2

    Copyright 2013  Theme Blvd

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License version 2,
    as published by the Free Software Foundation.

    You may NOT assume that you can use any other version of the GPL.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    The license for this software can likely be found here:
    http://www.gnu.org/licenses/gpl-2.0.html

*/

define( 'TB_QUIET_COMMENT_DISABLE_PLUGIN_VERSION', '1.0.0' );
define( 'TB_QUIET_COMMENT_DISABLE_PLUGIN_DIR', dirname( __FILE__ ) );
define( 'TB_QUIET_COMMENT_DISABLE_PLUGIN_URI', plugins_url( '' , __FILE__ ) );

/**
 * When WordPress attempts to add a comment, just kill it.
 * We don't need no comments on this site, sucka.
 */
function tb_quiet_comment_disable( $commentdata ) {
    wp_die( apply_filters( 'quiet_comment_disable_message', __('Comments are currently disabled for this WordPress demo.') ) );
}
add_filter( 'preprocess_comment', 'tb_quiet_comment_disable' );