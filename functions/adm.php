<?php

class Adm {
    
    //Define the paths
    public $rootpath; 
    public $pagepath;
    public $functionpath;
    public $databasepath;
    public $controllerpath;
    public $includepath;
    private $notifications = array();
    
    function __construct() {
        $this->rootpath = "/" . trim($_SERVER["DOCUMENT_ROOT"], "/public");
        $this->pagepath = realpath(".");
        $this->functionpath = $this->rootpath . "/functions";
        $this->databasepath = $this->rootpath . "/data";
        $this->controllerpath = str_replace("public", "functions", $this->pagepath);
        $this->includepath = $this->rootpath . "/includes";
        
        
        
    }
    
    public function includeMod($module) {
        require_once($this->functionpath . "/adm." . $module . ".php");
    }
    
    public function header($nav = true) {
        //Page Controller
        if(file_exists($this->controllerpath . "/controller.php")) {
           require_once($this->controllerpath . "/controller.php"); 
        } else {
            //generic controller
        }
        
        //Page Ajax
        if(file_exists($this->controllerpath . "/ajax.php")) {
            require_once($this->controllerpath . "/ajax.php");
        }
        
        if(strpos($this->pagepath, "/admin")) {
            require_once($this->rootpath . "/includes/admin/layout/head.php");
            if($nav) {
                require_once($this->rootpath . "/includes/admin/layout/nav.php");
            }
            
        } else {
            require_once($this->rootpath . "/includes/layout/header.php");
        }
    } 
    
    public function footer() {
        //Check for custom js
        $customJSDir = $this->pagepath . "/js";
        if(file_exists($customJSDir)) {
            $scriptFileNames = scandir($customJSDir);
            foreach($scriptFileNames as $filename) {
                if($filename != "." && $filename != "..") {
                    echo '<script src="'.$_SERVER['REQUEST_URI'].'js/'.$filename.'"></script>';
                }
            }
        }
        
        if(strpos($this->pagepath, "/admin")) {
            require_once($this->rootpath . "/includes/admin/layout/footer.php");
        } else {
            require_once($this->rootpath . "/includes/layout/footer.php");
        }
    }
    
    public function status($type, $message) {
        $this->notifications[] = array("type"=>$type, "message"=>$message);
    }
    
    public function printMessage() {
        $boldDesc = "Heads Up";
        foreach($this->notifications as $message) {
            switch($message['type']) {
                case 'warning':
                    $boldDesc = "Warning!";
                    break;
                case 'danger':
                    $boldDesc = "Oh Snap!";
                    break;
                case 'success':
                    $boldDesc = "Well Done!";
                    break;
            }
            echo '<div class="alert alert-' . $message['type'] . '">';
            echo '<strong>' . $boldDesc . '</strong> ' . $message['message'];
            echo '</div>';
        }
    }
    
    public function logVar($var, $exit = false) {
        echo "<pre>";
        print_r($var);
        echo "</pre>";
        if($exit) exit();
    }

}


