<?php /* Smarty version Smarty-3.1.7, created on 2014-04-16 08:51:38
         compiled from "/var/www/html/CRMPlus/crmplus_ga_standard/includes/runtime/../../layouts/vlayout/modules/Vtiger/uitypes/RecurrenceDetailView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1956936729534e449a40e439-34298129%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f747377273047e66a8b32fbc5ce37540c41beb2e' => 
    array (
      0 => '/var/www/html/CRMPlus/crmplus_ga_standard/includes/runtime/../../layouts/vlayout/modules/Vtiger/uitypes/RecurrenceDetailView.tpl',
      1 => 1392560530,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1956936729534e449a40e439-34298129',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'RECURRING_INFORMATION' => 0,
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_534e449a44246',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_534e449a44246')) {function content_534e449a44246($_smarty_tpl) {?>
<div id="addEventRepeatUI">
	<div><span><?php echo $_smarty_tpl->tpl_vars['RECURRING_INFORMATION']->value['recurringcheck'];?>
</span></div>
	<?php if ($_smarty_tpl->tpl_vars['RECURRING_INFORMATION']->value['repeat_str']!=''){?>
	<div>
		<span><?php echo vtranslate('LBL_REPEATEVENT',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['RECURRING_INFORMATION']->value['repeat_frequency'];?>
&nbsp;<?php echo vtranslate($_smarty_tpl->tpl_vars['RECURRING_INFORMATION']->value['recurringtype'],$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</span>
	</div>
	<div>
		<span><?php echo $_smarty_tpl->tpl_vars['RECURRING_INFORMATION']->value['repeat_str'];?>
</span>
	</div>
	<?php }?>
</div><?php }} ?>