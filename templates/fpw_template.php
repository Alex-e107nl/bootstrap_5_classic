<?php
// $Id$


if (!defined('e107_INIT')) { exit; }


$FPW_TEMPLATE['form'] = '
						<div class="row g-1">
							<div class="col-sm-12 alert alert-warning text-left">
								{FPW_TEXT}
							</div>
							<div class="col-sm-12  mb-3">
								<div class="col-sm-6">
									<div class="form-group">{FPW_USEREMAIL}</div>
								</div>
							</div>
							<div class="col-sm-12">
								<div class="col-sm-6 mb-3 float-start">
									<div class="input-group">
										<span class="form-group mt-2 col-sm-3">{FPW_CAPTCHA_IMG}</span>
										<span class="form-group col-sm-9">{FPW_CAPTCHA_INPUT}</span>
									</div>
								</div>
								<div class="col-sm-6 float-end px-4">
									{FPW_SUBMIT}
								</div>
							</div>		
						</div>
					';

$FPW_TEMPLATE['header'] = '<div id="fpw-page" class="container my-5">';
$FPW_TEMPLATE['footer'] = '</div>';






