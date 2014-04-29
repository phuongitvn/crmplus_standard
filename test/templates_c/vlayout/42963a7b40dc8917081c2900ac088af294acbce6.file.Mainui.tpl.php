<?php /* Smarty version Smarty-3.1.7, created on 2014-01-12 18:44:54
         compiled from "/var/www/html/CRMProject/branches/crm_ga/includes/runtime/../../layouts/vlayout/modules/MailManager/Mainui.tpl" */ ?>
<?php /*%%SmartyHeaderCode:188282803452d2e2a67b8145-49977498%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42963a7b40dc8917081c2900ac088af294acbce6' => 
    array (
      0 => '/var/www/html/CRMProject/branches/crm_ga/includes/runtime/../../layouts/vlayout/modules/MailManager/Mainui.tpl',
      1 => 1389552105,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '188282803452d2e2a67b8145-49977498',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MAILBOX' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_52d2e2a680b20',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d2e2a680b20')) {function content_52d2e2a680b20($_smarty_tpl) {?>
<div id="_folderdiv_"><?php echo $_smarty_tpl->getSubTemplate ("modules/MailManager/FolderList.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div>
<input type="hidden" name="refresh_timeout" id="refresh_timeout" value="<?php echo $_smarty_tpl->tpl_vars['MAILBOX']->value->refreshTimeOut();?>
"/>
<?php }} ?>