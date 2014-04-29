<?php /* Smarty version Smarty-3.1.7, created on 2014-02-27 04:18:01
         compiled from "/var/www/html/CRMPlus/crmplus_ga_standard/includes/runtime/../../layouts/vlayout/modules/Google/map.tpl" */ ?>
<?php /*%%SmartyHeaderCode:728268209530ebc79715283-59208132%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a69669b79af1c6eaede41b5fea25edbe36516c7b' => 
    array (
      0 => '/var/www/html/CRMPlus/crmplus_ga_standard/includes/runtime/../../layouts/vlayout/modules/Google/map.tpl',
      1 => 1392560529,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '728268209530ebc79715283-59208132',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'RECORD' => 0,
    'SOURCE_MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_530ebc7975636',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530ebc7975636')) {function content_530ebc7975636($_smarty_tpl) {?>
<script type="text/javascript" src="layouts/vlayout/modules/Google/resources/map.js"></script>

<span id="map_record" class="hide"><?php echo $_smarty_tpl->tpl_vars['RECORD']->value;?>
</span>
<span id="map_module" class="hide"><?php echo $_smarty_tpl->tpl_vars['SOURCE_MODULE']->value;?>
</span>
<div id="map_canvas">
    <span id="map_address" class="hide"></span>
    <img id="map_link" class="pull-right icon-share cursorPointer"></img>
</div>

<?php }} ?>