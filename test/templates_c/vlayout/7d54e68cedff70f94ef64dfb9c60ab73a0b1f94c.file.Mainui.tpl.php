<?php /* Smarty version Smarty-3.1.7, created on 2014-02-20 08:07:59
         compiled from "/var/www/html/CRMPlus/crmplus_ga_standard/includes/runtime/../../layouts/vlayout/modules/MailManager/Mainui.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10677848595305b7df6fb252-13524010%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d54e68cedff70f94ef64dfb9c60ab73a0b1f94c' => 
    array (
      0 => '/var/www/html/CRMPlus/crmplus_ga_standard/includes/runtime/../../layouts/vlayout/modules/MailManager/Mainui.tpl',
      1 => 1392560529,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10677848595305b7df6fb252-13524010',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MAILBOX' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5305b7df74f7e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5305b7df74f7e')) {function content_5305b7df74f7e($_smarty_tpl) {?>
<div id="_folderdiv_"><?php echo $_smarty_tpl->getSubTemplate ("modules/MailManager/FolderList.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div>
<input type="hidden" name="refresh_timeout" id="refresh_timeout" value="<?php echo $_smarty_tpl->tpl_vars['MAILBOX']->value->refreshTimeOut();?>
"/>
<?php }} ?>