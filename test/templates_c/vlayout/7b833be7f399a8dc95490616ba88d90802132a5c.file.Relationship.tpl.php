<?php /* Smarty version Smarty-3.1.7, created on 2014-02-27 04:13:51
         compiled from "/var/www/html/CRMPlus/crmplus_ga_standard/includes/runtime/../../layouts/vlayout/modules/MailManager/Relationship.tpl" */ ?>
<?php /*%%SmartyHeaderCode:648387487530ebb7f4109c1-96805047%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b833be7f399a8dc95490616ba88d90802132a5c' => 
    array (
      0 => '/var/www/html/CRMPlus/crmplus_ga_standard/includes/runtime/../../layouts/vlayout/modules/MailManager/Relationship.tpl',
      1 => 1392560529,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '648387487530ebb7f4109c1-96805047',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LINKEDTO' => 0,
    'moduleName' => 0,
    'LinkToAvailableActions' => 0,
    'MODULE' => 0,
    'LOOKUPS' => 0,
    'RECORDS' => 0,
    'RECORD' => 0,
    'MODULES' => 0,
    'SINGLE_MODLABEL' => 0,
    'LOOKRECATLEASTONE' => 0,
    'AllowedModules' => 0,
    'FOLDER' => 0,
    'MSGNO' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_530ebb7f81ab1',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530ebb7f81ab1')) {function content_530ebb7f81ab1($_smarty_tpl) {?>
<form method="POST" action="javascript:void(0);" style="display:inline;" name="relationship"><?php if ($_smarty_tpl->tpl_vars['LINKEDTO']->value){?><table width="100%" cellpadding="2px" cellspacing=0 border=0><tr><td width="4px"><input type="radio" name="_mlinkto" value="<?php echo $_smarty_tpl->tpl_vars['LINKEDTO']->value['record'];?>
"></td><td><?php echo $_smarty_tpl->tpl_vars['LINKEDTO']->value['detailviewlink'];?>
</td><td><?php echo getTranslatedString($_smarty_tpl->tpl_vars['LINKEDTO']->value['module'],$_smarty_tpl->tpl_vars['moduleName']->value);?>
</td></tr><tr><td align="center" colspan="3"><?php if (count($_smarty_tpl->tpl_vars['LinkToAvailableActions']->value)!=0){?><select class="small" onchange="MailManager.mail_associate_actions(this.form);" name="_mlinktotype"  id="_mlinktotype"><option value="" class="mm_blur"><?php echo vtranslate('LBL_ACTIONS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><?php  $_smarty_tpl->tpl_vars['moduleName'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['moduleName']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LinkToAvailableActions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['moduleName']->key => $_smarty_tpl->tpl_vars['moduleName']->value){
$_smarty_tpl->tpl_vars['moduleName']->_loop = true;
?><option value="<?php echo $_smarty_tpl->tpl_vars['moduleName']->value;?>
"><?php echo getTranslatedString("LBL_MAILMANAGER_ADD_".($_smarty_tpl->tpl_vars['moduleName']->value),'MailManager');?>
</option><?php } ?></select><?php }?></td></tr></table><?php }?><?php if ($_smarty_tpl->tpl_vars['LOOKUPS']->value){?><?php $_smarty_tpl->tpl_vars["LOOKRECATLEASTONE"] = new Smarty_variable(false, null, 0);?><table width="100%" cellpadding=3 cellspacing=0 border=0><?php  $_smarty_tpl->tpl_vars['RECORDS'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['RECORDS']->_loop = false;
 $_smarty_tpl->tpl_vars['MODULE'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['LOOKUPS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['RECORDS']->key => $_smarty_tpl->tpl_vars['RECORDS']->value){
$_smarty_tpl->tpl_vars['RECORDS']->_loop = true;
 $_smarty_tpl->tpl_vars['MODULE']->value = $_smarty_tpl->tpl_vars['RECORDS']->key;
?><?php  $_smarty_tpl->tpl_vars['RECORD'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['RECORD']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['RECORDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['RECORD']->key => $_smarty_tpl->tpl_vars['RECORD']->value){
$_smarty_tpl->tpl_vars['RECORD']->_loop = true;
?><?php $_smarty_tpl->tpl_vars["LOOKRECATLEASTONE"] = new Smarty_variable(true, null, 0);?><tr><td><input type="radio" name="_mlinkto" value="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value['id'];?>
" style="align: absmiddle;"></td><td align=left><a target="_blank" href="vtiger6/index.php?module=<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
&view=Detail&record=<?php echo $_smarty_tpl->tpl_vars['RECORD']->value['id'];?>
"><?php echo textlength_check($_smarty_tpl->tpl_vars['RECORD']->value['label']);?>
</a></td><td align=right><?php $_smarty_tpl->tpl_vars['RECORD_MODNAME'] = new Smarty_variable($_smarty_tpl->tpl_vars['MODULES']->value[$_smarty_tpl->tpl_vars['MODULE']->value]['name'], null, 0);?><?php $_smarty_tpl->tpl_vars["SINGLE_MODLABEL"] = new Smarty_variable("SINGLE_".($_smarty_tpl->tpl_vars['RECORD_MODNAME']->value), null, 0);?><?php echo getTranslatedString($_smarty_tpl->tpl_vars['SINGLE_MODLABEL']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</td></tr><?php } ?><?php } ?><?php if ($_smarty_tpl->tpl_vars['LOOKRECATLEASTONE']->value){?><tr><td colspan="3" align="center"><?php if (count($_smarty_tpl->tpl_vars['LinkToAvailableActions']->value)!=0){?><select class="small" onchange="MailManager.mail_associate_actions(this.form);" name="_mlinktotype"  id="_mlinktotype"><option value="" class="mm_blur"><?php echo vtranslate('LBL_ACTIONS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><?php  $_smarty_tpl->tpl_vars['moduleName'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['moduleName']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LinkToAvailableActions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['moduleName']->key => $_smarty_tpl->tpl_vars['moduleName']->value){
$_smarty_tpl->tpl_vars['moduleName']->_loop = true;
?><option value="<?php echo $_smarty_tpl->tpl_vars['moduleName']->value;?>
"><?php echo getTranslatedString("LBL_MAILMANAGER_ADD_".($_smarty_tpl->tpl_vars['moduleName']->value),'MailManager');?>
</option><?php } ?></select><?php }?></td></tr><?php }else{ ?><tr><td align="center" colspan=3><?php echo vtranslate('LBL_No_Matching_Record_Found','MailManager');?>
<br/><?php if (count($_smarty_tpl->tpl_vars['AllowedModules']->value)!=0){?><select class="small" onchange="MailManager.mail_associate_create_wizard(this.form);" name="_mlinktotype"  id="_mlinktotype"><option value="" class="mm_blur"><?php echo vtranslate('LBL_ACTIONS','MailManager');?>
</option><?php  $_smarty_tpl->tpl_vars['moduleName'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['moduleName']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['AllowedModules']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['moduleName']->key => $_smarty_tpl->tpl_vars['moduleName']->value){
$_smarty_tpl->tpl_vars['moduleName']->_loop = true;
?><option value="<?php echo $_smarty_tpl->tpl_vars['moduleName']->value;?>
"><?php echo getTranslatedString("LBL_MAILMANAGER_ADD_".($_smarty_tpl->tpl_vars['moduleName']->value),'MailManager');?>
</option><?php } ?></select><?php }?></td></tr><?php }?></table><?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['LINKEDTO']->value==''){?><table width="100%" cellpadding=0 cellspacing=0 border=0><tr><td align="center" colspan=3><?php echo vtranslate('LBL_No_Matching_Record_Found','MailManager');?>
<br/><?php if (count($_smarty_tpl->tpl_vars['AllowedModules']->value)!=0){?><select class="small" onchange="MailManager.mail_associate_create_wizard(this.form);" name="_mlinktotype"  id="_mlinktotype"><option value="" class="mm_blur"><?php echo vtranslate('LBL_ACTIONS','MailManager');?>
</option><?php  $_smarty_tpl->tpl_vars['moduleName'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['moduleName']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['AllowedModules']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['moduleName']->key => $_smarty_tpl->tpl_vars['moduleName']->value){
$_smarty_tpl->tpl_vars['moduleName']->_loop = true;
?><option value="<?php echo $_smarty_tpl->tpl_vars['moduleName']->value;?>
"><?php echo getTranslatedString("LBL_MAILMANAGER_ADD_".($_smarty_tpl->tpl_vars['moduleName']->value),'MailManager');?>
</option><?php } ?></select><?php }?></td></tr></table><?php }?><?php }?><input type="hidden" class="small" name="_folder" value="<?php echo $_smarty_tpl->tpl_vars['FOLDER']->value;?>
"><input type="hidden" class="small" name="_msgno" value="<?php echo $_smarty_tpl->tpl_vars['MSGNO']->value;?>
"></form><?php }} ?>