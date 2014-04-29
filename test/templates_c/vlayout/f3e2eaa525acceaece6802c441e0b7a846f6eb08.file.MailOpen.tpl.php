<?php /* Smarty version Smarty-3.1.7, created on 2014-02-27 04:13:48
         compiled from "/var/www/html/CRMPlus/crmplus_ga_standard/includes/runtime/../../layouts/vlayout/modules/MailManager/MailOpen.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1710410242530ebb7ca673c1-72759526%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3e2eaa525acceaece6802c441e0b7a846f6eb08' => 
    array (
      0 => '/var/www/html/CRMPlus/crmplus_ga_standard/includes/runtime/../../layouts/vlayout/modules/MailManager/MailOpen.tpl',
      1 => 1392560529,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1710410242530ebb7ca673c1-72759526',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'FOLDER' => 0,
    'MAIL' => 0,
    'MODULE' => 0,
    'SENDER' => 0,
    'RECEPIENT' => 0,
    'CC' => 0,
    'BCC' => 0,
    'ATTACHMENTS' => 0,
    'ATTACHNAME' => 0,
    'INLINE_ATT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_530ebb7d0b4ab',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530ebb7d0b4ab')) {function content_530ebb7d0b4ab($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/var/www/html/CRMPlus/crmplus_ga_standard/libraries/Smarty/libs/plugins/modifier.escape.php';
?>

<div class="detailViewContainer" id="open_email_con" name="open_email_con"><div class="row-fluid detailViewTitle"><div class="span12"><div class="row-fluid"><div class="span10"><a href='javascript:void(0);' class="pull-left" onclick="MailManager.mail_close();"><b style="font-size:14px">&#171; <?php echo $_smarty_tpl->tpl_vars['FOLDER']->value->name();?>
</b></a><span class="recordLabel font-x-x-large textOverflowEllipsis span" style="width:90%;" id="_mailopen_subject"><?php echo $_smarty_tpl->tpl_vars['MAIL']->value->subject();?>
</span></div><div class="span2 detailViewPagingButton"><span class="btn-group pull-right"><?php if ($_smarty_tpl->tpl_vars['MAIL']->value->msgno()<$_smarty_tpl->tpl_vars['FOLDER']->value->count()){?><button class="btn" onclick="MailManager.mail_open( '<?php echo $_smarty_tpl->tpl_vars['FOLDER']->value->name();?>
', <?php echo $_smarty_tpl->tpl_vars['MAIL']->value->msgno(1);?>
 );"><span class="icon-chevron-left"></span></button><?php }?><?php if ($_smarty_tpl->tpl_vars['MAIL']->value->msgno()>1){?><button class="btn" onclick="MailManager.mail_open( '<?php echo $_smarty_tpl->tpl_vars['FOLDER']->value->name();?>
', <?php echo $_smarty_tpl->tpl_vars['MAIL']->value->msgno(-1);?>
 );"><span class="icon-chevron-right"></span></button><?php }?></span></div></div><div class="row-fluid"><div class="span12 btn-group">&nbsp;<button class="btn" onclick="MailManager.mail_reply(true);"><?php echo vtranslate('LBL_Reply_All',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button>&nbsp;<button class="btn" onclick="MailManager.mail_reply(false);"><?php echo vtranslate('LBL_Reply',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button>&nbsp;<button class="btn" onclick="MailManager.mail_forward(<?php echo $_smarty_tpl->tpl_vars['MAIL']->value->msgno();?>
);"><?php echo vtranslate('LBL_Forward',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button>&nbsp;<button class="btn" onclick="MailManager.mail_mark_unread('<?php echo $_smarty_tpl->tpl_vars['FOLDER']->value->name();?>
', <?php echo $_smarty_tpl->tpl_vars['MAIL']->value->msgno();?>
);"><?php echo vtranslate('LBL_Mark_As_Unread',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button>&nbsp;<button class="btn" id = 'mail_delete_dtlview' class="small" onclick="MailManager.maildelete('<?php echo $_smarty_tpl->tpl_vars['FOLDER']->value->name();?>
',<?php echo $_smarty_tpl->tpl_vars['MAIL']->value->msgno();?>
,true);"><?php echo vtranslate('LBL_Delete',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button>&nbsp;<button class="btn" onclick="MailManager.mail_print();"><?php echo vtranslate('LBL_Print',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button></div></div></div></div><div class="detailViewInfo row-fluid"><div class="span12 details"><div class="contents"><div class="row-fluid"><div class="span7"><div class="summaryWidgetContainer"><span id="_mailopen_msgid_" style="display:none;"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['MAIL']->value->_uniqueid, 'UTF-8');?>
</span><table width="100%" cellpadding=2 cellspacing=0 border=0 class="small"><tr><td width="100px" align=right><?php echo getTranslatedString('LBL_FROM');?>
:</td><td id="_mailopen_from"><?php  $_smarty_tpl->tpl_vars['SENDER'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['SENDER']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['MAIL']->value->from(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['SENDER']->key => $_smarty_tpl->tpl_vars['SENDER']->value){
$_smarty_tpl->tpl_vars['SENDER']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['SENDER']->value;?>
<?php } ?></td></tr><?php if ($_smarty_tpl->tpl_vars['MAIL']->value->to()){?><tr><td width="100px" align=right><?php echo vtranslate('LBL_TO',$_smarty_tpl->tpl_vars['MODULE']->value);?>
:</td><td id="_mailopen_to"><?php  $_smarty_tpl->tpl_vars['RECEPIENT'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['RECEPIENT']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['MAIL']->value->to(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["TO"]['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['RECEPIENT']->key => $_smarty_tpl->tpl_vars['RECEPIENT']->value){
$_smarty_tpl->tpl_vars['RECEPIENT']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["TO"]['index']++;
?><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['TO']['index']>0){?>, <?php }?><?php echo $_smarty_tpl->tpl_vars['RECEPIENT']->value;?>
<?php } ?></td></tr><?php }?><?php if ($_smarty_tpl->tpl_vars['MAIL']->value->cc()){?><tr><td width="100px" align=right><?php echo vtranslate('LBL_CC',$_smarty_tpl->tpl_vars['MODULE']->value);?>
:</td><td id="_mailopen_cc"><?php  $_smarty_tpl->tpl_vars['CC'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['CC']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['MAIL']->value->cc(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["CC"]['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['CC']->key => $_smarty_tpl->tpl_vars['CC']->value){
$_smarty_tpl->tpl_vars['CC']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["CC"]['index']++;
?><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['CC']['index']>0){?>, <?php }?><?php echo $_smarty_tpl->tpl_vars['CC']->value;?>
<?php } ?></td></tr><?php }?><?php if ($_smarty_tpl->tpl_vars['MAIL']->value->bcc()){?><tr><td width="100px" align=right><?php echo vtranslate('LBL_BCC',$_smarty_tpl->tpl_vars['MODULE']->value);?>
:</td><td id="_mailopen_bcc"><?php  $_smarty_tpl->tpl_vars['BCC'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['BCC']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['MAIL']->value->bcc(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["BCC"]['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['BCC']->key => $_smarty_tpl->tpl_vars['BCC']->value){
$_smarty_tpl->tpl_vars['BCC']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["BCC"]['index']++;
?><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['BCC']['index']>0){?>, <?php }?><?php echo $_smarty_tpl->tpl_vars['BCC']->value;?>
<?php } ?></td></tr><?php }?><tr><td width="100px" align=right><?php echo vtranslate('LBL_Date',$_smarty_tpl->tpl_vars['MODULE']->value);?>
:</td><td id="_mailopen_date"><?php echo $_smarty_tpl->tpl_vars['MAIL']->value->date();?>
</td></tr><?php if ($_smarty_tpl->tpl_vars['ATTACHMENTS']->value){?><tr><td width="100px" align=right><?php echo vtranslate('LBL_Attachments',$_smarty_tpl->tpl_vars['MODULE']->value);?>
:</td><td><?php  $_smarty_tpl->tpl_vars['ATTACHVALUE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ATTACHVALUE']->_loop = false;
 $_smarty_tpl->tpl_vars['ATTACHNAME'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ATTACHMENTS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['ATTACHVALUE']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["attach"]['total'] = $_smarty_tpl->tpl_vars['ATTACHVALUE']->total;
foreach ($_from as $_smarty_tpl->tpl_vars['ATTACHVALUE']->key => $_smarty_tpl->tpl_vars['ATTACHVALUE']->value){
$_smarty_tpl->tpl_vars['ATTACHVALUE']->_loop = true;
 $_smarty_tpl->tpl_vars['ATTACHNAME']->value = $_smarty_tpl->tpl_vars['ATTACHVALUE']->key;
?><?php if ($_smarty_tpl->tpl_vars['INLINE_ATT']->value[$_smarty_tpl->tpl_vars['ATTACHNAME']->value]==null){?><img border=0 src="<?php echo vimage_path('attachments.gif');?>
"><a href="index.php?module=<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
&action=<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
Ajax&file=index&_operation=mail&_operationarg=attachment_dld&_muid=<?php echo $_smarty_tpl->tpl_vars['MAIL']->value->muid();?>
&_atname=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['ATTACHNAME']->value, 'htmlall', 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['ATTACHNAME']->value;?>
</a>&nbsp;<?php }?><?php } ?><input type="hidden" id="_mail_attachmentcount_" value="<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['attach']['total'];?>
" ></td></tr><?php }?></table></div></div><div class="span5"><div class="summaryWidgetContainer"><?php echo vtranslate('LBL_RELATED_RECORDS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<button class="small" id="_mailrecord_findrel_btn_" onclick="MailManager.mail_find_relationship();"><?php echo vtranslate('JSLBL_Find_Relation_Now',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button><div id="_mailrecord_relationshipdiv_"></div></div></div></div><table class="table table-bordered equalSplit detailview-table"><tbody><tr><td><div class='mm_body' id="_mailopen_body"><?php echo $_smarty_tpl->tpl_vars['MAIL']->value->body();?>
</div></td></tr></tbody></table></div></div></div></div><?php }} ?>