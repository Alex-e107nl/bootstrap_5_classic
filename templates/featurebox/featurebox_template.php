<?php
/*
* Copyright (c) e107 Inc 2009 - e107.org, Licensed under GNU GPL (http://www.gnu.org/licenses/gpl.txt)
* $Id$
*
* Featurebox core item templates
*/ 

global $sc_style;


// e107 v2.x Defaults. 

$FEATUREBOX_TEMPLATE['bootstrap_carousel_default'] = '{SETIMAGE: w=2500&h=500&crop=1}

  <div class="carousel-item {FEATUREBOX_ACTIVE}" data-bs-interval="10000">
                    {FEATUREBOX_IMAGE}
                    <div class="carousel-caption d-none d-md-block">
                      <h5>{FEATUREBOX_TITLE}</h5>
                      <p>{FEATUREBOX_TEXT}</p>
                    </div>
                  </div>
		';


$FEATUREBOX_TEMPLATE['bootstrap_carousel_left'] = ' {SETIMAGE: h=800}
    <div class="carousel-item {FEATUREBOX_ACTIVE}" data-bs-interval="10000">
		<div class="row">
			<div class="col-md-3 mb-0">
				{FEATUREBOX_IMAGE=placeholder}
            </div>
            <div class="col-md-8 mb-0">
                <h3>{FEATUREBOX_TITLE}</h3>
                <p>{FEATUREBOX_TEXT}</p>
										
				<p>{FEATUREBOX_BUTTON}</p>
										
            </div>
        </div>
                         
    </div>
   
';

$FEATUREBOX_TEMPLATE['bootstrap_carousel_right'] = '  {SETIMAGE: w=800&h=400&crop=1}
 							   <div class="carousel-item {FEATUREBOX_ACTIVE} data-bs-interval="10000"">
		<div class="row">
			
            <div class="col-md-8 mb-3">
                <h1>{FEATUREBOX_TITLE}</h1>
                <p>{FEATUREBOX_TEXT}</p>
										
				<p>{FEATUREBOX_BUTTON}</p>
										
            </div>
			<div class="col-md-4 mb-3">
				{FEATUREBOX_IMAGE=placeholder}
            </div>
        </div>
                         
    </div>
';


$FEATUREBOX_TEMPLATE['bootstrap_carousel_image'] = '{SETIMAGE: w=2500&h=500&crop=1}


<div class="carousel-item active">
                  {FEATUREBOX_IMAGE= class="d-block w-100"}
                  </div>
				  
									
';


$FEATUREBOX_INFO = array(
	
	'bootstrap_carousel_default' 	=> array('title' => 'Bootstrap', 							'description' => 'Title and Description'),
	'bootstrap_carousel_image' 		=> array('title' => 'Bootstrap Carousel (Image-Only)', 		'description' => 'Image Only'),
	'bootstrap_carousel_left' 		=> array('title' => 'Bootstrap Carousel (Image-left)', 		'description' => 'Image aligned left with title and text on the right'),
	'bootstrap_carousel_right' 		=> array('title' => 'Bootstrap Carousel (Image-right)', 	'description' => 'Image aligned right with title and text on the left'),
	
);
