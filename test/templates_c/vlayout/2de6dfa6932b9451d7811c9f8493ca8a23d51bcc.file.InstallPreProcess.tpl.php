<?php /* Smarty version Smarty-3.1.7, created on 2014-01-12 18:35:44
         compiled from "/var/www/html/CRMProject/branches/crm_ga/includes/runtime/../../layouts/vlayout/modules/Install/InstallPreProcess.tpl" */ ?>
<?php /*%%SmartyHeaderCode:158358648352d2e0806e3e45-83648763%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2de6dfa6932b9451d7811c9f8493ca8a23d51bcc' => 
    array (
      0 => '/var/www/html/CRMProject/branches/crm_ga/includes/runtime/../../layouts/vlayout/modules/Install/InstallPreProcess.tpl',
      1 => 1373793546,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '158358648352d2e0806e3e45-83648763',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_52d2e0806f3f4',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d2e0806f3f4')) {function content_52d2e0806f3f4($_smarty_tpl) {?>
<input type="hidden" id="module" value="Install" />
<input type="hidden" id="view" value="Index" />
<div class="container-fluid page-container">
	<div class="row-fluid">
		<div class="span6">
			<div class="logo">
				<img src="<?php echo vimage_path('vt1.png');?>
"/>
			</div>
		</div>
		<div class="span6">
			<div class="head pull-right">
				<h3><?php echo vtranslate('LBL_INSTALLATION_WIZARD','Install');?>
</h3>
			</div>
		</div>
	</div>
<?php }} ?>