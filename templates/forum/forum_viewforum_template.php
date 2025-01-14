<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2013 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 */

if (!defined('e107_INIT')) { exit; }
 
$FORUM_CRUMB['sitename']['value'] = "<a class='forumlink' href='{SITENAME_HREF}'>{SITENAME}</a>";
$FORUM_CRUMB['sitename']['sep'] = " :: ";

$FORUM_CRUMB['forums']['value'] = "<a class='forumlink' href='{FORUMS_HREF}'>{FORUMS_TITLE}</a>";
$FORUM_CRUMB['forums']['sep'] = " :: ";

$FORUM_CRUMB['parent']['value'] = "<a class='forumlink' href='{PARENT_HREF}'>{PARENT_TITLE}</a>";
$FORUM_CRUMB['parent']['sep'] = " :: ";

$FORUM_CRUMB['subparent']['value'] = "<a class='forumlink' href='{SUBPARENT_HREF}'>{SUBPARENT_TITLE}</a>";
$FORUM_CRUMB['subparent']['sep'] = " :: ";

$FORUM_CRUMB['forum']['value'] = "{FORUM_TITLE}";



// New in v2.x - requires a bootstrap theme be loaded.  

//TODO Find a good place to put a {SEARCH} dropdown.

$FORUM_VIEWFORUM_TEMPLATE['caption'] 				= "";
$FORUM_VIEWFORUM_TEMPLATE['start'] 				= "<div id='forum-viewforum'>";
$FORUM_VIEWFORUM_TEMPLATE['header'] 			= "<div class=' row-fluid'><div>{BREADCRUMB}</div></div>
													<div class='row row-fluid'>
													<div class='col-md-9 span9 pull-left float-left float-start'><h3>{FORUMIMAGE:h=60}{FORUMTITLE}</h3></div>
													<div class='col-md-3 span3 pull-right float-right float-end right'>{NEWTHREADBUTTONX}</div></div>
													<table class='table table-hover table-striped table-bordered'>
													<colgroup>
													<col style='width:3%' />
													<col />
													<col style='width:8%' />
													<col class='hidden-xs' style='width:8%' />
													<col class='hidden-xs' style='width:20%' />
													</colgroup>
												
													{SUBFORUMS}";


$FORUM_VIEWFORUM_TEMPLATE['item'] 				= "<tr>
												    <td>{ICON}</td>
												    <td>
												        <div class='row'>
												            <div class='col-xs-12 col-md-9'>
												            {THREADNAME}
												            <div><small>{LAN=FORUM_1004}: {POSTER} {THREADTIMELAPSE} &nbsp;</small></div>
												            </div><div class='col-xs-12 col-md-3 text-right'> {PAGESX}</div>
												        </div>
												    </td>
												    <td class='text-center'>{REPLIESX}</td><td class='hidden-xs text-center'>{VIEWSX}</td>
												    <td class='hidden-xs'><small>{LASTPOSTUSER} {LASTPOSTDATE} </small><div class='span2 right float-right pull-right float-end'>{ADMINOPTIONS}</div></td>
												</tr>\n";


$FORUM_VIEWFORUM_TEMPLATE['item-sticky'] 		= $FORUM_VIEWFORUM_TEMPLATE['item'] ; // "<tr><td>{THREADNAME}</td></tr>\n";
$FORUM_VIEWFORUM_TEMPLATE['item-announce'] 		= $FORUM_VIEWFORUM_TEMPLATE['item'] ; // "<tr><td>{THREADNAME}</td></tr>\n";


$FORUM_VIEWFORUM_TEMPLATE['sub-header']			= "<tr>
													<th colspan='2'>{LAN=FORUM_1002}</th>
													<th class='text-center'>{LAN=FORUM_0003}</th>
													<th class='hidden-xs text-center'>{LAN=FORUM_0002}</th>
													<th class='hidden-xs'>{LAN=FORUM_0004}</th>
												</tr>";

$FORUM_VIEWFORUM_TEMPLATE['sub-item']			= "<tr><td>{NEWFLAG}</td>
												<td><div>{SUB_FORUMIMAGE:h=50}{SUB_FORUMTITLE}</div><small>{SUB_DESCRIPTION}</small></td>
												<td class='text-center'>{SUB_REPLIESX}</td>
												<td class='hidden-xs text-center'>{SUB_THREADSX}</td>
												<td class='hidden-xs'><small>{SUB_LASTPOSTUSER} {SUB_LASTPOSTDATE}</small></td>
												</tr>\n";


