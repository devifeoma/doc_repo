<?php
use Respect\Validation\Validator as v;
	require_once('../init.php');

	v::stringType()->length(1, 5)->validate('abc');
	die();


	if(empty($_POST)) {
		$smarty->display('accounts/register.tpl');
	} else {
		print_r($_POST);

		echo "<br/>";

		echo $_POST['username'];
	}