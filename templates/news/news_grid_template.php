<?php
	/**
	 * e107 website system
	 *
	 * Copyright (C) 2008-2017 e107 Inc (e107.org)
	 * Released under the terms and conditions of the
	 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
	 *
	 */


	$NEWS_GRID_TEMPLATE['col-md-6']['start'] = '<div class="row news-grid-default news-menu-grid gx-3">';

	$NEWS_GRID_TEMPLATE['col-md-6']['featured'] = '<div class="row featured">
													<div class="col-sm-12">
													<div class="item col-sm-6" >
														{SETIMAGE: w=600&h=400&crop=1}
														{NEWSTHUMBNAIL=placeholder}
													</div>
													<div class="item col-sm-6">
		                                                <h3>{NEWSTITLE}</h3>
		                                                <p>{NEWSMETADIZ: limit=100}</p>
		                                                <p class="text-right text-end"><a class="btn btn-primary btn-othernews" href="{NEWSURL}">{LAN=READ_MORE}</a></p>
	                                                </div>
	                                               </div>
	                                               </div>
            							          ';

	$NEWS_GRID_TEMPLATE['col-md-6']['item'] = '<div class="item col-md-6">
												{SETIMAGE: w=400&h=400&crop=1}
												{NEWSTHUMBNAIL=placeholder}
              									<h3>{NEWS_TITLE}</h3>
              									<p>{NEWS_SUMMARY}</p>
              									<p class="text-right text-end"><a class="btn btn-primary btn-othernews" href="{NEWSURL}">{LAN=READ_MORE}</a></p>
            							   </div>';

	$NEWS_GRID_TEMPLATE['col-md-6']['end'] = '</div>';


// ------------------ col-md-4 -----------------

	$NEWS_GRID_TEMPLATE['col-md-4']['start']    = $NEWS_GRID_TEMPLATE['col-md-6']['start'];
	$NEWS_GRID_TEMPLATE['col-md-4']['featured'] = $NEWS_GRID_TEMPLATE['col-md-6']['featured'];
    $NEWS_GRID_TEMPLATE['col-md-4']['item']     = '<div class="item col-md-4">
													{SETIMAGE: w=400&h=400&crop=1}
													{NEWSTHUMBNAIL=placeholder}
	                                                <h3>{NEWS_TITLE}</h3>
	                                                <p>{NEWS_SUMMARY}</p>
	                                                <p class="text-right text-end"><a class="btn btn-primary btn-othernews" href="{NEWSURL}">{LAN=READ_MORE}</a></p>
            							        </div>';
	$NEWS_GRID_TEMPLATE['col-md-4']['end']      = $NEWS_GRID_TEMPLATE['col-md-6']['end'];



// ------------------ col-md-3 -----------------


	$NEWS_GRID_TEMPLATE['col-md-3']['start']    = $NEWS_GRID_TEMPLATE['col-md-6']['start'];
	$NEWS_GRID_TEMPLATE['col-md-3']['featured'] = $NEWS_GRID_TEMPLATE['col-md-6']['featured'];
    $NEWS_GRID_TEMPLATE['col-md-3']['item']     = '<div class="item col-md-3">
													{SETIMAGE: w=400&h=400&crop=1}
													{NEWSTHUMBNAIL=placeholder}
	                                                <h3>{NEWS_TITLE}</h3>
	                                                <p>{NEWS_SUMMARY}</p>
	                                                <p class="text-right text-end"><a class="btn btn-primary btn-othernews" href="{NEWSURL}">{LAN=READ_MORE}</a></p>
            							        </div>';
	$NEWS_GRID_TEMPLATE['col-md-3']['end']      = $NEWS_GRID_TEMPLATE['col-md-6']['end'];


//  ---------------- col-lg-4 Bootstrap 5 only ---------------

	$NEWS_GRID_TEMPLATE['col-lg-4']['start']    = $NEWS_GRID_TEMPLATE['col-md-6']['start'];
	$NEWS_GRID_TEMPLATE['col-lg-4']['featured'] = $NEWS_GRID_TEMPLATE['col-md-6']['featured'];
	$NEWS_GRID_TEMPLATE['col-lg-4']['end']      = $NEWS_GRID_TEMPLATE['col-md-6']['end'];
	$NEWS_GRID_TEMPLATE['col-lg-4']['item']     = '{SETIMAGE: w=800&crop=1}
						<div class="item col-lg-3 mb-5">
                            <div class="card h-100 shadow border-0">
                                 {NEWS_IMAGE: type=tag&class=card-img-top&placeholder=1}
                                <div class="card-body p-4">
                                    <div class="badge bg-primary bg-gradient rounded-pill mb-2">{NEWS_CATEGORY_NAME}</div>
                                    <a class="text-decoration-none link-dark stretched-link" href="{NEWS_URL}">
                                    <h5 class="card-title mb-3">{NEWS_TITLE}</h5></a>
                                    <p class="card-text mb-0">{NEWS_SUMMARY}</p>
                                </div>
                                <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                    <div class="d-flex align-items-end justify-content-between">
                                        <div class="d-flex align-items-center">
                                        	{NEWS_AUTHOR_AVATAR: class=rounded-circle me-3&w=40&h=40&crop=1&placeholder=1}
                                            <div class="small">
                                                <div class="fw-bold">{NEWS_AUTHOR}</div>
                                                <div class="text-muted">{NEWS_DATE=short}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
	';

