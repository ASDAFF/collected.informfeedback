<?
/**
 * Copyright (c) 30/1/2020 Created By/Edited By ASDAFF asdaff.asad@yandex.ru
 */

global $DOCUMENT_ROOT, $MESS;

IncludeModuleLangFile(__FILE__);

if (class_exists("collected_informfeedback")) return;

Class collected_informfeedback extends CModule
{
	var $MODULE_ID = "collected.informfeedback";
	var $MODULE_VERSION;
	var $MODULE_VERSION_DATE;
	var $MODULE_NAME;
	var $MODULE_DESCRIPTION;
	var $MODULE_CSS;
	var $MODULE_GROUP_RIGHTS = "Y";

	function collected_informfeedback()
	{
		$arModuleVersion = array();

		$path = str_replace("\\", "/", __FILE__);
		$path = substr($path, 0, strlen($path) - strlen("/index.php"));
		include($path."/version.php");

		$this->MODULE_VERSION = $arModuleVersion["VERSION"];
		$this->MODULE_VERSION_DATE = $arModuleVersion["VERSION_DATE"];
		$this->PARTNER_NAME = "ASDAFF";
		$this->PARTNER_URI = "https://asdaff.github.io/";

		$this->MODULE_NAME = GetMessage("IU_MODULE_NAME");
		$this->MODULE_DESCRIPTION = GetMessage("IU_MODULE_DESCRIPTION");
	}

	function DoInstall()
	{
		global $APPLICATION;

		if (!IsModuleInstalled("collected.informfeedback"))
		{
			RegisterModule("collected.informfeedback");
			CopyDirFiles(
				$_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/collected.informfeedback/install/components/",
				$_SERVER["DOCUMENT_ROOT"]."/bitrix/components",
				true, true
			);
		}
	}

	function DoUninstall()
	{
		UnRegisterModule("collected.informfeedback");
	}
}
?>