<?php
/**
 * @file main_listener.php
 * @purpose main listener for Paid Registration extension
 * @author William Hastings
 * 
 * @package phpBB extension - Paid Registration
 * @copyright (c) 2017 William Hastings http://williamhastings.me
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 */

namespace whastings\paidregistration\event

class main_listener {
	/**
	 * @function getSubscribedEvents
	 * @purpose Assign functions in this class to event listeners in the core
	 * @return array
	 */
	static public function getSubscribedEvents() {
		return array (
			'core.user_setup'		=>	'load_language_on_setup'
		);
	}
	
	/**
	 * @function load_language_on_setup
	 * @purpose Load the language file for the extension
	 * @var \phpbb\event\data $event core event object
	 * @return none
	 */
	static public function load_language_on_setup ( $event ) {
		$lang_set_ext = $event['lang_set_ext'];
		$lang_set_ext = array ( 
			'ext_name'		=>	'whastings\paidregistration',
			'lang_set'		=>	'Paid Registration'
		);
		$event['lang_set_ext'] = $lang_set_ext;
	}
}

?>