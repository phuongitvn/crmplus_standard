<?php /* Smarty version Smarty-3.1.7, created on 2014-01-14 13:15:06
         compiled from "/var/www/html/CRMProject/branches/crm_ga/includes/runtime/../../layouts/vlayout/modules/Calendar/CalendarViewPreProcess.tpl" */ ?>
<?php /*%%SmartyHeaderCode:46669002552d5385a28c5d3-15280591%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c9899ad984fb87f2eec2070789a14938bc06fb3' => 
    array (
      0 => '/var/www/html/CRMProject/branches/crm_ga/includes/runtime/../../layouts/vlayout/modules/Calendar/CalendarViewPreProcess.tpl',
      1 => 1373793546,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '46669002552d5385a28c5d3-15280591',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_52d5385bc9d68',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d5385bc9d68')) {function content_52d5385bc9d68($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("Header.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("BasicHeader.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<div class="bodyContents"><div class="mainContainer row-fluid"><div class="span2 row-fluid"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("SideBar.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><div class="contentsDiv span10 marginLeftZero"><?php }} ?>