<?php 
session_start();
$message;
/*** first check that both the username, password and form token have been sent ***/
if(!isset( $_POST['user_name'], $_POST['user_paswd']))
{
    $message = 'Please enter a valid username and password';
}
/*** check the form token is valid ***/

/*** check the username is the correct length ***/
elseif (strlen( $_POST['user_name']) > 20 || strlen($_POST['user_name']) < 4)
{
    $message = 'Incorrect Length for Username';
}
/*** check the password is the correct length ***/
elseif (strlen( $_POST['user_paswd']) > 20 || strlen($_POST['user_paswd']) < 4)
{
    $message = 'Incorrect Length for Password';
}
/*** check the username has only alpha numeric characters ***/
elseif (ctype_alnum($_POST['user_name']) != true)
{
    /*** if there is no match ***/
    $message = "Username must be alpha numeric";
}
/*** check the password has only alpha numeric characters ***/
elseif (ctype_alnum($_POST['user_paswd']) != true)
{
        /*** if there is no match ***/
        $message = "Password must be alpha numeric";
}
else
{}
?>