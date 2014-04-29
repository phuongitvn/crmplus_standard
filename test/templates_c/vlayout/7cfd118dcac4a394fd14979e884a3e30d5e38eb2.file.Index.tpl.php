<?php /* Smarty version Smarty-3.1.7, created on 2014-01-15 16:03:25
         compiled from "E:\source\CRMProject\trunk\crmplus_ga\includes\runtime/../../layouts/vlayout\modules\Settings\Roles\Index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2623752d6b14d786840-86224237%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7cfd118dcac4a394fd14979e884a3e30d5e38eb2' => 
    array (
      0 => 'E:\\source\\CRMProject\\trunk\\crmplus_ga\\includes\\runtime/../../layouts/vlayout\\modules\\Settings\\Roles\\Index.tpl',
      1 => 1373768346,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2623752d6b14d786840-86224237',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'QUALIFIED_MODULE' => 0,
    'ROOT_ROLE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_52d6b14da043a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d6b14da043a')) {function content_52d6b14da043a($_smarty_tpl) {?>
<div class="container-fluid"><div class="widget_header row-fluid"><div class="span8"><h3><?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h3></div></div><hr><div class="clearfix treeView"><ul><li data-role="<?php echo $_smarty_tpl->tpl_vars['ROOT_ROLE']->value->getParentRoleString();?>
" data-roleid="<?php echo $_smarty_tpl->tpl_vars['ROOT_ROLE']->value->getId();?>
"><div class="toolbar-handle"><a href="javascript:;" class="btn btn-inverse draggable droppable"><?php echo $_smarty_tpl->tpl_vars['ROOT_ROLE']->value->getName();?>
</a><div class="toolbar" title="<?php echo vtranslate('LBL_ADD_RECORD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
">&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['ROOT_ROLE']->value->getCreateChildUrl();?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['ROOT_ROLE']->value->getCreateChildUrl();?>
" data-action="modal"><span class="icon-plus-sign"></span></a></div></div><?php $_smarty_tpl->tpl_vars["ROLE"] = new Smarty_variable($_smarty_tpl->tpl_vars['ROOT_ROLE']->value, null, 0);?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("RoleTree.tpl","Settings:Roles"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</li></ul></div></div><?php }} ?>