<?php /* Smarty version Smarty-3.1.7, created on 2014-04-15 01:41:14
         compiled from "/var/www/html/CRMPlus/crmplus_ga_standard/includes/runtime/../../layouts/vlayout/modules/Calendar/CalendarView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:595983338534c8e3ad29557-62701876%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93941c7e3a4b78369a1ea087f789513c19ed92c0' => 
    array (
      0 => '/var/www/html/CRMPlus/crmplus_ga_standard/includes/runtime/../../layouts/vlayout/modules/Calendar/CalendarView.tpl',
      1 => 1392560529,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '595983338534c8e3ad29557-62701876',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CURRENT_USER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_534c8e3adbb17',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_534c8e3adbb17')) {function content_534c8e3adbb17($_smarty_tpl) {?>
<input type="hidden" id="currentView" value="<?php echo $_REQUEST['view'];?>
" /><input type="hidden" id="activity_view" value="<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER']->value->get('activity_view');?>
" /><input type="hidden" id="time_format" value="<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER']->value->get('hour_format');?>
" /><input type="hidden" id="start_hour" value="<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER']->value->get('start_hour');?>
" /><div class="container-fluid"><div class="row-fluid"><div class="span12"><p><!-- Divider --></p><div id="calendarview"></div></div></div></div><?php }} ?>