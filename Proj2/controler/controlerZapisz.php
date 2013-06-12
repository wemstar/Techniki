<?php
session_start();
require '../model/Zakup.php'; 

$zakup=new Zakup($_POST['produkt'],$_POST['sklep'],$_POST['ilosc'],$_POST['notatki']);
$udane=$zakup->zapiszProdiktDoBazy();
if($udane)
{
    $leftContent="<h2>Zpis wykonano pppomyślnie</h2>";
}
else
{
    $leftContent="<h2>Zpis nieudany</h2>";
}
require '../view/messageTemplate.php';

?>