<?php
session_start();
class Redirection
{
    function redirect()
    {
        if(!$_SESSION['logged'])
        {
            header( 'Location: ../view/main.php' );
        }
          
    }
}
?>
