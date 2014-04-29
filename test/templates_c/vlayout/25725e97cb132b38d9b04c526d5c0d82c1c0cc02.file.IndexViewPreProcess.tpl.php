<?php /* Smarty version Smarty-3.1.7, created on 2014-01-15 16:26:51
         compiled from "E:\source\CRMProject\trunk\crmplus_ga\includes\runtime/../../layouts/vlayout\modules\Vtiger\IndexViewPreProcess.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2484252d6b6cbb4da09-26128100%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '25725e97cb132b38d9b04c526d5c0d82c1c0cc02' => 
    array (
      0 => 'E:\\source\\CRMProject\\trunk\\crmplus_ga\\includes\\runtime/../../layouts/vlayout\\modules\\Vtiger\\IndexViewPreProcess.tpl',
      1 => 1380782178,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2484252d6b6cbb4da09-26128100',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'CURRENT_USER_MODEL' => 0,
    'LEFTPANELHIDE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_52d6b6cbd711c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d6b6cbd711c')) {function content_52d6b6cbd711c($_smarty_tpl) {?>

<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("Header.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("BasicHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="bodyContents">
	<div class="mainContainer row-fluid">
		<?php $_smarty_tpl->tpl_vars['LEFTPANELHIDE'] = new Smarty_variable($_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->get('leftpanelhide'), null, 0);?>
		<div class="span2 <?php if ($_smarty_tpl->tpl_vars['LEFTPANELHIDE']->value=='1'){?> hide <?php }?>" id="leftPanel">
			<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ListViewSidebar.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		</div>
		<div class="contentsDiv <?php if ($_smarty_tpl->tpl_vars['LEFTPANELHIDE']->value!='1'){?> span10 <?php }?>marginLeftZero" id="rightPanel">
<?php }} ?>