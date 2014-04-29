<?php /* Smarty version Smarty-3.1.7, created on 2014-01-14 13:15:09
         compiled from "/var/www/html/CRMProject/branches/crm_ga/includes/runtime/../../layouts/vlayout/modules/Calendar/CalendarView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:97677284752d5385d2f61b2-51520303%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22940dbfa9df875b1a3481db8ef2a416060c16a5' => 
    array (
      0 => '/var/www/html/CRMProject/branches/crm_ga/includes/runtime/../../layouts/vlayout/modules/Calendar/CalendarView.tpl',
      1 => 1380807378,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '97677284752d5385d2f61b2-51520303',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CURRENT_USER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_52d5385d3ef19',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d5385d3ef19')) {function content_52d5385d3ef19($_smarty_tpl) {?>
<input type="hidden" id="currentView" value="<?php echo $_REQUEST['view'];?>
" /><input type="hidden" id="activity_view" value="<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER']->value->get('activity_view');?>
" /><input type="hidden" id="time_format" value="<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER']->value->get('hour_format');?>
" /><input type="hidden" id="start_hour" value="<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER']->value->get('start_hour');?>
" /><div class="container-fluid"><div class="row-fluid"><div class="span12"><p><!-- Divider --></p><div id="calendarview"></div></div></div></div><?php }} ?>