<?php
	require_once('vendor/smarty/smarty/libs/Smarty.class.php');
	//require_once('vendor/respect/validation/library/Validator.php');
	use \Respect\Validation\Validator as v;

	$smarty = new Smarty();

	$smarty->setTemplateDir(__DIR__ . '/templates/');
	$smarty->setCompileDir(__DIR__ . '/templates_c/');