<?php /* Smarty version Smarty-3.1.7, created on 2014-01-12 18:47:54
         compiled from "/var/www/html/CRMProject/branches/crm_ga/includes/runtime/../../layouts/vlayout/modules/Vtiger/RecordNamesList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:105907584952d2e35a4f2770-18912305%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0b68f9e831c696c6d20167160ef410e2f60315a' => 
    array (
      0 => '/var/www/html/CRMProject/branches/crm_ga/includes/runtime/../../layouts/vlayout/modules/Vtiger/RecordNamesList.tpl',
      1 => 1380807378,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '105907584952d2e35a4f2770-18912305',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'RECORDS' => 0,
    'recordsModel' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_52d2e35a57464',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d2e35a57464')) {function content_52d2e35a57464($_smarty_tpl) {?>
<div class="recordNamesList"><div class="row-fluid"><div class="span10"><ul class="nav nav-list"><?php  $_smarty_tpl->tpl_vars['recordsModel'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['recordsModel']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['RECORDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['recordsModel']->key => $_smarty_tpl->tpl_vars['recordsModel']->value){
$_smarty_tpl->tpl_vars['recordsModel']->_loop = true;
?><li><a data-id=<?php echo $_smarty_tpl->tpl_vars['recordsModel']->value->getId();?>
 href="<?php echo $_smarty_tpl->tpl_vars['recordsModel']->value->getDetailViewUrl();?>
" title="<?php echo decode_html($_smarty_tpl->tpl_vars['recordsModel']->value->getName());?>
"><?php echo decode_html($_smarty_tpl->tpl_vars['recordsModel']->value->getName());?>
</a></li><?php }
if (!$_smarty_tpl->tpl_vars['recordsModel']->_loop) {
?><li style="text-align:center"><?php echo vtranslate('LBL_NO_RECORDS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</li><?php } ?></ul></div></div></div><?php }} ?>