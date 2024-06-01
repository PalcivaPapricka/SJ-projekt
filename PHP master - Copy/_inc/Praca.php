<?php

    class Praca extends Database{

        private $db;

        public function __construct()
        {
            $this->db = $this->connect();
        }

        public function insert($arr){
			try 
				{
					$query = "INSERT INTO praca (meno, email, pozicia, kompetencie) VALUES (:meno, :email, :pozicia, :kompetencie)";
					$res = $this->db->prepare($query);
					$res->execute($arr);
				} 
				catch (PDOException $err) 
				{
					echo $err->getMessage();
				}
			} 
      

        public function selectall()
		{
			try
			{
				$res = "SELECT * FROM praca";
				$query =  $this->db->query($res);
				$praca = $query->fetchAll();
				return $praca;
			}
			catch(PDOException $err)
			{
				echo($err->getMessage());
			}
        }

       

        public function selectid($id){
			try 
			{
				  $query = "SELECT * FROM praca WHERE id = :id";
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
					'praca_id' => $_POST['odstranit']
				);
				$query = "DELETE FROM praca WHERE id = :praca_id";
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
                $query = "UPDATE praca SET meno = :meno, email = :email, pozicia = :pozicia, kompetencie = :kompetencie WHERE id = :id";
                $res = $this->db->prepare($query);
                $res->execute($arr);
            } 
			catch (PDOException $err) 
			{
                echo $err->getMessage();
            }
        }
      
    }
?>