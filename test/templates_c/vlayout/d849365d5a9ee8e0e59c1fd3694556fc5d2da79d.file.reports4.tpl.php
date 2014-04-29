<?php /* Smarty version Smarty-3.1.7, created on 2014-01-15 16:05:29
         compiled from "layouts\vlayout\modules\AnalyticsPlus\reports4.tpl" */ ?>
<?php /*%%SmartyHeaderCode:322552d6b1c944c415-23923624%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd849365d5a9ee8e0e59c1fd3694556fc5d2da79d' => 
    array (
      0 => 'layouts\\vlayout\\modules\\AnalyticsPlus\\reports4.tpl',
      1 => 1388083559,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '322552d6b1c944c415-23923624',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_52d6b1c95f8b6',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d6b1c95f8b6')) {function content_52d6b1c95f8b6($_smarty_tpl) {?><script type="text/javascript">
$(function() {

	$.getJSON('index.php?module=AnalyticsPlus&view=DataJson&type=r4', function(data) {
		// Create the chart
		$('#container').highcharts('StockChart', {
			chart:{
                height: 500
                ,
                events: {
                    redraw: function() {
                        //getDSTT(data);
                    }
                }

            },
            legend: {
                enabled: true,
                backgroundColor: '#FCFFC5',
                borderColor: '#F75E88',
                borderWidth: 2,
                shadow: true
            },
			rangeSelector: {
                buttonSpacing: 5,
                inputDateFormat: '%e/%m/%Y',
                buttonTheme: { // styles for the buttons
                    width:70
                },
                buttons: [{
                    type: 'month',
                    count: 1,
                    text: 'Trong tháng'
                }, {
                    type: 'month',
                    count: 3,
                    text: 'Trong quý'
                }, {
                    type: 'ytd',
                    text: 'Từ đầu năm'
                }, {
                    type: 'year',
                    count: 2,
                    text: '2 năm'
                },{
                    type: 'year',
                    count: 3,
                    text: '3 năm'
                },{
                    type: 'year',
                    count: 5,
                    text: '5 năm'
                }, {
                    type: 'all',
                    text: 'Tất cả'
                }],
                inputStyle: {
                    color: '#039'
                },
                labelStyle: {
                    fontWeight: 'bold'
                },
                selected: 0
            },

			title : {
				text : '<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
'
			},
			xAxis: {
                type: 'date'
            },

            yAxis : {
                title : {
                    text : 'VNĐ'
                }
            },
            tooltip: {
                style: {
                    width: '200px'
                },
                valueDecimals: 0,
                valueSuffix: 'VNĐ'

            },
            series : [{
                name : 'DSK',
                data : data.DSK,
                id : 'dataseries',
                color: '#4572A7'
            },{
                name : 'DST',
                data : data.DST,
                id : 'dataseries',
                color: '#8cc928'
            }]
			/* series : [{
				name : 'VND',
				data : data,
				tooltip: {
					valueDecimals: 2
				}
			}] */
		});
	});

});
function getDSTT(data){
    var time_min = $(".highcharts-input-group g:eq(1)").find("tspan").text();
    var time_max = $(".highcharts-input-group g:eq(3)").find("tspan").text();
    var n = time_min.split("/");
    time_min = Date.UTC(parseInt(n[2]), parseInt(n[1]-1), parseInt(n[0]));
    var m = time_max.split("/");
    time_max = Date.UTC(parseInt(m[2]),parseInt(m[1]-1),parseInt(m[0]+1));
    var dsk = 0;
    var dst = 0;
    if(data.DSK){
        var arr = [];
        for(var i = 0; i <= (data.DSK.length-1); i++){
            if( (time_min< data.DSK[i][0] )&& (data.DSK[i][0] < time_max)){
                arr.push(i);
            }
        }
        if(arr.length){
            if(arr[0] >= 1){
                dsk = data.DSK[arr[arr.length-1]][1]-data.DSK[arr[0]-1][1];
            }
            else{
                dsk = data.DSK[arr[arr.length-1]][1];
            }
        }
    }
    if(data.DST){
        var arr = [];
        for(var i = 0; i <= (data.DST.length-1); i++){
            if( (time_min<= data.DST[i][0] )&& (data.DST[i][0] <= time_max)){
                arr.push(i);
            }
        }
        if(arr.length){
            if(arr[0] >= 1){
                dst = data.DST[arr[arr.length-1]][1]-data.DST[arr[0]-1][1];
            }
            else{
                dst = data.DST[arr[arr.length-1]][1];
            }
        }
    }
    $(".view_dsk span:first-child").text(dsk);
    $(".view_dst span:first-child").text(dst);
}
		</script>
<div id="container" style="height: 500px; min-width: 500px"></div><?php }} ?>