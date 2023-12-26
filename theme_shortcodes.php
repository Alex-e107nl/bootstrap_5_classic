<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2022 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * e107 Bootstrap Theme Shortcodes. 
 *
*/


/**
 *
 */
class theme_shortcodes extends e_shortcode
{
// public $override = true;
var $override = true;

	/**
	 * Special Header Shortcode for dynamic menuarea templates.
	 * @shortcode {---HEADER---}
	 * @return string
	 */
	function sc_header()
	{
		$pref = e107::pref('theme', 'header_type');
		$headerbg  = e107::pref('theme', 'headerbg');
		
		
		switch ($pref)
		{
			case '01':
				default:
				$text = ' 	<header class="p-0 '.$headerbg.' transition border-bottom {STICKYHEADER}">
								<div class="container-fluid col-12 col-xxl-8 mx-auto">
									<div class="navbar navbar-expand-lg d-flex flex-wrap justify-content-lg-start" aria-label="navbars example">
										<a href="{SITEURL}" class="d-flex align-items-left me-lg-3 text-decoration-none">
										{BOOTSTRAP_BRANDING}
										</a>

										<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbars" aria-controls="navbars" aria-expanded="false" aria-label="Toggle navigation">
										<span class="navbar-toggler-icon"></span>
										</button>
										
										<div class="collapse navbar-collapse" id="navbars">
											{BOOTSTRAP_NAV_ALIGN}
											<div class="my-auto">
												{NAVIGATION: layout=alt8&type=alt5}
											</div>
											<div class="text-end ms-2">
												{SIGNIN}
											</div>
										</div>
									</div>
								</div>
					
							</header>
							';
		
				return $text;

				break;

			case '02':
				$text = '	<header class="p-0 '.$headerbg.' transition border-bottom {STICKYHEADER}">
								<div class="container-fluid col-12 col-xxl-8 mx-auto">
									<div class="navbar navbar-expand-lg d-flex flex-wrap justify-content-lg-start" aria-label="navbars example">
										<a href="{SITEURL}" class="d-flex align-items-left me-lg-3   text-decoration-none">
										{BOOTSTRAP_BRANDING}
										</a>
										
										<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbars" aria-controls="navbars" aria-expanded="false" aria-label="Toggle navigation">
										<span class="navbar-toggler-icon"></span>
										</button>
										
										<div class="collapse navbar-collapse" id="navbars">
											{BOOTSTRAP_NAV_ALIGN}

											<div class="my-auto py-2">
												{SITESEARCH}
											</div>
											<div class="my-auto">
												{NAVIGATION: layout=alt8&type=alt5}
											</div>
											<div class="text-end ms-2">
												{SIGNIN}
											</div>
										</div>
									</div>
								</div>
							</header>	
							';
		
				return $text;				

				break;
				
			case '03':
				$text = '<nav class="py-1 '.$headerbg.' border-bottom mb-0 {STICKYHEADER}">
							<div class="container-fluid col-12 col-xxl-8 mx-auto">
								<div class="navbar navbar-expand-lg d-flex flex-wrap justify-content-lg-end" aria-label="navbars example">
								 <a href="{SITEURL}" class="d-flex align-items-center mb-0 mb-lg-0 me-lg-auto text-decoration-none d-lg-none">
									{BOOTSTRAP_BRANDING}
								</a>
									<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbars" aria-controls="navbars" aria-expanded="false" aria-label="Toggle navigation">
									<span class="navbar-toggler-icon"></span>
									</button>
										
									<div class="collapse navbar-collapse" id="navbars">	

										{BOOTSTRAP_NAV_ALIGN}
										
										<div class="my-auto">
											{NAVIGATION: layout=alt8&type=alt5}
										</div>
											
										<div class="text-end ms-2">
											{SIGNIN}
										</div>
									</div>
								</div>
							</div>
						</nav>
						<header class="py-2 mb-0 border-bottom bg-body-secondary">
							<div class="container-fluid col-lg-12 col-xxl-8 mx-auto d-flex flex-wrap justify-content-center">
								<a href="{SITEURL}" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto text-decoration-none d-none d-lg-block">
									{BOOTSTRAP_BRANDING}
								</a>
								<div class="my-auto py-2">
								{SITESEARCH}
								</div>
							</div>
						</header>
	
							';
		
				return $text;				

				break;
				
			case '04':
		
				$text = '<header class="py-2 mb-0 border-bottom ">
							<div class="container-fluid col-12 col-xxl-8 mx-auto d-flex flex-wrap justify-content-center">
								<a href="{SITEURL}" class="d-flex align-items-center mb-0 mb-lg-0 me-lg-auto text-decoration-none me-auto">
									{BOOTSTRAP_BRANDING}
								</a>
									<div class="ms-auto my-auto">
								{SITESEARCH}
								</div>
							</div>
						</header>
	
						<nav class="py-1 '.$headerbg.' border-bottom mb-0 {STICKYHEADER}">
							<div class="container-fluid col-12 col-xxl-8 mx-auto">
								<div class="navbar navbar-expand-lg d-flex flex-wrap justify-content-lg-end" aria-label="navbars example>
								  <a class="navbar-brand d-lg-none" href="#">{SITENAME}</a>
									<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbars" aria-controls="navbars" aria-expanded="false" aria-label="Toggle navigation">
									<span class="navbar-toggler-icon"></span>
									</button>
										
									<div class="collapse navbar-collapse" id="navbars">	

										{BOOTSTRAP_NAV_ALIGN}
										
										<div class="my-auto">
											{NAVIGATION: layout=alt8&type=alt5}
										</div>
										<div class="text-end ms-2">
											{SIGNIN}
										</div>
									</div>
								</div>
							</div>
						</nav>
						';
		
				return $text;
			

				break;	
				
			case '05':
				$text = '<nav class="navbar navbar-expand-lg p-1 '.$headerbg.' transition border-bottom {STICKYHEADER}" aria-label="Offcanvas navbar large">
				
							<div class="container-fluid col-12 col-xxl-8 mx-auto">
								
								<a href="{SITEURL}" class="navbar-brand">
										{BOOTSTRAP_BRANDING}
										</a>
								<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2" aria-label="Toggle navigation">
									<span class="navbar-toggler-icon"></span>
								</button>
								<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar2" aria-labelledby="offcanvasNavbar2Label">
									<div class="offcanvas-header">
										 <h5 class="offcanvas-title" id="offcanvasNavbar2Label">{SITENAME}</h5>
										<button type="button" class="btn-close btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
									</div>
									<div class="offcanvas-body">
										{BOOTSTRAP_NAV_ALIGN}
										<div class="my-auto">
											{NAVIGATION: layout=alt8&type=alt5}
										</div>
										{SIGNIN}
									</div>
								</div>
							</div>
						</nav>
	
							';
		
				return $text;				

				break;
			
			case '06':
				$text = '<nav class="navbar navbar-expand-lg p-1 '.$headerbg.' transition border-bottom {STICKYHEADER}" aria-label="Offcanvas navbar large">
							<div class="container-fluid col-12 col-xxl-8 mx-auto">
								
								<a href="{SITEURL}" class="navbar-brand">
										{BOOTSTRAP_BRANDING}
										</a>
								<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2" aria-label="Toggle navigation">
									<span class="navbar-toggler-icon"></span>
								</button>
								<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar2" aria-labelledby="offcanvasNavbar2Label">
									<div class="offcanvas-header">
										 <h5 class="offcanvas-title" id="offcanvasNavbar2Label">{SITENAME}</h5>
										<button type="button" class="btn-close btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
									</div>
									<div class="offcanvas-body">
										{BOOTSTRAP_NAV_ALIGN}
										<div class="my-auto">
											{NAVIGATION: layout=alt8&type=alt5}
										</div>
										{SIGNIN}
									</div>
								</div>
							</div>
						</nav>
	
							';
		
				return $text;				

				break;

			case '07':
		
				$text = '<div class="{STICKYHEADER}">
						<nav class="py-1 '.$headerbg.' border-bottom mb-0 {STICKYHEADER}">
							<div class="container-fluid col-12 col-xxl-8 mx-auto">
								<div class="navbar navbar-expand-lg d-flex flex-wrap justify-content-lg-end" aria-label="navbars example">
								 <a href="{SITEURL}" class="d-flex align-items-center mb-0 mb-lg-0 me-lg-auto  text-decoration-none d-lg-none">
									{BOOTSTRAP_BRANDING}
								</a>
									<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbars" aria-controls="navbars" aria-expanded="false" aria-label="Toggle navigation">
									<span class="navbar-toggler-icon"></span>
									</button>
										
									<div class="collapse navbar-collapse" id="navbars">	

										{BOOTSTRAP_NAV_ALIGN}
										<div class="my-auto">
											{NAVIGATION: layout=alt8&type=alt5}
										</div>
										<div class="text-end ms-2">
											{SIGNIN}
										</div>
									</div>
								</div>
							</div>
						</nav>
						<header class="py-2 mb-0 border-bottom bg-body">
							<div class="container-fluid col-lg-12 col-xxl-8 mx-auto d-flex flex-wrap justify-content-center">
								<a href="{SITEURL}" class="py-2 d-flex align-items-center mb-0 mb-lg-0 me-lg-auto  text-decoration-none d-none d-lg-block">
									{BOOTSTRAP_BRANDING}
								</a>
								<div class="my-auto">
								{BOOTSTRAP_ALT_ALIGN}
								</div>
							</div>
						</header>
						</div>
				
				
						';
		
				return $text;
			

				break;
				
			case '08':
		
				$text = '<div class="{STICKYHEADER}">
						<header class="py-2 mb-0 border-bottom bg-body">
							<div class="container-fluid col-12 col-xxl-8 mx-auto d-flex flex-wrap justify-content-center">
								<a href="{SITEURL}" class="d-flex align-items-center mb-0 mb-lg-0 me-lg-auto text-decoration-none me-auto">
									{BOOTSTRAP_BRANDING}
								</a>
								
								<div class="ms-auto d-block ms-2 d-none d-lg-block">
									<div class="navbar navbar-expand-lg d-flex flex-wrap justify-content-lg-end" aria-label="navbars example">
											<div class="my-auto">
												{NAVIGATION: layout=alt8&type=alt5}
											</div>
											{SIGNIN}
									</div>
								</div>
										
								<div class="d-lg-none my-auto">
									
									{BOOTSTRAP_ALT_ALIGN}
								</div>
							</div>
						</header>
	
						<nav class="py-1 '.$headerbg.' border-bottom mb-0">
							<div class="container-fluid col-12 col-xxl-8 mx-auto">
								<div class="navbar navbar-expand-lg d-flex flex-wrap justify-content-lg-end" aria-label="navbars example">
									<a class="navbar-brand d-lg-none" href="#">{SITENAME}</a>
									<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbars" aria-controls="navbars" aria-expanded="false" aria-label="Toggle navigation">
										<span class="navbar-toggler-icon"></span>
									</button>
										
									<div class="collapse navbar-collapse" id="navbars">	
										{BOOTSTRAP_NAV_ALIGN}
										<div class="my-auto d-none d-lg-block">
											{BOOTSTRAP_ALT_ALIGN}
										</div>
										<div class="my-auto d-lg-none">
											{NAVIGATION: layout=alt8&type=alt5}
										</div>
										<div class="d-lg-none">
											{SIGNIN}
										</div>
										
									</div>
								</div>
							</div>
						</nav>
						</div>
				
						';
		
				return $text;
			

				break;

		

		}
	}


