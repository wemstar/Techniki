<?php
session_start();
require '../view/Content.php';
require '../view/messageTemplate.php';
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
    $rightContent=  Content::getLogged(); 
 }
 else
 {
     $rightContent=Content::getUnLogged();
 }

$con=new Content($leftContent, $rightContent);

$view=new Template($con, "Strona główna");
 
$view->create();
?>
