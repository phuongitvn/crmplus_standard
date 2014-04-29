<?php /* Smarty version Smarty-3.1.7, created on 2014-02-16 15:19:20
         compiled from "/var/www/html/CRMPlus/crmplus_ga_standard/includes/runtime/../../layouts/vlayout/modules/Tut/Index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18470257375300d6f8f2ca48-83850248%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3a836304a8fc5d1088f2917bf3930c6dff13cf7' => 
    array (
      0 => '/var/www/html/CRMPlus/crmplus_ga_standard/includes/runtime/../../layouts/vlayout/modules/Tut/Index.tpl',
      1 => 1392560528,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18470257375300d6f8f2ca48-83850248',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5300d6f901dec',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5300d6f901dec')) {function content_5300d6f901dec($_smarty_tpl) {?><div class="container-fluid">
	<div class="">
		<div class="row-fluid">
			<div class="span12">
				<div id="tut-step">
				<ul style="margin-top: 10px;" id="mainNav" class="fiveStep">
					<li class="lastDone"><a href="#home" data-toggle="tab">Marketing & Kinh doanh</a></li>
					<li class="current"><a href="#profile" data-toggle="tab">Cơ hội bán hàng</a></li>
					<li class="current"><a href="#support" data-toggle="tab">Hỗ trợ</a></li>
				</ul>
				</div>
				<!-- <ul class="nav nav-pills">
				  <li class="active"><a href="#home" data-toggle="tab">Quản lý tiềm năng</a></li>
				  <li><a href="#profile" data-toggle="tab">Quản lý cơ hội bán hàng</a></li>
				  <li><a href="#support" data-toggle="tab">Quản lý Hỗ Trợ & Quản lý Dự Án</a></li>
				</ul> -->
				<div class="tab-content-tut" style="overflow: visible;">
				  <div class="tab-pane active" id="home" style="text-align: center">
				  	<img src="layouts/vlayout/skins/crmplus/images/s1.png" />
				  </div>
				  <div class="tab-pane" id="profile" style="text-align: center">
				  	<img src="layouts/vlayout/skins/crmplus/images/s2.png" />
				  </div>
				  <div class="tab-pane" id="support" style="text-align: center">
				  	<img src="layouts/vlayout/skins/crmplus/images/s3.png" />
				  </div>
				</div>
				
			</div>
		</div>
	</div>
</div>
<link href="layouts/vlayout/skins/crmplus/crmplus.css" rel="stylesheet" />
<script>
$(function(){
	$("#mainNav li a").live("click", function(){
		var content= $(this).attr("href");
		$("#mainNav li").removeClass("lastDone").addClass("current");
		$(this).parent("li").addClass("lastDone");
		$(".tab-content-tut div").removeClass("active");
		$(content).addClass("active");
	})
})

</script><?php }} ?>