	/**
	 * Special Footer Shortcode for dynamic menuarea templates.
	 * @shortcode {---FOOTER---}
	 * @return string
	 */
	function sc_footer()
	{
		$pref = e107::pref('theme', 'footer_type');

		switch ($pref)
		{
			case '01':

				$text = '<div class="col-12 col-xxl-8 mx-auto p-4 md-5">
							<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
							<div class="col-12 col-lg-2 text-center text-lg-start"> 
									{XURL_ICONS: template=footer}
								</div>
								<div class="col-12 col-lg-7 text-center text-lg-center"> 
									<span class="mb-3 ms-2 mb-md-0 text-body-secondary"><small>{SITEDISCLAIMER}</small></span>
								</div>

								<div class="col-12 col-lg-3">
									{NAVIGATION: type=footer&layout=footer&class=justify-content-center justify-content-lg-end}
								</div>
							</footer>
						</div>
				
							';
		
				return $text;

				break;

			case '02':
				$text = '<div class="col-12 col-xxl-8 mx-auto p-4 md-5">	
							<footer class="py-3 my-4">
								<ul class="nav justify-content-center border-bottom pb-3 mb-3">
									{NAVIGATION: type=footer&layout=footer&class=justify-content-end}
								</ul>
								<div class="row">
								<div class="col-12 col-lg-8 text-center text-lg-start">{SITEDISCLAIMER}</div> <div class="col-12 col-lg-4 text-center text-lg-end">  {XURL_ICONS: template=footer}</div></div>
							</footer>
						</div>
							';
		
				return $text;				

				break;
				
			case '03':
				$text = '<div class="col-12 col-xxl-8 mx-auto p-4 md-5">
							<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
								<div class="col-12 col-lg-2 text-center text-lg-start">
									<a href="{SITEURL}" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
										{SITELOGO: h=50}
									</a>
									</div>
									<div class="col-12 col-lg-8 text-center text-lg-center"> 
									<span class="mb-3 mb-md-0"><small>{SITEDISCLAIMER}</small></span>
								</div>
								<div class="col-12 col-lg-2 text-center text-lg-end">
							 	{XURL_ICONS: template=footer}
							
								</div>
							</footer>
						</div>
	
							';
		
				return $text;				

				break;

			case '04':
			default:
				$text = '<div class="col-12 col-xxl-8 mx-auto p-4 md-5">				
							<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
								<div class="col-12 col-lg-5 text-center text-lg-start"><small>{SITEDISCLAIMER}</small></p>
								</div>

								<div class="col-12 col-lg-2 text-center text-lg-center mb-3 mb-md-0 me-md-auto">
									<a href="{SITEURL}" class="text-decoration-none d-none d-lg-block">
										{BOOTSTRAP_BRANDING}
									</a>
								</div>

								<div class="col-12 col-lg-5">
									{NAVIGATION: type=footer&layout=footer&class=justify-content-center justify-content-lg-end}
								</div>
							</footer>
						</div>
						';
		
				return $text;
			

				break;
		}


	}

