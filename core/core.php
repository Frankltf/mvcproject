<?php
	if(judgerequest()=='get'){
		$action=empty($_GET)?'test':$_GET['action'];
		$method=empty($_GET)?'base':$_GET['method'];
	}else if(judgerequest()=='post'){
		$action=empty($_POST)?'test':$_POST['action'];
		$method=empty($_POST)?'base':$_POST['method'];
	}
	require(ROOTPATH.'/controller/'.$action.'.php');
	$action=ucfirst($action);
	$controller=new $action();
	$controller->$method();
?>