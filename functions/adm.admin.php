<?php

class Admin extends Adm {
    public function nav() {
        require_once($this->$this->rootpath . "/includes/admin/layout/nav.php");
    }
    
    public function footer() {
        require_once($this->rootpath . "/includes/admin/layout/footer.php");
    }
    
    function head() {
        require_once($this->rootpath . "/includes/admin/layout/head.php");
    }
    
    function header() {
        require_once($this->rootpath . "/includes/admin/layout/head.php");
        require_once($this->rootpath . "/includes/admin/layout/nav.php");
    }
}