// ------------------ media-list -----------------



	$NEWS_GRID_TEMPLATE['media-list']['start'] = ' 
	<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-2">';

	$NEWS_GRID_TEMPLATE['media-list']['featured'] = '<div class="col d-flex align-items-start">
														{SETIMAGE: w=80&h=80&crop=1}
													    <a class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em" href="{NEWS_URL}">
													    {NEWS_IMAGE: type=tag&class=media-object img-rounded&placeholder=1}
													    </a>
														<div>
															<h1 class="fw-bold mb-0 fs-4 text-body-emphasis"><a href="{NEWS_URL}">{NEWS_TITLE}</a></h1>
															<p>{NEWS_SUMMARY: limit=60}</p>
														</div>  		
													</div>
													';


	$NEWS_GRID_TEMPLATE['media-list']['item'] = ' 	<div class="col d-flex align-items-start">
														{SETIMAGE: w=80&h=80&crop=1}
													    <a class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em" href="{NEWS_URL}">
													    {NEWS_IMAGE: type=tag&class=media-object img-rounded&placeholder=1}
													    </a>
														<div>
															<h3 class="fw-bold mb-0 fs-4 text-body-emphasis"><a href="{NEWS_URL}">{NEWS_TITLE}</a></h3>
															<p>{NEWS_SUMMARY: limit=60}</p>
														</div>  		
													</div>
													';


	$NEWS_GRID_TEMPLATE['media-list']['end'] = '</div>';
	
	// ------------------ custom cards -----------------
	
	
	$NEWS_GRID_TEMPLATE['customcard']['start'] = '  <div class="album py-5"><div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">';

	$NEWS_GRID_TEMPLATE['customcard']['featured'] = '	{SETIMAGE: w=800&h=600&crop=1}
													<div class="col">
														<div class="card shadow-sm">
															{NEWSTHUMBNAIL=placeholder}
															<div class="card-body">
																<h3>{NEWSTITLE}</h3>
																<p>{NEWS_SUMMARY: limit=80}</p>
																<div class="d-flex justify-content-between align-items-center">
																	<div class="btn-group">
																		<a class="btn btn-sm btn-primary" href="{NEWSURL}">{LAN=READ_MORE}</a>
																		<div class="btn btn-sm btn-outline-secondary">{NEWSCATEGORY}</div>
               														</div>
																	<div class="btn btn-sm btn-light"> {NEWSAUTHOR}</div>
            
																</div>
															</div>
														</div>
													</div>
            							          ';

	$NEWS_GRID_TEMPLATE['customcard']['item'] = '{SETIMAGE: w=800&h=600&crop=1}
													<div class="col">
														<div class="card shadow-sm">
															{NEWSTHUMBNAIL=placeholder}
															<div class="card-body">
																<h3>{NEWSTITLE}</h3>
																<p>{NEWS_SUMMARY: limit=80}</p>
																<div class="d-flex justify-content-between align-items-center">
																	<div class="btn-group">
																		<a class="btn btn-sm btn-primary" href="{NEWSURL}">{LAN=READ_MORE}</a>
																		<div class="btn btn-sm btn-light">{NEWSCATEGORY}</div>
               														</div>
																	<div class="btn btn-sm btn-light"> {NEWSAUTHOR}</div>
            
																</div>
															</div>
														</div>
													</div>
	';
	
	
	$NEWS_GRID_TEMPLATE['customcard']['end'] = '</div></div>';
	
	
	
	$NEWS_GRID_TEMPLATE['customcard2']['start'] = '<div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">';

	$NEWS_GRID_TEMPLATE['customcard2']['featured'] = '{SETIMAGE: w=1024&h=768&crop=1}
													<div class="col customcard2b">
														<div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url({NEWS_IMAGE: type=src});">		
															<div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
																<h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold"><a class="link-light" href="{NEWS_URL}">{NEWS_TITLE}</a></h3>
																<ul class="d-flex list-unstyled mt-auto">
																	<li class="me-auto link-light">
																		{NEWS_AUTHOR_AVATAR: class=rounded-circle me-3&w=40&h=40&crop=1&placeholder=1} <div class="customcard2 btn btn-sm btn-outline-light"> {NEWSAUTHOR}</div>
																	</li>
																	<li class="d-flex align-items-center me-3">
																		<div class="customcard2 btn btn-sm btn-outline-light">{NEWSCATEGORY}</div>
																	</li>
																	<li class="d-flex align-items-center">
																		<small>{NEWS_DATE=short}</small>
																	</li>
																</ul>
															</div>
														</div>
													</div>
            							          ';

	$NEWS_GRID_TEMPLATE['customcard2']['item'] = '{SETIMAGE: w=1024&h=768&crop=1}
													<div class="col customcard2b">
														<div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url({NEWS_IMAGE: type=src});">		
															<div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
																<h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold"><a class="link-light" href="{NEWS_URL}">{NEWS_TITLE}</a></h3>
																<ul class="d-flex list-unstyled mt-auto">
																	<li class="me-auto link-light">
																		{NEWS_AUTHOR_AVATAR: class=rounded-circle me-3&w=40&h=40&crop=1&placeholder=1} <div class="customcard2 btn btn-sm btn-outline-light"> {NEWSAUTHOR}</div>
																	</li>
																	<li class="d-flex align-items-center me-3">
																		<div class="customcard2 btn btn-sm btn-outline-light">{NEWSCATEGORY}</div>
																	</li>
																	<li class="d-flex align-items-center">
																		<small>{NEWS_DATE=short}</small>
																	</li>
																</ul>
															</div>
														</div>
													</div>
	  
	  
	';
	
	
	$NEWS_GRID_TEMPLATE['customcard2']['end'] = '</div>';



