<?php
class AnalyticsPlus_Reports_View extends Vtiger_Index_View {

	public function process(Vtiger_Request $request) {
		$viewer = $this->getViewer($request);
		$viewer->assign('template','reports.tpl');
		$viewer->view('reports.tpl', $request->getModule());
	}
}