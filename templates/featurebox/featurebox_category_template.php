<?php
/*
* Copyright (c) e107 Inc 2013 - e107.org, Licensed under GNU GPL (http://www.gnu.org/licenses/gpl.txt)
*
* Featurebox core category templates
*/ 

// TODO - list of all available shortcodes & schortcode parameters
$FEATUREBOX_CATEGORY_TEMPLATE = array();


// v2.x Default - Bootstrap. 

$FEATUREBOX_CATEGORY_TEMPLATE['bootstrap_carousel']['list_start'] = '
 <!-- starts carousel -->
	<div class="card">
        <div class="card-body">
		   <div id="carouselExampleFade" class="carousel slide carousel-dark slide" data-bs-ride="carousel">
			
                <div class="carousel-inner">
			
				<!-- carousel items -->
			
';

$FEATUREBOX_CATEGORY_TEMPLATE['bootstrap_carousel']['list_end'] = '
				</div>
	 				
	 				<!-- Carousel nav -->
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Vorige</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Volgende</span>
                </button>

              </div><!-- End Slides with fade transition -->
            </div>
          </div>

     

<!-- end carousel -->
';


$FEATUREBOX_CATEGORY_TEMPLATE['bootstrap_carousel']['col_start'] = '';
$FEATUREBOX_CATEGORY_TEMPLATE['bootstrap_carousel']['col_end'] = '';
$FEATUREBOX_CATEGORY_TEMPLATE['bootstrap_carousel']['item_start'] = '';
$FEATUREBOX_CATEGORY_TEMPLATE['bootstrap_carousel']['item_end'] = '';
$FEATUREBOX_CATEGORY_TEMPLATE['bootstrap_carousel']['item_separator'] = '';
$FEATUREBOX_CATEGORY_TEMPLATE['bootstrap_carousel']['item_empty'] = '';

$FEATUREBOX_CATEGORY_INFO = array(

	'bootstrap_carousel' 	=> array('title' => 'Bootstrap v2 Carousel', 		'description' => "Bootstrap's Hero slider"),

	'default' 				=> array('title' => 'Default', 					'description' => 'Flat - show by category limit')
);
