<?php $Vtiger_Utils_Log = true;

include_once 'vtlib/Vtiger/Module.php';
$myExtensionModule = Vtiger_Module::getInstance('AnalyticsPlus');
if ($myExtensionModule) {
	Vtiger_Utils::Log("Module already exits.");
} else {
	$myExtensionModule = new Vtiger_Module();
	$myExtensionModule->name = 'AnalyticsPlus';
	$myExtensionModule->label= 'Analytics Plus';
	$myExtensionModule->parent='Tools';
	$myExtensionModule->save();
}