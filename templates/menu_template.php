<?php
/*
+ ----------------------------------------------------------------------------+
|     e107 website system - 
|		Theme for e107 build with Bootstrap 5.3.2. by exas.nl
+ ----------------------------------------------------------------------------+
*/





if (!defined('e107_INIT'))
{
	exit;
}

$popupimage = 	"
					<a href='{CMENUIMAGE=url}' class='glightbox' data-glightbox='title:{CMENUTITLE}'>
					<img class='img-fluid' src='{CMENUIMAGE=url}' alt='image'></a>
				";
		
	
#### Panel Template - Used by menu_class.php  for Custom Menu Content.
#### Additional control over image thumbnailing is possible via SETIMAGE e.g. {SETIMAGE: w=200&h=150&crop=1}

$MENU_TEMPLATE['default']['start'] 					= '<div class="cpage-menu {CMENUNAME}">';
$MENU_TEMPLATE['default']['body'] 					= '{CMENUBODY}';
$MENU_TEMPLATE['default']['end'] 					= '</div>';

$MENU_TEMPLATE['button']['start'] 					= '<div class="cpage-menu {CMENUNAME}">';
$MENU_TEMPLATE['button']['body'] 					= '<div>{CMENUBODY}</div>{CPAGEBUTTON}';
$MENU_TEMPLATE['button']['end'] 					= '</div>';

$MENU_TEMPLATE['buttom-image']['start'] 			= '<div class="cpage-menu {CMENUNAME}">{SETIMAGE: w=360}';
$MENU_TEMPLATE['buttom-image']['body'] 				= '<div>{CMENUIMAGE}</div>{CPAGEBUTTON}';
$MENU_TEMPLATE['buttom-image']['end'] 				= '</div>';

$MENU_TEMPLATE['image-only']['start'] 				= '<div class="cpage-menu {CMENUNAME}">{SETIMAGE: w=360}';
$MENU_TEMPLATE['image-only']['body'] 				= '{CMENUIMAGE}';
$MENU_TEMPLATE['image-only']['end'] 				= '</div>';

$MENU_TEMPLATE['image-only-fw']['start'] 				= '<div class="text-center cpage-menu {CMENUNAME}">{SETIMAGE: w=0}';
$MENU_TEMPLATE['image-only-fw']['body'] 				= '{CMENUIMAGE}';
$MENU_TEMPLATE['image-only-fw']['end'] 				= '</div>';

$MENU_TEMPLATE['textleft-imageright-fw']['start'] 		= '<div class="row m-0 g-0 fs-5 bg-success-subtle ">{SETIMAGE: w=0}';
$MENU_TEMPLATE['textleft-imageright-fw']['body'] 		= ' 

							<div class="col-12 ps-lg-3">
							<span class="col-12 col-lg-6 col-xxl-4 mb-5 mb-lg-0 ms-0 ms-lg-5 float-end">'.$popupimage.'</span>
							
							<div class="m-lg-5">
								<h2 class="mt-3 p-3">  {CMENUICON} {CMENUTITLE}</h2>
        						<div class="p-3"><p>{CMENUBODY}</p></div>
								<div class=" px-3 mb-3">{CPAGEBUTTON}</div></div>
							</div>
							
						
';
$MENU_TEMPLATE['textleft-imageright-fw']['end'] 		= '</div>';

$MENU_TEMPLATE['imageleft-textright-fw']['start'] 		= '<div class="row m-0 g-0 fs-5 bg-warning-subtle">{SETIMAGE: w=0}';
$MENU_TEMPLATE['imageleft-textright-fw']['body'] 		= ' 
							
							<div class="col-12 pe-lg-3 text-lg-end">
							<span class="col-12 col-lg-6 col-xxl-4 mb-5 mb-lg-0 me-0 me-lg-5 float-start">'.$popupimage.'</span>
							<div class="m-lg-5">
								<h2 class="mt-3 p-3">  {CMENUICON} {CMENUTITLE}</h2>
        						<div class="p-3"><p>{CMENUBODY}</p></div>
								<div class=" px-3 mb-3">{CPAGEBUTTON}</div>
								
								
								</div>
								
							</div>
';
$MENU_TEMPLATE['imageleft-textright-fw']['end'] 		= '</div>';

$MENU_TEMPLATE['textright-imageleft']['start'] 		= '<div class="cpage-menu {CMENUNAME}">{SETIMAGE: w=360}';
$MENU_TEMPLATE['textright-imageleft']['body'] 		= '{CMENUIMAGE}';
$MENU_TEMPLATE['textright-imageleft']['end'] 		= '</div>';


$MENU_TEMPLATE['image-text-button']['start'] 		= '<div class="cpage-menu {CMENUNAME}">{SETIMAGE: w=0}';
$MENU_TEMPLATE['image-text-button']['body'] 		= ' <div class="footer-logo">{CMENUIMAGE}</div>
    <div class="text">{CMENUBODY}{CPAGEBUTTON}</div>';
$MENU_TEMPLATE['image-text-button']['end'] 			= '</div>';
 