	/**
	 * Optional {---CAPTION---} processing.
	 * @shortcode {---CAPTION---}
	 * @return string
	 */
	function sc_caption($caption)
	{
		return $caption; 
	}

	/**
	 * Optional {---BREADCRUMB---} processing.
	 * @shortcode {---BREADCRUMB---}
	 * @return string
	 */
	 /*
	function sc_breadcrumb($array)
	{
		$route = e107::route();

		if(strpos($route,'news/') === 0)
		{
			$array[0]['text'] = 'Blog';
		}

		return e107::getForm()->breadcrumb($array, true);

	}
	*/

	/**
	 * Will only function on the news page.
	 *
	 * @example {THEME_NEWS_BANNER: type=date}
	 * @example, {THEME_NEWS_BANNER: type=image}
	 * @example {THEME_NEWS_BANNER: type=author}
	 * @param null $parm
	 * @return string|null
	 *
	 */
	function sc_theme_news_banner($parm=null)
	{
		/** @var news_shortcodes $news */
		$sc = e107::getScBatch('news');
		$news = $sc->getScVar('news_item');

		$ret = '';
		$type = varset($parm['type']);

		switch($type)
		{
			case "title":
				$ret = $sc->sc_news_title();
				break;

			case "date":
				$ret = $sc->sc_news_date();
				break;

			case "comment":
				$ret = $sc->sc_news_comment_count();
				break;

			case "author":
				$ret = $sc->sc_news_author();
				break;

			case "image":
			default:
			if(!empty($news['news_thumbnail']))
			{
				$tmp = explode(',', $news['news_thumbnail']);

				$opts = array(
					'w' => 1800,
					'h' => null,
					'crop' => false,
				);

				$ret = e107::getParser()->toImage($tmp[0], $opts);
			}
			
		}

		return $ret;


	}

