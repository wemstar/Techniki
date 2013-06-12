<?php
/**
* 
*/


class DatabaseUsers 
{
	
	function __construct()
	{
		// this->$sql_dbname = '../model/users.db';
		try
		{
			if(!file_exists(self::$sql_dbname))
			{

				
		
				$this->dataBase=new PDO("sqlite:". self::$sql_dbname);
				// echo  "kurwa" .self::$sql_dbname ;
				$this->dataBase->query("CREATE TABLE users (
					user_id INTEGER PRIMARY KEY  NOT NULL  
					,user_name TEXT NOT NULL
					, user_paswd TEXT NOT NULL
					);");

				system("chmod 777 ".self::$sql_dbname);


				
			}
			else
			{
				
				$this->dataBase=new PDO("sqlite:".self::$sql_dbname);
				
			}
			
			$this->dataBase->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		catch(Exception $e)
    	{
        /*** if we are here, something has gone wrong with the database ***/
        	$message = $e->getMessage();
    	}
		
	}

	
	public function zabezpiecz($login,$pasword)
	{
		
		$this->user_name = filter_var($login, FILTER_SANITIZE_STRING);

    	$this->user_paswd = filter_var($pasword, FILTER_SANITIZE_STRING);
    	
    	$this->user_paswd = sha1($this->user_paswdd);



	}
	function registerUser($login,$pasword)
	{

		try
		{
			
			$this->zabezpiecz($login,$pasword);



			$this->stmt = $this->dataBase->prepare("INSERT INTO users (user_name, user_paswd ) VALUES (:user_name, :user_paswd )");
			
			$this->bindParameters();

	        $this->stmt->execute();
	        // echo "cos".$login . $pasword ;
	        
	        return true;
	    }
	    catch(Exception $e)
	    {
	    	$message = $e->getMessage();

	    	return false;
	  	}
	}
	function bindParameters()
	{
		$this->stmt->bindParam(':user_name', $this->user_name, PDO::PARAM_STR);
        $this->stmt->bindParam(':user_paswd', $this->user_paswd, PDO::PARAM_STR, 40);


	}
	function loginUser($login,$pasword)
	{
		try
    	{
			$this->zabezpiecz($login,$pasword);

			 $this->stmt = $this->dataBase->prepare("SELECT user_id, user_name, user_paswd FROM users 
	                    WHERE user_name = :user_name AND user_paswd = :user_paswd");

			 $this->bindParameters();
			 
			 $this->stmt->execute();

			 $message = 'Loged';

			 $user_id = $this->stmt->fetchColumn();
			 if($user_id == false)
        	{
	                $message = 'Login Failed';
	                return false;
	        }
	        /*** if we do have a result, all is well ***/
	        else
	        {
	                /*** set the session user_id variable ***/
	                $_SESSION['user_id'] = $user_id;

	                /*** tell the user we are logged in ***/
	                $message = 'You are now logged in';
	                return true;
	        }
		}
		catch(Exception $e)
    	{
    		$message = $e->getMessage();
    	}

	}
	public function db_close()
	{
		
		$dataBase=null;
		
	}


	private static $sql_dbname = '../model/users.db';
	private $dataBase;
	private $user_name;
	private $user_paswd;
	private $stmt;
}
?>