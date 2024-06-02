<?php

    class Qna extends Database{
        private $db;

        public function __construct()
		{
            $this->db = $this->connect();        
        }

       public function select(){
		try
		{
			$query = $this->db->query("SELECT * FROM qna");
			$ret = $query->fetchAll(PDO::FETCH_ASSOC);
			return $ret;
		}
		catch(PDOException $err)
		{
				echo($err->getMessage());
		}   
		}


        public function selectId($id)
		{
            try 
			{
                $query = "SELECT * FROM qna WHERE id = :id";
                $ret = $this->db->prepare($query);
                $ret->bindParam(':id', $id);
                $ret->execute();
                return $ret->fetch();
            } 
			catch (PDOException $err) 
			{
                echo $err->getMessage();
            }
        }
        
		
		 public function insert($arr){
            try 
			{
                $query = "INSERT INTO qna (question, answer) VALUES (:question, :answer)";
                $ret = $this->db->prepare($query);
                $ret->execute($arr);
            } 
			catch (PDOException $err) 
			{
                echo $err->getMessage();
            }
        }
		
		
        public function update($arr){
            try 
			{
                $query = "UPDATE qna SET question = :question, answer = :answer WHERE id = :id";
                $ret = $this->db->prepare($query);
                $ret->execute($arr);
            } 
			catch (PDOException $err) 
			{
                echo $err->getMessage();
            }
        }
        
		
		 public function deletefrom(){
            try
			{
                $arr = array('qna_id' => $_POST['delete_qna']);
                $query = "DELETE FROM qna WHERE id = :qna_id";
                $ret = $this->db->prepare($query);
                $ret->execute($arr);
            }
			catch(PDOException $err)
			{
                echo $err->getMessage();
            }
        }
        
    }

?>