	function sc_bootstrap_branding()
	{
		$pref = e107::pref('theme', 'branding');
		$linkcolor  = e107::pref('theme', 'linkcolor');

		switch ($pref)
		{
			case 'logo':

				return e107::getParser()->parseTemplate('{SITELOGO: h=80}', true);

				break;

			case 'sitenamelogo':
				return "" . e107::getParser()->parseTemplate('{SITELOGO: h=80}', true) . "<span class='".$linkcolor." fs-4'>" . SITENAME . "</span>";

				break;

			case 'sitename':
			default:

				return "<span class='".$linkcolor." fs-4'>" . SITENAME . "</span>";

				break;
		}
	}
	

	function sc_bootstrap_nav_align()
	{
		$pref = e107::pref('theme', 'nav_alignment');

		if ($pref == 'right')
		{
			return 	e107::getParser()->parseTemplate('{NAVIGATION: type=main&class=ms-auto}');
		}
		else
					if ($pref == 'center')
		{
			return 	e107::getParser()->parseTemplate('{NAVIGATION: type=main&class=mx-auto}');
		}
		else
		{
			return e107::getParser()->parseTemplate('{NAVIGATION: type=main&class=me-auto}');
		}
	}
	
	function sc_bootstrap_alt_align()
	{
		$pref = e107::pref('theme', 'nav_alignment');
		
				if ($pref == 'right')
		{
			return 	e107::getParser()->parseTemplate('{NAVIGATION: layout=main-alt&type=alt6&class=ms-auto}');
		}
		else
					if ($pref == 'center')
		{
			return 	e107::getParser()->parseTemplate('{NAVIGATION: layout=main-alt&type=alt6&class=mx-auto}');
		}
		else
		{
			return e107::getParser()->parseTemplate('{NAVIGATION: layout=main-alt&type=alt6&class=me-auto}');
		}

	}

	
	function sc_stickyheader()
	{
		$pref = e107::pref('theme', 'nav_sticky');

		if ($pref == 'sticky-top')
		{
			return 	e107::getParser()->parseTemplate('sticky-top');
		}
		else
		if ($pref == 'fixed-bottom')
		{
			return 	e107::getParser()->parseTemplate('fixed-bottom border-top');
		}
		else
		{
			return e107::getParser()->parseTemplate('');
		}
	}
	

