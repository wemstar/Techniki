<?php

	/**
	* 
	*/
	require 'check.php';
	require '../model/Database.php';
	$userBase=new DatabaseUsers();
	
	
	
	$suces=$userBase->loginUser($_POST['user_name'],$_POST['user_paswd']);
	session_start();
	if($suces)
	{
		$leftContent="login good";
               
                $_SESSION['user_name']=$_POST['user_name'];
                $_SESSION['logged']=true;
	}
	else
	{
		$leftContent="login bad";
                $_SESSION['logged']=false;
	}
	$userBase->db_close();
	require '../view/messageTemplate.php';
	
	
	

?>