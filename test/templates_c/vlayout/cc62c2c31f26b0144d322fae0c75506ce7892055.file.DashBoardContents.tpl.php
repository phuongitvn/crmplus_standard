<?php /* Smarty version Smarty-3.1.7, created on 2014-03-21 09:32:12
         compiled from "/var/www/html/CRMPlus/crmplus_ga_standard/includes/runtime/../../layouts/vlayout/modules/Vtiger/dashboards/DashBoardContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:998325084532c071ce44a32-67129606%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc62c2c31f26b0144d322fae0c75506ce7892055' => 
    array (
      0 => '/var/www/html/CRMPlus/crmplus_ga_standard/includes/runtime/../../layouts/vlayout/modules/Vtiger/dashboards/DashBoardContents.tpl',
      1 => 1392560531,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '998325084532c071ce44a32-67129606',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'WIDGETS' => 0,
    'WIDGET' => 0,
    'WIDGETDOMID' => 0,
    'COLUMNS' => 0,
    'ROW' => 0,
    'ROWCOUNT' => 0,
    'COLCOUNT' => 0,
    'CURRENT_USER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_532c071d07759',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_532c071d07759')) {function content_532c071d07759($_smarty_tpl) {?>
<div class="gridster span" style="width: 98%;"><ul><?php $_smarty_tpl->tpl_vars['COLUMNS'] = new Smarty_variable(2, null, 0);?><?php $_smarty_tpl->tpl_vars['ROW'] = new Smarty_variable(1, null, 0);?><?php  $_smarty_tpl->tpl_vars['WIDGET'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['WIDGET']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['WIDGETS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['count']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['WIDGET']->key => $_smarty_tpl->tpl_vars['WIDGET']->value){
$_smarty_tpl->tpl_vars['WIDGET']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['count']['index']++;
?><?php $_smarty_tpl->tpl_vars['WIDGETDOMID'] = new Smarty_variable($_smarty_tpl->tpl_vars['WIDGET']->value->get('linkid'), null, 0);?><?php if ($_smarty_tpl->tpl_vars['WIDGET']->value->getName()=='MiniList'){?><?php $_smarty_tpl->tpl_vars['WIDGETDOMID'] = new Smarty_variable(($_smarty_tpl->tpl_vars['WIDGET']->value->get('linkid')).('-').($_smarty_tpl->tpl_vars['WIDGET']->value->get('widgetid')), null, 0);?><?php }elseif($_smarty_tpl->tpl_vars['WIDGET']->value->getName()=='Notebook'){?><?php $_smarty_tpl->tpl_vars['WIDGETDOMID'] = new Smarty_variable(($_smarty_tpl->tpl_vars['WIDGET']->value->get('linkid')).('-').($_smarty_tpl->tpl_vars['WIDGET']->value->get('widgetid')), null, 0);?><?php }?><li id="<?php echo $_smarty_tpl->tpl_vars['WIDGETDOMID']->value;?>
" <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['count']['index']%$_smarty_tpl->tpl_vars['COLUMNS']->value==0&&$_smarty_tpl->getVariable('smarty')->value['foreach']['count']['index']!=0){?> <?php $_smarty_tpl->tpl_vars['ROWCOUNT'] = new Smarty_variable($_smarty_tpl->tpl_vars['ROW']->value+1, null, 0);?> data-row="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getPositionRow($_smarty_tpl->tpl_vars['ROWCOUNT']->value);?>
" <?php }else{ ?> data-row="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getPositionRow($_smarty_tpl->tpl_vars['ROW']->value);?>
" <?php }?><?php $_smarty_tpl->tpl_vars['COLCOUNT'] = new Smarty_variable(($_smarty_tpl->getVariable('smarty')->value['foreach']['count']['index']%$_smarty_tpl->tpl_vars['COLUMNS']->value)+1, null, 0);?> data-col="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getPositionCol($_smarty_tpl->tpl_vars['COLCOUNT']->value);?>
" data-sizex="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getWidth();?>
" data-sizey="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getHeight();?>
"class="dashboardWidget dashboardWidget_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['count']['index'];?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getUrl();?>
" data-mode="open" data-name="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getName();?>
"></li><?php } ?></ul><input type="hidden" id=row value="<?php echo $_smarty_tpl->tpl_vars['ROWCOUNT']->value;?>
" /><input type="hidden" id=col value="<?php echo $_smarty_tpl->tpl_vars['COLCOUNT']->value;?>
" /><input type="hidden" id="userDateFormat" value="<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER']->value->get('date_format');?>
" /></div><?php }} ?>