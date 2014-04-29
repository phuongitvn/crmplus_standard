<?php /* Smarty version Smarty-3.1.7, created on 2014-02-16 15:19:33
         compiled from "/var/www/html/CRMPlus/crmplus_ga_standard/includes/runtime/../../layouts/vlayout/modules/Settings/Vtiger/SettingsShortCut.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18071334385300d705ea91d9-50271941%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ffd87ba563c92c5448921de17990be7c24fa71ac' => 
    array (
      0 => '/var/www/html/CRMPlus/crmplus_ga_standard/includes/runtime/../../layouts/vlayout/modules/Settings/Vtiger/SettingsShortCut.tpl',
      1 => 1392560530,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18071334385300d705ea91d9-50271941',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SETTINGS_SHORTCUT' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5300d705eeaf0',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5300d705eeaf0')) {function content_5300d705eeaf0($_smarty_tpl) {?>
<span id="shortcut_<?php echo $_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->value->getId();?>
" data-actionurl="<?php echo $_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->value->getPinUnpinActionUrl();?>
" class="span3 contentsBackground well cursorPointer moduleBlock" data-url="<?php echo $_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->value->getUrl();?>
"><button data-id="<?php echo $_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->value->getId();?>
" title="<?php echo vtranslate('LBL_REMOVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" style="margin-right: -2%;margin-top: -5%;" title="Close" type="button" class="unpin close hide">x</button><h5 class="themeTextColor"><?php echo vtranslate($_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->value->get('name'),$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h5><div><?php echo vtranslate($_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->value->get('description'),$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div></span>	<?php }} ?>