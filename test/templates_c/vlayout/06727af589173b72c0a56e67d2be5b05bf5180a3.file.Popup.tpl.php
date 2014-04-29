<?php /* Smarty version Smarty-3.1.7, created on 2014-02-16 15:22:32
         compiled from "/var/www/html/CRMPlus/crmplus_ga_standard/includes/runtime/../../layouts/vlayout/modules/Vtiger/Popup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17890800465300d7b8e9dce8-79442062%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06727af589173b72c0a56e67d2be5b05bf5180a3' => 
    array (
      0 => '/var/www/html/CRMPlus/crmplus_ga_standard/includes/runtime/../../layouts/vlayout/modules/Vtiger/Popup.tpl',
      1 => 1392560531,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17890800465300d7b8e9dce8-79442062',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5300d7b8f23de',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5300d7b8f23de')) {function content_5300d7b8f23de($_smarty_tpl) {?>
<div id="popupPageContainer" class="popupBackgroundColor"><div class="paddingLeftRight10px"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('PopupSearch.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><div id="popupContents" class="paddingLeftRight10px"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('PopupContents.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><input type="hidden" class="triggerEventName" value="<?php echo $_REQUEST['triggerEventName'];?>
"/></div></div><?php }} ?>