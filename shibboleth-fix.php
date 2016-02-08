<?php
/*
Plugin Name:    Remove Shibboleth From Tools Menu
Plugin URI:     https://github.com/neelakansha85/shibboleth-fix-plugin
Description:    Super simple plugin to remove the Sibboleth settings from Tools menu for anyone except super admins.
Version:        0.3
Author:         Neel Shah
Author URI:     http://neelshah.info
License: 		GPLv2 or later
License URI: 	http://www.gnu.org/licenses/gpl-2.0.html

Copyright 2016 Neel Shah (email : neel@nsdesigners.com)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA
*/

//
function remove_shibboleth_tools () {
	if ( function_exists( 'remove_menu_page' ) ) {
		if ( ! is_super_admin() ) {
			remove_submenu_page( 'tools.php', 'shibboleth-options' );
		}
	}
}
