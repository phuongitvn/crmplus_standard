<?php /* Smarty version Smarty-3.1.7, created on 2014-03-21 09:32:43
         compiled from "/var/www/html/CRMPlus/crmplus_ga_standard/includes/runtime/../../layouts/vlayout/modules/Vtiger/dashboards/DashBoardWidgetContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:108765704532c073b1e3625-23248293%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06d4689e92ca5d6f8b76e5e0eeb00175b8308ae3' => 
    array (
      0 => '/var/www/html/CRMPlus/crmplus_ga_standard/includes/runtime/../../layouts/vlayout/modules/Vtiger/dashboards/DashBoardWidgetContents.tpl',
      1 => 1392560531,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '108765704532c073b1e3625-23248293',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'DATA' => 0,
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_532c073b213ed',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_532c073b213ed')) {function content_532c073b213ed($_smarty_tpl) {?>
<?php if (count($_smarty_tpl->tpl_vars['DATA']->value)>0){?><input class="widgetData" type=hidden value='<?php echo Vtiger_Util_Helper::toSafeHTML(ZEND_JSON::encode($_smarty_tpl->tpl_vars['DATA']->value));?>
' /><div class="widgetChartContainer" style="height:250px;width:85%"></div><?php }else{ ?><span class="noDataMsg"><?php echo vtranslate('LBL_NO');?>
 <?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE_NAME']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
 <?php echo vtranslate('LBL_MATCHED_THIS_CRITERIA');?>
</span><?php }?><?php }} ?>