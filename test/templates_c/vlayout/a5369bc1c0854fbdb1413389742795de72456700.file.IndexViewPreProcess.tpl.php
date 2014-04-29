<?php /* Smarty version Smarty-3.1.7, created on 2014-02-16 15:21:02
         compiled from "/var/www/html/CRMPlus/crmplus_ga_standard/includes/runtime/../../layouts/vlayout/modules/Vtiger/IndexViewPreProcess.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12515301485300d75e0b1998-32408609%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a5369bc1c0854fbdb1413389742795de72456700' => 
    array (
      0 => '/var/www/html/CRMPlus/crmplus_ga_standard/includes/runtime/../../layouts/vlayout/modules/Vtiger/IndexViewPreProcess.tpl',
      1 => 1392560530,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12515301485300d75e0b1998-32408609',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'CURRENT_USER_MODEL' => 0,
    'LEFTPANELHIDE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5300d75e16b7c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5300d75e16b7c')) {function content_5300d75e16b7c($_smarty_tpl) {?>

<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("Header.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("BasicHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="bodyContents">
	<div class="mainContainer row-fluid">
		<?php $_smarty_tpl->tpl_vars['LEFTPANELHIDE'] = new Smarty_variable($_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->get('leftpanelhide'), null, 0);?>
		<div class="span2 <?php if ($_smarty_tpl->tpl_vars['LEFTPANELHIDE']->value=='1'){?> hide <?php }?>" id="leftPanel">
			<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ListViewSidebar.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		</div>
		<div class="contentsDiv <?php if ($_smarty_tpl->tpl_vars['LEFTPANELHIDE']->value!='1'){?> span10 <?php }?>marginLeftZero" id="rightPanel">
<?php }} ?>