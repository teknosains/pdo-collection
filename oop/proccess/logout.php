<?php
session_start();
require_once '../class/userAccount.php';

	
	$logout = new UserAccount();
	
	$logout->userLogout();

