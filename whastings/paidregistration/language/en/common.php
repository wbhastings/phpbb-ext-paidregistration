<?php
/**
 * @file common.php
 * @purpose contains the common english translations
 * @author William Hastings ( http://williamhastings.me )
 * 
 * @package phpBB extension - Paid Registration
 * @copyright (c) 2017 William Hastings http://williamhastings.me
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 */

if ( !defined ( 'IN_PHPBB' ) ) {
	exit;
}

if ( empty ( $lang ) || !is_array ( $lang ) ) {
	$lang = array();
}

$lang = array_merge ( $lang, array ( 
	'ACP_PAIDREG_TITLE'				=>	'Paid Registration',
	'ACP_PAIDREG_SETTING'			=>	'Settings',
	'ACP_PAIDREG_SETTING_SAVED'		=>	'Settings have been saved succesfully!'
) );
?>