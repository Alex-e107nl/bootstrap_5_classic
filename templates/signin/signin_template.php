<?php

// Do not use constants.. use {LAN=xxx} instead.
// Template compatible with Bootstrap 5 only.

/*
<li class="nav-item">
				<a href="#glbox" class="glightbox4 nav-link px-2" data-glightbox="width: 600; height: 500;">
                                        {LAN=LAN_LOGINMENU_51}
                                    </a>
				</li>
				*/

$SIGNIN_TEMPLATE = [];


$sitetheme = e107::getPref('sitetheme');
$signuplink  = e107::pref('theme', 'signuplink');
$linkcolor  = e107::pref('theme', 'linkcolor');


$SIGNIN_WRAPPER['signin']['SIGNIN_SIGNUP_HREF'] = '<li class="nav-item '.$linkcolor.' '.$signuplink.'"><a class="nav-link px-2" href="{---}">{LAN=LAN_LOGINMENU_3}</a></li>';



if (e107::pref('theme', 'loginlink') == 0)
	{
	$SIGNIN_TEMPLATE['signin'] = '
		<ul class="navbar-nav nav">
			{SIGNIN_SIGNUP_HREF}
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle px-2 '.$linkcolor.' " data-bs-toggle="dropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{LAN=LAN_LOGINMENU_51} <strong class="caret"></strong></a>
				<div id="glbox" class="dropdown-menu dropdown-menu-end col-sm-12" style="min-width:250px; padding: 15px; padding-bottom: 0px;">
					{SIGNIN_FORM=start}
					<p>{SIGNIN_INPUT_USERNAME}</p>
					<p>{SIGNIN_INPUT_PASSWORD}</p>
					<div class="form-group"></div>
					{SIGNIN_IMAGECODE_NUMBER}
					{SIGNIN_IMAGECODE_BOX}
					<div class="checkbox my-2">		
						<label class="string optional" for="bs3-autologin"><input style="margin-right: 10px;" type="checkbox" name="autologin" id="bs3-autologin" value="1"> {LAN=LAN_LOGINMENU_6}</label>
					</div>
					<div class="d-grid gap-2" style="padding-bottom:15px">
						<input class="btn btn-primary btn-block" type="submit" name="userlogin" id="bs3-userlogin" value="{LAN=LAN_LOGINMENU_51}">			
						<a href="{SIGNIN_FPW_HREF}" class="btn btn-default btn-secondary btn-sm  btn-block">{LAN=LAN_LOGINMENU_4}</a>
						<a href="{SIGNIN_RESEND_LINK=href}" class="btn btn-default btn-secondary btn-sm  btn-block">{LAN=LAN_LOGINMENU_40}</a>
					</div>
						{SIGNIN_FORM=end}
				</div>
			</li>
		</ul>';
		
	}
else
if (e107::pref('theme', 'loginlink') == 1)
	{
	$SIGNIN_TEMPLATE['signin'] = '
		<ul class="navbar-nav nav">
			{SIGNIN_SIGNUP_HREF}
			<li class="nav-item">
				<a href="'.SITEURL.'login.php" class="nav-link px-2 '.$linkcolor.'">{LAN=LAN_LOGINMENU_51}</a>
			</li>
			
		</ul>';
		
	}
else



	$SIGNIN_TEMPLATE['signin'] = '
		<ul class="navbar-nav nav d-none">
			{SIGNIN_SIGNUP_HREF}
			<li class="nav-item">
				<a href="'.SITEURL.'login.php" class="nav-link px-2 '.$linkcolor.'">{LAN=LAN_LOGINMENU_51}</a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle px-2" data-bs-toggle="dropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{LAN=LAN_LOGINMENU_51} <strong class="caret"></strong></a>
				<div id="glbox" class="dropdown-menu dropdown-menu-end col-sm-12" style="min-width:250px; padding: 15px; padding-bottom: 0px;">
					{SIGNIN_FORM=start}
					<p>{SIGNIN_INPUT_USERNAME}</p>
					<p>{SIGNIN_INPUT_PASSWORD}</p>
					<div class="form-group"></div>
					{SIGNIN_IMAGECODE_NUMBER}
					{SIGNIN_IMAGECODE_BOX}
					<div class="checkbox my-2">		
						<label class="string optional" for="bs3-autologin"><input style="margin-right: 10px;" type="checkbox" name="autologin" id="bs3-autologin" value="1">
						{LAN=LAN_LOGINMENU_6}</label>
					</div>
					<div class="d-grid gap-2" style="padding-bottom:15px">
						<input class="btn btn-primary btn-block" type="submit" name="userlogin" id="bs3-userlogin" value="{LAN=LAN_LOGINMENU_51}">			
						<a href="{SIGNIN_FPW_HREF}" class="btn btn-default btn-secondary btn-sm  btn-block">{LAN=LAN_LOGINMENU_4}</a>
						<a href="{SIGNIN_RESEND_LINK=href}" class="btn btn-default btn-secondary btn-sm  btn-block">{LAN=LAN_LOGINMENU_40}</a>
					</div>
					{SIGNIN_FORM=end}
				</div>
			</li>
		</ul>';





$SIGNIN_WRAPPER['signout']['SIGNIN_ADMIN_HREF'] = '<li><a class="dropdown-item signin-sc admin" id="signin-sc-admin" href="{---}"><span class="fa fa-cogs"></span> {LAN=LAN_LOGINMENU_11}</a></li>';
$SIGNIN_WRAPPER['signout']['SIGNIN_PM_NAV'] = '<li class="dropdown dropdown-pm">{---}</li>';


$SIGNIN_TEMPLATE['signout'] = '

		<ul class="navbar-nav navbar-right">
			{SIGNIN_PM_NAV}
			<li class="dropdown dropdown-avatar"><a href="#" class="nav-link dropdown-toggle '.$linkcolor.'" data-bs-toggle="dropdown" data-toggle="dropdown">{USER_AVATAR: w=30&h=30&crop=1&shape=circle} {SIGNIN_USERNAME} <b class="caret"></b></a>
				<ul class="dropdown-menu dropdown-menu-end">
				<li>
					<a class="dropdown-item" href="{SIGNIN_USERSETTINGS_HREF}"><span class="fa fa-cog"></span> {LAN=LAN_SETTINGS}</a>
				</li>
				<li>
					<a class="dropdown-item" role="button" href="{SIGNIN_PROFILE_HREF}"><span class="fa fa-user"></span> {LAN=LAN_LOGINMENU_13}</a>
				</li>
			
				
				{SIGNIN_ADMIN_HREF}
				{NAVIGATION: layout=alt7&type=alt}
				<li><hr class="dropdown-divider"></li>
				<li><a class="dropdown-item" href="{SIGNIN_LOGOUT_HREF}"><span class="fa fa-power-off"></span> {LAN=LAN_LOGOUT}</a></li>
					
				</ul>
				
			</li>
		</ul>
		
		';

