<?php //Inventory controller

global $inventory;

Adm::includeMod("database");

$db = new Database();

$inventory = $db->inventory();

