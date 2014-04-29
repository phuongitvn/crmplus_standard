<?php /* Smarty version Smarty-3.1.7, created on 2014-01-12 18:35:44
         compiled from "/var/www/html/CRMProject/branches/crm_ga/includes/runtime/../../layouts/vlayout/modules/Install/Step1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:186238058352d2e0806fb695-05034024%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7aa1ec79cb733d5ee508050a2bb9cc0e1c53d974' => 
    array (
      0 => '/var/www/html/CRMProject/branches/crm_ga/includes/runtime/../../layouts/vlayout/modules/Install/Step1.tpl',
      1 => 1373793546,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '186238058352d2e0806fb695-05034024',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_52d2e08071ef7',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d2e08071ef7')) {function content_52d2e08071ef7($_smarty_tpl) {?>

<div class="row-fluid main-container">
	<div class="inner-container">
		<div class="row-fluid">
			<div class="span10">
				<h4><?php echo vtranslate('LBL_WELCOME','Install');?>
</h4>
			</div>
			<div class="span2">
				<a href="https://wiki.vtiger.com/vtiger6/" target="_blank" class="pull-right">
					<img src="<?php echo vimage_path('help.png');?>
" alt="Help-Icon"/>
				</a>
			</div>
		</div>
		<hr>

		<form class="form-horizontal" name="step1" method="get" action="index.php">
			<input type=hidden name="module" value="Install" />
			<input type=hidden name="view" value="Index" />
			<input type=hidden name="mode" value="Step2" />
			<div class="row-fluid">
				<div class="span4 welcome-image">
					<img src="<?php echo vimage_path('wizard_screen.png');?>
" alt="Vtiger Logo"/>
				</div>
				<div class="span8">
					<div class="welcome-div">
						<h3><?php echo vtranslate('LBL_WELCOME_TO_VTIGER6_SETUP_WIZARD','Install');?>
</h3>
						<?php echo vtranslate('LBL_VTIGER6_SETUP_WIZARD_DESCRIPTION','Install');?>

					</div>
				</div>
			</div>
			<div class="row-fluid">
				<div class="button-container">
					<input type="submit" class="btn btn-large btn-primary" value="<?php echo vtranslate('LBL_INSTALL_BUTTON','Install');?>
"/>
				</div>
			</div>
		</form>
	</div>
</div><?php }} ?>