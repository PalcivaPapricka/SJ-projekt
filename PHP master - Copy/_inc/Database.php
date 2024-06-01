<?php
    class Database {
        private $host = 'localhost';
        private $name = 'zoo_data';
        private $user = 'root';
        private $password = '';
    
        protected $connection;
    
        public function __destruct() {
            $this->connection = null;
        }

        protected function connect() {
            try {
					$this->connection = new PDO(
						"mysql:host=" . $this->host . ";dbname=" . $this->name . ";charset=utf8", 
						$this->user, 
						$this->password
					);
					$this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
					$this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
					return $this->connection;
				} 
			catch(PDOException $err) 
				{
					die("Database error: " . $err->getMessage());
				}
        }
    }
?>