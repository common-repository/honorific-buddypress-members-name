<?php

/*
Plugin Name: Honorific Buddypress Usernames
Plugin URI:  
Description: This is a simple WordPress plugin to modify Buddypress members's name. It adds the honorifics to the member's name.
We need an honorific to show our respect and its the formal way of greeting a person and this plugin helps you to achieve it.
Version: 1.0
Author: H.K.Latiyan
*/
/*
Copyright 2016  H.K.Latiyan  (email : hitesh100693@gmail.com)

Honorific Buddypress Usernames program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License, version 2, as published by the Free Software Foundation.

Honorific Buddypress Usernames program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Honorific Buddypress Usernames program; if not, write to the Free Software Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA.
*/

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

add_action( 'bp_include', 'honorific_buddypress_username_init' );
function honorific_buddypress_username_init() {
    include_once 'classes/honorific_usernames.class.php';
}
