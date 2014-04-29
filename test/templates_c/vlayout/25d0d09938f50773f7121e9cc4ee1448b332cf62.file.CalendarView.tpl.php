<?php /* Smarty version Smarty-3.1.7, created on 2014-01-15 16:22:55
         compiled from "E:\source\CRMProject\trunk\crmplus_ga\includes\runtime/../../layouts/vlayout\modules\Calendar\CalendarView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2254152d6b5df7e7fa9-12713393%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '25d0d09938f50773f7121e9cc4ee1448b332cf62' => 
    array (
      0 => 'E:\\source\\CRMProject\\trunk\\crmplus_ga\\includes\\runtime/../../layouts/vlayout\\modules\\Calendar\\CalendarView.tpl',
      1 => 1380782178,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2254152d6b5df7e7fa9-12713393',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CURRENT_USER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_52d6b5df92c00',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d6b5df92c00')) {function content_52d6b5df92c00($_smarty_tpl) {?>
<input type="hidden" id="currentView" value="<?php echo $_REQUEST['view'];?>
" /><input type="hidden" id="activity_view" value="<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER']->value->get('activity_view');?>
" /><input type="hidden" id="time_format" value="<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER']->value->get('hour_format');?>
" /><input type="hidden" id="start_hour" value="<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER']->value->get('start_hour');?>
" /><div class="container-fluid"><div class="row-fluid"><div class="span12"><p><!-- Divider --></p><div id="calendarview"></div></div></div></div><?php }} ?>