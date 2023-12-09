<?php

if (!defined('e107_INIT')) { exit; }    

$sitetheme = e107::getPref('sitetheme');

e107::themeLan('admin', $sitetheme, true);


class theme_config implements e_theme_config
{

	function __construct()
	{
 
	}


	function config()
	{
		$brandingOpts = array('sitename' => LAN_THEMEPREF_04, 'logo' => LAN_THEMEPREF_05, 'sitenamelogo' => LAN_THEMEPREF_06);
		
		$loginlinkOn = array('' => LAN_THEMEPREF_47, 'd-none' => LAN_THEMEPREF_48);
		
		
		return array(
			'login_iframe' => array('title' => LAN_THEMEPREF_03, 'type' => 'boolean', 'writeParms' => array(), 'help' => ''),
				'day_night' => array('title' => LAN_THEMEPREF_26, 'type' => 'boolean', 'writeParms' => array(), 'help' => ''),
			'news_on' => array('title' => LAN_THEMEPREF_27, 'type' => 'boolean', 'writeParms' => array(), 'help' => ''),
				'branding'          => array('title' => LAN_THEMEPREF_00, 'type' => 'dropdown', 'writeParms' => array('optArray' => $brandingOpts)),
				'loginlink'          => array('title' => LAN_THEMEPREF_49, 'type' => 'dropdown', 'writeParms' => array('optArray' => $loginlinkOn)),
			'wmessagebg' => array('title'=>LAN_THEMEPREF_28, 'type'=>'image', 'help'=>LAN_THEMEPREF_29),
			'wtextcolor'     => array('title' => LAN_THEMEPREF_40, 'type' => 'radio', 'writeParms' => array('optArray' => array('text-primary' => LAN_THEMEPREF_32, 'text-secondary' => LAN_THEMEPREF_33, 'text-success' => LAN_THEMEPREF_34, 'text-info' => LAN_THEMEPREF_35, 'text-warning' => LAN_THEMEPREF_36, 'text-danger' => LAN_THEMEPREF_37, 'text-light' => LAN_THEMEPREF_38, 'text-dark' => LAN_THEMEPREF_39)),'help' => LAN_THEMEPREF_41),
			'wtextwidth'     => array('title' => LAN_THEMEPREF_45, 'type' => 'radio', 'writeParms' => array('optArray' => array('col-lg-6' => LAN_THEMEPREF_42, 'col-lg-8' => LAN_THEMEPREF_43, 'col-lg-12' => LAN_THEMEPREF_44)),'help' => LAN_THEMEPREF_46),
				'header_type'     => array('title' => LAN_THEMEPREF_14, 'type' => 'radio', 'writeParms' => array('optArray' => array('01' => LAN_THEMEPREF_15, '02' => LAN_THEMEPREF_16, '03' => LAN_THEMEPREF_17, '04' => LAN_THEMEPREF_18, '05' => LAN_THEMEPREF_19, '06' => LAN_THEMEPREF_20, '07' => LAN_THEMEPREF_21, '08' => LAN_THEMEPREF_22)),'help' => LAN_THEMEPREF_30),
			'nav_sticky'     => array('title' => LAN_THEMEPREF_10, 'type' => 'radio', 'writeParms' => array('optArray' => array('' => LAN_THEMEPREF_12, 'sticky-top' => LAN_THEMEPREF_11, 'fixed-bottom' => LAN_THEMEPREF_13))),
				'nav_alignment'     => array('title' => LAN_THEMEPREF_01, 'type' => 'radio', 'writeParms' => array('optArray' => array('left' => LAN_THEMEPREF_07, 'center' => LAN_THEMEPREF_09, 'right' => LAN_THEMEPREF_08))),
			'footer_type'     => array('title' => LAN_THEMEPREF_25, 'type' => 'radio', 'writeParms' => array('optArray' => array('01' => LAN_THEMEPREF_15, '02' => LAN_THEMEPREF_16, '03' => LAN_THEMEPREF_17, '04' => LAN_THEMEPREF_18)),'help' => LAN_THEMEPREF_31)
		);

	}

	function help()
	{
		return null; 
	}
	
	function process()
	{
	 	return null;
	}

}

