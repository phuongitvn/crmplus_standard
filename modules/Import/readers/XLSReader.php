<?php
/*+***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 *************************************************************************************/
//error_reporting(E_ALL ^ E_NOTICE);
require 'excel_reader2.php';
class Import_XLSReader_Reader extends Import_FileReader_Reader {
	public static $keyword = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T');
	public function getFirstRowData($hasHeader=true) {
		global $default_charset;
		$fileHandler = $this->getFileHandler();
		$filePath = $this->getFilePath();
		$headers = array();
		$firstRowData = array();
		$currentRow = 0;
		$data = new Spreadsheet_Excel_Reader($filePath, true, 'UTF-8');
		$char = self::$keyword;
		$fl=true;
		$headers = $firstRowData = array();
		$j=1;
		$charColumn = array();
		foreach ($char as $key => $value){
			$val = $data->val(1,$value);
			if($val!=''){
				$charColumn[]=$value;
			}else{
				break;
			}
		}
		for($i=0; $i<count($charColumn); $i++){
			$val = $data->val(1,$char[$i]);
			$headers[]=$data->val(1,$char[$i]);
			$firstRowData[]=$data->val(2,$char[$i]);
		}
		if($hasHeader) {
			$noOfHeaders = count($headers);
			$noOfFirstRowData = count($firstRowData);
			// Adjust first row data to get in sync with the number of headers
			if($noOfHeaders > $noOfFirstRowData) {
				$firstRowData = array_merge($firstRowData, array_fill($noOfFirstRowData, $noOfHeaders-$noOfFirstRowData, ''));
			} elseif($noOfHeaders < $noOfFirstRowData) {
				$firstRowData = array_slice($firstRowData, 0, count($headers), true);
			}
			$rowData = array_combine($headers, $firstRowData);
		} else {
			$rowData = $firstRowData;
		}
		unset($fileHandler);
		return $rowData;
	}

	public function read() {
		global $default_charset;
		$filePath = $this->getFilePath();
		$fileHandler = $this->getFileHandler();
		$status = $this->createTable();
		if(!$status) {
			return false;
		}
		$fieldMapping = $this->request->get('field_mapping');

		$data = new Spreadsheet_Excel_Reader($filePath,true, 'UTF-8');
		$char = self::$keyword;
		$i=0;
		$j=0;
		$flag=true;
		while($flag)
		{
			$i++;
			if($this->request->get('has_header') && $i == 1) continue;
			$mappedData = array();
			$allValuesEmpty = true;
			foreach($fieldMapping as $fieldName => $index) {
				$fieldValue = $data->val($i,$char[$index]);//column A<=>first name, b<=>last name
				$mappedData[$fieldName] = $fieldValue;
				if($this->request->get('file_encoding') != $default_charset) {
					$mappedData[$fieldName] = $fieldValue;
				}
				if(!empty($fieldValue)) $allValuesEmpty = false;
			}
			if($allValuesEmpty){
				$flag=false;
				break;
			}
			$fieldNames = array_keys($mappedData);
			$fieldValues = array_values($mappedData);
			$this->addRecordToDB($fieldNames, $fieldValues);
		}
		unset($fileHandler);
	}
}
?>
