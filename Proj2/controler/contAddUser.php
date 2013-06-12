<?php

	/**
	* 
	*/
	require 'check.php';
	require '../model/Database.php';
	$userBase=new DatabaseUsers();
	
	
	
	$suces=$userBase->registerUser($_POST['user_name'],$_POST['user_paswd']);
	
	if($suces)
	{
		$leftContent="registed good";
	}
	else
	{
		$leftContent="registed bad";
	}
	$userBase->db_close();
	require '../view/messageTemplate.php';
	
	
	

?>