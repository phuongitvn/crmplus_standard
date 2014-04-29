<?php /* Smarty version Smarty-3.1.7, created on 2014-01-15 15:54:47
         compiled from "E:\source\CRMProject\trunk\crmplus_ga\includes\runtime/../../layouts/vlayout\modules\Vtiger\uitypes\StringDetailView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1732252d6af472577f8-88893788%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c67a4df0f1907d58575eae3f2ee87154553f2f3' => 
    array (
      0 => 'E:\\source\\CRMProject\\trunk\\crmplus_ga\\includes\\runtime/../../layouts/vlayout\\modules\\Vtiger\\uitypes\\StringDetailView.tpl',
      1 => 1373768346,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1732252d6af472577f8-88893788',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'FIELD_MODEL' => 0,
    'RECORD' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_52d6af4732db2',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d6af4732db2')) {function content_52d6af4732db2($_smarty_tpl) {?>



<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['RECORD']->value->getId(),$_smarty_tpl->tpl_vars['RECORD']->value);?>
<?php }} ?>