	public function sc_sitesearch()
	{
		$text = '<form class="d-flex col-12 col-lg-auto mb-lg-0 mx-1" method="get" action="' . e_HTTP . 'search.php">
		
		<div class="input-group">
		<input type="hidden" name="r" value="0" role="search" />
		
        <input type="text" class="form-control" name="q" placeholder="' . LAN_SEARCH . '" title="' . LAN_SEARCH . '" id="q">

        <button class="btn btn-dark btn-sm " name="s"  type="submit" title="' . LAN_SEARCH . '"><i class="fas fa-magnifying-glass"></i></button>
      	</div></form>';
		
		return $text;
	}
	
	public function sc_daynight($parm = null)
	{
		$text = '';
		$display = e107::pref('theme', 'day_night');
		$display = varset($display, true);

		if ($display)
		{
			
		$text ='
			<svg xmlns="http://www.w3.org/2000/svg" class="d-none">
				<symbol id="check2" viewBox="0 0 16 16">
				<path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
				</symbol>
				<symbol id="circle-half" viewBox="0 0 16 16">
				<path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
				</symbol>
				<symbol id="moon-stars-fill" viewBox="0 0 16 16">
				<path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
				<path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
				</symbol>
				<symbol id="sun-fill" viewBox="0 0 16 16">
				<path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 	.708z"/>
				</symbol>
			</svg>
	
			<div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
				<button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center"
					id="bd-theme"
					type="button"
					aria-expanded="false"
					data-bs-toggle="dropdown"
					aria-label="Toggle theme (auto)">
					<svg class="bi my-1 theme-icon-active" width="1em" height="1em"><use href="#circle-half"></use></svg>
					<span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
				</button>
				<ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
					<li>
						<button type="button" class="dropdown-item d-flex align-items-center  active" data-bs-theme-value="light" aria-pressed="false">
							<svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em"><use href="#sun-fill"></use></svg>
							' . LAN_THEME_00 . '
							<svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
						</button>
					</li>
					<li>
						<button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
							<svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em"><use href="#moon-stars-fill"></use></svg>
							' . LAN_THEME_01 . '
							<svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
						</button>
					</li>
					<li>
						<button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="auto" aria-pressed="true">
							<svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em"><use href="#circle-half"></use></svg>
							' . LAN_THEME_02 . '
							<svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
						</button>
					</li>
				</ul>
			</div>';
		}

		return $text;
	}
	
