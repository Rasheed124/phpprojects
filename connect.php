<?php

define("DB_SERVER", "localhost");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "hospital_mangement");


$connect_db =  mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// if($connect_db == true){
//     echo "Database Connected";
// }else{
//     // echo "Database Disconnected";

//     die('Could not connect: ' . mysqli_error());

// }

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
