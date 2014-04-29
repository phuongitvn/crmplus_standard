<?php /* Smarty version Smarty-3.1.7, created on 2014-03-21 09:32:26
         compiled from "/var/www/html/CRMPlus/crmplus_ga_standard/includes/runtime/../../layouts/vlayout/modules/Vtiger/dashboards/DashboardHeaderIcons.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1029720155532c072a44a503-56319813%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e752aeee9f6d828ea161217d0048f009b52629b2' => 
    array (
      0 => '/var/www/html/CRMPlus/crmplus_ga_standard/includes/runtime/../../layouts/vlayout/modules/Vtiger/dashboards/DashboardHeaderIcons.tpl',
      1 => 1392560531,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1029720155532c072a44a503-56319813',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SETTING_EXIST' => 0,
    'WIDGET' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_532c072a4b9af',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_532c072a4b9af')) {function content_532c072a4b9af($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['SETTING_EXIST']->value){?>
<a name="dfilter">
	<i class='icon-cog' border='0' align="absmiddle" title="<?php echo vtranslate('LBL_FILTER');?>
" alt="<?php echo vtranslate('LBL_FILTER');?>
"/>
</a>
<?php }?>
<a href="javascript:void(0);" name="drefresh" data-url="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getUrl();?>
&linkid=<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->get('linkid');?>
&content=data">
	<i class="icon-refresh" hspace="2" border="0" align="absmiddle" title="<?php echo vtranslate('LBL_REFRESH');?>
" alt="<?php echo vtranslate('LBL_REFRESH');?>
"></i>
</a>
<?php if (!$_smarty_tpl->tpl_vars['WIDGET']->value->isDefault()){?>
	<a name="dclose" class="widget" data-url="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getDeleteUrl();?>
">
		<i class="icon-remove" hspace="2" border="0" align="absmiddle" title="<?php echo vtranslate('LBL_REMOVE');?>
" alt="<?php echo vtranslate('LBL_REMOVE');?>
"></i>
	</a>
<?php }?><?php }} ?>