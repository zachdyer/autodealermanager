<?php //Add controller

global $adm;

//Check for post
if(!empty($_POST)) {
    $make = $_POST['make'];
    $model = $_POST['select-model'];
    $price = $_POST['price'];
    $desc = $_POST['description'];
    $success = true;
    if($success) {
        $adm->status("success", "The " . $make . " " . $model .  " was successfully saved to the database.");
    }
    $adm->logVar($_POST, true);
}