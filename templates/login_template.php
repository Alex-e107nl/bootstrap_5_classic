<?php
// $Id$

if (!defined('e107_INIT')) { exit; }

	e107::lan('theme');
	e107::js("footer-inline", 	" const lightbox = GLightbox( {closeButton: false, closeOnOutsideClick: false}); 
									window.addEventListener('load', () => lightbox.open(), { once: true }); 
							"); 
 
// Starter for v2. - Bootstrap 
$LOGIN_TEMPLATE['page']['header'] = "

<div id='inline-popup' style='display: none'>
	<div id='login-template'>
		<div class='center'>
			{LOGO: login}
		
		</div>";

$LOGIN_TEMPLATE['page']['body'] = '
		{LOGIN_TABLE_LOGINMESSAGE}
        <h2 class="form-signin-heading">{LAN=LOGIN_4}</h2>';

	if (e107::pref('core', 'password_CHAP') == 2)
	{
		$LOGIN_TEMPLATE['page']['body'] .= "
    	<div style='text-align: center' id='nologinmenuchap'>"."Javascript must be enabled in your browser if you wish to log into this site"."
		</div>
		
    	<span style='display:none' id='loginmenuchap'>";
		
	}
	else
	{
	  $LOGIN_TEMPLATE['page']['body'] .= "<span>";
	}

$LOGIN_WRAPPER['page']['LOGIN_TABLE_USERNAME'] = "<div class='form-group'>{---}</div>";
$LOGIN_WRAPPER['page']['LOGIN_TABLE_PASSWORD'] = "<div class='form-group'>{---}</div>";
$LOGIN_WRAPPER['page']['LOGIN_TABLE_SECIMG_SECIMG'] = "<div class='form-group'>{---}</div>";
$LOGIN_WRAPPER['page']['LOGIN_TABLE_SECIMG_TEXTBOC'] = "<div class='form-group'>{---}</div>";
$LOGIN_WRAPPER['page']['LOGIN_TABLE_REMEMBERME'] = "<div class='form-group checkbox'>{---}</div>";
$LOGIN_WRAPPER['page']['LOGIN_TABLE_SUBMIT'] = "{---}";
$LOGIN_WRAPPER['page']['LOGIN_TABLE_FOOTER_USERREG'] = "<div class='form-group'>{---}</div>";
$LOGIN_WRAPPER['page']['LOGIN_TABLE_LOGINMESSAGE'] = "<div class='alert alert-danger'>{---}</div>";


// $LOGIN_WRAPPER['page']['LOGIN_TABLE_FPW_LINK'] = "<div class='form-group'>{---}</div>";

$LOGIN_TEMPLATE['page']['body'] .= '
        {LOGIN_TABLE_USERNAME}<br />
        {LOGIN_TABLE_PASSWORD}<br />
        {SOCIAL_LOGIN: size=3x}
		{LOGIN_TABLE_SECIMG_SECIMG} {LOGIN_TABLE_SECIMG_TEXTBOC}
        {LOGIN_TABLE_REMEMBERME} <br />
		
		<div class="form-group"> {LOGIN_TABLE_SUBMIT=large}
			<a class="btn btn-primary btn-large btn-lg button float-end" href="'.SITEURL.'" class="nav-link px-2">'.LAN_THEME_06.'</a>       
         </div>
			<a href="#inline-popup" class="glightbox" data-glightbox="width: 600; height: auto;"  style="display: none">'.LAN_LOGIN_9.'</a>		
		';

$LOGIN_TEMPLATE['page']['footer'] =  "
		<div class='login-page-footer'>
		<button type='button' class='btn btn-bd-primary py-2 btn-floating animated fadeIn animate__delay-2s' id='btn-back-to-top'><i class='fas fa-arrow-up'></i></button>
		</div>";
	
// <div class='login-page-signup-link'><p>{LOGIN_TABLE_SIGNUP_LINK}</p></div>
	//			<div class='login-page-fpw-link'><p>{LOGIN_TABLE_FPW_LINK}</p></div>


