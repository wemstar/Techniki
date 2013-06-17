<?php
session_start();
require '../view/RigthMenuContent.php';
$leftContent='
    <h2>Witaj na Stronie</h2>
    <p> Na tej stronie możesz przechowywać swoja liste zakupów.
    Liste możesz dowolnie edytowac
    </p>
    <p>
        Aby móc stworzyc własną liste musisz być zlogowany
    </p>
    ';
$rightContent;
 if($_SESSION['logged'])
 {
    $rightContent=$rightContent_Loged; 
 }
 else
 {
     $rightContent=$rightContent_unLoged;
 }

require '../view/messageTemplate.php';
?>
