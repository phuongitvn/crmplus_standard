<?php
class AnalyticsPlus_Record_Model extends Vtiger_Record_Model {
	/**
	 * get all product
	 */
	public static function getProducts()
	{
		$data = array();
		$db = PearDatabase::getInstance();
		$sql = "SELECT * FROM vtiger_products";
		$result = $db->pquery($sql);
		while($row = $db->fetch_array($result)){
			$data[] = $row;
		}
		return $data;
	}
	public static function getRevenueInvoiceByProduct()
	{
		$products = self::getProducts();
		$revenue =array();
		if($products){
			foreach ($products as $item)
			{
				$result = array();
				$db = PearDatabase::getInstance();
				$sql = "SELECT sum(c1.total) as ds, date(c2.createdtime) as created_time
				FROM vtiger_invoice c1
				LEFT JOIN vtiger_crmentity c2 ON c1.invoiceid=c2.crmid
				LEFT JOIN vtiger_inventoryproductrel c3 ON c1.invoiceid=c3.id
				WHERE c2.deleted=0 AND c3.productid={$item['productid']}
				GROUP BY created_time
				";
				$result = $db->pquery($sql);
				while($row = $db->fetch_array($result)){
					$revenue[$item['productname']][] = array(strtotime($row['created_time'])*1000, round($row['ds'],2));
				}
			}
		}
		return $revenue;
	}
}