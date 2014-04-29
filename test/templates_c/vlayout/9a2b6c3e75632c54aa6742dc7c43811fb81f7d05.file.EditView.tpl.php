<?php /* Smarty version Smarty-3.1.7, created on 2014-02-16 15:21:02
         compiled from "/var/www/html/CRMPlus/crmplus_ga_standard/includes/runtime/../../layouts/vlayout/modules/Vtiger/EditView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14378331095300d75e71f5a8-63993266%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a2b6c3e75632c54aa6742dc7c43811fb81f7d05' => 
    array (
      0 => '/var/www/html/CRMPlus/crmplus_ga_standard/includes/runtime/../../layouts/vlayout/modules/Vtiger/EditView.tpl',
      1 => 1392560530,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14378331095300d75e71f5a8-63993266',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5300d75e73bee',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5300d75e73bee')) {function content_5300d75e73bee($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("EditViewBlocks.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("EditViewActions.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>