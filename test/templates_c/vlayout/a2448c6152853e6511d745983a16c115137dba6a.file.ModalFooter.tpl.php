<?php /* Smarty version Smarty-3.1.7, created on 2014-02-16 15:19:38
         compiled from "/var/www/html/CRMPlus/crmplus_ga_standard/includes/runtime/../../layouts/vlayout/modules/Vtiger/ModalFooter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19544050535300d70a9c8682-33404809%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2448c6152853e6511d745983a16c115137dba6a' => 
    array (
      0 => '/var/www/html/CRMPlus/crmplus_ga_standard/includes/runtime/../../layouts/vlayout/modules/Vtiger/ModalFooter.tpl',
      1 => 1392560530,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19544050535300d70a9c8682-33404809',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5300d70aa2c4c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5300d70aa2c4c')) {function content_5300d70aa2c4c($_smarty_tpl) {?>
<div class="modal-footer"><div class=" pull-right cancelLinkContainer"><a class="cancelLink" type="reset" data-dismiss="modal"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></div><button class="btn btn-success" type="submit" name="saveButton"><strong><?php echo vtranslate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button></div><?php }} ?>