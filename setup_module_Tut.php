<?php $Vtiger_Utils_Log = true;

include_once 'vtlib/Vtiger/Module.php';
$myExtensionModule = Vtiger_Module::getInstance('Tut');
if ($myExtensionModule) {
$myExtensionModule->parent='Tools';
$myExtensionModule->save();
	Vtiger_Utils::Log("Module already exits.");
} else {
	$myExtensionModule = new Vtiger_Module();
	$myExtensionModule->name = 'Tut';
	$myExtensionModule->label= 'Tutorial';
	$myExtensionModule->parent='Tools';
	$myExtensionModule->save();
}