<?php /* Smarty version Smarty-3.1.7, created on 2014-01-12 18:42:06
         compiled from "/var/www/html/CRMProject/branches/crm_ga/includes/runtime/../../layouts/vlayout/modules/Install/Step7.tpl" */ ?>
<?php /*%%SmartyHeaderCode:114503524852d2e1fe9dd100-75071401%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '929ad4e45d8f6f76b0c1f620f4fb9c385c054483' => 
    array (
      0 => '/var/www/html/CRMProject/branches/crm_ga/includes/runtime/../../layouts/vlayout/modules/Install/Step7.tpl',
      1 => 1387207562,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '114503524852d2e1fe9dd100-75071401',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'APPUNIQUEKEY' => 0,
    'CURRENT_VERSION' => 0,
    'INDUSTRY' => 0,
    'PASSWORD' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_52d2e1feda016',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d2e1feda016')) {function content_52d2e1feda016($_smarty_tpl) {?>

<center><?php echo vtranslate('LBL_LOADING_PLEASE_WAIT');?>
...</center>

<form class="form-horizontal" name="step7" method="post" action="?module=Users&action=Login">
	<img src="//stats.vtiger.com/stats.php?uid=<?php echo $_smarty_tpl->tpl_vars['APPUNIQUEKEY']->value;?>
&v=<?php echo $_smarty_tpl->tpl_vars['CURRENT_VERSION']->value;?>
&type=I&industry=<?php echo urlencode($_smarty_tpl->tpl_vars['INDUSTRY']->value);?>
" alt='' title='' border=0 width='1px' height='1px'>
	<input type=hidden name="username" value="admin" >
	<input type=hidden name="password" value="<?php echo $_smarty_tpl->tpl_vars['PASSWORD']->value;?>
" >
</form>
<script type="text/javascript">
	jQuery(function() { /* Delay to let page load complete */ setTimeout(function() { jQuery('form[name="step7"]').submit(); }, 150); });
</script>
<?php }} ?>