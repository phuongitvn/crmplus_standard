<?php /* Smarty version Smarty-3.1.7, created on 2014-02-16 15:19:20
         compiled from "/var/www/html/CRMPlus/crmplus_ga_standard/includes/runtime/../../layouts/vlayout/modules/Vtiger/BasicHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21055399965300d6f861b530-18426144%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef87eb93fc283604b7997529e18714354fc30eed' => 
    array (
      0 => '/var/www/html/CRMPlus/crmplus_ga_standard/includes/runtime/../../layouts/vlayout/modules/Vtiger/BasicHeader.tpl',
      1 => 1392560530,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21055399965300d6f861b530-18426144',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5300d6f863d12',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5300d6f863d12')) {function content_5300d6f863d12($_smarty_tpl) {?>
<div class="navbar navbar-fixed-top  navbar-inverse noprint" style='min-width:1050px'><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('MenuBar.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('CommonActions.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }} ?>