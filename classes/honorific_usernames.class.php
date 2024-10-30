<?php
/**
 * Initialization functions for HONORIFIC BUDDYPRESS USERNAMES
 * @author      H.K.Latiyan
 * @version     1.0
 */

if ( ! defined( 'ABSPATH' ) ) exit;

if(!class_exists('honorific_buddypress_usernames')){

	class honorific_buddypress_usernames{

		public static $instance;
	    
	    public static function init(){

	        if ( is_null( self::$instance ) )
	            self::$instance = new honorific_buddypress_usernames();

	        return self::$instance;
	    }

		private function __construct(){
			add_filter('bp_core_get_user_displayname',array($this,'add_honorific_before_user_name'),10,2);
			add_filter('bp_displayed_user_fullname',array($this,'add_honorific_before_user_name2'),10,1);
			add_filter('bp_get_loggedin_user_fullname',array($this,'add_honorific_before_user_name2'),10,1);
			add_filter('bp_member_name',array($this,'add_honorific_before_user_name2'),10,1);
		}

		function add_honorific_before_user_name($name,$user_id){

			if(function_exists('bp_get_profile_field_data')){

				$field = bp_get_profile_field_data(
					array(
						'field' => 'Honorific', // This is the field name.
						'user_id' => $user_id // This is the user id.
					));

				return $field.' '.$name;
			}
		}

		function add_honorific_before_user_name2($name){

			if(function_exists('bp_get_member_user_id'))
				$user_id = bp_get_member_user_id();

			if(function_exists('bp_get_profile_field_data')){

				$field = bp_get_profile_field_data(
					array(
						'field' => 'Honorific', // This is the field name.
						'user_id' => $user_id// This is the user id.
					));

				return $field.' '.$name;
			}
		}
	}
}

honorific_buddypress_usernames::init();

