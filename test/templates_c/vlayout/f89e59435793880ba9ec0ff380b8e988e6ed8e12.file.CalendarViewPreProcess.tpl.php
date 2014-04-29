<?php /* Smarty version Smarty-3.1.7, created on 2014-01-15 16:22:55
         compiled from "E:\source\CRMProject\trunk\crmplus_ga\includes\runtime/../../layouts/vlayout\modules\Calendar\CalendarViewPreProcess.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2115652d6b5df5554d6-17222940%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f89e59435793880ba9ec0ff380b8e988e6ed8e12' => 
    array (
      0 => 'E:\\source\\CRMProject\\trunk\\crmplus_ga\\includes\\runtime/../../layouts/vlayout\\modules\\Calendar\\CalendarViewPreProcess.tpl',
      1 => 1373768346,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2115652d6b5df5554d6-17222940',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_52d6b5df633c3',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d6b5df633c3')) {function content_52d6b5df633c3($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("Header.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("BasicHeader.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<div class="bodyContents"><div class="mainContainer row-fluid"><div class="span2 row-fluid"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("SideBar.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><div class="contentsDiv span10 marginLeftZero"><?php }} ?>