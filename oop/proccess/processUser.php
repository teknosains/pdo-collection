<?php session_start(); 
	
	$data = array(

		'nim'    => $_POST['nim'],
		'nama'   => $_POST['nama'],
		'alamat' => $_POST['alamat'],		
	);
	$mode =	$_POST['mode'];
	include_once '../class/userAccount.php';
	
	$user = new UserAccount();
	
	if($mode =='new'):
		$user->addUser($data);
	else:
		$id = $_POST['id'];
		$user->saveEditUser($data,$id);
	endif;
	//header('Location:home.php');	

