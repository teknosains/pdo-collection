<?php session_start();
	
	require_once '../class/Factory.php';
	$obj = Factory::getClass('userAccount');
	$nim = $_GET['nim'];
	$obj->deleteUser(array('nim'=>$nim)); 