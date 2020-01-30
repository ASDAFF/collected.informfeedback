<?
/**
 * Copyright (c) 30/1/2020 Created By/Edited By ASDAFF asdaff.asad@yandex.ru
 */

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentDescription = array(
	"NAME" => GetMessage("MAIN_FEEDBACK_COMPONENT_NAME"),
	"DESCRIPTION" => GetMessage("MAIN_FEEDBACK_COMPONENT_DESCR"),
	"ICON" => "/images/feedback.gif",
	"PATH" => array(
		"ID" => "iu",
		"SORT" => 3000,
		"NAME" => "Collected",
	),
);
?>