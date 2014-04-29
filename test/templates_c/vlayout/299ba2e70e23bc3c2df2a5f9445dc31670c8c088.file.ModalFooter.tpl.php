<?php /* Smarty version Smarty-3.1.7, created on 2014-01-12 18:47:33
         compiled from "/var/www/html/CRMProject/branches/crm_ga/includes/runtime/../../layouts/vlayout/modules/Vtiger/ModalFooter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:208418189752d2e345ac0e47-13180866%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '299ba2e70e23bc3c2df2a5f9445dc31670c8c088' => 
    array (
      0 => '/var/www/html/CRMProject/branches/crm_ga/includes/runtime/../../layouts/vlayout/modules/Vtiger/ModalFooter.tpl',
      1 => 1373793546,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '208418189752d2e345ac0e47-13180866',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_52d2e345afb5a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d2e345afb5a')) {function content_52d2e345afb5a($_smarty_tpl) {?>
<div class="modal-footer"><div class=" pull-right cancelLinkContainer"><a class="cancelLink" type="reset" data-dismiss="modal"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></div><button class="btn btn-success" type="submit" name="saveButton"><strong><?php echo vtranslate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button></div><?php }} ?>