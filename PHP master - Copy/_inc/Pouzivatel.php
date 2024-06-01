<?php

class Pouzivatel extends Database {
    
    private $db;

    public function __construct() 
	{
        $this->db = $this->connect();
    }

 

    public function register($email, $heslo) 
	{
        try 
		{
            
            $email_check = "SELECT * FROM pouzivatel WHERE email = :user_email";
            $check_query = $this->db->prepare($email_check);
            $check_query->execute(['user_email' => $email]);

            if ($check_query->rowCount() != 0) 
			{
                return "This email address is already in use";
            }

            $arr = array('user_email' => $email, 'user_password' => $heslo);
            $sql = "INSERT INTO pouzivatel (email, heslo) VALUES (:user_email, :user_password)";
            $query = $this->db->prepare($sql);
            $query->execute($arr);

            if ($query->rowCount() == 1)
			{
                return true;
            } 
			else 
			{
                return false;
            }
        } 
		
		catch(PDOException $err) 
		{
            return "Registration Error: " . $err->getMessage();
        }
    }
	
	
	public function login($email, $heslo) 
	{
        try 
		{
            $arr = array('user_email' => $email, 'user_password' => $heslo);
            $sql = "SELECT * FROM pouzivatel WHERE email = :user_email AND heslo = :user_password";
            $query = $this->db->prepare($sql);
            $query->execute($arr);

            if ($query->rowCount() == 1) {
                $_SESSION['logged_in'] = true;
                return true;
            } 
			
			else 
			{
                return false;
            }
        } 
		catch(PDOException $err) 
		{
            echo "Error logging in" . $err->getMessage();
        }
    }
}
?>
