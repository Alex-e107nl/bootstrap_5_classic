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
		
		$signuplinkOn = array('' => LAN_THEMEPREF_47, 'd-none' => LAN_THEMEPREF_48);
		$loginlink = array('0' => LAN_THEMEPREF_55, '1' => LAN_THEMEPREF_56, '2' => LAN_THEMEPREF_57);
		
		
		// 'login_iframe' => array('title' => LAN_THEMEPREF_03, 'type' => 'boolean', 'writeParms' => array(), 'help' => ''),
		
		return array(
						
			'header_type'     => array('title' => LAN_THEMEPREF_14, 'type' => 'radio', 'writeParms' => array('optArray' => array('01' => LAN_THEMEPREF_15, '02' => LAN_THEMEPREF_16, '03' => LAN_THEMEPREF_17, '04' => LAN_THEMEPREF_18, '05' => LAN_THEMEPREF_19, '06' => LAN_THEMEPREF_20, '07' => LAN_THEMEPREF_21, '08' => LAN_THEMEPREF_22)),'help' => LAN_THEMEPREF_30),
			
			'headerbg'     => array('title' => LAN_THEMEPREF_76, 'type' => 'radio', 'writeParms' => array('optArray' => array('bg-primary text-white' => LAN_THEMEPREF_32, 'bg-body-secondary text-white' => LAN_THEMEPREF_33, 'bg-body-tertiary' => LAN_THEMEPREF_59,'bg-success text-white' => LAN_THEMEPREF_34, 'bg-info text-dark' => LAN_THEMEPREF_35, 'bg-warning text-white' => LAN_THEMEPREF_36, 'bg-danger text-white' => LAN_THEMEPREF_37, 'bg-light' => LAN_THEMEPREF_38, 'bg-dark' => LAN_THEMEPREF_39, 'bg-transparent' => LAN_THEMEPREF_75, 'bg-primary-subtle text-emphasis-primary' => LAN_THEMEPREF_60, 'bg-secondary-subtle text-emphasis-secondary' => LAN_THEMEPREF_61, 'bg-success-subtle text-emphasis-success' => LAN_THEMEPREF_62, 'bg-info-subtle text-emphasis-info' => LAN_THEMEPREF_63, 'bg-warning-subtle text-emphasis-warning' => LAN_THEMEPREF_64, 'bg-danger-subtle text-emphasis-danger' => LAN_THEMEPREF_65, 'bg-light-subtle text-emphasis-light' => LAN_THEMEPREF_66, 'bg-dark-subtle text-emphasis-dark' => LAN_THEMEPREF_68)),'help' => LAN_THEMEPREF_77),
			
			'branding'          => array('title' => LAN_THEMEPREF_00, 'type' => 'dropdown', 'writeParms' => array('optArray' => $brandingOpts)),
			
			'nav_sticky'     => array('title' => LAN_THEMEPREF_10, 'type' => 'radio', 'writeParms' => array('optArray' => array('' => LAN_THEMEPREF_12, 'sticky-top' => LAN_THEMEPREF_11, 'fixed-bottom' => LAN_THEMEPREF_13))),
			
			'nav_alignment'     => array('title' => LAN_THEMEPREF_01, 'type' => 'radio', 'writeParms' => array('optArray' => array('left' => LAN_THEMEPREF_07, 'center' => LAN_THEMEPREF_09, 'right' => LAN_THEMEPREF_08))),
			
			'linkcolor'     => array('title' => LAN_THEMEPREF_78, 'type' => 'radio', 'writeParms' => array('optArray' => array('link-primary' => LAN_THEMEPREF_32, 'link-secondary' => LAN_THEMEPREF_33, 'link-body-emphasis' => LAN_THEMEPREF_59,'link-success' => LAN_THEMEPREF_34, 'link-info' => LAN_THEMEPREF_35, 'link-warning' => LAN_THEMEPREF_36, 'link-danger' => LAN_THEMEPREF_37, 'link-light' => LAN_THEMEPREF_38, 'link-dark' => LAN_THEMEPREF_39)),'help' => LAN_THEMEPREF_79),
				
			'alt5color'     => array('title' => LAN_THEMEPREF_50, 'type' => 'radio', 'writeParms' => array('optArray' => array('btn-primary' => LAN_THEMEPREF_32, 'btn-secondary' => LAN_THEMEPREF_33, 'btn-tertiary' => LAN_THEMEPREF_59,'btn-success' => LAN_THEMEPREF_34, 'btn-info' => LAN_THEMEPREF_35, 'btn-warning' => LAN_THEMEPREF_36, 'btn-danger' => LAN_THEMEPREF_37, 'btn-light' => LAN_THEMEPREF_38, 'btn-dark' => LAN_THEMEPREF_39)),'help' => LAN_THEMEPREF_51),
			
			'signuplink'          => array('title' => LAN_THEMEPREF_49, 'type' => 'dropdown', 'writeParms' => array('optArray' => $signuplinkOn)),
			
			'loginlink'          => array('title' => LAN_THEMEPREF_58, 'type' => 'dropdown', 'writeParms' => array('optArray' => $loginlink)),
			
			'loginmodal' => array('title' => LAN_THEMEPREF_52, 'type' => 'boolean', 'writeParms' => array(), 'help' => ''),
			
			'wmessagebg' => array('title'=>LAN_THEMEPREF_28, 'type'=>'image', 'help'=>LAN_THEMEPREF_29),
			
			'wtextcolor'     => array('title' => LAN_THEMEPREF_40, 'type' => 'radio', 'writeParms' => array('optArray' => array('text-primary' => LAN_THEMEPREF_32, 'text-secondary' => LAN_THEMEPREF_33, 'text-success' => LAN_THEMEPREF_34, 'text-info' => LAN_THEMEPREF_35, 'text-warning' => LAN_THEMEPREF_36, 'text-danger' => LAN_THEMEPREF_37, 'text-light' => LAN_THEMEPREF_38, 'text-dark' => LAN_THEMEPREF_39)),'help' => LAN_THEMEPREF_41),
				
			'wtextwidth'     => array('title' => LAN_THEMEPREF_45, 'type' => 'radio', 'writeParms' => array('optArray' => array('col-lg-6' => LAN_THEMEPREF_42, 'col-lg-8' => LAN_THEMEPREF_43, 'col-lg-12' => LAN_THEMEPREF_44)),'help' => LAN_THEMEPREF_46),
			
			'customcaption' => array('title' => LAN_THEMEPREF_80, 'type' => 'boolean', 'writeParms' => array(), 'help' => ''),
			
			'customcapbg' => array('title'=>LAN_THEMEPREF_81, 'type'=>'image', 'help'=>LAN_THEMEPREF_82),
			
			'news_on' => array('title' => LAN_THEMEPREF_27, 'type' => 'boolean', 'writeParms' => array(), 'help' => ''),
			
			'postitcomments' => array('title' => LAN_THEMEPREF_53, 'type' => 'boolean', 'writeParms' => array(), 'help' => LAN_THEMEPREF_54),
			
			'day_night' => array('title' => LAN_THEMEPREF_26, 'type' => 'boolean', 'writeParms' => array(), 'help' => ''),
			
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

