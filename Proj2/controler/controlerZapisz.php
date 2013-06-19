<?php
session_start();
require '../model/Zakup.php'; 
require '../controler/contRedirection.php';
require '../view/Content.php';
require '../view/messageTemplate.php';
$redirection=new Redirection();
$redirection->redirect();
$zakup=new Zakup($_POST['produkt'],$_POST['sklep'],$_POST['ilosc'],$_POST['notatki']);
$udane=$zakup->zapiszProdiktDoBazy();
if($udane)
{
    $leftContent="<h2>Zpis wykonano pomyślnie</h2>";
}
else
{
    $leftContent="<h2>Zpis nieudany</h2>";
}
$con=new Content($leftContent, Content::getLogged());
$view=new Template($con, "Zapis");
$view->create();

?>