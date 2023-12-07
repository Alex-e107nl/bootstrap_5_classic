<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2009 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 *
 *
 * $Source: /cvs_backup/e107_0.8/e107_themes/templates/comment_template.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */

if (!defined('e107_INIT')) { exit; }




// Shortcode wrappers.
$COMMENT_WRAPPER['item']['COMENT_TIMEDATE']     = '<small>{---}</small>';
$COMMENT_WRAPPER['item']['COMMENT_EDIT']        = '<span class="comment-edit">{---}</span>';
$COMMENT_WRAPPER['item']['COMENT_REPLY']		= '<span class="comment-reply">{---}</span>';
$COMMENT_WRAPPER['item']['COMMENT_AVATAR']  	= '<span class="comment-avatar center">{---}</span>';
$COMMENT_WRAPPER['item']['COMMENT_MODERATE']	= '<span class="comment-moderate">{---}</span>';

$COMMENT_WRAPPER['form'] = $COMMENT_WRAPPER['item']; // use the above wrappers for the 'form' as well.

// Templates

		
$COMMENT_TEMPLATE['form'] = "
	{SETIMAGE: w=90&h=90&crop=1}
	<div class='media comment-box comment-box-form d-flex clearfix'>
		<div class='comment-box-left media-object pull-left me-3' >
		{COMMENT_AVATAR: shape=circle}
		</div>
		<div class='media-body comment-box-right text-left' >
			<div class='P10'>
				{AUTHOR_INPUT}
				{COMMENT_INPUT}
			<div id='commentformbutton'>
				{COMMENT_BUTTON}
				{COMMENT_SHARE}
			</div>
			</div>
		</div>
	</div>
	<div class='clear_b'><!-- --></div>
	<hr>"; 

$COMMENT_TEMPLATE['item'] = '
	{SETIMAGE: w=24&h=24&crop=1}
	<li>
		<div class="stickie">
	{COMMENT_AVATAR: shape=circle}
			<h2>{USERNAME}<span class="timedate me-auto">{COMMENT_TIMEDATE=relative}</span></h2>
			<div class="comment-text" id="{COMMENT_ITEMID}-edit" contentEditable="false">
				<p>	{COMMENT} </p>
	
			</div>
			
			<div class="comment-status">{COMMENT_STATUS}</div>
			<div class="fs-6 text-end mb-1">{COMMENT_RATE}</div>
			<div class="text-center">{COMMENT_EDIT} {COMMENT_MODERATE}</div>
		</div>
	</li>';

$COMMENT_TEMPLATE['layout']	= '
	<div class="stickiebody"><ul> {COMMENTS}</ul></div> {COMMENTFORM}
	<div class="my-1">{MODERATE}</div>';
										
