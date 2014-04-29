<?php /* Smarty version Smarty-3.1.7, created on 2014-01-15 15:54:27
         compiled from "E:\source\CRMProject\trunk\crmplus_ga\includes\runtime/../../layouts/vlayout\modules\Settings\Vtiger\SettingsMenuStart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:952152d6af33e62de8-65210437%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9d836b29614f597394a7074b6d263b828e4bed7' => 
    array (
      0 => 'E:\\source\\CRMProject\\trunk\\crmplus_ga\\includes\\runtime/../../layouts/vlayout\\modules\\Settings\\Vtiger\\SettingsMenuStart.tpl',
      1 => 1373768346,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '952152d6af33e62de8-65210437',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'LOAD_OLD' => 0,
    'UI5_URL' => 0,
    'QUALIFIED_MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_52d6af340188f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d6af340188f')) {function content_52d6af340188f($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("Header.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("BasicHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['LOAD_OLD']->value){?><div class="bodyContents"><div class="mainContainer row-fluid"><div class="span12"><iframe id="ui5frame" src="<?php echo $_smarty_tpl->tpl_vars['UI5_URL']->value;?>
" width="100%" height="650px" style="border:0;"></iframe></div><?php }else{ ?><div class="bodyContents"><div class="mainContainer row-fluid"><div class="span2 row-fluid"><div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('Sidebar.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></div><div class="contentsDiv span10 marginLeftZero"><?php }?><?php }} ?>