<?php
	/**
	 * e107 website system
	 *
	 * Copyright (C) 2008-2017 e107 Inc (e107.org)
	 * Released under the terms and conditions of the
	 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
	 *
	 */




$NEWS_VIEW_INFO = array(

	'default' 	=> array('title' => LAN_DEFAULT, 							'description' => 'unused'),
	'videos' 	=> array('title' => "Videos (experimental)", 				'description' => 'unused'),
);

$popupimage1 = 	"
					<a href='{NEWS_IMAGE: item=1&type=src&class=img-rounded}' class='glightbox' data-gallery='{NEWS_TITLE}' data-glightbox='title:{NEWSDATE=short}&nbsp;|&nbsp;{NEWS_TITLE}&nbsp;|&nbsp;{NEWS_SUMMARY}'>
					<img class='img-fluid' src='{NEWS_IMAGE: item=1&type=src}' alt='image'></a>
				";
$popupimage2 = 	"
					<a href='{NEWS_IMAGE: item=2&type=src}' class='glightbox' data-gallery='{NEWS_TITLE}' data-glightbox='title:{NEWSDATE=short}&nbsp;|&nbsp;{NEWS_TITLE}&nbsp;|&nbsp;{NEWS_SUMMARY}'>
					<img class='img-fluid' src='{NEWS_IMAGE: item=2&type=src}' alt='image'></a>
				";
$popupimage3 = 	"
					<a href='{NEWS_IMAGE: item=3&type=src}' class='glightbox' data-gallery='{NEWS_TITLE}' data-glightbox='title:{NEWSDATE=short}&nbsp;|&nbsp;{NEWS_TITLE}&nbsp;|&nbsp;{NEWS_SUMMARY}'>
					<img class='img-fluid' src='{NEWS_IMAGE: item=3&type=src}' alt='image'></a>
				";
$popupimage4 = 	"
					<a href='{NEWS_IMAGE: item=4&type=src}' class='glightbox' data-gallery='{NEWS_TITLE}' data-glightbox='title:{NEWSDATE=short}&nbsp;|&nbsp;{NEWS_TITLE}&nbsp;|&nbsp;{NEWS_SUMMARY}'>
					<img class='img-fluid' src='{NEWS_IMAGE: item=4&type=src}' alt='image'></a>
				";
$popupimage5 = 	"
					<a href='{NEWS_IMAGE: item=5&type=src}' class='glightbox' data-gallery='{NEWS_TITLE}' data-glightbox='title:{NEWSDATE=short}&nbsp;|&nbsp;{NEWS_TITLE}&nbsp;|&nbsp;{NEWS_SUMMARY}'>
					<img class='img-fluid' src='{NEWS_IMAGE: item=5&type=src}' alt='image'></a>
				";
				
// Default

$NEWS_VIEW_WRAPPER['default']['item']['NEWS_IMAGE'] = '{---}';
$NEWS_VIEW_WRAPPER['default']['item']['NEWSRELATED'] = '<hr />{---}<hr />';

$NEWS_VIEW_TEMPLATE['default']['caption'] = '{NEWS_TITLE}'; // null; // add a value to user tablerender()
$NEWS_VIEW_TEMPLATE['default']['item'] = ' {SETIMAGE: w=0}

	

<div class="col-12 ">		
	<div class="row row-cols-2 g-2 pb-2  px-1 mx-1 mb-1 border-bottom">	
		<div class="col d-flex align-items-start justify-content-start"><small>&nbsp;{GLYPH=user} &nbsp;{NEWSAUTHOR}&nbsp;&nbsp;{GLYPH=clock}&nbsp;{NEWSDATE=short}</small></div>
		<div class="col d-flex align-items-end justify-content-end"><small>{GLYPH=tags}&nbsp;{NEWSTAGS} &nbsp;&nbsp;{GLYPH=folder-open}&nbsp;{NEWSCATEGORY}&nbsp;</small></div>
	</div	

<hr>
</div>
<div class="row py-2">	

<div class="col-12">
	<span class="col-12 col-lg-6 float-start me-4 mb-4">
		{NEWS_IMAGE: item=1&class=glightbox rounded img-fluid}
		{NEWS_VIDEO: item=1&class=glightbox rounded img-fluid}
	</span>
	

		<p class="fs-3 me-2">{NEWS_SUMMARY}</p>
		<div class="card-text mb-auto me-2">{NEWS_BODY=body}</div>
	</div>
