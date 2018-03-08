<?php
/**
 * Plugin Name: Disable Gutenberg
 * Plugin URI: https://www.github.com/billerickson/be-disable-gutenberg/
 * Description: Turns off the new content editor in WordPress 5.0, code-named Gutenberg
 * Version:     1.0.0
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

// That's all there is to it!
add_filter( 'gutenberg_can_edit_post_type', '__return_false' );
