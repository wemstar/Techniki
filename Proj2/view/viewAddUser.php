<?php

	require '../view/messageTemplate.php';
        require '../view/Content.php';  
        $rightContent='
            <h2> Rejestracja</h2>
            <p> Aby się zarejestrować wystarczy podać hasło i login</p>';
        $con=new Content(Content::getRegisted(), $rightContent);
        $view=new Template($con, "Zarejestruj się");
        $view->create();
             
	
?>