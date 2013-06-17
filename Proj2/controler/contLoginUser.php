<?php

	/**
	* 
	*/
	require 'check.php';
	require '../model/Database.php';
        require '../view/RigthMenuContent.php';
	$userBase=new DatabaseUsers();
	
	
	
	$suces=$userBase->loginUser($_POST['user_name'],$_POST['user_paswd']);
	session_start();
	if($suces)
	{
		$leftContent="<h2>Logowanie pomyslne</h2>";
                $rightContent=$rightContent_Loged;
                $_SESSION['user_name']=$_POST['user_name'];
                $_SESSION['logged']=true;
	}
	else
	{
		$leftContent="<h2>Błąd Logowania</h2>";
                $rightContent=$rightContent_unLoged;
                $_SESSION['logged']=false;
	}
	$userBase->db_close();
	require '../view/messageTemplate.php';
	
	
	

?>