<?php /* Smarty version Smarty-3.1.7, created on 2014-02-27 04:11:48
         compiled from "/var/www/html/CRMPlus/crmplus_ga_standard/includes/runtime/../../layouts/vlayout/modules/Google/ContentDetails.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1420176740530ebb04369381-95037523%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a33912a1bb0fa1a1793139eabd5b0944074c44fd' => 
    array (
      0 => '/var/www/html/CRMPlus/crmplus_ga_standard/includes/runtime/../../layouts/vlayout/modules/Google/ContentDetails.tpl',
      1 => 1392560529,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1420176740530ebb04369381-95037523',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'RECORDS' => 0,
    'type' => 0,
    'MODULE_NAME' => 0,
    'RECORD' => 0,
    'SYNCTIME' => 0,
    'NORECORDS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_530ebb045d00c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530ebb045d00c')) {function content_530ebb045d00c($_smarty_tpl) {?>
<div class="row-fluid paddingLeftRight10px">
    <?php  $_smarty_tpl->tpl_vars['RECORD'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['RECORD']->_loop = false;
 $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['RECORDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['RECORD']->key => $_smarty_tpl->tpl_vars['RECORD']->value){
$_smarty_tpl->tpl_vars['RECORD']->_loop = true;
 $_smarty_tpl->tpl_vars['type']->value = $_smarty_tpl->tpl_vars['RECORD']->key;
?>
        <?php if ($_smarty_tpl->tpl_vars['type']->value=='vtiger'){?>
            <div class='row-fluid'>
                <span class="span12"><b><?php echo vtranslate('LBL_UPDATES_CRM',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</b></span>
                <div class="row-fluid"><span class="span7 "> <?php echo vtranslate('LBL_ADDED',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
 :</span><span class='span5 '><?php echo $_smarty_tpl->tpl_vars['RECORD']->value['create'];?>
 </span></div>
                <div class="row-fluid"><span class="span7 "> <?php echo vtranslate('LBL_UPDATED',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
 :</span> <span class='span5 '><?php echo $_smarty_tpl->tpl_vars['RECORD']->value['update'];?>
 </span></div>
                <div class="row-fluid"><span class="span7 "> <?php echo vtranslate('LBL_DELETED',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
 :</span> <span class='span5 '><?php echo $_smarty_tpl->tpl_vars['RECORD']->value['delete'];?>
 </span></div>
                <?php if ($_smarty_tpl->tpl_vars['RECORD']->value['more']){?>
					<div class="row-fluid"><span style='background:#FFFBCF;' class="span11" title="<?php echo vtranslate('LBL_MORE_VTIGER',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"><?php echo vtranslate('LBL_MORE_VTIGER',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</span>
                <?php }?>    
            </div>
         <?php }else{ ?>
            <div class='row-fluid'> 
                <span class="span12"><b><?php echo vtranslate('LBL_UPDATES_GOOGLE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</b></span>
                <div class="row-fluid"><span class="span7 "> <?php echo vtranslate('LBL_ADDED',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
 :</span><span class='span5 '><?php echo $_smarty_tpl->tpl_vars['RECORD']->value['create'];?>
 </span></div>
                <div class="row-fluid"><span class="span7 "> <?php echo vtranslate('LBL_UPDATED',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
 :</span> <span class='span5 '><?php echo $_smarty_tpl->tpl_vars['RECORD']->value['update'];?>
 </span></div>
                <div class="row-fluid"><span class="span7 "> <?php echo vtranslate('LBL_DELETED',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
 :</span> <span class='span5 '><?php echo $_smarty_tpl->tpl_vars['RECORD']->value['delete'];?>
 </span></div>
                <?php if ($_smarty_tpl->tpl_vars['RECORD']->value['more']){?>
					<div class="row-fluid"><span style='background:#FFFBCF;' class="span11" title="<?php echo vtranslate('LBL_MORE_GOOGLE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"><?php echo vtranslate('LBL_MORE_GOOGLE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</span>
                <?php }?>
            </div>
         <?php }?>   
    <?php } ?>
    <div class='row-fluid'>
        <p class="muted span12"><small title="<?php echo Vtiger_Util_Helper::formatDateTimeIntoDayString($_smarty_tpl->tpl_vars['SYNCTIME']->value);?>
"><?php echo vtranslate('LBL_SYNCRONIZED',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
 : <?php echo Vtiger_Util_Helper::formatDateDiffInStrings($_smarty_tpl->tpl_vars['SYNCTIME']->value);?>
</small></p>
    </div>
<?php if ($_smarty_tpl->tpl_vars['NORECORDS']->value){?>
        <input type="hidden" value='yes' id ='norefresh'/>
<?php }?>      
</div>
      
    
<?php }} ?>