<?php /* Smarty version Smarty-3.1.7, created on 2014-01-15 15:53:48
         compiled from "E:\source\CRMProject\trunk\crmplus_ga\includes\runtime/../../layouts/vlayout\modules\Home\dashboards\DashBoardPreProcess.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1260952d6af0c85fba7-49247787%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b0eb46cd704dd38ee01fbb175a4ba11b0e511b1f' => 
    array (
      0 => 'E:\\source\\CRMProject\\trunk\\crmplus_ga\\includes\\runtime/../../layouts/vlayout\\modules\\Home\\dashboards\\DashBoardPreProcess.tpl',
      1 => 1373768346,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1260952d6af0c85fba7-49247787',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_52d6af0ca6f6a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d6af0ca6f6a')) {function content_52d6af0ca6f6a($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("Header.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("BasicHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<div class="bodyContents"><div class="mainContainer row-fluid"><div class="contentsDiv span12 marginLeftZero"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("dashboards/DashBoardHeader.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('DASHBOARDHEADER_TITLE'=>vtranslate($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value)), 0);?>
<?php }} ?>