$FORUM_VIEWFORUM_TEMPLATE['sub-footer']			= "";		

/* Examples top divider with shortcodes - working
$FORUM_VIEWFORUM_TEMPLATE['divider-important']	= "<tr><th colspan='2'>{LAN=FORUM_1006} {FORUMTITLE}</th><th class='text-center'>{LAN=FORUM_0003}</th><th class='hidden-xs text-center'>{LAN=FORUM_1005}</th><th class='hidden-xs'>{LAN=FORUM_0004}</th></tr>";
$FORUM_VIEWFORUM_TEMPLATE['divider-normal']		= "<tr><th colspan='2'>{LAN=FORUM_1007} {FORUMTITLE}</th><th class='text-center' >{LAN=FORUM_0003}</th><th class='hidden-xs text-center'>{LAN=FORUM_1005}</th><th class='hidden-xs'>{LAN=FORUM_0004}</th></tr>";
*/
$FORUM_VIEWFORUM_TEMPLATE['divider-important']	= "<tr><th colspan='2'>{LAN=FORUM_1006}</th><th class='text-center'>{LAN=FORUM_0003}</th><th class='hidden-xs text-center'>{LAN=FORUM_1005}</th><th class='hidden-xs'>{LAN=FORUM_0004}</th></tr>";
$FORUM_VIEWFORUM_TEMPLATE['divider-normal']		= "<tr><th colspan='2'>{LAN=FORUM_1007}</th><th class='text-center' >{LAN=FORUM_0003}</th><th class='hidden-xs text-center'>{LAN=FORUM_1005}</th><th class='hidden-xs'>{LAN=FORUM_0004}</th></tr>";

$SC_WRAPPER['VIEWABLE_BY'] = "<div class='panel panel-default' style='margin-top:10px'><div class='panel-heading'>{LAN=FORUM_8012}</div><div class='panel-body'>{---}</div></div>";

$FORUM_VIEWFORUM_TEMPLATE['footer'] 				= "</table>
												<div class='row d-flex justify-content-between'>

												<div class='col-3'>{THREADPAGES}</div><div class='col-md-3 span3 pull-right float-right float-end right'>{NEWTHREADBUTTONX}</div>

												</div>

												<div class='mb-4'>
													<div class='panel panel-default' style='margin-top:50px'>
													<div class='panel-heading'>{LAN=FORUM_8011}</div>
													<div class='panel-body'>
													{ICONKEY}
													</div>
													</div>
												</div>
												<div class='forum-perms'>{PERMS}</div>

												{VIEWABLE_BY}

												";
$FORUM_VIEWFORUM_TEMPLATE['end'] 					= "</div>\n<!--- END --> \n";

// define {ICONKEY}
$FORUM_VIEWFORUM_TEMPLATE['iconkey'] 			= "
												<div class='row' >
													<div class='col-sm-3 col-xs-6'>{ICON: type=new} {LAN=FORUM_0039}</div>
													<div class='col-sm-3 col-xs-6'>{ICON: type=nonew} {LAN=FORUM_0040}</div>
													<div class='col-sm-3 col-xs-6'>{ICON: type=sticky} {LAN=FORUM_1011}</div>
													<div class='col-sm-3 col-xs-6'>{ICON: type=announce} {LAN=FORUM_1013}</div>
												</div>

												<div class='row' >
													<div class='col-sm-3 col-xs-6'>{ICON: type=new_popular} {LAN=FORUM_0039} {LAN=FORUM_1010}</div>
													<div class='col-sm-3 col-xs-6'>{ICON: type=nonew_popular} {LAN=FORUM_0040} {LAN=FORUM_1010}</div>
													<div class='col-sm-3 col-xs-6'>{ICON: type=noreplies} {LAN=FORUM_1021}</div>
													<div class='col-sm-3 col-xs-6'>{ICON: type=closed} {LAN=FORUM_1014}</div>
												</div>
												";

$FORUM_VIEWFORUM_TEMPLATE['forum-crumb'] =  $FORUM_CRUMB;

// $FORUM_VIEWFORUM_WRAPPER['THREADNAME']          = "<span class='label label-info'>{---}</span>";





