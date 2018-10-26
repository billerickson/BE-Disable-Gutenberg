<?php
/**
 * Plugin Name: Disable Gutenberg
 * Plugin URI: https://www.github.com/billerickson/be-disable-gutenberg
 * GitHub URI: billerickson/be-disable-gutenberg
 * Description: WordPress 5.0 will launch with a new content editor, Gutenberg. This plugin lets you keep using the original content editor.
 * Version:     1.2.0
 * Author:      Bill Erickson
 * Author URI:  https://www.billerickson.net
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License version 2, as published by the
 * Free Software Foundation.  You may NOT assume that you can use any other
 * version of the GPL.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.
 *
 * @package    DisableGutenberg
 * @since      1.0.0
 * @copyright  Copyright (c) 2018, Bill Erickson
 * @license    GPL-2.0+
 */

// Disable Gutenberg
add_filter( 'gutenberg_can_edit_post_type', '__return_false' );
add_filter( 'use_block_editor_for_post_type', '__return_false' );

// Disable "Try Gutenberg" panel
remove_action( 'try_gutenberg_panel', 'wp_try_gutenberg_panel' );

// GitHub updater, in case updates are needed
include( dirname( __FILE__ ) . '/github-updater.php' );
