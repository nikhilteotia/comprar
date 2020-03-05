<?php 

ob_start();

session_start();

 // path configuration

  defined("DS") ? null : define("DS",DIRECTORY_SEPARATOR);

  defined("TEMPLATE_FRONT") ? null : define("TEMPLATE_FRONT", __DIR__ . DS . "/templates/front");

  defined("TEMPLATE_BACK") ? null : define("TEMPLATE_BACK", __DIR__ . DS . "/templates/BACK");
   
  

 // database configuration

   defined("DB_HOST ") ? null : define("DB_HOST","localhost");

  defined("DB_USER ") ? null : define("DB_USER","root");

  defined("DB_PASS") ? null : define("DB_PASS","");

  defined("DB_NAME ") ? null : define("DB_NAME","ecomm_db");
   
   
//database connection 

   $connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

   
    require_once("function.php");

  ?>