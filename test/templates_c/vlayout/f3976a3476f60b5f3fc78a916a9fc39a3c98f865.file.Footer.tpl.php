<?php /* Smarty version Smarty-3.1.7, created on 2014-02-16 15:19:21
         compiled from "/var/www/html/CRMPlus/crmplus_ga_standard/includes/runtime/../../layouts/vlayout/modules/Vtiger/Footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9028711855300d6f9031143-92038940%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3976a3476f60b5f3fc78a916a9fc39a3c98f865' => 
    array (
      0 => '/var/www/html/CRMPlus/crmplus_ga_standard/includes/runtime/../../layouts/vlayout/modules/Vtiger/Footer.tpl',
      1 => 1392560530,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9028711855300d6f9031143-92038940',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ACTIVITY_REMINDER' => 0,
    'HEADER_LINKS' => 0,
    'MAIN_PRODUCT_SUPPORT' => 0,
    'MAIN_PRODUCT_WHITELABEL' => 0,
    'FIRSTHEADERLINK' => 0,
    'FIRSTHEADERLINKCHILDRENS' => 0,
    'FEEDBACKLINKMODEL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5300d6f9090e6',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5300d6f9090e6')) {function content_5300d6f9090e6($_smarty_tpl) {?>
<input id='activityReminder' class='hide noprint' type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['ACTIVITY_REMINDER']->value;?>
"/><?php if ($_smarty_tpl->tpl_vars['HEADER_LINKS']->value&&$_smarty_tpl->tpl_vars['MAIN_PRODUCT_SUPPORT']->value&&!$_smarty_tpl->tpl_vars['MAIN_PRODUCT_WHITELABEL']->value){?><?php $_smarty_tpl->tpl_vars["FIRSTHEADERLINK"] = new Smarty_variable($_smarty_tpl->tpl_vars['HEADER_LINKS']->value[0], null, 0);?><?php $_smarty_tpl->tpl_vars["FIRSTHEADERLINKCHILDRENS"] = new Smarty_variable($_smarty_tpl->tpl_vars['FIRSTHEADERLINK']->value->get('childlinks'), null, 0);?><?php $_smarty_tpl->tpl_vars["FEEDBACKLINKMODEL"] = new Smarty_variable($_smarty_tpl->tpl_vars['FIRSTHEADERLINKCHILDRENS']->value[2], null, 0);?><div id="userfeedback" class="feedback noprint"><a href="javascript:;" onclick="<?php echo $_smarty_tpl->tpl_vars['FEEDBACKLINKMODEL']->value->get('linkurl');?>
" class="handle"><?php echo vtranslate("LBL_FEEDBACK","Vtiger");?>
</a></div><?php }?><?php if (!$_smarty_tpl->tpl_vars['MAIN_PRODUCT_WHITELABEL']->value){?><footer class="noprint"><div class="vtFooter"><p>Bản quyền phát triển bởi CRM+ &nbsp;&copy; 2013 - 2014 &nbsp;&nbsp;</p></div></footer><?php }?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('JSResources.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></body></html><?php }} ?>