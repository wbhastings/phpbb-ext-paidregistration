<?php

namespace whastings\paidregistration\controller;

class main
{
	private $config
	private $helper
	private $template
	private $user

	public function __construct(\phpbb\config\config $config, phpbb\controller\helper $helper, phpbb\template\template $template, \phpbb\user $user)
	{
		$this->config		= $config;
		$this->helper		= $helper;
		$this->template		= $template;
		$this->user		= $user;
	}
}
