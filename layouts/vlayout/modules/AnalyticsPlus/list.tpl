{strip}
<link href="layouts/vlayout/skins/crmplus/css/analyticsplus.css" rel="stylesheet" />
<script type="text/javascript" src="layouts/vlayout/skins/crmplus/js/menu_collapse.js"></script>
<div id="analytics">
<table>
	<tr>
		<td width="200">
			<div class="anal-left">
				<div class="anal-menu">
					<div id="cssmenu" class="primary-nav nomargin navtoggle">
						<ul>
						   <li class="has-sub {if $menuActive eq 'g1'}active{/if}"><a href='#'>
							   <span class="glyphicon glyphicon-home"></span>
							   <span>Báo cáo doanh thu</span>
							   <i class="caret"></i>
							   </a>
							   <ul style="display: block;">
							   		<!-- <li><a>Doanh thu theo khách hàng</a></li>
							   		<li><a>Doanh thu theo nhân viên</a></li> -->
							   		<li><a href="index.php?module=AnalyticsPlus&view=List&type=r3">Doanh thu theo sản phẩm</a></li>
							   		<li><a href="index.php?module=AnalyticsPlus&view=List&type=r4">Doanh thu theo thời gian</a></li>
							   		<!-- <li><a>Doanh thu theo khu vực</a></li>
							   		<li><a>Doanh thu theo hóa đơn</a></li> -->
							   </ul>
						   </li>
						   <!--<li class='has-sub {if $menuActive eq 'g2'}active{/if}'>
							   <a href='#'>
								   <span class="glyphicon glyphicon-user"></span>
								   <span>Báo cáo khách hàng</span>
								   <i class="caret"></i>
							   </a>
							   <ul {if $menuActive eq 'g2'}style="display: block;"{/if}>
							   		<li><a>Tiềm năng thêm mới</a></li>
							   		<li><a>Liên hệ nóng</a></li>
							   		<li><a>Phân loại khách hàng</a></li>
							   		<li><a>Phát triển khách hàng</a></li>
							   </ul>
							</li>
							<li><a href='#'>
							   <span class="glyphicon glyphicon-home"></span>
							   <span>Báo cáo nhân viên</span>
							   <i class="caret"></i>
							   </a>
							   <ul>
							   		<li><a>Báo cáo công việc</a></li>
							   		<li><a>Kế hoạch công việc</a></li>
							   		<li><a>KPI công việc</a></li>
							   </ul>
						   </li>
							<li><a href='#'>
							   <span class="glyphicon glyphicon-home"></span>
							   <span>Báo cáo cơ hội bán hàng</span>
							   <i class="caret"></i>
							   </a>
							   <ul>
							   		<li><a>CHBH theo nhân viên</a></li>
							   		<li><a>Phân tích CHBH thất bại</a></li>
							   		<li><a>Thống kê báo giá</a></li>
							   </ul>
						   </li>
							<li><a href='#'>
							   <span class="glyphicon glyphicon-home"></span>
							   <span>Báo cáo hỗ trợ</span></a>
						   </li>-->
						</ul>
					</div>
				</div>
			</div>
		</td>
		<td>
			<div class="anal-right">
				<!-- <div class="anal-options">
					<div class="btn-group">
						<button class="btn dropdown-toggle" data-toggle="dropdown">Nhân viên&nbsp;<i class="caret"></i></button>
						<ul class="dropdown-menu">
							<li><a>A</a></li>
							<li><a>A</a></li>
							<li><a>A</a></li>
						</ul>
					</div>
					<div class="btn-group">
						<button class="btn dropdown-toggle" data-toggle="dropdown">Sản phẩm&nbsp;<i class="caret"></i></button>
						<ul class="dropdown-menu">
							<li><a>A</a></li>
							<li><a>A</a></li>
							<li><a>A</a></li>
						</ul>
					</div>
					<div class="btn-group">
						<button class="btn dropdown-toggle" data-toggle="dropdown">Thời gian&nbsp;<i class="caret"></i></button>
						<ul class="dropdown-menu">
							<li><a>A</a></li>
							<li><a>A</a></li>
							<li><a>A</a></li>
						</ul>
					</div>
					<div class="clear" ></div>
				</div> -->
				{include file="layouts/vlayout/modules/AnalyticsPlus/$template" params=$params title=$title}
			</div>
		</td>
	</tr>
</table>
	<div class="clear" ></div>
</div>
<script type="text/javascript" src="libraries/Highstock-1.3.7/js/highstock.src.js"></script>
<script type="text/javascript" src="libraries/Highstock-1.3.7/js/modules/exporting.js"></script>
{/strip}