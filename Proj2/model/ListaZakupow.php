<?php

class ListaZakupow
{
    function __construct() {
        
    }
    function odczytaj($user)
    {
        try{
            $this->dataBase=new PDO("sqlite:".self::$sql_dbname);
            $this->dataBase->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->stmt = $this->dataBase->prepare("SELECT zakup_id, produkt, sklep, ilosc, notatki FROM produkts 
                                                WHERE user_name=:user_name");
         $this->stmt->bindParam(':user_name', $user, PDO::PARAM_STR);
         $this->stmt->execute();
         $produkty=  $this->stmt->fetchAll();
         return $produkty;
        }
         catch(Exception $e)
            {
        
        
        	return $e->getMessage();
            }
    }
    
    
    
    private $stmt;

    private $dataBase;
    private static $sql_dbname = '../model/produkts.db';
}

?>
