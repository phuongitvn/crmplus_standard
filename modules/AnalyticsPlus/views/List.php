<?php
/** License Text Here **/
class AnalyticsPlus_List_View extends Vtiger_Index_View {
	public function getHeaderScripts(Vtiger_Request $request) {
		$headerScriptInstances = parent::getHeaderScripts($request);
		$jsFileNames = array(
				"~/libraries/Highstock-1.3.7/highstock.js",
				"~/libraries/Highstock-1.3.7/modules/exporting.js"
		);
	
		$jsScriptInstances = $this->checkAndConvertJsScripts($jsFileNames);
		$headerScriptInstances = array_merge($headerScriptInstances, $jsScriptInstances);
		return $headerScriptInstances;
	}
	
	/* public function getHeaderCss(Vtiger_Request $request) {
		$headerCssInstances = parent::getHeaderCss($request);
	
	
		$cssFileNames = array(
				'~/libraries/fullcalendar/fullcalendar.css',
				'~/libraries/fullcalendar/fullcalendar-bootstrap.css'
		);
		$cssInstances = $this->checkAndConvertCssStyles($cssFileNames);
		$headerCssInstances = array_merge($headerCssInstances, $cssInstances);
	
		return $headerCssInstances;
	} */
	public function process(Vtiger_Request $request) {
		$viewer = $this->getViewer($request);
		$reportType = $request->get('type');
		switch ($reportType)
		{
			case 'r3'://báo cáo doanh thu theo sản phẩm
				$title = 'Báo cáo doanh thu theo sản phẩm';
				$template = 'reports3.tpl';
				$data = AnalyticsPlus_Record_Model::getRevenueInvoiceByProduct();
				foreach ($data as $key => $value){
					$series[] = array(
							'name'=>$key,
							'data'=>$value,
							'id'=>'dataseries',
							'color' => '#4572A7'
					);
				}
				$series = json_encode($series);
				$viewer->assign('series',$series);
				break;
			case 'r4'://báo cáo doanh thu theo thời gian
				$title = 'Báo cáo doanh thu theo thời gian';
				$template = 'reports4.tpl';
				break;
			default:
				$title = "Dashboard";
				$template = 'dashboard.tpl';
				break;
		}
		$params = array();
		$menuActive = $this->activeGroupMenu($reportType);
		$viewer->assign('params',$params);
		$viewer->assign('template',$template);
		$viewer->assign('type',$reportType);
		$viewer->assign('menuActive',$menuActive);
		$viewer->assign('title',$title);
		$viewer->view('list.tpl', $request->getModule());
	}
	private function activeGroupMenu($item)
	{
		if(empty($item)) return '';
		$group1 = array('r1','r2','r3','r4','r5','r6');
		$group2 = array('r7','r8','r9','r10');
		$group3 = array('r11','r12','r13');
		$group4 = array('r14','r15','r16');
		if(in_array($item, $group1)){
			return 'g1';
		}elseif(in_array($item, $group1))
		{
			return 'g2';
		}
		for($i=1; $i<=4; $i++){
			$g = "\$group".$i;
			if(in_array($item, $g)){
				return 'g'.$i;
				break;
			}
		}
		return '';
	}
	/**
	 * doanh thu theo thời gian
	 */
	private function getRevenueByTime()
	{
		
	}
}