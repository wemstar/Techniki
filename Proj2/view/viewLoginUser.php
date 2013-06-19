<?php

	require '../view/Content.php';
        require '../view/messageTemplate.php';
	
        $rightContent='
    <h2> Logowanie</h2>
    <p> Aby się zalogowac potrzebujesz konta jeśli go nie masz możesz je założyć w sekcji rejestracja</p>';
        $con=new Content(Content::getLogin(), $rightContent);
        $view=new Template($con, "Zaloguj się");
        $view->create();
	
?>