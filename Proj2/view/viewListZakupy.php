<?php

require '../model/ListaZakupow.php';
session_start();
$dataBase=new ListaZakupow();

$list=$dataBase->odczytaj($_SESSION['user_name']);

$leftContent="<table>";
$leftContent.="<tr><th>Id zkupu</th><th>Produkt</th><th>sklep</th><th>ilosc</th><th>notatki</th><th>Usuń</th></tr>";
foreach ($list as $record)
{
    $leftContent.= "<tr><td>".$record['zakup_id']."</td><td>".$record['produkt']."</td><td>" .$record['sklep']."</td><td>" .$record['ilosc']."</td><td>" .$record['notatki'];;
    $leftContent.='<td><form action="../controler/contUsunZakup.php" method="post"><button name="zakup" type="submit" value="'.$record['zakup_id'].'">Usuń</button></td></tr>';
}
$leftContent.="</table>";
$rightContent="<h2>To jest Twoja lista zakupów</h2><p> aby usunąć wpis kliknij przycisk</p>";
require '../view/messageTemplate.php';
?>