	function sc_sitedisclaimer($copyYear = null)
	{
		$default = "Proudly powered by <a href='http://e107.org'>e107</a> which is released under the terms of the GNU GPL License.";
		$sitedisclaimer = deftrue('SITEDISCLAIMER', $default);

		$copyYear = vartrue($copyYear, '2017');
		$curYear = date('Y');
		$text = '&copy; ' . $copyYear . (($copyYear != $curYear) ? '-' . $curYear : '');
		$text .= ' ' . $sitedisclaimer;

		return e107::getParser()->toHtml($text, true, 'SUMMARY');
	}
	
/* {SIGNIN_PM_NAV} */
	function sc_signin_pm_nav($parm = null)
	{
		$linkcolor  = e107::pref('theme', 'linkcolor');
		e107::includeLan(e_PLUGIN . 'pm/languages/' . e_LANGUAGE . '.php');
		require_once(e_PLUGIN . "pm/pm_func.php");

		$pm = new pmbox_manager();

		$pm_prefs = $pm->prefs();


		if (!e107::isInstalled('pm'))
		{
			return null;
		}


		$tp = e107::getParser();

		if (!isset($pm_prefs['pm_class']) || !check_class($pm_prefs['pm_class']))
		{
			return null;
		}

		$mbox = $pm->pm_getInfo('inbox');

		if (!empty($mbox['inbox']['new']))
		{
			$count = "<span class='link-danger'>" . $mbox['inbox']['new'] . "</span>";
			$icon = $tp->toGlyph('fas fa-envelope-open-text');
		}
		else
		{
			$icon = $tp->toGlyph('fas fa-envelope');
			$count = '';
		}


		$urlInbox = e107::url('pm', 'index', '', array('query' => array('mode' => 'inbox')));
		$urlOutbox = e107::url('pm', 'index', '', array('query' => array('mode' => 'outbox')));
		$urlCompose = e107::url('pm', 'index', '', array('query' => array('mode' => 'send')));

		return '<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle px-2 '.$linkcolor.' " role="button" data-toggle="dropdown" data-bs-toggle="dropdown" data-bs-target="#pm-nav" aria-haspopup="true" aria-expanded="false">' . $icon . $count . ' <span><i class="lni lni-chevron-down"></i></span></a>
					
					<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="pm-nav">			
						<li><a class="dropdown-item" href="' . $urlInbox . '">' . LAN_PLUGIN_PM_INBOX . '</a></li>
						<li><a class="dropdown-item" href="' . $urlOutbox . '">' . LAN_PLUGIN_PM_OUTBOX . '</a></li>
						<li><a class="dropdown-item" href="' . $urlCompose . '">' . LAN_PLUGIN_PM_NEW . '</a> </li>
					</ul>
				';
		}
		
/*function sc_news_summary()
	{
		$sc = e107::getScBatch('news');
		$data = $sc->getScVar('news_item');

		return "<span class='label label-danger'>".e107::getParser()->toHTML($data['news_summary'],'BODY')."</span>";
	}*/


