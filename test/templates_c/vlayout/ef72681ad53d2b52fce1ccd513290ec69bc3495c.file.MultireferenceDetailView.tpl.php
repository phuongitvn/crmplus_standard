<?php /* Smarty version Smarty-3.1.7, created on 2014-04-16 08:51:38
         compiled from "/var/www/html/CRMPlus/crmplus_ga_standard/includes/runtime/../../layouts/vlayout/modules/Events/uitypes/MultireferenceDetailView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:724961965534e449a49ef61-70708287%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef72681ad53d2b52fce1ccd513290ec69bc3495c' => 
    array (
      0 => '/var/www/html/CRMPlus/crmplus_ga_standard/includes/runtime/../../layouts/vlayout/modules/Events/uitypes/MultireferenceDetailView.tpl',
      1 => 1392560531,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '724961965534e449a49ef61-70708287',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'RELATED_CONTACTS' => 0,
    'CONTACT_INFO' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_534e449a4c8be',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_534e449a4c8be')) {function content_534e449a4c8be($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['CONTACT_INFO'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['CONTACT_INFO']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['RELATED_CONTACTS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['CONTACT_INFO']->key => $_smarty_tpl->tpl_vars['CONTACT_INFO']->value){
$_smarty_tpl->tpl_vars['CONTACT_INFO']->_loop = true;
?><a href='<?php echo $_smarty_tpl->tpl_vars['CONTACT_INFO']->value['_model']->getDetailViewUrl();?>
' title='<?php echo vtranslate("Contacts","Contacts");?>
'> <?php echo Vtiger_Util_Helper::getRecordName($_smarty_tpl->tpl_vars['CONTACT_INFO']->value['id']);?>
</a><br><?php } ?><?php }} ?>