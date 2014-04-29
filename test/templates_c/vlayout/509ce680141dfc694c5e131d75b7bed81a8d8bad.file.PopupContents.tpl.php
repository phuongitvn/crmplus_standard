<?php /* Smarty version Smarty-3.1.7, created on 2014-02-16 15:22:43
         compiled from "/var/www/html/CRMPlus/crmplus_ga_standard/includes/runtime/../../layouts/vlayout/modules/Inventory/PopupContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8370149005300d7c352f151-68294246%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '509ce680141dfc694c5e131d75b7bed81a8d8bad' => 
    array (
      0 => '/var/www/html/CRMPlus/crmplus_ga_standard/includes/runtime/../../layouts/vlayout/modules/Inventory/PopupContents.tpl',
      1 => 1392560528,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8370149005300d7c352f151-68294246',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5300d7c35c1cb',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5300d7c35c1cb')) {function content_5300d7c35c1cb($_smarty_tpl) {?>
<div id='popupContentsDiv'><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("PopupEntries.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div>
<?php }} ?>