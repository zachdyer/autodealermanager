<?php //Home page controller

$adm = new Adm();
$adm->includeMod("database");

$database = new Database();

global $inventory;
$inventory = $database->inventory();


