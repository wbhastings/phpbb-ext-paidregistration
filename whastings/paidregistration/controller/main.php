<?php
/**
 * @file main.php
 * @purpose allows for dependecy injection
 * @author William Hastings
 * 
 * @package phpBB extension - Paid Registration
 * @copyright (c) 2017 William Hastings http://williamhastings.me
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 */


namespace whastings\paidregistration\controller;

class main {
	// @var \phpbb\config\config
	protected $config;
	
	// @var \phpbb\controller\helper
	protected $helper;
	
	// @var \phpbb\template\template
	protected $template;
	
	// @var \phpbb\user
	protected $user;

	/**
	* Constructor
	*
	* @param \phpbb\config\config		$config
	* @param \phpbb\controller\helper	$helper
	* @param \phpbb\template\template	$template
	* @param \phpbb\user				$user
	*/
	public function __construct ( \phpbb\config\config $config, phpbb\controller\helper $helper, phpbb\template\template $template, \phpbb\user $user ) {
		$this->config		= $config;
		$this->helper		= $helper;
		$this->template		= $template;
		$this->user			= $user;
	}
}
