<?php /* Smarty version Smarty-3.1.7, created on 2014-01-15 16:05:23
         compiled from "E:\source\CRMProject\trunk\crmplus_ga\includes\runtime/../../layouts/vlayout\modules\AnalyticsPlus\list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2634952d6b1c39e0d22-58761218%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00e506ed2e8f625a5d3641715e4bf79fdfc8c330' => 
    array (
      0 => 'E:\\source\\CRMProject\\trunk\\crmplus_ga\\includes\\runtime/../../layouts/vlayout\\modules\\AnalyticsPlus\\list.tpl',
      1 => 1388589114,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2634952d6b1c39e0d22-58761218',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menuActive' => 0,
    'params' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_52d6b1c3a50ef',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d6b1c3a50ef')) {function content_52d6b1c3a50ef($_smarty_tpl) {?><link href="layouts/vlayout/skins/crmplus/css/analyticsplus.css" rel="stylesheet" /><script type="text/javascript" src="layouts/vlayout/skins/crmplus/js/menu_collapse.js"></script><div id="analytics"><table><tr><td width="200"><div class="anal-left"><div class="anal-menu"><div id="cssmenu" class="primary-nav nomargin navtoggle"><ul><li class="has-sub <?php if ($_smarty_tpl->tpl_vars['menuActive']->value=='g1'){?>active<?php }?>"><a href='#'><span class="glyphicon glyphicon-home"></span><span>Báo cáo doanh thu</span><i class="caret"></i></a><ul style="display: block;"><!-- <li><a>Doanh thu theo khách hàng</a></li><li><a>Doanh thu theo nhân viên</a></li> --><li><a href="index.php?module=AnalyticsPlus&view=List&type=r3">Doanh thu theo sản phẩm</a></li><li><a href="index.php?module=AnalyticsPlus&view=List&type=r4">Doanh thu theo thời gian</a></li><!-- <li><a>Doanh thu theo khu vực</a></li><li><a>Doanh thu theo hóa đơn</a></li> --></ul></li><!--<li class='has-sub <?php if ($_smarty_tpl->tpl_vars['menuActive']->value=='g2'){?>active<?php }?>'><a href='#'><span class="glyphicon glyphicon-user"></span><span>Báo cáo khách hàng</span><i class="caret"></i></a><ul <?php if ($_smarty_tpl->tpl_vars['menuActive']->value=='g2'){?>style="display: block;"<?php }?>><li><a>Tiềm năng thêm mới</a></li><li><a>Liên hệ nóng</a></li><li><a>Phân loại khách hàng</a></li><li><a>Phát triển khách hàng</a></li></ul></li><li><a href='#'><span class="glyphicon glyphicon-home"></span><span>Báo cáo nhân viên</span><i class="caret"></i></a><ul><li><a>Báo cáo công việc</a></li><li><a>Kế hoạch công việc</a></li><li><a>KPI công việc</a></li></ul></li><li><a href='#'><span class="glyphicon glyphicon-home"></span><span>Báo cáo cơ hội bán hàng</span><i class="caret"></i></a><ul><li><a>CHBH theo nhân viên</a></li><li><a>Phân tích CHBH thất bại</a></li><li><a>Thống kê báo giá</a></li></ul></li><li><a href='#'><span class="glyphicon glyphicon-home"></span><span>Báo cáo hỗ trợ</span></a></li>--></ul></div></div></div></td><td><div class="anal-right"><!-- <div class="anal-options"><div class="btn-group"><button class="btn dropdown-toggle" data-toggle="dropdown">Nhân viên&nbsp;<i class="caret"></i></button><ul class="dropdown-menu"><li><a>A</a></li><li><a>A</a></li><li><a>A</a></li></ul></div><div class="btn-group"><button class="btn dropdown-toggle" data-toggle="dropdown">Sản phẩm&nbsp;<i class="caret"></i></button><ul class="dropdown-menu"><li><a>A</a></li><li><a>A</a></li><li><a>A</a></li></ul></div><div class="btn-group"><button class="btn dropdown-toggle" data-toggle="dropdown">Thời gian&nbsp;<i class="caret"></i></button><ul class="dropdown-menu"><li><a>A</a></li><li><a>A</a></li><li><a>A</a></li></ul></div><div class="clear" ></div></div> --><?php echo $_smarty_tpl->getSubTemplate ("layouts/vlayout/modules/AnalyticsPlus/".($_smarty_tpl->tpl_vars['template']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('params'=>$_smarty_tpl->tpl_vars['params']->value,'title'=>$_smarty_tpl->tpl_vars['title']->value), 0);?>
</div></td></tr></table><div class="clear" ></div></div><script type="text/javascript" src="libraries/Highstock-1.3.7/js/highstock.src.js"></script><script type="text/javascript" src="libraries/Highstock-1.3.7/js/modules/exporting.js"></script><?php }} ?>