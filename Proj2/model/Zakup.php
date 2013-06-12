<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Zakup
 *
 * @author wemstar
 */
class Zakup {
    public function __construct($produkt,$sklep,$ilosc,$notatki) {
        $this->produkt=$produkt;
        $this->sklep=$sklep;
        $this->ilosc=$ilosc;
        $this->notatki=$notatki;
        $this->user_name=$_SESSION['user_name'];
        
    }  
    public function zapiszProdiktDoBazy()
    {
        try
        {
            
    
        $this->otworzBaze();
        $this->zapisz();
        }
        catch(Exception $e)
    	{
        /*** if we are here, something has gone wrong with the database ***/
        echo  $e->getMessage();
        	return false;
    	}
        return true;
    }
    private function otworzBaze() 
    {
        
            if(!file_exists(self::$sql_dbname))
            {
                $this->dataBase=new PDO("sqlite:". self::$sql_dbname);
		$this->dataBase->query("CREATE TABLE produkts (
					zakup_id INTEGER PRIMARY KEY  NOT NULL  
					,user_name TEXT NOT NULL
					, produkt TEXT NOT NULL
                                        , sklep TEXT NOT NULL
                                        , ilosc INTEGER NOT NULL
                                        , notatki TEXT NOT NULL
					);");

		system("chmod 777 ".self::$sql_dbname);	
            }
            else
            {
		$this->dataBase=new PDO("sqlite:".self::$sql_dbname);
				
            }
			
            $this->dataBase->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
		
    }
    private function zapisz()
    {
        $this->stmt = $this->dataBase->prepare("INSERT INTO produkts (user_name, produkt, sklep, ilosc, notatki ) 
                                                VALUES (:user_name, :produkt, :sklep, :ilosc, :notatki )");
			
	$this->bindParameters();

	$this->stmt->execute();
    }
    private function bindParameters()
    {
        $this->stmt->bindParam(':user_name', $this->user_name, PDO::PARAM_STR);
        $this->stmt->bindParam(':produkt', $this->produkt, PDO::PARAM_STR);
        $this->stmt->bindParam(':sklep', $this->sklep, PDO::PARAM_STR);
        $this->stmt->bindParam(':ilosc', $this->ilosc, PDO::PARAM_INT);
        $this->stmt->bindParam(':notatki', $this->notatki, PDO::PARAM_STR);
    }

    
    
    private $user_name;
    private $produkt;
    private $sklep;
    private $ilosc;
    private $notatki;
    private $dataBase;
    private static $sql_dbname = '../model/produkts.db';
    private $stmt;
}

?>
