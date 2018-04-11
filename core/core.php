<?php
	$action=ucfirst($_GET['action']);
	$method=$_GET['method'];
	require(ROOTPATH.'/controller/'.$action.'.php');
	$controller=new $action();
	$controller->$method();
?>