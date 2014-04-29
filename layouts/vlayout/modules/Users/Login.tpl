{*<!--
/*********************************************************************************
** The contents of this file are subject to the vtiger CRM Public License Version 1.0
* ("License"); You may not use this file except in compliance with the License
* The Original Code is:  vtiger CRM Open Source
* The Initial Developer of the Original Code is vtiger.
* Portions created by vtiger are Copyright (C) vtiger.
* All Rights Reserved.
*
********************************************************************************/
-->*}
{strip}
<!DOCTYPE html>
<html>
	<head>
		<title>Đăng nhập CRM+</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- for Login page we are added -->
		<link href="libraries/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="libraries/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
		<link href="libraries/bootstrap/css/jquery.bxslider.css" rel="stylesheet" />
		<link href="layouts/vlayout/skins/crmplus/login.css" rel="stylesheet" />
		<script src="libraries/jquery/jquery.min.js"></script>
		<script src="libraries/jquery/boxslider/jquery.bxslider.js"></script>
		<script src="libraries/jquery/boxslider/jquery.bxslider.min.js"></script>
		<script src="libraries/jquery/boxslider/respond.min.js"></script>
		<script>
			jQuery(document).ready(function(){
				scrollx = jQuery(window).outerWidth();
				window.scrollTo(scrollx,0);
				slider = jQuery('.bxslider').bxSlider({
				auto: true,
				pause: 4000,
				randomStart : true,
				autoHover: true
			});
			jQuery('.bx-prev, .bx-next, .bx-pager-item').live('click',function(){ slider.startAuto(); });
			}); 
		</script>
	</head>
	<body>
		<div class="container-fluid login-container">
			<div class="row-fluid" style="background: #F1F1F1;padding: 0 10px;width: auto;">
				<div class="span3">
					<div class="logo"><img src="layouts/vlayout/skins/crmplus/images/logo.png">
					<br />
					<a target="_blank" href="http://{$COMPANY_DETAILSCOMPANY_DETAILS.website}">{$COMPANY_DETAILS.name}</a>
					</div>
				</div>
				<div class="span9">
					<div class="helpLinks">
						<a href="#">CRM+ Website</a> | 
						<a href="#">CRM+ Wiki</a> | 
						<a href="#">CRM+ videos </a> | 
						<a href="#">CRM+ Forums</a> 
					</div>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span12">
					<div class="content-wrapper">
						<div class="container-fluid">
							<div class="row-fluid">
								<div class="span6" style="margin: 0 auto;float: none;">
									<div class="login-area">
										<div class="login-box" id="loginDiv">
											<div class="">
												<h3 class="login-header">Đăng nhập hệ thống CRM+</h3>
											</div>
											<form class="form-horizontal login-form" style="margin:0;" action="index.php?module=Users&action=Login" method="POST">
												{if isset($smarty.request.error)}
													<div class="alert alert-error">
														<p>Tên đăng nhập hoặc Mật khẩu không chính xác.</p>
													</div>
												{/if}
												{if isset($smarty.request.fpError)}
													<div class="alert alert-error">
														<p>Tên đăng nhập hoặc địa chỉ Email không chính xác.</p>
													</div>
												{/if}
												{if isset($smarty.request.status)}
													<div class="alert alert-success">
														<p>Một Email đã được gửi đến hòm thư của bạn, Hãy kiểm tra hòm thư của bạn.</p>
													</div>
												{/if}
												{if isset($smarty.request.statusError)}
													<div class="alert alert-error">
														<p>Server gửi mail chưa được cấu hình.</p>
													</div>
												{/if}
												<div class="control-group">
													<label class="control-label" for="username"><b>Tên đăng nhập</b></label>
													<div class="controls">
														<input type="text" id="username" name="username" placeholder="Tên đăng nhập">
													</div>
												</div>

												<div class="control-group">
													<label class="control-label" for="password"><b>Mật khẩu</b></label>
													<div class="controls">
														<input type="password" id="password" name="password" placeholder="Mật khẩu">
													</div>
												</div>
												<div class="control-group signin-button">
													<div class="controls" id="forgotPassword">
														<button type="submit" class="btn btn-primary sbutton">Đăng nhập</button>
														&nbsp;&nbsp;&nbsp;<a>Quên mật khẩu ?</a>
													</div>
												</div>
												
											</form>
											<div class="login-subscript">
												<small style="color: #fff">Bản quyền phát triển bởi CRM+</small>
											</div>
										</div>
										
										<div class="login-box hide" id="forgotPasswordDiv">
											<form class="form-horizontal login-form" style="margin:0;" action="forgotPassword.php" method="POST">
												<div class="">
													<h3 class="login-header">Quên mật khẩu</h3>
												</div>
												<div class="control-group">
													<label class="control-label" for="user_name"><b>Tên đăng nhập</b></label>
													<div class="controls">
														<input type="text" id="user_name" name="user_name" placeholder="Tên đăng nhập">
													</div>
												</div>
												<div class="control-group">
													<label class="control-label" for="email"><b>Email</b></label>
													<div class="controls">
														<input type="text" id="emailId" name="emailId"  placeholder="Email">
													</div>
												</div>
												<div class="control-group signin-button">
													<div class="controls" id="backButton">
														<input type="submit" class="btn btn-primary sbutton" value="Thực hiện" name="retrievePassword">
														&nbsp;&nbsp;&nbsp;<a>Quay lại</a>
													</div>
												</div>
											</form>
										</div>
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="navbar navbar-fixed-bottom">
			<div class="navbar-inner">
				<div class="container-fluid">
					<div class="row-fluid">
						<div class="span6 pull-left" >
							<div class="footer-content">
								<small>&#169 2013-2014&nbsp;
									<a href="#"> CRM+</a><!-- | 
									 <a href="javascript:mypopup();">Read License</a> | 
									<a href="#">Privacy Policy</a> </small> -->
							</div>
						</div>
						<div class="span6 pull-right" >
							<div class="pull-right footer-icons">
								<small>{vtranslate('LBL_CONNECT_WITH_US', $MODULE)}&nbsp;</small>
								<a href="#"><img src="layouts/vlayout/skins/images/facebook.png"></a>
								&nbsp;<a href="#twitter"><img src="layouts/vlayout/skins/images/twitter.png"></a>
								&nbsp;<a href="#linkedin"><img src="layouts/vlayout/skins/images/linkedin.png"></a>
								&nbsp;<a href="#youtube"><img src="layouts/vlayout/skins/images/youtube.png"></a> 
							</div>
						</div>
					</div>   
				</div>    
			</div>   
		</div>
	</body>
	<script>
		jQuery(document).ready(function(){
			jQuery("#forgotPassword a").click(function() {
				jQuery("#loginDiv").hide();
				jQuery("#forgotPasswordDiv").show();
			});
			
			jQuery("#backButton a").click(function() {
				jQuery("#loginDiv").show();
				jQuery("#forgotPasswordDiv").hide();
			});
			
			jQuery("input[name='retrievePassword']").click(function (){
				var username = jQuery('#user_name').val();
				var email = jQuery('#emailId').val();
				
				var email1 = email.replace(/^\s+/,'').replace(/\s+$/,'');
				var emailFilter = /^[^@]+@[^@.]+\.[^@]*\w\w$/ ;
				var illegalChars= /[\(\)\<\>\,\;\:\\\"\[\]]/ ;
				
				if(username == ''){
					alert('Please enter valid username');
					return false;
				} else if(!emailFilter.test(email1) || email == ''){
					alert('Please enater valid email address');
					return false;
				} else if(email.match(illegalChars)){
					alert( "The email address contains illegal characters.");
					return false;
				} else {
					return true;
				}
				
			});
		});
	</script>
</html>	
{/strip}
