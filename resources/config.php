

<?php


ob_start();
session_start();

//if it's defined, apply null to it, if not, define it as "DS"
defined("DS") ? null : define("DS", DIRECTORY_SEPARATOR);

//Use these templates to refer to a specific folder
defined("TEMPLATE_FRONT") ? null : define("TEMPLATE_FRONT", __DIR__ . DS . "templates/front");
defined("TEMPLATE_BACK") ? null : define("TEMPLATE_BACK", __DIR__ . DS . "templates/back");

defined("DB_HOST") ? null : define("DB_HOST", "localhost");
//When transferred to a web location, change root to the DB Admin user (from phpmyadmin)
defined("DB_USER") ? null : define("DB_USER", "root");
defined("DB_PASS") ? null : define("DB_PASS", "");
defined("DB_NAME") ? null : define("DB_NAME", "ghibli_db");

//Establish sql connection
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

require_once("functions.php");


?>