<?php /* Smarty version Smarty-3.1.7, created on 2014-04-16 08:51:38
         compiled from "/var/www/html/CRMPlus/crmplus_ga_standard/includes/runtime/../../layouts/vlayout/modules/Vtiger/uitypes/ReminderDetailView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:471598119534e449a3a27b1-15305138%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '24a62d3ea9c79aa4bcfc922adbf95e3aab8c3826' => 
    array (
      0 => '/var/www/html/CRMPlus/crmplus_ga_standard/includes/runtime/../../layouts/vlayout/modules/Vtiger/uitypes/ReminderDetailView.tpl',
      1 => 1392560530,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '471598119534e449a3a27b1-15305138',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'FIELD_MODEL' => 0,
    'RECORD' => 0,
    'REMINDER_VALUES' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_534e449a3f063',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_534e449a3f063')) {function content_534e449a3f063($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['REMINDER_VALUES'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['RECORD']->value->getId()), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['REMINDER_VALUES']->value==''){?>
    <?php echo vtranslate('LBL_NO',$_smarty_tpl->tpl_vars['MODULE']->value);?>

<?php }else{ ?>
    <?php echo $_smarty_tpl->tpl_vars['REMINDER_VALUES']->value;?>
<?php echo vtranslate('LBL_BEFORE_EVENT',$_smarty_tpl->tpl_vars['MODULE']->value);?>

<?php }?><?php }} ?>