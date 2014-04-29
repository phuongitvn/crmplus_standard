<?php /* Smarty version Smarty-3.1.7, created on 2014-02-20 08:12:00
         compiled from "/var/www/html/CRMPlus/crmplus_ga_standard/includes/runtime/../../layouts/vlayout/modules/Vtiger/RecordNamesList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6729521025305b8d0150116-26405664%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '212ba9f9fedea994efe9132dba9345b2c5663852' => 
    array (
      0 => '/var/www/html/CRMPlus/crmplus_ga_standard/includes/runtime/../../layouts/vlayout/modules/Vtiger/RecordNamesList.tpl',
      1 => 1392560531,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6729521025305b8d0150116-26405664',
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
  'unifunc' => 'content_5305b8d01f91e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5305b8d01f91e')) {function content_5305b8d01f91e($_smarty_tpl) {?>
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