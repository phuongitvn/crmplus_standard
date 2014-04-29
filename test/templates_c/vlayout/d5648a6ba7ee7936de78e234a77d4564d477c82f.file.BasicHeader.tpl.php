<?php /* Smarty version Smarty-3.1.7, created on 2014-01-15 15:53:48
         compiled from "E:\source\CRMProject\trunk\crmplus_ga\includes\runtime/../../layouts/vlayout\modules\Vtiger\BasicHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3043852d6af0cbb5735-14281231%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5648a6ba7ee7936de78e234a77d4564d477c82f' => 
    array (
      0 => 'E:\\source\\CRMProject\\trunk\\crmplus_ga\\includes\\runtime/../../layouts/vlayout\\modules\\Vtiger\\BasicHeader.tpl',
      1 => 1373768346,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3043852d6af0cbb5735-14281231',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_52d6af0ccd434',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d6af0ccd434')) {function content_52d6af0ccd434($_smarty_tpl) {?>
<div class="navbar navbar-fixed-top  navbar-inverse noprint" style='min-width:1050px'><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('MenuBar.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('CommonActions.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }} ?>