	function sc_news_body($parm=null)
	{
		$text = '';
		$display = e107::pref('theme', 'news_on');
		$display = varset($display, true);

		if ($display)
			{
				$tp = e107::getParser();
				e107::getBB()->setClass("news"); 
				$route = e107::route();
				$sc = e107::getScBatch('news');  
				$data = $sc->getScVar('news_item');
				e107::lan('theme');
    			$news_body = '';
 				if($parm != 'extended')  
					{
						$news_body = $tp->toHTML($data['news_body'], true, 'BODY, fromadmin', $data['news_author']);
					}
 
					if($data['news_extended'] &&  $parm !== 'body' && $route == "news/view/item" ) 
					{
					 
						if(e107::getUser()->isUser()) 
						{
							$news_body .= $tp->toHTML($data['news_extended'], true, 'BODY, fromadmin', $data['news_author']);
							$news_body .= '<div class="alert alert-success" role="alert">'.LAN_THEME_03."</div>";
						}
						
						else 
						{
			
							$COMLAN_500 = ''.LAN_THEME_04."";
							$srch = array("[","]");
							$repl = array("<a href='".e_LOGIN."'>","</a>");
							$COMLAN_500 = str_replace($srch,$repl,$COMLAN_500);
 							$COMLAN_501 = ''.LAN_THEME_05."";
							$repl = array("<a href='".e_SIGNUP."'>","</a>");
							$COMLAN_501 = str_replace($srch,$repl,$COMLAN_501);
							$news_body .= '<div class="alert alert-warning" role="alert">'.$COMLAN_500." " .$COMLAN_501."</div>";
						}
					}

				e107::getBB()->clearClass();

				return $news_body;
			}  
			
				$tp = e107::getParser();
				e107::getBB()->setClass("news");
				$route = e107::route();
				$sc = e107::getScBatch('news');  
				$data = $sc->getScVar('news_item');
				$news_body = '';
				if($parm != 'extended')
			{
				$news_body = $tp->toHTML($data['news_body'], true, 'BODY, fromadmin', $data['news_author']);
			}
 			
			if($data['news_extended'] &&  $parm !== 'body' && $route == "news/view/item" ) 
				{
					$news_body .= $tp->toHTML($data['news_extended'], true, 'BODY, fromadmin', $data['news_author']);
				}

			e107::getBB()->clearClass();

			return $news_body;
	}



	function sc_customcaption($parm=null)
	{
		$headerbg  = e107::pref('theme', 'headerbg');
		$customcapbg  = e107::pref('theme', 'customcapbg');
		$width= 1920; $height= 800; $crop = 1;
		e107::getParser()->setThumbSize($width, $height, $crop);
		$customcapbg = e107::getParser()->thumbUrl($customcapbg);
		
		$text = '';
		$display = e107::pref('theme', 'customcaption');
		$display = varset($display, true);

		if ($display)
			{
				$text ='
						<div class="captioncover py-5" style="background-image: url('.$customcapbg.'">
							<div class="col-12 col-xxl-8 mx-auto p-4 py-md-1 trans01 rounded">
								<h2 class="mt-4 mb-3 text-light">{---CAPTION---}</h2>
								<div class="'.$headerbg.' rounded-3">
								{---BREADCRUMB---}
								</div>
							</div>
						</div>
						';

						return $text;
			}  
			
				$text ='	
						
							<div class="col-12 col-xxl-8 mx-auto p-4 py-md-1">
								<h2 class="mt-4 mb-3">{---CAPTION---}</h2>
								<div class="'.$headerbg.' rounded-3">
								{---BREADCRUMB---}
								</div>
							</div>
					
						';

						return $text;
		

			
	}

	
}







