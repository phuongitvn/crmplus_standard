<?php /* Smarty version Smarty-3.1.7, created on 2014-04-15 01:41:14
         compiled from "/var/www/html/CRMPlus/crmplus_ga_standard/includes/runtime/../../layouts/vlayout/modules/Calendar/CalendarViewPreProcess.tpl" */ ?>
<?php /*%%SmartyHeaderCode:886561162534c8e3a8106a3-71870080%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0721b8017c67121caf16562c5cfc08dd3212e4eb' => 
    array (
      0 => '/var/www/html/CRMPlus/crmplus_ga_standard/includes/runtime/../../layouts/vlayout/modules/Calendar/CalendarViewPreProcess.tpl',
      1 => 1392560529,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '886561162534c8e3a8106a3-71870080',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_534c8e3a8f056',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_534c8e3a8f056')) {function content_534c8e3a8f056($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("Header.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("BasicHeader.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<div class="bodyContents"><div class="mainContainer row-fluid"><div class="span2 row-fluid"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("SideBar.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><div class="contentsDiv span10 marginLeftZero"><?php }} ?>