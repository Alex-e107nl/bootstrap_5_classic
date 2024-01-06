<?php
/*
+ ----------------------------------------------------------------------------+
|     e107 website system - 
|		Theme for e107 build with Bootstrap 5.3.2. by exas.nl
+ ----------------------------------------------------------------------------+
*/

if(!defined('e107_INIT'))
{
	exit();
}



	class theme implements e_theme_render
	{



        public function init()
        {

            e107::lan('theme');

            e107::meta('viewport', 'width=device-width, initial-scale=1.0'); // added to <head>
	        // e107::link('rel="preload" href="{THEME}fonts/myfont.woff2?v=2.2.0" as="font" type="font/woff2" crossorigin');  // added to <head>
            // e107::meta('apple-mobile-web-app-capable','yes');

/*          
			$login_iframe  = e107::pref('theme', 'login_iframe', false);
			if(THEME_LAYOUT === "splash" && $login_iframe)
            {
                define('e_IFRAME', '0');
            }
*/			
		//	e107::js('theme', 'js/bootstrap.bundle.min.js', 'jquery');		
			e107::js('theme', 'js/colormode.js', 'jquery');
			e107::js('theme', 'js/glightbox.min.js', 'jquery');
			e107::js('theme', 'js/main.js', 'jquery');
			
		//	e107::css('url', "https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i");
			
        }


		/**
		 * Override how THEME_STYLE is loaded. Duplicates will be automatically removed.
		 * @return void
		 */
		function css()
		{
		//	e107::css('theme', 'css/bootstrap.min.css'); // always load style.css last.
			e107::css('theme', 'style.css'); // always load style.css last.
			e107::css('theme', 	THEME_STYLE);
			e107::css('theme', 'css/glightbox.min.css');
			e107::css('theme', 'css/plyr.min.css');
			e107::css('theme', 'css/stickiestyle.css');
			
			$subactivelinkcolor  = e107::pref('theme', 'subactivelinkcolor');
			e107::css('inline', '.dropdown-menu {  --bs-dropdown-link-active-bg: var(--'.$subactivelinkcolor.')}');
		//	e107::css('inline', '#carousel-hero.carousel {   margin-bottom: 80px; }');

		}
		/**
		 * @param string $text
		 * @return string without p tags added always with bbcodes
		 * note: this solves W3C validation issue and CSS style problems
		 * use this carefully, mainly for custom menus, let decision on theme developers
		 */
		function remove_ptags($text = '') // FIXME this is a bug in e107 if this is required.
		{

			$text = str_replace(array("<!-- bbcode-html-start --><p>", "</p><!-- bbcode-html-end -->"), "", $text);

			return $text;
		}

		function tablestyle($caption, $text, $mode='', $options = array())
		{
			$bgimage  = e107::pref('theme', 'wmessagebg');
			//$bgimage = e107::getParser()->replaceConstants($bgimage);
			$width= 1920;
			$height= 800;
			$crop = 1;
			e107::getParser()->setThumbSize($width, $height, $crop);
			$bgimage = e107::getParser()->thumbUrl($bgimage);
			$wtextcolor  = e107::pref('theme', 'wtextcolor');
			$wtextwidth  = e107::pref('theme', 'wtextwidth');
			$style = varset($options['setStyle'], 'default');

			// Override style based on mode.
			switch($mode)
			{
				case 'wmessage':
				case 'wm':
					$style = 'wmessage';
					break;

				case "login_page":
				case "fpw":
				case "coppa":
				case "signup":
					$style = 'splash';
					break;

				case 'news_months_menu':
					$style = 'listgroup';
				break;
			}

			echo "\n<!-- tablestyle initial:  style=" . $style . "  mode=" . $mode . "  UniqueId=" . varset($options['uniqueId']) . " -->\n\n";

			
			if($style === 'listgroup' && empty($options['list']))
			{
				$style = 'cardmenu';
			}

			if($style === 'cardmenu' && !empty($options['list']))
			{
				$style = 'listgroup';
			}

			/* Changing card look via prefs */
			if(!e107::pref('theme', 'cardmenu_look') && $style == 'cardmenu')
			{
				$style = 'menu';
			}

			//		echo "\n<!-- tablestyle:  style=" . $style . "  mode=" . $mode . "  UniqueId=" . varset($options['uniqueId']) . " -->\n\n";

			if(deftrue('e_DEBUG'))
			{
				echo "\n<!-- \n";
				echo json_encode($options, JSON_PRETTY_PRINT);
				echo "\n-->\n\n";
			}

			switch($style)
			{

				case 'wmessage':
				    echo '	<div class="container-fluid hb-me bg-body-tertiary" style="background-image:  url('.$bgimage.')">
								<div class="row full-screen align-items-left">
									<div class="col-12 col-xxl-8 mx-auto p-4 py-md-5">
										<div class="row d-flex py-4 my-4">
											<div class="'.$wtextwidth.' p-5 trans01 align-content-lg-start '.$wtextcolor.' rounded-3">';
											if(!empty($caption))
											{
											echo '<h1 class="display-5 fw-bold">'.$caption.'</h1>';
											}

											echo '<p class="col-md-12 fs-5">'.$this->remove_ptags($text).'</p>';
											echo '</div>
										</div>	
									</div>
								</div>
							</div>
						';
	            break;
    
				case 'bare':
					echo $this->remove_ptags($text);
					break;


				case 'nocaption':
				case 'main':
					echo $text;
					break;


				case 'menu':
					echo '<div class=" mb-4">';
					if(!empty($caption))
					{
						echo '<h5>' . $caption . '</h5>';
					}
					echo $text;
					echo '</div>';
					break;


				case 'cardmenu':
					echo '<div class="card mb-3"><div class="card-body">';
					if(!empty($caption))
					{
						echo '<h5 class="title">' . $caption . '</h5>';
					}
					echo '<p class="card-text">';
					echo $text;
					echo '
						</div></div>';
					break;


				case 'listgroup': 
					echo '<div class="card mb-3"><div class="card-body">';
					if(!empty($caption))
					{
						echo '<h5 class="title">' . $caption . '</h5>';
					}
					echo $text;

					if(!empty($options['footer'])) // XXX @see news-months menu.
			        {
			            echo '<div class="card-footer">
		                      '.$options['footer'].'
		                    </div>';
			        }


					echo '</div></div>';
					break;
          
				case 'splash':
					echo '<div class="container  justify-content-center text-left my-5" id="'.$mode.'">
	                 <div class="row align-items-center">
	                 <div class="card card-signin col-md-8 offset-md-3 " id="login-template"><div class="card-body">';

					if(!empty($caption))
					{
						echo '<h5 class="card-title text-center">' . $caption . '</h5>';
					}

					echo $text;

					if(!empty($options['footer'])) // XXX @see news-months menu.
					{
						echo '<div class="card-footer">
  		                   '.$options['footer'].'
  		                   </div>';
					}

					echo '</div></div>
						</div></div>';

  					break;                


					default:

					// default style
					// only if this always work, play with different styles

					if(!empty($caption))
					{
						echo '<h4>' . $caption . '</h4>';
					}
					echo $text;

					return;
			}

		}

	}
