<?php /* Smarty version Smarty-3.1.7, created on 2014-01-15 15:55:15
         compiled from "E:\source\CRMProject\trunk\crmplus_ga\includes\runtime/../../layouts/vlayout\modules\Vtiger\RecordNamesList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2191752d6af63941992-12391754%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19f24c3bd442d0af27ad647c388be0bfa5696fa9' => 
    array (
      0 => 'E:\\source\\CRMProject\\trunk\\crmplus_ga\\includes\\runtime/../../layouts/vlayout\\modules\\Vtiger\\RecordNamesList.tpl',
      1 => 1380782178,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2191752d6af63941992-12391754',
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
  'unifunc' => 'content_52d6af63a1f34',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d6af63a1f34')) {function content_52d6af63a1f34($_smarty_tpl) {?>
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