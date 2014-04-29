<?php /* Smarty version Smarty-3.1.7, created on 2014-02-16 15:20:58
         compiled from "/var/www/html/CRMPlus/crmplus_ga_standard/includes/runtime/../../layouts/vlayout/modules/Vtiger/SideBar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1787207165300d75a3f5624-30836815%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67f3f83f9432e6bf8cb19dbd20e7b08d053ab1ac' => 
    array (
      0 => '/var/www/html/CRMPlus/crmplus_ga_standard/includes/runtime/../../layouts/vlayout/modules/Vtiger/SideBar.tpl',
      1 => 1392560530,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1787207165300d75a3f5624-30836815',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5300d75a41209',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5300d75a41209')) {function content_5300d75a41209($_smarty_tpl) {?>
<div class="sideBarContents"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SideBarLinks.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<div class="clearfix"></div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SideBarWidgets.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }} ?>