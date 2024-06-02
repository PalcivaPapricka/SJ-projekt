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
            $sql = "SELECT opravnenia FROM pouzivatel WHERE email = :user_email AND heslo = :user_password";
            $query = $this->db->prepare($sql);
            $query->execute($arr);

            if ($query->rowCount() == 1) {
				
				$user = $query->fetch(PDO::FETCH_ASSOC);
				
				
                $_SESSION['logged_in'] = true;
				$_SESSION['opravnenia'] = $user['opravnenia'];
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
	
	 public function selectall()
		{
			try
			{
				$res = "SELECT * FROM pouzivatel";
				$query =  $this->db->query($res);
				$poz = $query->fetchAll();
				return $poz;
			}
			catch(PDOException $err)
			{
				echo($err->getMessage());
			}
        }

       

        public function selectid($id){
			try 
			{
				  $query = "SELECT * FROM pouzivatel WHERE id = :id";
				  $res = $this->db->prepare($query);
				  $res->bindParam(':id', $id);
				  $res->execute();
				  return $res->fetch();
			} 
			catch (PDOException $err) 
			{
				echo $err->getMessage();
			}
        }
		
		
		 public function deletefrom(){

			try 
			{
				$arr = array(
					'pouzivatel_id' => $_POST['odstranitpouzi']
				);
				$query = "DELETE FROM pouzivatel WHERE id = :pouzivatel_id";
				$res = $this->db->prepare($query);
				$res->execute($arr);
			}
			catch (PDOException $err) 
			{
				echo $err->getMessage();
			}
        }
		
      
        public function update($arr){
            try 
			{
                $query = "UPDATE pouzivatel SET email = :email, heslo = :heslo,opravnenia = :opravnenia  WHERE id = :id";
                $res = $this->db->prepare($query);
                $res->execute($arr); 
            } 
			catch (PDOException $err) 
			{
                echo $err->getMessage();
            }
        }
	
	
		public function insertinto($email, $heslo ,$opravnenia) 
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

            $arr = array('user_email' => $email, 'user_password' => $heslo ,'user_level' => $opravnenia);
            $sql = "INSERT INTO pouzivatel (email, heslo, opravnenia) VALUES (:user_email, :user_password,:user_level)";
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
	
}
?>
