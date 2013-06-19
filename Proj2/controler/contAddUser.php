<?php

	/**
	* 
	*/
	require 'check.php';
	require '../controler/AddUser.php';
        require '../view/messageTemplate.php';
        $execute=new AddUser();
        $execute->registed($_POST['user_name'], $_POST['user_paswd']);
        $content=$execute->getMessage();
        
        $view=new Template($content, "Logowanie") ;
        $view->create();
        
        
	
	
	
	

?>