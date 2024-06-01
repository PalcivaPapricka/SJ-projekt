<?php

    class Page{
        private $page_name;

        public function set_page_name($page_name)
        {
            $this->page_name = $page_name;
        }




        function add_scripts()
		{
            $ret = '';

            switch($this->page_name){
            case 'home':
                $ret .= '<script src="./js/main.js"></script>';
                break;
            case 'praca':
                $ret .= '<script src="./js/alert.js"></script>';
                break;  
            }
            return $ret;   
        }
        
	
		
        function redirect()
		{
            header("Location: home.php");
            die("Homepage not found");
        }

    }

?>