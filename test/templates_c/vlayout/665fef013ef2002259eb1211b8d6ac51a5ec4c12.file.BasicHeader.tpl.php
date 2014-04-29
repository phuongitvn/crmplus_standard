<?php /* Smarty version Smarty-3.1.7, created on 2014-01-12 18:44:29
         compiled from "/var/www/html/CRMProject/branches/crm_ga/includes/runtime/../../layouts/vlayout/modules/Vtiger/BasicHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:180710509252d2e28d3a5355-43422190%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '665fef013ef2002259eb1211b8d6ac51a5ec4c12' => 
    array (
      0 => '/var/www/html/CRMProject/branches/crm_ga/includes/runtime/../../layouts/vlayout/modules/Vtiger/BasicHeader.tpl',
      1 => 1373793546,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '180710509252d2e28d3a5355-43422190',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_52d2e28d3ba75',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d2e28d3ba75')) {function content_52d2e28d3ba75($_smarty_tpl) {?>
<div class="navbar navbar-fixed-top  navbar-inverse noprint" style='min-width:1050px'><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('MenuBar.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('CommonActions.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }} ?>