</div>	

<div class="col-12">	
	<div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 row-cols-lg-4 g-4">	
	
		<div class="col d-flex align-items-start">{NEWS_IMAGE: item=2&class=glightbox rounded img-fluid my-lg-4}</div>
		<div class="col d-flex align-items-start">{NEWS_IMAGE: item=3&class=glightbox rounded img-fluid my-lg-4}</div>
		<div class="col d-flex align-items-start">{NEWS_IMAGE: item=4&class=glightbox rounded img-fluid my-lg-4}</div>
		<div class="col d-flex align-items-start">{NEWS_IMAGE: item=5&class=glightbox rounded img-fluid my-lg-4}</div>
	</div	
	<div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 row-cols-lg-4 g-4 py-2">	
		<div class="col d-flex align-items-start">{NEWS_VIDEO: item=2&class=glightbox rounded img-fluid my-4}</div>
		<div class="col d-flex align-items-start">{NEWS_VIDEO: item=3&class=glightbox rounded img-fluid my-4}</div>
		<div class="col d-flex align-items-start">{NEWS_VIDEO: item=4&class=glightbox rounded img-fluid my-4}</div>
		<div class="col d-flex align-items-start">{NEWS_VIDEO: item=5&class=glightbox rounded img-fluid my-4}</div>
	</div	
</div	
<div class="col-12">	
	<div class="row">
		<div class="col-12">		
			<div class="card-text mb-auto">
				{NEWS_BODY=extended}
				{REFERENCE_NEWS}
			</div>	
		</div>
	 </div>	
</div>	 
<div class="col-12">
	<div class="row row-cols-2 row-cols-sm-4 row-cols-md-4 row-cols-lg-4 g-4 py-2">	
		<div class="col d-flex align-items-start justify-content-start">
			<div class="options hidden-print ">
				<div class="btn-group">{NEWSCOMMENTLINK: glyph=comments}{PRINTICON}{ADMINOPTIONS}{SOCIALSHARE}</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-12">
			{NEWSRELATED}

			<ul class="pagination justify-content-between my-5 news-view-pagination text-secondary">
				<li class="page-item col-md-4">{NEWS_NAV_PREVIOUS}</li>
				<li class="page-item col-md-4 text-center">{NEWS_NAV_CURRENT}</li>
				<li class="page-item col-md-4 text-right text-end">{NEWS_NAV_NEXT}</li>
			</ul>
		</div>
	</div>
</div>
';


/*
 * 	<hr />
	<h3>About the Author</h3>
	<div class="media">
			<div class="media-left">{SETIMAGE: w=80&h=80&crop=1}{NEWS_AUTHOR_AVATAR: shape=circle}</div>
			<div class="media-body">
				<h4>{NEWS_AUTHOR}</h4>
					{NEWS_AUTHOR_SIGNATURE}
					<a class="btn btn-xs btn-primary" href="{NEWS_AUTHOR_ITEMS_URL}">My Articles</a>
			</div>
	</div>
 */


// @todo add more templates. eg. 'videos' , 'slideshow images', 'full width image'  - help and ideas always appreciated.


// Videos
 $NEWS_VIEW_TEMPLATE['videos']['item'] = '<div class="view-item"><div class="alert alert-warning">Empty news_view_template.php (videos) - have ideas? let us know.</div></div>';


// Navigation/Pagination
$NEWS_VIEW_TEMPLATE['nav']['previous'] = '<a rel="prev" href="{NEWS_URL}">{GLYPH=fa-chevron-left}<span class="mx-1">{NEWS_TITLE}</span></a>';
$NEWS_VIEW_TEMPLATE['nav']['current'] = '<a class="text-center" href="{NEWS_NAV_URL}">{LAN=BACK}</a>';
$NEWS_VIEW_TEMPLATE['nav']['next'] = '<a rel="next" class="text-right" href="{NEWS_URL}"><span class="mx-1">{NEWS_TITLE}</span>{GLYPH=fa-chevron-right}</a> ';
