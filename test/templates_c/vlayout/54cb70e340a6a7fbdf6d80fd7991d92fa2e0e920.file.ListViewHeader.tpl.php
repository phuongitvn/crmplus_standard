<?php /* Smarty version Smarty-3.1.7, created on 2014-01-15 16:02:50
         compiled from "E:\source\CRMProject\trunk\crmplus_ga\includes\runtime/../../layouts/vlayout\modules\Settings\Vtiger\ListViewHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1990852d6b12a24fd24-17705868%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54cb70e340a6a7fbdf6d80fd7991d92fa2e0e920' => 
    array (
      0 => 'E:\\source\\CRMProject\\trunk\\crmplus_ga\\includes\\runtime/../../layouts/vlayout\\modules\\Settings\\Vtiger\\ListViewHeader.tpl',
      1 => 1383547496,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1990852d6b12a24fd24-17705868',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'QUALIFIED_MODULE' => 0,
    'LISTVIEW_LINKS' => 0,
    'LISTVIEW_BASICACTION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_52d6b12a4cf52',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d6b12a4cf52')) {function content_52d6b12a4cf52($_smarty_tpl) {?>
<div class="container-fluid"><div class="widget_header row-fluid"><h3><?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h3></div><hr><div class="row-fluid"><span class="span6 btn-toolbar"><?php  $_smarty_tpl->tpl_vars['LISTVIEW_BASICACTION'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LISTVIEW_BASICACTION']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LISTVIEW_LINKS']->value['LISTVIEWBASIC']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_BASICACTION']->key => $_smarty_tpl->tpl_vars['LISTVIEW_BASICACTION']->value){
$_smarty_tpl->tpl_vars['LISTVIEW_BASICACTION']->_loop = true;
?><button class="btn addButton" <?php if (stripos($_smarty_tpl->tpl_vars['LISTVIEW_BASICACTION']->value->getUrl(),'javascript:')===0){?> onclick='<?php echo substr($_smarty_tpl->tpl_vars['LISTVIEW_BASICACTION']->value->getUrl(),strlen("javascript:"));?>
;'<?php }else{ ?> onclick='window.location.href="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_BASICACTION']->value->getUrl();?>
"' <?php }?>><i class="icon-plus icon-white"></i>&nbsp;<strong><?php echo vtranslate('LBL_ADD_RECORD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button><?php } ?></span><span class="span6 btn-toolbar"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ListViewActions.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</span></div><div class="clearfix"></div><div class="listViewContentDiv" id="listViewContents"><?php }} ?>