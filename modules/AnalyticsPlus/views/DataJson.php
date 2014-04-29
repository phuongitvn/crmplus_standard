<?php
class AnalyticsPlus_DataJson_View extends Vtiger_Index_View {
	public function process(Vtiger_Request $request) {
		$viewer = $this->getViewer($request);
		$reportType = $request->get('type');
		switch ($reportType)
		{
			case 'r3':
				$result = $this->getRevenueInvoiceByProduct();
				break;
			case 'r4':
				$result = $this->getRevenueInvoiceByTime();
				break;
		}
		echo json_encode($result);
		exit();
	}
	private function getRevenueInvoiceByTime()
	{
		$result = array();
		$db = PearDatabase::getInstance();
		$sql = "SELECT sum(c1.total) as dst, date(c2.createdtime) as created_time
				FROM vtiger_invoice c1
				LEFT JOIN vtiger_crmentity c2 ON c1.invoiceid=c2.crmid
				WHERE c2.deleted=0
				GROUP BY created_time
				";
		$result = $db->pquery($sql);
		while($data = $db->fetch_array($result)){
			$revenue['DST'][] = array(strtotime($data['created_time'])*1000, round($data['dst'],2));
			//$revenue['DSK'][] = array(strtotime($data['created_time'])*1000, round($data['dst']*2,2));
		}
		return $revenue;
	}
}