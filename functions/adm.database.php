<?php

class Database extends Adm {
    //Get inventory
    public function inventory() {
        return $this->getAllFrom("inventory");
    }
    
    // Gets all records in a table
    public function getAllFrom($data) {
        return unserialize(file_get_contents($this->rootpath. "/data/$data.data"));
    }
    
    //Get all the database names
    public function getDbNames() {
        $dbNames = array('master');
        $scan = scandir($this->databasepath);
        foreach($scan as $dir) {
            if(!strpos($dir, ".data") && $dir != "." && $dir != "..") {
                array_push($dbNames, $dir);
            }
        }

        return $dbNames;
    }
}

