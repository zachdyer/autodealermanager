<?php

class Layout extends Adm {
    public function header() {
        require_once($this->rootpath . "/includes/layout/header.php");
    }
    
    public function footer() {
        require_once($this->rootpath . "/includes/layout/footer.php");
    }  
}


