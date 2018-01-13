<?php // Database controller

Adm::includeMod("database");

global $databases;

$db = new Database();

$databases = $db->getDbNames();