<?php

	/**
	* 
	*/
	require 'check.php';
        
	require '../controler/LoginUser.php';
        require '../view/messageTemplate.php';
        $registed=new LoginUser();
      
        $cont=$registed->login($_POST['user_name'],$_POST['user_paswd']);
        $view=new Template($cont, "Logowanie");
        $view->create();
         
       
        
	
	
	
	
	
	
	
	

?>