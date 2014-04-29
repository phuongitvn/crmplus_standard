<?php /* Smarty version Smarty-3.1.7, created on 2014-02-16 15:21:03
         compiled from "/var/www/html/CRMPlus/crmplus_ga_standard/includes/runtime/../../layouts/vlayout/modules/Vtiger/EditViewActions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:832619705300d75f746a49-56821313%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '485cbe05832673ffad076f6d395130baf9f8a9d6' => 
    array (
      0 => '/var/www/html/CRMPlus/crmplus_ga_standard/includes/runtime/../../layouts/vlayout/modules/Vtiger/EditViewActions.tpl',
      1 => 1392560530,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '832619705300d75f746a49-56821313',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5300d75f75d2d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5300d75f75d2d')) {function content_5300d75f75d2d($_smarty_tpl) {?>

<br><div class="row-fluid"><div class="pull-right"><button class="btn btn-success" type="submit"><strong><?php echo vtranslate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button><a class="cancelLink" type="reset" onclick="javascript:window.history.back();"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></div><div class="clearfix"></div></div></form></div><?php }} ?>