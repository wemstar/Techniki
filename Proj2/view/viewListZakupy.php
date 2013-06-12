<?php

require '../model/ListaZakupow.php';
session_start();
$dataBase=new ListaZakupow();

$list=$dataBase->odczytaj($_SESSION['user_name']);

$leftContent="<table>";
$leftContent.="<tr><th>Id zkupu</th><th>Produkt</th><th>sklep</th><th>ilosc</th><th>notatki</th></tr>";
foreach ($list as $record)
{
    $leftContent.= "<tr><td>".$record['zakup_id']."</td><td>".$record['produkt']."</td><td>" .$record['sklep']."</td><td>" .$record['ilosc']."</td><td>" .$record['notatki']."</tr>";;
}
$leftContent.="</table>";
require '../view/messageTemplate.php';
?>
