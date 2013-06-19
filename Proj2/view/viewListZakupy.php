<?php


require '../view/messageTemplate.php';
require '../view/Content.php';  
require '../view/TabelkaZakupow.php';
session_start();
$dataBase=new ListaZakupow();
$tabelka=new TabelkaZakupow($dataBase);


$leftContent=$tabelka->getTable();
$rightContent="<h2>To jest Twoja lista zakupów</h2><p> aby usunąć wpis kliknij przycisk</p>";
$con=new Content($leftContent, Content::getLogged());
$view=new Template($con, "Lista Zakupów");
$view->create();
?>
